@extends('admin.master')
@section('css')
    <link href="{{ asset('public/assets/plugins/notify/css/jquery.growl.css') }}" rel="stylesheet" />
    <link href="{{asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" />


@endsection
@section('add_btn')
    <div class="ml-auto">
        <div class="input-group">
            <a href="#" data-toggle="modal" data-target="#addnew" class="btn btn-primary button-icon mr-3 mt-1 mb-1">
                <span><i class="fe fe-plus"></i>Create Quiz</span>
            </a>
        </div>
    </div>

@endsection
@section('content')


    <div class="all">
        <div class="row">
            @foreach ($quize as $row)
                <div class="col-lg-3 col-md-6 col-sm-6" id="q{{$row->quize_id}}">

                    <div class="card bg-info">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-body p-4">
                                    <h6> Name &nbsp; &nbsp;<strong class="h4">{{ $row->quize_name }}</strong></h6>
                                    <h6> Course&nbsp; &nbsp;<strong class="h4">{{ $row->course_name }}</strong></h6>
                                    <h6> Time&nbsp; &nbsp;<strong class="h4">{{ $row->time }} min</strong></h6>
                                    <h6> Total Question&nbsp; &nbsp;<strong class="h4">{{ $row->quiz_total_question }} </strong></h6>

                                    <h6>Author&nbsp; &nbsp;<strong class="h6">{{ $row->email }}</strong></h6>
                                    <h6>Created Time &nbsp; &nbsp;<strong class="h6">{{ $row->created_at }}</strong></h6>
                                </div>
                            </div>
                        </div>

                        <div class="action pb-4 text-center">
                            <a data-toggle="modal" data-target="#edit_modal">
                            <button type="button" data-edit="{{ $row->quize_id }}" class="btn btn-primary btn-pill edit"
                                title="Edit Quiz" data-toggle="tooltip">
                                <i class="ti-pencil"></i>
                            </button>
                             </a>
                            <button type="button" data-delete="{{ $row->quize_id }}"
                                class="btn btn-danger btn-pill delete" title="Delete Quiz" data-toggle="tooltip">
                                <i class="ti-trash"></i>
                            </button>
                            <a href="{{url('admin/quiz/question')}}/{{$row->quize_id}}">
                            <button type="button" 
                                class="btn btn-warning btn-pill question" title="Quiz Questions" data-toggle="tooltip">
                                <i class="ti-help"></i>
                            </button>
                           </a>
                           <a href="{{url('admin/quiz/statistics')}}/{{$row->quize_id}}">
                           <button type="button" 
                                class="btn btn-secondary btn-pill static" title="Quiz Statistics" data-toggle="tooltip">
                                <i class="ti-panel"></i>
                            </button>
                        </a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>


        <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="example-Modal3">Add Quiz</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mt-3">

                        <div class="alert alert-danger">
                            <ul id="error">

                            </ul>
                        </div>
                        <form name="course_form" id="quize_form" method="post">
                            <div class="form-group mb-4">
                                <label for="course_name" class="form-control-label">Quiz name</label>
                                <input type="text" class="form-control" name="quiz_name" placeholder="Enter Quiz Name">
                            </div>

                            <div class="form-group mb-4">
                                <label for="course_name" class="form-control-label">Course</label>
                                <select name="quiz_course" class="form-control">
                                    <option value="" selected disabled>Select</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->course_id }}">{{ $course->course_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label class="form-control-label">Quiz Time (minute)</label>
                                <input type="number" name="quiz_time" min="0" class="form-control"
                                    placeholder="Enter Quiz Time">
                            </div>
                            <div class="form-group mb-4">
                                <label class="form-control-label">Total Question</label>
                                <input type="number" name="total_question" min="0" class="form-control"
                                    placeholder="Enter Quiz Total Question">
                            </div>

                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Create quiz</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="example-Modal3">Edit Quiz</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mt-3">

                        <div class="alert  alert1 alert-danger">
                            <ul id="error">
                            </ul>
                        </div>
                        <form id="quiz_edit_form12" method="post">
                            <div class="form-group mb-4">
                                <label for="course_name" class="form-control-label">Quiz name</label>
                                <input type="text" class="form-control" name="quiz_name" id="quiz_name"
                                    placeholder="Enter Quiz Name">
                            </div>

                            <div class="form-group mb-4">
                                <label for="course_name" class="form-control-label">Course</label>
                                <select name="quiz_course" class="form-control" id="quiz_course">
                                    <option value="" selected disabled>Select</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->course_id }}">{{ $course->course_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label class="form-control-label">Quiz Time (minute)</label>
                                <input type="number" name="quiz_time" min="0" class="form-control"
                                    placeholder="Enter Quiz Time" id="quiz_time">
                                <input type="hidden" name="quiz_id" id="quiz_id">
                            </div>
                            
                            <div class="form-group mb-4">
                                <label class="form-control-label">Total Question</label>
                                <input type="number" name="total_question" min="0" class="form-control"
                                    placeholder="Enter Quiz Total Question" id="total_question">
                            </div>


                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Edit quiz</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('directory')
        <li class="breadcrumb-item "><a href="{{ url('admin/quiz') }}"><small
                    class="mb-0 breadcrump-tittle active">Quiz</small></a></li>
    @endsection

    @section('jquery')
        <script src="{{ asset('public/assets/plugins/notify/js/jquery.growl.js') }}"></script>
        <script src="{{asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.js')}}"></script>
        
        <script>
            $('body').on('click','.delete',function(){  
            var id =$(this).attr('data-delete');
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
                    $.ajaxSetup({  headers: { 'X-CSRF-TOKEN': '@php echo csrf_token() @endphp ', }});
                    $.ajax({
                            type:'delete',
                            url:'{{url("admin/quiz")}}/'+id,
                            success:function(data){ 
                            Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            )
                            $('#q'+id).hide(2000);
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
        <script>
            $(".alert").css('display', 'none');
            $(document).ready(function() {
                $(".alert").css('display', 'none');
                $("#quize_form").submit(function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': '@php echo csrf_token() @endphp ',
                        }
                    });
                    $.ajax({
                        url: "{{ url('admin/quiz') }}",
                        type: 'POST',
                        data: formData,
                        success: function(data) {
                            $('#quize_form')[0].reset();
                            $('#addnew').modal('hide');
                            $(".alert").css('display', 'none');
                             $.growl.notice({
                                message: data.success,
                                title: 'Success !',
                            });
                            $('.all').load(document.URL + ' .all');


                        },
                        error: function(data) {
                            $(".alert").find("ul").html('');
                            $(".alert").css('display', 'block');
                            $.each(data.responseJSON.errors, function(key, value) {
                                $(".alert").find("ul").append('<li>' + value + '</li>');
                            });
                            $('.modal').animate({
                                scrollTop: 0
                            }, '500');

                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });
                });
            });
        </script>

        <script>
            $(document).ready(function(){
            // edit
            $('body').on('click', '.edit', function() {
                var data = $(this).attr('data-edit');
                var url = '{{ url('admin/quiz') }}/' + data + '/edit';
                $.get(url, function(data) {
                    $('#quiz_name').val(data.quize_name);
                    $('#quiz_course').val(data.course_id);
                    $('#quiz_time').val(data.time);
                    $('#quiz_id').val(data.quize_id);
                    $('#total_question').val(data.quiz_total_question);

                    
                });
            });

            $("#quiz_edit_form12").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajaxSetup({  headers: { 'X-CSRF-TOKEN': '@php echo csrf_token() @endphp ', }});
                $.ajax({
                    url: "{{ url('admin/quiz/update') }}",
                    type: 'post',
                    data: formData,
                    success: function(data) {
                        $('#edit_modal').modal('hide');
                        $(".alert1").css('display', 'none');
                        $.growl.notice({
                            message: data.success,
                            title: 'Success !',
                        });
                        $('.all').load(document.URL + ' .all');
                    },
                    error: function(data) {
                        $(".alert1").find("ul").html('');
                        $(".alert1").css('display', 'block');
                        $.each(data.responseJSON.errors, function(key, value) {
                            $(".alert1").find("ul").append('<li>' + value + '</li>');
                        });
                        $('.modal').animate({
                            scrollTop: 0
                        }, '500');

                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        });
        </script>
    @endsection
