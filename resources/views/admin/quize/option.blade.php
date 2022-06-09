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
            <span><i class="fe fe-plus"></i>Create Option</span>
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
                        <h3 class="d-inline">{{$question->text}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="all table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Option</th>
                                        <th>Correct Option</th>
                                        <th>Author</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @php $number=1; @endphp
                                     @foreach ($options as $row)
                                    <tr id="row{{$row->answer_id}}">
                                    <td>{{$number++}}</td>
                                    <td>{{$row->text}}</td>
                                    <td>
                                        @if ($row->is_correct=="1")
                                        <span class="badge badge-success">Yes</span>
                                        @else
                                        <span class="badge badge-danger">No</span>
                                        @endif
                                    </td>
                                    <td>{{$row->email}}</td>

                                    <td>{{$row->created_at}}</td>
                                    <td class="text-center">
                                    <a class="btn btn-danger btn-sm text-white mr-2 delete" data-delete="{{$row->answer_id}}">Delete</a>
                                    <a data-target="#edit" data-id="{{$row->answer_id}}" data-toggle="modal" class="btn btn-info btn-sm text-white mr-2 edit">Edit</a>                                
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
				<h5 class="modal-title" id="example-Modal3">Add Option</h5>
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
                        <label  class="form-control-label">Option</label>
                        <textarea class="form-control" name="option" placeholder="Write Option"></textarea>
                    </div> 
                    <div class="form-group ">
                        <label  class="form-control-label">Is Correct</label>
                        <select name="is_correct_option" class="form-control">
                            <option value="" selected disabled>Select</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div> 
                    <input type="hidden" name="question_number" value="{{$question->question_id}}">
                    <div class="float-right pb-3"> 
                    <button type="submit"  class="btn btn-primary">Create Option</button>
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
				<h5 class="modal-title" id="example-Modal3">Edit Option</h5>
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
                            <label  class="form-control-label">Option</label>
                            <textarea class="form-control" name="option" placeholder="Write Option" id="option"></textarea>
                        </div> 
                        <div class="form-group ">
                            <label  class="form-control-label">Is Correct</label>
                            <select name="is_correct_option" class="form-control" id="correct">
                                <option value="" selected disabled>Select</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div> 
                        <input type="hidden" id="option_id" name="option_id">

                        <div class="float-right pb-3"> 
                        <button type="submit"  class="btn btn-primary">Edit Option</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
    
                    </form>
			</div>
		</div>
	</div>
</div>

@endsection

@section('directory')
<li class="breadcrumb-item " onclick="window.history.go(-2)" style="cursor: pointer;"><a ><small class="mb-0 breadcrump-tittle active">Quiz</small></a></li>
<li class="breadcrumb-item " onclick="window.history.go(-1)" style="cursor: pointer;"><a><small class="mb-0 breadcrump-tittle active" >Quiz Question</small></a></li>
<li class="breadcrumb-item " onclick="window.history.back();" style="cursor: pointer;"><a><small class="mb-0 breadcrump-tittle active">Options</small></a></li>


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
       $.ajaxSetup({headers: {'X-CSRF-TOKEN':'@php echo csrf_token() @endphp '}});  
       $.ajax({
           url: "{{url('admin/quiz/option')}}",
           type: 'POST',
           data: formData,
           success: function (data) {
               $(".alert1").css('display','none');
               $('.all').load(document.URL +  ' .all');
                $('.question_form')[0].reset();
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
        $.ajax({
           url: "{{url('admin/quiz/option')}}/"+id+'/edit',
           success: function (data) {
            $('#option').val(data.text);
            $('#correct').val(data.is_correct);
            $('#option_id').val(data.answer_id);
           },
           error:function(data){
            console.log('Server Error');
           },
           cache: false,
           contentType: false,
           processData: false
       });
    });

    $(".alert1").css('display','none');
    $(".form_question").submit(function(e) {
       e.preventDefault();   
       var formData = new FormData(this);

       $.ajaxSetup({headers: {'X-CSRF-TOKEN':'@php echo csrf_token() @endphp '}});  
       $.ajax({
           url: "{{url('admin/option/update')}}",
           type: 'Post',
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
                    url:'{{url("admin/quiz/option")}}/'+id,
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
                      'Server Error',
                      'error'
                    )
                    }
                });
            }
          })
              
});


</script>



@endsection
