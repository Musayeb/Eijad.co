@if(!$course->isEmpty())   
@foreach ($course as $item)
<!-- Cource Block Two -->
<div class="cource-block-two col-lg-4 col-md-6 col-sm-12" 
data-html="true" 
data-toggle="popover" 
data-trigger="hover" 
data-animation="true"
data-offset="-1"
  data-id="{{$item->course_id}}"
data-content="
<div class='p-2'><h4 style='color:#ED5154;font-weight:800'>{{$item->course_name}}</h4>
<ul>
    <li class='text-success'>Updated {{$item->last_update}}</li>
    <li>{{$item->course_bio}}</li>
    <li><span class='text-success font-bold'>Level &nbsp;</span>{{$item->course_level}}</li>
    <li><span class='text-success font-bold'>Lectures &nbsp;</span>{{$item->total_lecture}}</li>
    <li><span class='text-success font-bold'>Hours &nbsp;</span>{{$item->total_hours}}</li>
    <li><span class='text-success font-bold'>Languages &nbsp;</span>{{$item->course_lanuguage}}</li>
  </ul>
  @if($item->course_type=='Free')
  <a  href='{{url("start_business")}}/{{$item->course_slug}}' class='enroll_btn mt-2'>Enroll Now
  </a>
 @else
 <button type='button' class='btn btn-circle btn-md btn-outline-primary btn-block add-to-cart mt-5' 
 data-id='{{$item->course_id}}'> <i class='fa fa-shopping-cart'></i> Add To Cart</button></div>@endif">
    <div class="inner-box course_title_body">
        <div class="image">
            <a href="{{url('start_business')}}/{{$item->course_slug}}">
                <div >
                <img class="img-fluid" src="{{url('storage/app')}}/{{$item->course_photo}}" 
                alt="Course-avatar">
            </div>
            </a>
        </div>
        <div class="lower-content">
            <span class="course_name"><a href="{{url('start_business')}}/{{$item->course_slug}}">{{$item->course_name}}</a></span>
            <div class="author">
                <small>{{"Musayeb"}}</small>
            </div>
            @if($item->course_type=="Free")
            <h3 class="font-weight-bold h6 text-success">{{$item->course_type}}</h3>
           @else
           <div class="font-weight-bold h6">{{'$'.number_format($item->course_price, 2, '.', ',')}}</div>
           @endif
            <div class="clearfix">
                <div class="pull-left">
                    <div class="students">{{$item->total_lecture}} Lecturer</div>
                </div>
                <div class="pull-right">
                    <div class="students"><a href="javscript:void()">{{$item->total_hours}} Hours</a></div>
                </div>
                
            </div>
        </div>


    </div>
</div>
@endforeach 
@else
<div class="card w-100">
    <img  src="{{asset('public/assist/images/no-record-found.gif')}}" alt="">
</div>

@endif
