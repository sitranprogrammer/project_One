<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
// use App\Cart;
use App\Catalog;
use Session;
use Cart;
class langdingpageController extends Controller
{
   
    public function index()
    {
      
      
        $products = product::get();
        $catalog = Catalog::get();
        
        // $img_aray = explode(",", $products->image);
        // echo $img_aray[0]; 
        return view('index', 
        [
          'products'=>$products,
          'catalog'=>$catalog,
          ]);
    }
    public function selectallbyid( $id)
    {
     
      
        $products = product::get()->where('id_parent',$id);
        $catalog = Catalog::get();
       
        return view('index',[
          'products'=>$products,
          'catalog'=>$catalog,
          ]);
     
       
       
   
    }
    public function catalog($id)
    {
     
      $products = product::get();
      $catalog = Catalog::get();
      $productsbyid = product::get()->where('id_parent',$id);
      // echo $productsbyid;
      return view('index',
      [
        'products'=>$products,
        'catalog'=>$catalog,
        'productsbyid'=>$productsbyid,
        ]);

        
      return redirect()->back();
    }
    public function product(Request $req)
    {
      $product = product::where('id',$req->id)->first();
      $catalog = Catalog::first();
      return view('product',
      [
        'product'=>$product,
        'catalog'=>$catalog,
        ]);

    }
    public function store(Request $req)
    {
      if(isset($_GET['minPrice'])){
        $min = $req->minPrice;
        $max = $req->maxPrice;
        $product = product::where('price_unit','>=',$min)->where('price_unit','<=',$max)->get();
        // dd($product);
        return view('store',compact('product'));
      }else{
        $product = product::paginate(9);
        return view('store',compact('product'));
      }
      
    }

    public function viewcart()
    {
      $items = Cart::content();
      $cart = Cart::count() ;
      if($cart == 0) {
        return view('test1');
      }else{
        return view('viewcart',['items'=>$items]);
      }
    
      
    }
    public function deleteItem($rowId){
      Cart::remove($rowId);
      return redirect()->back();
  }
}
