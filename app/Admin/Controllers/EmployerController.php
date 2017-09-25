<?php

namespace App\Admin\Controllers;

use App\Employer;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class EmployerController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('客户信息管理');
            $content->description('客户信息管理');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('客户信息管理');
            $content->description('客户信息管理');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('客户信息管理');
            $content->description('客户信息管理');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Employer::class, function (Grid $grid) {
            $grid->disableFilter();
            $grid->disableExport();
            $grid->name('客户姓名');
            $grid->mobile('客户电话');
            $grid->created_at('创建时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Employer::class, function (Form $form) {
          $form->tab('客户情况', function ($form) {
            $form->radio('custom_from', '客户来源')->options(config('admin.custom_from'))->default('');
            $form->text('name','姓名')->rules('required');
            $form->mobile('mobile','电话');
            $form->text('address','地址');
            $form->text('house_size','房屋面积');
            $form->radio('house_type', '房屋类型')->options(config('admin.house_type'))->default('');
            $form->number('person_number','人口总数');
            $form->number('older_person','老人');
            $form->number('children','孩子');
            $form->textarea('other_person','其他特殊情况');
            $form->radio('skill', '技能')->options(\App\Skill::all()->pluck('name', 'id'));
            $form->radio('work_time', '工作时间')->options(config('admin.work_time'))->default('');
            $form->radio('live', '居家情况')->options(config('admin.live'))->default('');
            $form->radio('baby', '育婴')->options(['0' => '主', '1'=> '辅'])->default('');
            $form->radio('baby_content', '育婴内容')->options(config('admin.baby_content'))->default('');
            $form->radio('baby_age', '孩子年龄')->options(config('admin.baby_age'))->default('');
            $form->radio('older', '老人陪护')->options(['0' => '主', '1'=> '辅'])->default('');
            $form->radio('older_can', '老人情况')->options(config('admin.older_can'))->default('');
            $form->radio('care_content', '陪护内容')->options(config('admin.care_content'))->default('');
            $form->radio('housework', '一般家务')->options(config('admin.housework'))->default('');
            $form->radio('cooking_time', '做饭时间')->options(config('admin.cooking_time'))->default('');
            $form->textarea('other_work','其他特殊要求');
          })->tab('客户要求', function ($form) {
            $form->radio('employer_require.sex','性别')->options(['0' => '女', '1'=> '男']);
            $form->number('employer_require.age', '年龄')->help('岁以下');
            $form->radio('employer_require.come_type','性别')->options(['0' => '急', '1'=> '不急']);
            $form->datetime('employer_require.come_time', '用工时间');
            $form->text('employer_require.birth_address', '户籍');
            $form->text('employer_require.special', '特点');
            $form->text('employer_require.good_at', '擅长');
            $form->textarea('employer_require.other', '其他特殊要求');
          });
        });
    }
}
