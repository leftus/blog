<?php

namespace App\Admin\Controllers;

use App\Employee;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class EmployeeController extends Controller
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

            $content->header('家政员');
            $content->description('家政员');

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

            $content->header('家政员');
            $content->description('家政员');

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

            $content->header('家政员');
            $content->description('家政员');

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
        return Admin::grid(Employee::class, function (Grid $grid) {
            $grid->disableFilter();
            $grid->disableExport();
            $grid->name('姓名');
            $grid->sex('性别')->display(function($sex){
                return $sex==1?'男':'女';
            });
            $grid->mobile('电话');
            $grid->picture('照片')->image();
            $grid->live_address('西安住址');
            $grid->created_at('添加时间');
            //$grid->updated_at('修改时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Employee::class, function (Form $form) {
          $form->tab('基本信息', function ($form) {
            $form->text('name', '姓名')->rules('required');
            $form->radio('sex','性别')->options(['0' => '女', '1'=> '男']);
            $form->mobile('mobile','电话')->rules('required');
            $form->number('age', '年龄');
            $form->image('picture', '照片');
            $form->text('birth_address', '户籍所在地');
            $form->text('live_address', '西安住址');
            $form->text('id_card', '身份证');
            $form->text('contact_person', '紧急联系人');
            $form->mobile('contact_mobile', '紧急联系人电话');
            $form->radio('nature', '性格')->options(config('admin.nature'));
            $form->checkbox('skill', '技能')->options(\App\Skill::all()->pluck('name', 'id'));
            $form->text('other_skill', '其他技能');
            $form->radio('insurance', '保险')->options(['0' => '无', '1'=> '有']);
            $form->datetime('insurance_date', '到期时间');
            $form->radio('health_card', '健康证')->options(['0' => '无', '1'=> '有']);
            $form->datetime('health_date', '到期时间');
            $form->checkbox('job_intent', '工作意向')->options(\App\Skill::all()->pluck('alias', 'id'));
            $form->text('other_job_intent', '其他意向');
            $form->checkbox('make_food', '做饭')->options(config('admin.make_food'));
          })->tab('工作要求', function ($form) {
            $form->radio('job_require.work_time','工作时间')->options(config('admin.work_time'));
            $form->radio('job_require.free_time','休息时间')->options(config('admin.free_time'));
            $form->radio('job_require.live','居家情况')->options(config('admin.live'));
            $form->number('job_require.salary_whole','薪资要求（全天）');
            $form->number('job_require.salary_half','薪资要求（半天）');
            $form->radio('job_require.baby_content','育婴内容')->options(config('admin.baby_content'));
            $form->radio('job_require.baby_age','孩子年龄')->options(config('admin.baby_age'));
            $form->radio('job_require.older_can','老人陪护')->options(config('admin.older_can'));
            $form->radio('job_require.older_age','老人年龄')->options(config('admin.older_age'));
            $form->radio('job_require.patient_protect','病人护理')->options(config('admin.patient_protect'));
            $form->radio('job_require.patient_can','病人情况')->options(config('admin.patient_can'));
            $form->textarea('special','其他特殊情况');
          });
        });
    }
}
