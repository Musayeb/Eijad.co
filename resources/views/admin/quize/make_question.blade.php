@extends('admin.master')
@section('css')
<link href="{{asset('public/assets/plugins/notify/css/jquery.growl.css')}}" rel="stylesheet"/>
<link href="{{asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
<link href="{{asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" />

<style>
    .tab_list .active{
        background-color: #556ee7;
    }
</style>

@endsection
@section('add_btn')
<div class="ml-auto">
    <div class="input-group">
        <a href="#"  data-toggle="modal" data-target="#model" class="btn btn-primary button-icon mr-3 mt-1 mb-1">
            <span><i class="fe fe-plus"></i>Create Question</span>
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
                        <h4 class="d-inline">{{$quiz->quize_name}} Questions</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="all table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Question Text</th>
                                        <th>Question Mark</th>
                                        <th>Author</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @php $number=1; @endphp
                                     @foreach ($question as $row)
                                    <tr id="row{{$row->question_id}}">
                                    <td>{{$number++}}</td>
                                    <td>{{$row->text}}</td>
                                    <td>{{$row->marks}}</td>
                                    <td>{{$row->email}}</td>

                                    <td>{{$row->created_at}}</td>
                                    <td class="text-center">
                                    <a class="btn btn-danger btn-sm text-white mr-2 delete" data-delete="{{$row->question_id}}">Delete</a>
                                    <a data-target="#edit" data-id="{{$row->question_id}}" data-toggle="modal" class="btn btn-info btn-sm text-white mr-2 edit">Edit</a>
                                    <a class="btn btn-primary btn-sm text-white mr-2" href="{{url('admin/quiz/option')}}/{{$row->question_id}}">Options</a>
                                
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
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="example-Modal3">Add Question</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mt-3">
                <div class="alert alert-danger alert1">
                    <ul id="error">
                    </ul>
                </div>                  
                <form  class="question_form" method="post" class="pb-3">
                    <div class="form-group ">
                        <label  class="form-control-label">Question </label>
                        <textarea class="form-control" name="question" placeholder="Write the Question"></textarea>
                    </div> 
                    <div class="form-group">
                        <label  class="form-control-label">Question Mark </label>
                        <input type="number" min="1" name="question_mark" class="form-control"  placeholder="Question Mark" >
                    </div>
                    <input type="hidden" name="quiz_number" value="{{$quiz->quize_id}}">
                    <div class="float-right pb-3"> 
                    <button type="submit"  class="btn btn-primary">Create Question</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                    </form>
              </div>
		</div>
	</div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="example-Modal3">Edit Question</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mt-3">
                <div class="alert alert-danger alert2">
                    <ul id="error">
                    </ul>
                </div>
                    <form  class="form_question" class="pb-3">
                        <div class="form-group ">
                            <label  class="form-control-label">Question </label>
                            <textarea class="form-control" name="question" id="question" placeholder="Write the Question"></textarea>
                        </div> 
                        <div class="form-group">
                            <label  class="form-control-label">Question Mark </label>
                            <input type="number" min="1" name="question_mark" id="question_mark"   class="form-control"  placeholder="Question Mark" >
                        </div>
                         <input type="hidden" id="question_id" name="question_id">
                        <div class="float-right pb-3"> 
                        <button type="submit"  class="btn btn-primary">Edit Question</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                       
			</div>
		</div>
	</div>
</div>

@endsection

@section('directory')
<li class="breadcrumb-item "><a href="{{url('admin/quize')}}"><small class="mb-0 breadcrump-tittle active">Quiz</small></a></li>
<li class="breadcrumb-item "><a><small class="mb-0 breadcrump-tittle active">Quiz Question</small></a></li>

@endsection

@section('jquery')
<script src="{{asset('public/assets/plugins/notify/js/jquery.growl.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatable/datatable.js')}}"></script>
<script src="{{asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.js')}}"></script>

<script>   
  $(document).ready(function(){
    $(".alert").css('display','none');
    $(".question_form").submit(function(e) {
       e.preventDefault();   
       var formData = new FormData(this);
       $.ajaxSetup({ headers: {
                'X-CSRF-TOKEN':'@php echo csrf_token() @endphp ',}});  
       $.ajax({
           url: "{{url('admin/quiz/question')}}",
           type: 'POST',
           data: formData,
           success: function (data) {
               $(".alert").css('display','none');
               $('.all').load(document.URL +  ' .all');
                $('.question_form')[0].reset();
               $('#model').modal('hide');
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
});

// edit
$(document).ready(function(){
    $('body').on('click','.edit',function(){
        var id = $(this).attr('data-id');
        $.ajax({
            type:'get',
            url:'{{url("admin/quiz/question")}}/'+id+'/'+'edit',
            success:function(data){ 
                $('#question').val(data.text);
                $('#question_mark').val(data.marks);
                $('#question_id').val(data.question_id);
            },
            error:function(error){
               console.log('server Error'); 
            }
        });
    });

    $(".alert2").css('display','none');
    $(".form_question").submit(function(e) {
       e.preventDefault();   
       var formData = new FormData(this);
       $.ajaxSetup({headers: {'X-CSRF-TOKEN':'@php echo csrf_token() @endphp '}});  
       $.ajax({
           url: "{{url('admin/question/update')}}",
           type: 'post',
           data: formData,
           success: function (data) {
               $(".alert2").css('display','none');
               $('.all').load(document.URL +  ' .all');
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
                $.ajaxSetup({headers: {'X-CSRF-TOKEN':'@php echo csrf_token() @endphp '}});  
            $.ajax({
                    type:'Delete',
                    url:'{{url("admin/quiz/question")}}/'+id,
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
                      'First Delete Related Data',
                      'error'
                    )
                    }
                });
            }
          })
              
});


</script>



@endsection
