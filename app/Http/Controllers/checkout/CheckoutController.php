<?php

namespace App\Http\Controllers\checkout;

use App\Http\Controllers\Controller;
use App\Mail\OrderShipped;
use App\Models\cart;
use App\Models\Checkout;
use App\Models\CheckoutDetail;
use App\Models\Course;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\ExpressCheckout;

use Stripe;
use Helper;



class CheckoutController extends Controller
{
   protected function index()
   {

      $course=cart::join('courses','courses.course_id','carts.course_id')
            ->where('carts.user_id',Auth::id())
            ->get();
    
      $total=cart::select(DB::raw('sum(course_price)as total'))
      -> join('courses','courses.course_id','carts.course_id')
      ->where('carts.user_id',Auth::id())
      ->get();
    
      $country=DB::table('country')->get();
       
       return view('website.payment.checkout',compact('course','country','total'));
   }


  protected function cart_payment(Request $request)
  {


   Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

   $total=cart::select(DB::raw('sum(course_price)as total'))
   ->join('courses','courses.course_id','carts.course_id')
   ->where('carts.user_id',Auth::id())
   ->get()[0];
   if($total->total==0){

    session()->flash('error','Cart is empty');
    return redirect()->back();

   }else{
    Stripe\Charge::create ([
      "amount" => $total->total * 100,
      "currency" => "usd",
      "source" => $request->stripeToken,
      "description" => "Eijad Course Payment",
]);
 
$getinvoice=Helper::getInvoiceNumber();//last invoice number

$checkout=new Checkout;
$checkout->user_id=Auth::id();
$checkout->invoice_number=$getinvoice;
$checkout->payment_method="Debit & credit card";
$checkout->total= $total->total;
$checkout->bill_address= $request->address;
$checkout->card_number= $request->ccnum;
$checkout->save();

$course=cart::
join('courses','courses.course_id','carts.course_id','course_price')
->where('carts.user_id',Auth::id())
->groupBy('courses.course_id')
->get();

foreach ($course as $row ) {
 $detail= new CheckoutDetail;
 $detail->course_name=$row->course_name;
 $detail->course_price=$row->course_price;
 $detail->course_id=$row->course_id;
 $detail->checkout_id=$checkout->id;
 $detail->author=Auth::id();
 $detail->save();
}

$courses=CheckoutDetail::where('checkout_id',$checkout->id)->get();
$checkouts=Checkout::where('checkout_id',$checkout->id)->get()[0];

$emaildetail=[
 'courses'=>$courses,
 'checkout'=>$checkouts,
];
Mail::to($request->user()->email)
->later(now()->addMinutes(1), new OrderShipped($emaildetail));

Cart::where('user_id',Auth::id())->delete();
$request->session()->flash('notif', 'Course successfully paid using debit & credit card');

return redirect('dashboard/courses-learning');
   }

 
  }
//   public function show($id)
//   {
//      return back();
//   }


  protected function paypal_payment(){
   $data = [];
   $data['items'] = [
       [
           'name' => 'codechief.org',
           'price' => 100,
           'desc'  => 'Description goes herem',
           'qty' => 1
       ]
   ];

   $data['invoice_id'] = 1;
   $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
   $data['return_url'] = url('paypal-success');
   $data['cancel_url'] = url('paypal-cancel');
   $data['total'] = 100;

   $provider = new ExpressCheckout;

   $response = $provider->setExpressCheckout($data);

   $response = $provider->setExpressCheckout($data, true);

   return redirect($response['paypal_link']);
  }

  protected function paypal_cancel()
  {
   dd('Sorry you payment is canceled');

  }
  protected function paypal_success(Request $request)
  {
   $response = $provider->getExpressCheckoutDetails($request->token);
  
   if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
       dd('Your payment was successful. You can create success page here.');
   }

   dd('Something is wrong.');
  }











  public function enroll_free($course_id)
  {
    $type=Course::select('course_name','course_type')->where('course_id',$course_id)->get();
    if($type[0]->course_type=='Free'){
     $check=CheckoutDetail::select('checkout_detail_id')->where('course_id',$course_id)->where('author',Auth::id())->get();
     if(empty($check[0]->checkout_detail_id)){

      $new=new CheckoutDetail;
      $new->course_name=$type[0]->course_name;
      $new->course_id=$course_id;
      $new->course_price="Free";
      $new->checkout_id=null;
      $new->author=Auth::id();
      $new->save();

      session()->flash('notif','Congratulation you’re successfully enrolled to'.' '.$type[0]->course_name);
      return redirect('dashboard/courses-learning');


     } else{
       session()->flash('error','You already enrolled to Course !');
      return redirect('dashboard/courses-learning');
     }

    }else{
      session()->flash('error','Course is not free!');
      return redirect()->back();

    }

  }
}
