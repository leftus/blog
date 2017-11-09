<?php

namespace App\Admin\Controllers;

use App\Pack;
use App\Employer;
use App\Employee;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class PackController extends Controller
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

            $content->header('客户分配');
            $content->description('客户分配');

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

            $content->header('客户分配');
            $content->description('客户分配');

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

            $content->header('客户分配');
            $content->description('客户分配');

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
        return Admin::grid(Pack::class, function (Grid $grid) {
          $grid->disableFilter();
          $grid->disableExport();
          $grid->employer_id('客户')->display(function($employer_id) {
              //return $employer_id;
              $employer = Employer::find($employer_id);
              return $employer->name;
          });
          $grid->employee_id('家政员')->display(function($employee_id) {
              $employee = Employee::find($employee_id);
              return $employee->name;
          });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Pack::class, function (Form $form) {
            $form->select('employee_id','家政员')->options(Employee::all()->pluck('name', 'id'));
            $form->select('employer_id','客户')->options(Employer::all()->pluck('name', 'id'));
            $form->radio('status','状态')->options(['1' => '开', '0'=> '关'])->default('1');
        });
    }
}
