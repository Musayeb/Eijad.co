@extends('admin.master')

@section('css')
    <link rel="stylesheet" href="{{url('public/assets/tag/fm.tagator.jquery.css')}}">
    <link href="{{asset('public/assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/assets/plugins/notify/css/jquery.growl.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" />
@endsection

@section('add_btn')
<div class="ml-auto">
    <div class="input-group">
       
        <a href="#"  data-toggle="modal" data-target="#addnew" class="btn btn-primary button-icon mr-3 mt-1 mb-1">
            <span><i class="fe fe-plus"></i>Add New Course</span>
        </a>
    </div>
</div>
    
@endsection
@section('content')
<div class="all">
 <div class="row ">
    @foreach ($courses as $item)
    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3" id="rows{{$item->course_id}}">
        <div class="card bg-blue">
            <div class="card-header m-0">
                <h3 class="card-title m-0">
                     @if($item->status=="0")
                    <span class="badge badge-danger " >{{'Draft'}}</span>
                    @else
                    <span class="badge badge-success ">{{'Published'}}</span>
                    @endif
                </h3>
                <h3 class="card-title ml-3">@if($item->course_type=="Paid")<span class="badge badge-success">{{$item->course_type}}</span> @else
                    <span class="badge badge-warning">{{$item->course_type}}</span> @endif</h3>
                <div class="card-options">
                    <a href="#" data-id="{{$item->course_id}}" class="btn btn-danger btn-sm ml-2 delete" value="Danger alert">Delete</a>
                </div>
            </div>
            
            <div class="card-body text-center">
              <div class="image" style="min-height:220px">
                @if(empty($item->course_photo))
                <i class="fe fe-book-open text-success fa-5x text-success-shadow"></i>
                @else
                <img src="{{url('storage/app')}}/{{$item->course_photo}}" alt="Course photo">
                @endif

              </div>
      
                <h3 class="mt-4 mb-3">{{$item->course_name}}</h3>
                @if($item->course_type=="Free")
                 <h3 class="text-success">{{$item->course_type}}</h3>
                @else
                <h3 >{{'$'.number_format($item->course_price, 2, '.', ',')}}</h3>
                @endif
                <a href="{{url('admin/course/d')}}/{{$item->course_id}}" class="btn btn-success btn-sm ml-2" data-toggle="tooltip" title="Courses Settings"><i class="fa fa-gear fa-2x"></i></a>
                <a href="{{url('admin/course/statistics')}}/{{$item->course_id}}" class="btn btn-danger btn-sm ml-2" data-toggle="tooltip" title="Courses Statistics"><i class="ti-panel fa-2x"></i></a>

            </div>
        </div>
    </div><!-- COL END -->
    @endforeach
</div>
</div>

<!-- MESSAGE MODAL -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="example-Modal3">Add Course</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                
                <div class="alert alert-danger">
                    <ul id="error">

                    </ul>
                </div>
				<form name="course_form" id="course_form" method="post">
					<div class="form-group">
						<label for="course_name" class="form-control-label">Course name:</label>
						<input type="text" class="form-control" name="course_name" id="course_name">
					</div>
                    <div class="form-group">
						<label for="course_name" class="form-control-label">Course Type:</label>
                        <select name="course_type" class="form-control">
                            <option value="" selected disabled>Select</option>
                            <option >Free</option>
                            <option >Paid</option>
                        </select>
					</div>

                <div class="float-right mt-3"> 
                   <button type="submit"  class="btn btn-primary">Create Course</button>
    				 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection

@section('directory')
<li class="breadcrumb-item "><a href="{{url('admin/courses')}}"><small class="mb-0 breadcrump-tittle active">Cources</small></a></li>
@endsection

@section('jquery')
    <script src="{{url('public/assets/tag/fm.tagator.jquery.js')}}"></script>
    <script src="{{asset('public/assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
    <script src="{{asset('public/assets/plugins/wysiwyag/wysiwyag.js')}}"></script>
	<script src="{{asset('public/assets/plugins/notify/js/jquery.growl.js')}}"></script>
	<script src="{{asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.js')}}"></script>

<script>
    $(document).ready(function(){
        $('#course_description').val('').trigger('change');
        $(".alert").css('display','none');
    });
$("#course_form").submit(function(e) {
    e.preventDefault();   
    var formData = new FormData(this);
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN':'@php echo csrf_token() @endphp '}});  
    $.ajax({
        url: "{{url('admin/courses')}}",
        type: 'POST',
        data: formData,
        success: function (data) {
            $(".alert").css('display','none');
            $('.all').load(document.URL +  ' .all');
             $('#course_description').val('').trigger('change');
             $('#main_topics').val('').trigger('change');
             $('#course_name').val('').trigger('change');
            $('#addnew').modal('hide');
                return $.growl.notice({
                message: data.success,
                title: 'Success !',
            });
        },
        error:function(data){
            $(".alert").find("ul").html('');
            $(".alert").css('display','block');
        $.each( data.responseJSON.errors, function( key, value ) {
                $(".alert").find("ul").append('<li>'+value+'</li>');
            });     
            $('.modal').animate({scrollTop:0}, '500');
  
        },
        cache: false,
        contentType: false,
        processData: false
    });
});

  $('body').on('click','.delete',function(){  
     var id =$(this).attr('data-id');
        Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
              if (result.value) {

            $.ajax({
                    type:'get',
                    url:'{{url("admin/delete/course")}}/'+id,
                    success:function(data){ 
                    Swal.fire(
                      'Deleted!',
                      'Your file has been deleted.',
                      'success'
                    )
                    $('#rows'+id).hide(2000);
                    },
                    error:function(error){
                    Swal.fire(
                      'Faild!',
                      'First Delete Course Main Topic',
                      'error'
                    )
                    }
                });
            }
          })          
    });
// $('body').on('click','.edit',function(){  
//     var id =$(this).attr('data-edit');

//     $.ajax({
//         type:'get',
//         url:'{{url("admin/edit/course")}}/'+id,
//         success:function(data){ 
//             $('#course_name1').val(data[0].course_name);
//             $('#course_description1').val(data[0].course_description).trigger('change');
//             $('#main_topics1').val(data[1]).trigger('change');
//         },
//         error:function(error){
//             Swal.fire(
//                     'Faild!',
//                     'Data not Send to Server',
//                     'error'
//                 )
//         }
//     });

// });

</script>
@endsection