@extends('layouts.master')
@section('css')
<link href="{{asset('public/assets/plugins/notify/css/jquery.growl.css')}}" rel="stylesheet"/>

    <style>
        input[type=text] {
            position: relative;
            display: block;
            width: 100%;
            line-height: 24px;
            padding: 10px 20px;
            color: #626262;
            height: 46px;
            font-size: 16px;
            border-radius: 5px;
            background: #ffffff;
            border: 1px solid transparent;
            -webkit-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            transition: all 300ms ease;
            box-shadow: 0px 0px 15px rgb(0 0 0 / 15%);
        }
        .has-error input {
            border: 2px solid rgb(223, 127, 127);
        }

    </style>
@endsection
@section('content')
    <section class="page-title" style="padding-bottom: 20px">
        <div class="auto-container">
            <div class="intro pb-4">
                <h3 class="text-white font-weight-bold">{{ 'Checkout' }}</h3>

            </div>
        </div>
    </section>
    <div class="auto-container p-5">
        <div class="inner-container">
            <!-- Sec Title -->
            <form method="post" class="require-validation" id="payment-form" role="form" action="{{ url('card-payment') }}"
                data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 form-group">

                        <div class=" required">
                            <label class="control-label">Billing Address</label>
                            <select name="address" required>
                                <option value="" disabled selected>Please Select...</option>
                                @foreach ($country as $count)
                                    <option >{{ $count->country_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label>
                                <input type="radio" name="payment-methods" class="pay_type" value="credit-card">
                                Credit Card Payment <i class="fa fa-credit-card mr-2"></i>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="payment-methods" class="pay_type" value="paypal-card">
                                Paypal Payment <i class="fa fa-paypal mr-2"></i>
                            </label>
                        </div>

                        {{--  --}}
                        <div class="border p-4">

                            <div class="card-pay d-none">
                                <div class="row">
                                    <div class="col-lg-12 form-group required">
                                        <label class="control-label">Card Number </label>
                                        <input autocomplete="off" class="form-control card-number"
                                            placeholder="---- ---- ---- ----" type="text" size="19" name="ccnum" id="ccnum">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group cvc required">
                                            <label class="control-label">CVC</label>
                                            <input autocomplete="off" class="form-control card-cvc" placeholder="---"
                                                size="4" type="text" name="cvc" id="cvc">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="expiration required">
                                            <label class="control-label">Expiration Month</label>
                                            <input class="form-control card-expiry-month" placeholder="MM" maxlength="2"
                                                type="text" onkeypress="return onlyNumberKey(event)">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group expiration required">
                                            <label class="control-label">Expiration Year</label>
                                            <input class="form-control card-expiry-year" placeholder="YYYY" maxlength="4"
                                                type="text" onkeypress="return onlyNumberKey(event)">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="paypal_pay d-none">
                                <div class="row p-4">
                                    <h5> In order to complete your transaction, we will transfer you over to PayPal's secure
                                        servers.</h5>
                                </div>

                            </div>

                            <div class="row justify-content-end mr-2" style="color: gray">
                                <div class="float-right d-flex text-gray">
                                    <div><i class="fa fa-lock fa-2x pr-2"></i></div>
                                    <span>Secure<br>Connection</span>
                                </div>
                            </div>

                            <div class="form-row row" style="margin-top:10px;">
                                <div class="col-md-12 error form-group d-none">
                                    <div class="alert-danger alert">Please correct the errors and try again.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <h4 class="mt-2 mb-2">Order Details</h4>
                        @foreach ($course as $row)

                            <div class="course mb-3">

                                <div class="d-flex">

                                    <div class="image" style="width: 10%;">
                                        <img class="img-fluid" style="max-height: 50px"
                                            src="{{ url('storage/app') }}/{{ $row->course_photo }}" alt="Course-avatar">
                                    </div>
                                    <div class="course_title ml-1" style="width: 70%;">
                                        <p>{{ $row->course_name }}</p>
                                    </div>
                                    <div class="course_price" style="width: 20%;">
                                        <strong>{{ '$' . number_format($row->course_price, 2, '.', ',') }} </strong>
                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card borderd pl-3  pr-3 pt-2 h-100">
                            <h5 class="mb-4">Summary</h5>
                            <table style="border-bottom: 1px solid black">
                                <tbody>
                                    <tr>
                                        <td align="left">Original price:</td>
                                        <td align="right"> {{ '$' . number_format($total[0]->total, 2, '.', ',') }}</s></td>
                                    </tr>

                                </tbody>
                            </table>
                            <table class="mt-2 mb-4">
                                <tbody>
                                    <tr>
                                        <td align="left">
                                            <h4>Total:</h4>
                                        </td>
                                        <td align="right">
                                            <h4>{{ '$' . number_format($total[0]->total, 2, '.', ',') }}</h4>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>By completing your purchase you agree to these Terms of Service.</p>
                            <a href="#" class="checkout_change">
                                <button type="submit" class="btn btn-lg btn-block  text-white" id="submit_button"
                                    style="background-color:#ED5154">
                                    Complete Payment</button>
                            </a>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </form>

        </div>


    </div>

@endsection
@section('jquery')
<script src="http://localhost/payment/public/js/payform.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="{{ asset('public/assets/plugins/notify/js/jquery.growl.js')}}"></script>
    <script>
        var csrf = '{!! csrf_token() !!}';
    </script>
    <script>
        var app_url = '{!! env('APP_URL') !!}';
    </script>
    <script type="text/javascript" src="{{ asset('public/assist/payment/pay.js') }}"></script>
    @if (session()->has('error'))
        <script>
             $.growl.error({
                message: "{{ session()->get('error') }}",
                title: 'Error !',
            });
        </script>
    @endif
@endsection
