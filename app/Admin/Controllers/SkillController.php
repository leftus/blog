<?php

namespace App\Admin\Controllers;

use App\Skill;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SkillController extends Controller
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

            $content->header('技能需求');
            $content->description('技能需求');

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

            $content->header('技能需求');
            $content->description('技能需求');

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

            $content->header('技能需求');
            $content->description('技能需求');

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
        return Admin::grid(Skill::class, function (Grid $grid) {
            $grid->disableFilter();
            $grid->disableExport();
            $grid->name('名称');
            $grid->alias('别名');
            $grid->sort('排序');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Skill::class, function (Form $form) {

            $form->text('name', '名称')->rules('required');
            $form->text('alias', '别名');
            $form->number('sort', '排序');
        });
    }
}
