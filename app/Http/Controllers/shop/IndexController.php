<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Picture;
use App\Contact;
use App\Cart;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function($request,$next){
          $user_id=session('user_id');
          //var_dump($user_id);
          if($user_id){
            return $next($request);
          }else{
            return redirect('/wechat');
          }          
        });
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
        $products = Product::select('id','name','price','images')->where('hot',1)->orderBy('sort','asc')->get();
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
      $user_id=session('user_id');
      $data=array();
      $contacts = Contact::select('name','address','content','mobile')->first();
      $data['contacts']=$contacts;
      $carts = DB::table('carts')
              ->leftJoin('products','carts.product_id','=','products.id')
              ->where('uid',$user_id)
              ->where('mount','>',0)
              ->get();
      $data['carts']=$carts;
      return view('shop/cart',$data);
    }

    public function add_cart(Request $request){
      $user_id=session('user_id');
      $product_id=$request->product_id;
      $cart = new Cart;
      $where=[
        ['uid','=',$user_id],
        ['product_id','=',$product_id]
      ];
      $mycart=$cart->where($where)->first();
      if($mycart){
        $cart->where($where)->increment('mount',1);
      }else{
        $cart->uid=$user_id;
        $cart->product_id=$product_id;
        $cart->mount=1;
        $cart->save();
      }
      echo json_encode(array('code'=>0,'msg'=>'添加成功','data'=>$mycart));exit;
    }
}
