@extends('admin.master')
@section('css')
<link href="{{asset('public/assets/plugins/notify/css/jquery.growl.css')}}" rel="stylesheet"/>
<link href="{{asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
<link href="{{asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" />

@endsection
@section('add_btn')
<div class="ml-auto">
    <div class="input-group">
        <a href="#"  data-toggle="modal" data-target="#model" class="btn btn-primary button-icon mr-3 mt-1 mb-1">
            <span><i class="fe fe-plus"></i>Create Quiz Topic</span>
        </a>
    </div>
</div>

@endsection

@section('content')

 
    	<!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-md-12 col-lg-12 ">
                <div class="card ">
                    <div class="card-header d-inline">
                        <h5 class="d-inline">{{$quize->quize_name}} Quiz Topic </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="all table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">#</th>
                                        <th class="wd-15p">Topic Name</th>
                                        <th class="wd-15p">Quiz</th>
                                        <th class="wd-20p">Created Date</th>
                                        <th class="wd-10p">Action</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @php $number=1; @endphp
                                    @foreach ($quize_topic as $row)
                                    <tr id="row{{$row->quize_topic_id}}">
                                    <td>{{$number++}}</td>
                                    <td>{{$row->quize_topic}}</td>
                                    <td>{{$quize->quize_name}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td class="text-center">
                                    <a class="btn btn-danger btn-sm text-white mr-2 delete" data-delete="{{$row->quize_topic_id}}">Delete</a>
                                    <a data-target="#edit" data-id="{{$row->quize_topic_id}}" data-data="{{$row->quize_topic}}" data-toggle="modal" class="btn btn-info btn-sm text-white mr-2 edit">Edit</a>
                                    <a href="{{ route('question.show', [$row->quize_topic_id]) }}" class="btn btn-primary btn-sm text-white mr-2">view</a></td>
                                </tr>
                                 @endforeach
                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- TABLE WRAPPER -->
                </div>
                <!-- SECTION WRAPPER -->
            </div>
        </div>
        <!-- ROW-1 CLOSED -->


<div class="modal fade" id="model" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="example-Modal3">Add Quize Topic</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mt-3">
                
                <div class="alert alert-danger alert1">
                    <ul id="error">

                    </ul>
                </div>
				<form name="course_form" id="quize_form" method="post">
					<div class="form-group mb-4">
						<label for="course_name" class="form-control-label">Quiz Topic:</label>
						<input type="text" class="form-control" name="quiz_topic" >
                        <input type="hidden" name="quize" value="{{$quize->quize_id}}">
                    </div>

 
                <div class="float-right"> 
                   <button type="submit"  class="btn btn-primary">Create quiz topic</button>
    				 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="example-Modal3">Edit Quiz Topic</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mt-3">
                
                <div class="alert alert-danger alert2">
                    <ul id="error">

                    </ul>
                </div>
				<form  id="quize_form2" method="post">
					<div class="form-group mb-4">
						<label  class="form-control-label">Quiz Topic:</label>
						<input type="text" class="form-control" name="quiz_topics" >
                        <input type="hidden" id="id" name="topic">
                    </div>
                    
 
                <div class="float-right"> 
                   <button type="submit"  class="btn btn-primary">Edit quiz topic</button>
    				 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection

@section('directory')
<li class="breadcrumb-item "><a href="{{url('admin/quiz')}}"><small class="mb-0 breadcrump-tittle active">Quiz</small></a></li>
<li class="breadcrumb-item "><a href="{{url('admin/quiz/topic')}}"><small class="mb-0 breadcrump-tittle active">Quiz Topic</small></a></li>

@endsection

@section('jquery')
<script src="{{asset('public/assets/plugins/notify/js/jquery.growl.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatable/datatable.js')}}"></script>
<script src="{{asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.js')}}"></script>

<script>   
$(document).ready(function(){
       $(".alert1").css('display','none');
    $("#quize_form").submit(function(e) {
   
       e.preventDefault();   
       var formData = new FormData(this);
       $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
               }
       });  
       $.ajax({
           url: "{{url('admin/quiz/add_topic')}}",
           type: 'POST',
           data: formData,
           success: function (data) {
               $(".alert1").css('display','none');
               $('.all').load(document.URL +  ' .all');
                $('#quize_form')[0].reset();

               $('#model').modal('hide');
                   return $.growl.notice({
                   message: data.success,
                   title: 'Success !',
               });
           },
           error:function(data){
               $(".alert1").find("ul").html('');
               $(".alert1").css('display','block');
           $.each( data.responseJSON.errors, function( key, value ) {
                   $(".alert1").find("ul").append('<li>'+value+'</li>');
               });     
               $('.modal').animate({scrollTop:0}, '500');
     
           },
           cache: false,
           contentType: false,
           processData: false
       });
   });
});

// edit
$(document).ready(function(){
    $('body').on('click','.edit',function(){
        var id = $(this).attr('data-id');
        var data = $(this).attr('data-data');
        $('#id').val(id);
        $('#quize_topics').val(data);
    });

    $(".alert2").css('display','none');
    $("#quize_form2").submit(function(e) {
   
       e.preventDefault();   
       var formData = new FormData(this);
       $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',
               }
       });  
       $.ajax({
           url: "{{url('admin/quiz/update_topics')}}",
           type: 'POST',
           data: formData,
           success: function (data) {
               $(".alert2").css('display','none');
               $('.all').load(document.URL +  ' .all');
               $('#quize_form')[0].reset();
               $('#edit').modal('hide');
                   return $.growl.notice({
                   message: data.success,
                   title: 'Success !',
               });
           },
           error:function(data){
               $(".alert2").find("ul").html('');
               $(".alert2").css('display','block');
           $.each( data.responseJSON.errors, function( key, value ) {
                   $(".alert2").find("ul").append('<li>'+value+'</li>');
               });     
               $('.modal').animate({scrollTop:0}, '500');
     
           },
           cache: false,
           contentType: false,
           processData: false
       });
   });
});

// delete
$('body').on('click','.delete',function(){
  var id = $(this).attr('data-delete');
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
                    url:'{{url("admin/quize/delete_topics")}}/'+id,
                    success:function(data){ 
                    Swal.fire(
                      'Deleted!',
                      'Your file has been deleted.',
                      'success'
                    )
                    $('#row'+id).hide(2000);
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


</script>



@endsection
