@extends('admin.master')
@section('content')
   
<div class="auto-container mt-5 mb-3">
    <h4>Purchase history</h4><hr>
    <div class="table-responsive" style="min-height: 600px">
      @if(count($check)<0)
        <div class="text-center mt-5">
            <i class="fa fa-shopping-cart fa-2x" ></i>
            <h6 >You don't have any course purchases.</h6>
        </div>
        @else

        <table class="table ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Order ID</th>
                    <th>Detail</th>
                    <th>price</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                @php $counter=1; @endphp
                @foreach ($check as $row )
                <tr style="border-bottom: none !important;">
                    <td>{{$counter++}}</td>
                    <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('d-m-Y')}}</td>
                    <td>#{{$row->invoice_number}}</td>
                    @if($row->payment_method=="Debit & credit card")
                    @php $card=explode(' ',$row->card_number); @endphp
                    <td>Course purchased via {{$row->payment_method}} ending with <strong>{{$card[3]}}</strong></td>
                    @else
                    <td>Course purchased via {{$row->payment_method}}</td>
                    
                    @endif
                    <td>{{$row->total}} USD</td>
                    <td><i class="fa fa-eye fa-2x show_detail" data-trig="{{$row->checkout_id}}" style="cursor:pointer" data-toggle="tooltip" title="Show detail"></i></td>

                </tr>

                <tr id="row1{{$row->checkout_id}}" class="heading "  style="display: none">
                    <th style="border-top: none !important;;border-bottom: none !important;"></th>
                    <th colspan="3" style="border-top: none !important;border-bottom: none !important;">Course Name</th>
                    <th style="border-top: none !important;;border-bottom: none !important;">Price</th>
                    <th style="border-top: none !important;;border-bottom: none !important;"></th>
                </tr>
                @foreach(helper::getpurchase_detail($row->checkout_id) as $detail)
                <tr id="row2{{$row->checkout_id}}"  class="data" style="display:none">
                    <td style="border-top: none !important;;border-bottom: none !important;"></td>
                      <td colspan="3" style="border-top: none !important;;border-bottom: none !important;">{{$detail->course_name}}</td>  
                      <td style="border-top: none !important;;border-bottom: none !important;">{{$detail->course_price}} USD</td>  
                    <td style="border-top: none !important;;border-bottom: none !important;"></td>

                </tr>
                @endforeach  

             
                @endforeach

            </tbody>
        </table>
        @endif

    </div>
</div>

@endsection
@section('jquery')
    <script>
        $('.show_detail').click(function(){
            $(this).css('color','green');
           var attr=$(this).attr('data-trig');
           $('#row1'+attr).toggle();
           $('#row2'+attr).toggle();
        });
    </script>
@endsection