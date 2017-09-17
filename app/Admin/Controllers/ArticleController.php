<?php

namespace App\Admin\Controllers;

use App\Article;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ArticleController extends Controller
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

            $content->header('新闻管理');
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

            $content->header('新闻管理');
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

            $content->header('新闻管理');
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
        return Admin::grid(Article::class, function (Grid $grid) {
            //$grid->disableCreation();
            $grid->disableFilter();
            $grid->disableExport();
            //$grid->disableActions();
            //$grid->disablePagination();
            $grid->title('标题');
            $grid->des('摘要');
            //$grid->content('内容');
            $grid->image('图片')->image();
            $grid->created_at('创建时间');
            $grid->updated_at('修改时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Article::class, function (Form $form) {
          $form->text('title', '标题');
          $form->image('image','图片');
          $form->textarea('des','摘要');
          $form->editor('content','内容');
          //$form->hidden('created_at')->default(date('Y-m-d H:i:s'));
          //$form->hidden('updated_at')->default(date('Y-m-d H:i:s'));
        });
    }
}
