<?php

namespace App\Http\Controllers\entrepreneur;

use App\Http\Controllers\Controller;
use App\Models\cart;
use App\Models\CheckoutDetail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::select('cart_id', 'courses.course_name', 'courses.course_photo', 'courses.course_price', 'courses.course_id')
            ->join('courses', 'courses.course_id', 'carts.course_id')
            ->where('carts.user_id', Auth::id())
            ->get();
        $total = Cart::select(DB::raw('Sum(course_price)as total'))
            ->join('courses', 'courses.course_id', 'carts.course_id')
            ->where('carts.user_id', Auth::id())
            ->get()[0];

        return view('website.payment.cart', compact('cart', 'total'));
    }
    public function store(Request $request)
    {

        $check = Cart::where('course_id', $request->name)->where('user_id', Auth::id())->get();
        if ($check->isEmpty()) {
            $check2=CheckoutDetail::join('checkouts','checkouts.checkout_id','checkout_details.checkout_id')
            ->select('course_id')
            ->where('checkout_details.course_id',$request->name)
            ->where('checkouts.user_id',Auth::id())
            ->get();
            if ($check2->isEmpty()) {
                $cart = new cart;
                $cart->user_id = Auth::id();
                $cart->course_id = $request->name;
                $cart->save();
    
                $cart=DB::table('carts')
                ->join('courses','courses.course_id','carts.course_id')
                ->where('carts.user_id',Auth::id())
                ->get();
                return view('website.payment.cart_change',compact('cart'));
            }else{
            return response()->json(['error' => 'Course already purchased']);
            }

        } else {
            return response()->json(['error' => 'Course already exisit to cart']);
        }
    }

    public function destroy($id)
    {
        Cart::find($id)->delete();
        $cart=DB::table('carts')
        ->join('courses','courses.course_id','carts.course_id')
        ->where('carts.user_id',Auth::id())
        ->get();
        return view('website.payment.cart_change',compact('cart'));

    }
}
