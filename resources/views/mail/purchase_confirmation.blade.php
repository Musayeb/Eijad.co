<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Invoice Payment</title>
</head>

<body style="margin:0px; background: #f8f8f8; ">
    <div width="100%"
        style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
        <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
                <tbody>
                    <tr>
                        <td style="vertical-align: top; padding-bottom:30px;" align="center"><a
                                href="http://eliteadmin.themedesigner.in" target="_blank">
                           </a> </td>
                    </tr>
                </tbody>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
      <tbody>
        <tr>
          <td style="background:#06072c; padding:20px; color:#fff; text-align:center;">
         
            <img src="http://sarey.co/wp-content/uploads/2020/09/Master-Logo-Artwork@20x.png" alt=""
            style="border:none;width:200px;height:60px;">
         </td>
        </tr>
      </tbody>
    </table>
            <div style="padding: 40px; background: #fff;">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tbody>
                        <tr>
                            @php
                            use App\Models\User;
                                $user=User::find($course['checkout']->user_id)->select('name')->get()[0];
                            @endphp
                            <td><b>
                                    <h2 style = "text-transform:capitalize;">Dear {{$user->name}} ,</h2>
                                    <p>Thanks for buying with us. Below is a summary of your recent purchase. You can find your purchased item at your <a href="{{url('dashboard/courses-learning')}}">Learning Page</a> and view your invoice(s) on your <a href="{{url('purchase-history')}}">Purchase History page</a>.</p>
                                </b>
  
                                <span style="float:left;">Invoice #{{$course['checkout']->invoice_number}}</span>
                                <span style="float:right;"> {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $course['checkout']->created_at)->format('l jS \of F Y h:i:s A')}}</span>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding:20px 0; border-top:1px solid #f6f6f6;">
                                <div>
                                    <div style="padding:20px;border:1px solid rgb(212, 208, 208)">Your Order:</div>
                                    <table width="100%" cellpadding="0" cellspacing="0" style="border: 1px solid rgb(212, 208, 208);padding:20px">
                                        <tbody>
                                            @foreach ($course['courses'] as $item)
                                            <tr>
                                                <td
                                                    style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0;">
                                                   {{$item->course_name}}</td>
                                                <td style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0;"
                                                    align="right">$ {{$item->course_price}}</td>
                                            </tr>

                                            @endforeach

                                            <tr class="total">
                                                <td style="font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; font-weight:bold;"
                                                    width="80%">Total</td>
                                                <td style="font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; font-weight:bold;"
                                                    align="right"> $ {{$course['checkout']->total}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                        
                                <b>- Thanks (Eijad Team)</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
                <p> Powered by Eijad.co <br>
                    {{-- <a href="javascript: void(0);" style="color: #b2b2b5; text-decoration: underline;">Unsubscribe</a> </p> --}}
            </div>
        </div>
    </div>
</body>

</html>
