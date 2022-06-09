@extends('layouts.master')
@section('css')
<link href="{{asset('public/assets/plugins/notify/css/jquery.growl.css')}}" rel="stylesheet"/>

@endsection
@section('content')
<section class="page-title" style="padding-bottom: 20px">
    <div class="auto-container">
        <div class="intro pb-4">
            <h3 class="text-white font-weight-bold">{{ "Shopping Cart" }}</h3>
          
        </div>
    </div>
</section>

    <div class="auto-container cart-page p-5" style="min-height:600px">
        @if (count($cart)>0)
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-2xl">
                    <div class="table-responsive">
                        <div class="pl-2 pt-3 pb-3">
                            <caption class="ml-2">Your Cart ({{count($cart)}} items)</caption>
                        </div>
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @php $counter=1;@endphp
                            <tbody>
                                @foreach ($cart as $row)
                                    <tr  id="row{{$row->cart_id}}">
                                        <td style="vertical-align: middle">{{ $counter++ }}</td>
                                        <td style="vertical-align: middle"><img src="{{ asset('storage/app') }}/{{ $row->course_photo }}"
                                                style="width:100px;height:70px;" alt=""> {{ $row->course_name }}</td>
                                        <td style="vertical-align: middle">${{$row->course_price}}</td>
                                        <td style="vertical-align: middle">
                                            <i class="fa fa-trash fa-2x delete" data-val="{{$row->cart_id}}" style="cursor: pointer;color:#ED5154"></i>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table><hr>
                        <div class="d-felx pb-3 pl-1">
                           <a href="{{url('start_business')}}"><button class="btn btn-outline" style="background-color:#2B4763;color: #fff"><small><i class="fa fa-arrow-left"></i> Continue shopping</small></button> </a>   
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h6 class="p-3 border-bottom">CART SUMMARY </h6>
                    
                    <p class="pl-3 m-0">Total Price</p>
                    <h4 class="pl-3 font-weight-bold border-bottom price_total">${{$total->total}}</h4>
                        <a href="{{{ url('checkout') }}}">
                            <button class="btn btn-block" style="background-color:#ED5154;color:#fff;height:65px; ">
                            <i class="fa fa fa-shopping-cart"></i> Checkout</button>
                        </a>
                    
                </div>
            </div>
        </div>
        @else
        <span class="h4">0 Courses in Cart</span>
       <div class="card " style="padding:80px;">
        <div class="text-center">
           <img src="{{asset('public/img/empty-cart.png')}}"  style="width:300px;height:180px">
           <p class="mt-3">Your cart is empty. Keep shopping to find a course!</p>
            <a href="{{url('start_business')}}" class="btn" style="color: #fff;background-color:#db4252;border-color: #d1626d;">Keep Shopping</a>
        </div>
       </div>
        @endif
    </div>
@endsection

@section('jquery')
<script src="{{ asset('public/assets/plugins/notify/js/jquery.growl.js')}}"></script>

<script>
    $('body').on('click','.delete',function(){
        var val=$(this).attr('data-val');
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '}});
        $.ajax({
            url: "{{ url('/cart') }}/"+val,
            type: 'DELETE',
            success: function(data) {
                
               $('.cart_detail').html(data);
               $('#row'+val).hide()
               $('.price_total').load(document.URL+' .price_total');
               $('.cart-page').load(document.URL+' .cart-page');
               var val=$('.counter1').html();
               var total=parseInt(val)-1;
               $('.counter1').html(total);
               
            },
            error: function(data) {
                console('server error');
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
</script>
@endsection
