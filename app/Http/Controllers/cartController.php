<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Phone;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class cartController extends Controller
{
    public function addCart(Request $request){

        if(isset($_POST['add-to-cart'])) {
            $addedPhone = $request->addedPhone;
            $phone = Phone::find($addedPhone);

            $existingOrder=DB::table('carts')
                            ->where('phone_id',$addedPhone)
                            ->where( 'client',Auth::user()->email)
                            ->where('quantity','>',0)
                            ->where('orderShipped','notShipped')
                            ->get();

//            return count($existingOrder);

            if(count($existingOrder) == 0)
            {


                $newOrder = new Cart();

                $newOrder->client = $request->userOnSession;
                $newOrder->phone_id=$phone->id;
                $newOrder->product=$phone->phone;
//            $newOrder->quantity = $newOrder->quantity +=1;
                $newOrder->price = $phone->cost;

                $newOrder->save();

                return  redirect('/showCart');


            }

            else

                $newOrder = Cart::where('phone_id','=',$phone->id)->first();//Apparently the ->get() method will not work with Eloquent's ->save() method and you must use ->first() instead.

            $newOrder->client = $request->userOnSession;
            $newOrder->phone_id=$phone->id;
            $newOrder->product=$phone->phone;
            $existingQuantity=DB::table('carts')->where('phone_id',$phone->id)->value('quantity');
            $existingQuantity+=$existingQuantity;
           $newOrder->quantity = $existingQuantity;
            $newOrder->price = ($phone->cost)*$existingQuantity;

            $newOrder->save();

            return  redirect('/showCart');



        }

//
//            $newOrder = new Cart();
//
//            $newOrder->client = $request->userOnSession;
//        $newOrder->phone_id=$phone->id;
//            $newOrder->product=$phone->phone;
////            $newOrder->quantity = $request->quantity;
//            $newOrder->price = $phone->cost;
//
//        $newOrder->save();
//
//        return  redirect('/showCart');

    }

    public function index(){

        $cartGoods=Cart::where('client','=',Auth::user()->email)->get();
        return view('cart.cartsIndex',compact('cartGoods'));
    }

    public function orderHistory()
    {
        $orders=Cart::where('client',Auth::user()->email)
            ->where('orderShipped','shipped')->get();
        return view('cart.orderHistory',compact('orders'));
    }

}
