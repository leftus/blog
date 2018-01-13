<?php

namespace App\Admin\Controllers;

use App\Contact;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ContactController extends Controller
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

            $content->header('留言管理');
            $content->description('');

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

            $content->header('留言管理');
            $content->description('');

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

            $content->header('留言管理');
            $content->description('');

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
        return Admin::grid(Contact::class, function (Grid $grid) {
            //$grid->disableCreation();
            $grid->disableFilter();
            $grid->disableExport();
            //$grid->disableActions();
            $grid->actions(function ($actions) {
               //$actions->disableDelete();
               //$actions->disableEdit();
           });
            //$grid->disablePagination();
            $grid->name('姓名');
            $grid->mobile('电话');
            $grid->email('邮箱');
            // $grid->content('内容');
            // $grid->created_at('时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Contact::class, function (Form $form) {
          $form->text('name','姓名');
          $form->mobile('mobile','电话');
          $form->email('email','邮箱');
          $form->editor('content','介绍');
        });
    }
}
