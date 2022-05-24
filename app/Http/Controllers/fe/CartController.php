<?php

namespace App\Http\Controllers\fe;

use App\Http\Controllers\Controller;
use App\Models\Product_detail;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Helper\Cart;

class CartController extends Controller
{
    public function Add(Request $req){
        $pro_det = Product_detail::find($req->pro_det_id);
        $pro = Product::find($pro_det->product_id);
        $quantity = $req->quantity;
        $cart = new Cart();
        $cart->add($pro, $pro_det , $quantity);
        $totalQty = $cart->totalQty();
        $totalPrice = $cart->totalPrice();
        // $cart->content()
        return response()->json(['cart'=>$cart->content(),'totalQty'=>$totalQty,'totalPrice'=>$totalPrice],200);
    }

    public function Show(){
        $cart = new Cart();
        $totalQty = $cart->totalQty();
        $totalPrice = $cart->totalPrice();
        $cart = $cart->content();
        return view('fe.layouts.cart', compact('cart', 'totalQty', 'totalPrice'));
    }

    public function update($id, $quantity){
        $cart = new Cart();
        $cart = $cart->update($id, $quantity);
        return response()->json($cart->content(),200);
    }
}
