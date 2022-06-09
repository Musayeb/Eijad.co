@if(!$course->isEmpty()) 
@foreach ($course as $item)
<div class="cource-block-three w-100 card" data-html="true" 
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
 data-id='{{$item->course_id}}'> <i class='fa fa-shopping-cart'></i> Add To Cart</button></div>@endif" >
<div class="d-flex">
  <div class="image p-3" style="width:30%;" >
      <a href="{{url('start_business')}}/{{$item->course_slug}}">
          <div  >
          <img  src="{{url('storage/app')}}/{{$item->course_photo}}" 
          alt="Course-avatar" style="object-fit:fill;width: 250px">
      </div>
      </a>
  </div>

  <div class="content p-3" style="width:60%;">
      <div class="clearfix">
          <div class="pull-left">
          <h5 style="position: relative;
          color: #03382e;
          font-weight: 600;
          line-height: 1.3em;">  <a href="{{url('start_business')}}/{{$item->course_slug}}">{{$item->course_name}}</a></h5>

          </div>
          <div class="pull-right clearfix">
                         
            @if($item->course_type=="Free")
            <h5 style="position: relative;
             color: #03382e;
             font-weight: 600;
             line-height: 1.3em;">  
             <a href="{{url('start_business')}}/{{$item->course_slug}}">{{$item->course_type}}</a>
           </h5>

            @else

            <h5 style="position: relative;
            color: #03382e;
            font-weight: 600;
            line-height: 1.3em;">  
            <a href="{{url('start_business')}}/{{$item->course_slug}}">{{'$'.number_format($item->course_price, 2, '.', ',')}}</a>
          </h5>
            @endif 
         
          </div>
      </div>
     
      <div class="text">{{$item->course_bio}}</div>
      <div class="clearfix">
          <div class="pull-left">
              <div class="level-box" style="position: relative;
              color: #393939;
              font-size: 16px;
              font-weight: 500;
              line-height: 1.3em;
              padding-top: 7px;
              ">
                  <span class="icon flaticon-settings-1"></span>
                  {{$item->course_level}}
              </div>
          </div>
          <div class="pull-right clearfix">
              <div class="students">{{$item->total_lecture}} Lecturer</div>
              <div class="students">{{$item->total_hours}} Hours</div>
          </div>
      </div>
      <div class="clearfix ">
          <div class="pull-left">
              <span  style=" color: #393939;
              font-size: 16px;
              font-weight: 500;">Language  <span class="text-success">{{$item->course_lanuguage}}</span></span>
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
