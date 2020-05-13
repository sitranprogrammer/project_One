<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use App\Carts;
use App\Order;
class CartController extends Controller
{
    public function cart(Request $request,$id){
        $pro = Product::where('id',$id)->first();
        if($pro->price_promotion == 0){
            $a = $pro->price_unit;
        }else{
            $a = $pro->price_promotion;
        }
        $pro->qty = $request->qty;
        
        Cart::add(['id' => $id, 'name' => $pro->name, 'qty' => 1, 'price' => $a,'weight'=>0 , 'options' => ['image' => $pro->image]]);
        
        return redirect()->route('index');
       
    }
    public function deleteItem($rowId){
        Cart::remove($rowId);
        return redirect()->route('index');
    }
    
}