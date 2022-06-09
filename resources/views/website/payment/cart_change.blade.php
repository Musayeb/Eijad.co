@foreach ($cart as $c)        
<a href="{{$c->course_slug}}" class="mt-3 ">
    <div class="d-flex flex-row justify-content-start  shop-item pl-4 pr-4 border-bottom pt-2">
        <div class="shop-img">
            <img src="{{asset('storage/app')}}/{{$c->course_photo}}" alt="course-photo">
        </div>
        <div class="pl-3"> 
            <p class="h6 p-0">{{$c->course_name}}</p>                                                                 

            <p class="font-weight-normal m-0">  
                @php
                $text=html_entity_decode($c->course_bio);
                $final12=implode(' ', array_slice(explode(' ', $text), 0, 5));
                echo $final12.'....';
               @endphp</p>
            <p class="m-0">{{'$'.number_format($c->course_price, 2, '.', ',')}}</p>
        </div>
    </div>
</a>
@endforeach
@if($cart->isEmpty())
<div class="text-center">
<span  style="position: absolute;top:44%;left:36%;">Cart is Empty </span>
</div>
@endif