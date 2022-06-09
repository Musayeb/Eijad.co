@extends('admin.master')

@section('css')
    <link href="{{ asset('public/assets/plugins/notify/css/jquery.growl.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/wysiwyag/richtext.css') }}" rel="stylesheet" />


@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-9">
            {{-- description --}}
            <div class="card p-3">
                <h5>{{ $course[0]->topics_name }}</h5>
                <div class="card p-3 ">
                    <div class="header d-inline">
                        {{-- <P class="d-inline">Topic Description</p> --}}
                        <span class="d-inline float-right  cursor-pointer btn btn-success edit">Edit <i
                                class="ti-pencil"></i></span>
                    </div>

                    <div class="description">@php echo html_entity_decode($course[0]->topic_descrip) @endphp</div>
                    <div class="editdescription">
                        <div class="alert alert-danger">
                            <ul id="error">

                            </ul>
                        </div>
                        <form id="desctiption_form">
                            <label>Topic name</label>
                            <input type="text" placeholder="course topic" class="form-control" name="course_topic_name" value="{{ $course[0]->topics_name }} ">
                            <label for="">Topic description</label>
                            <textarea class="content" name="description"
                                id="course_description">{{ $course[0]->topic_descrip }} </textarea>

                            <input type="hidden" name="topic_id" value="{{ $topic_id }}">
                            <footer class="mt-2 text-right">
                                <button class="btn btn-success descancel" type="button">Cancel</button>
                                <button class="btn btn-success" type="submit">update</button>
                            </footer>
                        </form>
                    </div>
                </div>
            </div>
            {{-- end description --}}

            <div class="card p-3">
                <div class="card p-3 ">
                    <div class="header d-inline">
                        <P class="d-inline">Video Lesson</p>
                        <a href="{{ url('admin/course/uploaded/materials/') }}/{{ $topic_id }}/{{ 'video' }}"><span
                                class="d-inline float-right  cursor-pointer btn btn-success video">Set Video <i
                                    class="ti-pencil"></i></span></a>
                        <a href="{{ url('admin/course/uploaded/materials/') }}/{{ $topic_id }}/{{ 'image' }}"><span
                                class="d-inline float-right  cursor-pointer btn btn-success video mr-1">Set Poster image <i
                                    class="ti-pencil"></i></span></a>

                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-8">
                            <video style="width: 100%;height:450px;"
                                poster="{{ url('storage/app/') }}/{{$imagelink}}" controls>
                                <source src="{{ url('storage/app/') }}/{{$videolink}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card p-3 material-body" >
                <div class="card p-3 ">
                    <div class="header d-inline">
                        <P class="d-inline">Study Material</p>
                        <div class="float-right">
                            <input type="checkbox" id="study" @if ($course[0]->study_material=="Yes") checked @endif
                                class="switch">
                        </div>
                    </div>
                    <div class="card-body  @if (empty($course[0]->study_material)||$course[0]->study_material=="No") d-none @endif">
                        <div class="">
                            <a href="{{ url('admin/course/media/select/file/') }}/{{ $topic_id }}"><button
                                    type="button" class="btn btn-primary pull-right">Add New</button></a>

                            <div class="table-responsive pt-2">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <th>#</th>
                                        <th>file Name</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    @php $counter=1;
                                    @endphp
                                    @foreach ($study_material as $files)

                                        <tr id="ins{{$files->material_id}}">
                                            <td>{{ $counter++ }}</td>
                                            <td>{{ $files->file_name }}</td>
                                            <td>{{ $files->type }}</td>
                                            <td>{{ $files->created_at }}</td>
                                            <td>
                                                <i data-id="{{ $files->material_id }}" style="cursor: pointer;"
                                                    class="ti-trash h3 text-danger delete_material"></i>
                                            </td>


                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>




    </div>
    </div>


@endsection
@section('jquery')
    <script src="{{ asset('public/assets/plugins/notify/js/jquery.growl.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/wysiwyag/wysiwyag.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>

    <script>
        $('body').on('change','.switch',function(){
            if (this.checked) {
                $.ajax({
                    url: "{{ url('admin/course/set/study_material') }}/{{ $topic_id }}/Yes",
                    type: 'get',
                    success: function(data) {
                        $('#model').modal('hide');
                        $('.material-body').load(document.URL + ' .material-body');
                        
                        return $.growl.notice({
                            message: data.success,
                            title: 'Success !',
                        });
                    },
                    error: function(data) {

                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });

            } else {
                $.ajax({
                    url: "{{ url('admin/course/set/study_material') }}/{{ $topic_id }}/No",
                    type: 'get',
                    success: function(data) {
                        $('#model').modal('hide');
                        $('.material-body').load(document.URL + ' .material-body');

                        return $.growl.notice({
                            message: data.success,
                            title: 'Success !',
                        });
                    },
                    error: function(data) {

                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });

            }

        })
    </script>
    @if (session()->has('notif'))
        <script>
            $(document).ready(function() {
                return $.growl.notice({
                    message: '{{ session()->get('notif') }}',
                    title: 'Success !',
                });
            });
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $(".alert").css('display', 'none');
        });


        $(document).ready(function() {
            $('.editdescription').css('display', 'none');
            $('.editquiz').css('display', 'none');

            $('.edit').click(function() {
                $('.description').css('display', 'none');
                $('.editdescription').css('display', 'block');
            });
            $('.descancel').click(function() {
                $('.description').css('display', 'block');
                $('.editdescription').css('display', 'none');
            });


            $("#desctiption_form").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '
                    }
                });
                $.ajax({
                    url: "{{ url('admin/course/topic/update/description') }}",
                    type: 'POST',
                    data: formData,
                    success: function(data) {
                        $(".alert").css('display', 'none');
                        $('.description').load(document.URL + ' .description');
                        $('.description').css('display', 'block');
                        $('.editdescription').css('display', 'none');
                        $('#model').modal('hide');
                        return $.growl.notice({
                            message: data.success,
                            title: 'Success !',
                        });
                    },
                    error: function(data) {
                        $(".alert").find("ul").html('');
                        $(".alert").css('display', 'block');
                        $.each(data.responseJSON.errors, function(key, value) {
                            $(".alert").find("ul").append('<li>' + value + '</li>');
                        });
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        });
    </script>
<script>
        $('body').on('click', '.delete_material', function() {
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
                        $.ajaxSetup({headers: {'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '}});
                        $.ajax({
                            type: 'DELETE',
                            url: '{{ url("admin/course/media/select/file/delete") }}/' + id,
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

</script>


@endsection
@section('directory')
    <li class="breadcrumb-item "><a><small class="mb-0 breadcrump-tittle active">Course topic settings</small></a></li>
@endsection
