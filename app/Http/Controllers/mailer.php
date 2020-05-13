<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\carts;
use Cart;
use App\Order;

use DB;
class mailer extends Controller
{
   public function getmail(request $req)
   {

      $cart = Cart::count() ;
      if($cart == 0) {
        return view('test1');
      }else{
         $items = Cart::content();
         return view('checkout',['items'=>$items]);
        
      }
        
       
      
   }

   public function sendmailler(request $req)
      {
         include 'class.phpmailer.php';
         include 'class.smtp.php';          
         include 'functions.php';

         $price = (float)Cart::total();
         $fullname=(string) $_GET['fullname'];
         $email= (string)$_GET['email'];
         $phone= (string)$_GET['phone'];
         $address= (string)$_GET['address'];
         $note= (string)$_GET['note'];
     



         $flight = new Order;
         $flight->id; 
         $flight->name = $fullname;
         $flight->address = $address ;
         $flight->phone = $phone;
         $flight->email = $email ;
         $flight->total = $price ;
      
         $flight->note = $note ;
       
         $flight->save();
        
         foreach(Cart::content() as $item){
               $card = new carts;
               $card->id;
               $card->id_product	= $item->id;
               $card->id_order = $flight->id;
               $card->name	= (string)$item->name;
               $card->image	= $item->options->image;
               $card->price	= $item->price;
               $card->qty	= $item->qty;
               $card->save();
            }
   
            
      $title="Miker Ecommecre";
      $content = 'cảm ơn đã sử dụng dịch vụ của chúng tôi. Đơn hàng của quý vị sẻ được gửi trong thời gian sớm nhất cảm ơn quý khách đã sử dụng dịch vu của chúng tôi.';
      $nTo = $_GET['fullname'];
      $mTo = $_GET['email'];
      $diachi = 'sitrandeptrai@gmail.com';

      $mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
            
       return redirect()->route('index')->with(Cart::Destroy());
       
       
            
 
            
  
      }
}
 function FunctionName()
{
  
   
   
   

   // if($mail==1  &&  $flight->save())
   
}