<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Picture;
use App\Contact;

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
    public function index()
    {
        $data=array();
        $products = Product::select('id','name','price','images')->where('hot',0)->orderBy('sort','asc')->get();
        $pictures = Picture::select('id','path')->orderBy('sort','asc')->get();
        $data['pictures']=$pictures;
        $data['products']=$products;
        return view('shop/index',$data);
    }

    public function categorys($category_id=0){
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
      $data['products']=$products;
      $data['categorys'] = $categorys;
      $data['current_category']=$category_id;
      return view('shop/categorys',$data);
    }

    public function details($product_id=0){
      $data=array();
      $product = Product::find($product_id);
      $category = $product->category()->first();
      $data['category']=$category;
      $data['product']=$product;
      return view('shop/details',$data);
    }

    public function contacts(){
      $data=array();
      $contacts = Contact::select('name','address','content','mobile')->first();
      $data['contacts']=$contacts;
      return view('shop/contacts',$data);
    }

    public function cart(){
      $data=array();
      return view('shop/cart',$data);
    }
}
