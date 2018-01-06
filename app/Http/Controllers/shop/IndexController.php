<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Picture;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category_id=0)
    {
        $data=array();
        if($category_id>0){
          $where = [
            ['category_id','=',$category_id]
          ];
        }else{
          $where = array();
        }
        $categorys = Category::select('id','name')->orderBy('sort', 'asc')->get();
        $products = Product::where($where)->select('id','name','price','images')->orderBy('sort','asc')->get();
        $pictures = Picture::select('id','path')->orderBy('sort','asc')->get();
        $data['pictures']=$pictures;
        $data['products']=$products;
        $data['categorys'] = $categorys;
        $data['current_category']=$category_id;
        return view('shop/index',$data);
    }
}
