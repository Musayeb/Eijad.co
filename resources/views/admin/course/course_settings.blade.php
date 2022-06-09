@extends('admin.master')
@section('css')
    <link href="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/notify/css/jquery.growl.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/wysiwyag/richtext.css') }}" rel="stylesheet" />

    <style>
        .fa-pencil {
            display: none;
        }

        .ti-pencil {
            cursor: pointer;
        }

        #course_title :hover {
            display: block;
        }

    </style>
@endsection
@section('content')
    <small>Course Name</small> &nbsp;<h2 id="course_title"> {{ $course[0]->course_name }} </h2>
    <i class="fa fa-pencil"></i>

    <div class="row">
        <div class="  col-md-12 ">
            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">Course visibility</h3>
                    <div class="card-options">

                        <label class="custom-switch">
                            <span class="custom-switch-description">Draft &nbsp;&nbsp;</span>
                            <input type="checkbox" name="course_visibility" data-d="{{ $course[0]->course_id }}" @if ($course[0]->status == '1')  value="0" checked @else value="1" @endif
                                class="custom-switch-input course_visibility">
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">Publish</span>
                        </label>
                    </div>
                </div>
            
            </div>
        </div>
    </div>



    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-inline">
                    <h6 class="d-inline">Course Topic</h6>
                    <div class="d-inline">
                        <a data-toggle="modal" data-target="#model" class=" btn btn-success float-right">Add Topic </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table_topic table-striped table-bordered text-nowrap w-100">
                            <thead>
                                <tr>
                                    <th class="wd-15p">#</th>
                                    <th class="wd-15p">Topic Name</th>
                                    <th class="wd-15p">Topic Type</th>
                                    <th class="wd-20p">Created Date</th>
                                    <th class="wd-10p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $number=1; @endphp
                                @foreach ($topic as $row)
                                    <tr id="top{{$row->topics_id}}">
                                        <td>{{ $number++ }}</td>
                                        <td>{{ $row->topics_name }}</td>
                                        <td>{{ $row->type_of_topic }}</td>
                                        <td>{{ $row->created_at }}</td>
                                        <td class="text-center">
                                            <a data-id="{{$row->topics_id}}" class="btn btn-danger btn-sm text-white mr-2 topic_delete">Delete</a>

                                            <a href="{{ url('admin/course/d/') }}/{{ $id }}/{{ $row->topics_id }}"
                                                class="btn btn-primary btn-sm text-white mr-2">view</a>
                                        </td>
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
    <h4>Course Settings</h4>

    <div class="row">

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="post" id="setting_form">
                        @csrf
                        <div class="alert alert2 alert-danger">
                            <ul id="error">

                            </ul>
                        </div>
                        <div class="form-group">
                            <label  class="form-control-label">Course name</label>
                            <input type="text" class="form-control" value="{{ $course[0]->course_name }}" name="course_name"
                            placeholder="Course name">
                        </div>
                        <div class="form-group">
                            <label  class="form-control-label">Course Type</label>
                           <select name="course_type" class="form-control">
                               <option value="" selected disabled>Select</option>
                               <option @if($course[0]->course_type=="Paid") selected @endif>Paid</option>
                               <option @if($course[0]->course_type=="Free") selected @endif>Free</option>
                           </select>
                        </div>
                        <div class="form-group">
                            <label for="course_description" class="form-control-label">Course description</label>
                            <textarea class="content" name="course_description"
                                id="course_description">{{ $course[0]->course_description }} </textarea>
                        </div>

                        <div class="form-group">
                            <label>Course Bio</label>
                            <input type="text" class="form-control" value="{{ $course[0]->course_bio }}" name="course_bio"
                                placeholder="Course Bio">
                        </div>
                        <div class="form-group">
                            <label>Course Total Lecture</label>
                            <input type="text" class="form-control" value="{{ $course[0]->total_lecture }}"
                                name="total_lecture" placeholder="Total Lecture">
                            <input type="hidden" name="course_id" value="{{ $id }}">
                        </div>

                        <div class="form-group">
                            <label>Course Total Hours</label>
                            <input type="text" class="form-control" value="{{ $course[0]->total_hours }}"
                                name="total_hours" placeholder="Total Hours">
                        </div>

                        <div class="form-group">
                            <label>Language</label>
                            <input type="text" class="form-control" value="{{ $course[0]->course_lanuguage }}"
                                name="language" placeholder="Language">
                        </div>
                        <div class="form-group">
                            <label>Last Update</label>
                            <input type="month" class="form-control" value="{{ $course[0]->last_update }}"
                                name="last_update">
                        </div>


                        <div class="form-group">
                            <label>Course Level</label>
                            <select class="form-control" name="course_level">
                                <option selected disabled value="">Select Level</option>
                                <option @if ($course[0]->course_level == 'Advance Level') selected @endif>Advance Level</option>
                                <option @if ($course[0]->course_level == 'Intermediate Level') selected @endif>Intermediate Level</option>
                                <option @if ($course[0]->course_level == 'Bignner Level') selected @endif>Entre Level</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Certification</label>
                            <select class="form-control" name="certification">
                                <option selected disabled value="">Select</option>
                                <option @if ($course[0]->certification == 'Yes') selected @endif>Yes</option>
                                <option @if ($course[0]->certification == 'No') selected @endif>No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Course Price (USD)</label>
                            <input type="number" min="1" class="form-control" value="{{ $course[0]->course_price }}"
                                name="course_price" placeholder="Course Price">
                        </div>

                     

                        <button class="btn btn-success float-right" type="submit">Save Changes</button>
                    </form>

                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="wideget-user text-center">
                        <div class="wideget-user-desc pt-5 pb-5">
                            <h6 class="pt-2">Course Photo </h6>
                            <div class="">
                                <img class="show_photo" @if (!empty($course[0]->course_photo)) src="{{ url('storage/app') }}/{{ $course[0]->course_photo }}"
                            @else   
                                src="{{ url('public/assets/images/users/15.jpg') }}" @endif
                                    alt="img">
                            </div>
                            <label class="btn btn-danger mt-3" for="course_photo">Change Photo</label>
                            <form id="photo_upload" enctype="multipart/form-data">
                                <input type="file" accept="image/*" name="course_photo" oninput='UpdatePreview()'
                                    id="course_photo" class="d-none">
                                <input type="hidden" name="course" value="{{ $id }}">
                            </form>
                        </div>

                    </div>
                    {{-- </div> --}}

                </div>
            </div>
        </div>

        <div class="card w-100 p-4">
            <h2 class="card-title">Instructors</h2>

            <div class="text-right mb-2">
                <button class=" btn btn-success" data-target="#instructor-modal" data-toggle="modal">Add Instructor</button>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-sm example_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Instructor</th>
                            <th>Position</th>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>Linkedin</th>
                            <th>Author</th>
                            <th>Create Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $count=1; @endphp
                        @foreach ($instructor as $row1)
                            <tr id="ins{{ $row1->instructor_id }}">
                                <td>{{ $count++ }}</td>
                                <td>
                                    <img src="{{ url('storage/app') }}/{{ $row1->photo }}"
                                        class=" img-circle rounded-circle" style="height: 80px" alt="">
                                    &nbsp; &nbsp;{{ $row1->instructor_name }}
                                </td>
                                <td>{{ $row1->position }}</td>
                                <td> @if(!empty($row1->facebook)) <a target="_blank" href="{{ $row1->facebook }}">Facebook</a> @endif</td>
                                <td> @if(!empty($row1->twitter))<a target="_blank" href="{{ $row1->twitter }}">twitter</a>@endif</td>
                                <td> @if(!empty($row1->linkedin))<a target="_blank" href="{{ $row1->linkedin }}">Linkedin</a>@endif</td>
                                <td>{{ $row1->email }}</td>
                                <td>{{ $row1->created_at }}</td>
                                <td>
                                    <a href="javscript:void()" data-delete="{{ $row1->instructor_id }}"
                                        class="delete_instructor"><i class="ti-trash" style="font-size:20px;color:red"> </i>
                                    </a>
                                    <a href="javscript:void()" data-edit="{{ $row1->instructor_id }}"
                                        data-target="#instructor-edit-modal" data-toggle="modal" class="edit_instructor"> <i
                                            class="ti-pencil" style="font-size: 20px;color: royalblue"></i></a>

                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>


        <!-- MESSAGE MODAL -->
        <div class="modal fade" id="model" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="example-Modal3">Course Topic</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="alert alert12 alert-danger">
                            <ul id="error">

                            </ul>
                        </div>
                        <form id="topic_form" method="post">

                            <div class="form-group">
                                <label for="main_topics" class="form-control-label">Topic Name</label>
                                <input type="text" class="form-control" id="topic_name" name="topic_name">
                                <input type="hidden" name="course" value="{{ $id }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Type of topic</label>
                                <select class="form-control" name="type_of_topic">
                                    <option selected disabled value="">--- select topic type ---</option>
                                    <option>description topic</option>
                                    <option>paid topic</option>
                                </select>
                            </div>

                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Create Topic</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="modal fade" id="instructor-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="example-Modal3">Course Instructor Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert  alert3 alert-danger">
                            <ul id="error"></ul>
                        </div>
                        <form id="instructor_form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-control-label">Instructor Name</label>
                                <input type="text" name="instructor_name" class="form-control"
                                    placeholder="Instructor Full Name">
                                <input type="hidden" name="course" value="{{ $id }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Position</label>
                                <input type="text" name="position" class="form-control"
                                    placeholder="Instructor Position or Qualificatoin">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Social Media Links</label>
                                <input type="url" name="facebook" class="form-control" placeholder="Facebook URL">
                                <input type="url" name="twitter" class="form-control mt-1" placeholder="Twitter URL">
                                <input type="url" name="linkedin" class="form-control mt-1" placeholder="Linkedin URL">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Photo</label>
                                <input type="file" name="photo" class="form-control" placeholder="Photo">
                            </div>


                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Create</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="instructor-edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="example-Modal3">Course Instructor Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert  alert4 alert-danger">
                            <ul id="error"></ul>
                        </div>
                        <form id="instructor_edit_form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-control-label">Instructor Name</label>
                                <input type="text" name="instructor_name" class="form-control"
                                    placeholder="Instructor Full Name" id="ins_name">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Position</label>
                                <input type="text" name="position" class="form-control"
                                    placeholder="Instructor Position or Qualificatoin" id="ins_positon">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Social Media Links</label>
                                <input type="url" name="facebook" class="form-control" placeholder="Facebook URL"
                                    id="ins_facebook">
                                <input type="url" name="twitter" class="form-control mt-1" placeholder="Twitter URL"
                                    id="ins_twitter">
                                <input type="url" name="linkedin" class="form-control mt-1" placeholder="Linkedin URL"
                                    id="ins_linkedin">
                                <input type="hidden" name="instructor" id="instructor">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Photo</label>
                                <input type="file" name="photo" class="form-control" placeholder="Photo">
                                <div class="img-cart">
                                    <img src="" id="ins_photo" style="height:40px;width:80px">
                                </div>
                            </div>
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    @endsection
    @section('directory')
        <li class="breadcrumb-item "><a href="{{ url('admin/courses') }}"><small
                    class="mb-0 breadcrump-tittle active">Cources</small></a></li>
        <li class="breadcrumb-item "><a href="{{ url('admin/courses/d') }}/{{ $course[0]->course_id }}"><small
                    class="mb-0 breadcrump-tittle active">{{ $course[0]->course_name }}</small></a></li>

    @endsection

    @section('jquery')
        <script src="{{ asset('public/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/datatable.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/notify/js/jquery.growl.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/wysiwyag/wysiwyag.js') }}"></script>

        <script>
            $(document).ready(function() {
                $(".alert").css('display', 'none');
                $('.example_table').DataTable();
            });
            $('body').on('click', '.topic_delete', function() {
                var id = $(this).attr('data-id');
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
                        $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp ', }});
                        $.ajax({
                            type: 'get',
                            url: '{{ url("admin/course/delete-topic") }}/' + id,
                            success: function(data) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success')
                                $('#top' + id).hide(2000);
                            },
                            error: function(error) {
                                Swal.fire(
                                    'Faild!',
                                    'Topic has related data please delete related data first',
                                    'error'
                                )
                            }
                        });
                    }
                })

            });

            $("#topic_form").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp ', }});
                $.ajax({
                    url: "{{ url('admin/course/add-topic') }}",
                    type: 'POST',
                    data: formData,
                    success: function(data) {
                        $(".alert12").css('display', 'none');
                        $('.table_topic').load(document.URL + ' .table_topic');
                        $("#topic_name").val('');
                        $('#model').modal('hide');
                        return $.growl.notice({
                            message: data.success,
                            title: 'Success !',
                        });
                    },
                    error: function(data) {
                        $(".alert12").find("ul").html('');
                        $(".alert12").css('display', 'block');
                        $.each(data.responseJSON.errors, function(key, value) {
                            $(".alert12").find("ul").append('<li>' + value + '</li>');
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

            function UpdatePreview() {
                $('.show_photo').attr('src', URL.createObjectURL(event.target.files[0]));
                $('#photo_upload').submit();
            };
            $('#photo_upload').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp ',}});
                $.ajax({
                    url: "{{ url('admin/course/upload/photo') }}",
                    type: 'POST',
                    data: formData,
                    success: function(data) {
                        $(".alert2").css('display', 'none');
                        $('#model').modal('hide');
                        return $.growl.notice({
                            message: data.success,
                            title: 'Success !',
                        });
                    },
                    error: function(data) {
                        $(".alert2").find("ul").html('');
                        $(".alert2").css('display', 'block');
                        $.each(data.responseJSON.errors, function(key, value) {
                            $(".alert2").find("ul").append('<li>' + value + '</li>');
                        });
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });

            });
            $("#setting_form").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp ',}});
                $.ajax({
                    url: "{{ url('admin/course/settings') }}",
                    type: 'POST',
                    data: formData,
                    success: function(data) {
                        $(".alert2").css('display', 'none');
                        $('#model').modal('hide');
                        return $.growl.notice({
                            message: data.success,
                            title: 'Success !',
                        });
                    },
                    error: function(data) {
                        $(".alert2").find("ul").html('');
                        $(".alert2").css('display', 'block');
                        $('html, body').animate({
                            scrollTop: $(".row").offset().top
                        }, 1000);
       
                        $.each(data.responseJSON.errors, function(key, value) {
                            $(".alert2").find("ul").append('<li>' + value + '</li>');
                        });
                 

                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });

            $('#instructor_form').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '} });
                $.ajax({
                    url: "{{ url('admin/course-instractor') }}",
                    type: 'POST',
                    data: formData,
                    success: function(data) {
                        $(".alert3").css('display', 'none');
                        $('.example_table').load(document.URL + ' .example_table');
                        $('#instructor_form')[0].reset();
                        $('#instructor-modal').modal('hide');
                        return $.growl.notice({
                            message: data.success,
                            title: 'Success !',
                        });
                    },
                    error: function(data) {
                        $(".alert3").find("ul").html('');
                        $(".alert3").css('display', 'block');
                        $.each(data.responseJSON.errors, function(key, value) {
                            $(".alert3").find("ul").append('<li>' + value + '</li>');
                        });
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
            $('body').on('click', '.delete_instructor', function() {
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
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': '@php echo csrf_token() @endphp ',
                            }
                        });
                        $.ajax({
                            type: 'DELETE',
                            url: '{{ url('admin/course-instractor') }}/' + id,
                            success: function(data) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success')
                                $('#ins' + id).hide(2000);
                            },
                            error: function(error) {
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

            // course publish
            $('body').on('change', '.course_visibility', function() {
              
                $.ajax({
                    type: 'get',
                    url: '{{ url("admin/course-status") }}/' +  $(this).attr('data-d')+'/' + $(this).val(),
                    success: function(data) {
                        return $.growl.notice({
                            message: data.success,
                            title: 'Success !',
                        });
                    },
                    error: function(error) {}
                });

            });
            $('body').on('click', '.edit_instructor', function() {
                var id = $(this).attr('data-edit');
                $.ajax({
                    type: 'get',
                    url: '{{ url('admin/course-instractor') }}/' + id + '/edit',
                    success: function(data) {
                        $('#ins_name').val(data.instructor_name);
                        $('#ins_positon').val(data.position);
                        $('#ins_facebook').val(data.facebook);
                        $('#ins_twitter').val(data.twitter);
                        $('#ins_linkedin').val(data.linkedin);
                        $('#ins_photo').attr('src', '{{ url('storage/app/') }}/' + data.photo);
                        $('#instructor').val(data.instructor_id);
                    },
                    error: function(error) {}
                });

            });
            $('#instructor_edit_form').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '@php echo csrf_token() @endphp ',
                    }
                });
                $.ajax({
                    url: "{{ url('admin/course-instractor-update') }}",
                    type: 'POST',
                    data: formData,
                    success: function(data) {
                        $(".alert4").css('display', 'none');
                        $('.example_table').load(document.URL + ' .example_table');
                        $('#instructor_edit_form')[0].reset();
                        $('#instructor-edit-modal').modal('hide');
                        return $.growl.notice({
                            message: data.success,
                            title: 'Success !',
                        });
                    },
                    error: function(data) {
                        $(".alert4").find("ul").html('');
                        $(".alert4").css('display', 'block');
                        $.each(data.responseJSON.errors, function(key, value) {
                            $(".alert4").find("ul").append('<li>' + value + '</li>');
                        });
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        </script>
    @endsection
