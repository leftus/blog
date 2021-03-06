<?php

namespace App\Admin\Controllers;

use App\Product;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ProductController extends Controller
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

            $content->header('商品');
            $content->description('商品管理');

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

            $content->header('商品');
            $content->description('商品管理');

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

            $content->header('商品');
            $content->description('商品管理');

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
        return Admin::grid(Product::class, function (Grid $grid) {

            $grid->disableFilter();
            $grid->disableExport();
            $grid->name('名称');
            $grid->category()->name('分类');
            $grid->images('图片')->image();
            $grid->quantity('数量');
            $grid->price('单价');
            $grid->updated_at('时间');

        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Product::class, function (Form $form) {
              $form->text('name', '名称');
              $form->text('norms', '规格');
              $form->radio('hot','推荐')->options(['1' => '开', '0'=> '关'])->default('0');
              $form->select('category_id', '分类')->options(\App\Category::all()->pluck('name', 'id'))->default('0');
              $form->image('images', '图片')->crop(400,400);
              $form->file('video','视频')->rules('mimes:mp4');
              $form->number('quantity', '数量');
              $form->currency('price', '单价')->symbol('￥');
              $form->editor('des', '商品介绍');
        });
    }
}
