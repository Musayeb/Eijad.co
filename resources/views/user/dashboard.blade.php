@extends('layouts.master')
@section('css')
    <style>
        /* .main-background{
        background: #f0f5fb;
    } */
        ul .list_item {
            padding: 8px;
        }

        a {
            color: #080808;
        }

        .row {
            min-height: 100% !important;
        }

        .active {
            background-color: #252841;
            color: #ffffff;
        }

        .preview {
            overflow: hidden;
            width: 160px;
            height: 160px;
            margin: 10px;
            border: 1px solid red;
        }

        .cropper-container {
            widows: 500px !important;
        }
      
        .main-header .header-upper {
            background-color: #2B4763;
        }


    </style>
    <link href="{{ asset('public/assets/crop/cropper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/plugins/notify/css/jquery.growl.css') }}" rel="stylesheet" />


@endsection
@section('content')
    @php
    $country = DB::table('country')->get();

    @endphp
    <div class="sidebar-page-container bg-white" style="padding: 100px 0px 0px 0px"></div>
    <div class="auto-container">
        <div class="row border m-3">
            <aside class="col-md-3 p-0 border-right">
                <div class="box mb-3 bg-white shadow-sm rounded profile-box  h-100">
                    <div class="py-4 px-3  text-center">
                        <a href="javascript:void();">
                            <label data-toggle="tooltip" title="" data-original-title="Select Profile Photo">
                                <div class="form">
                                    @if (empty(Auth::user()->profile_photo_path))
                                        <img src="{{ asset('public/img/photo.png') }}" alt="photo"
                                            class="img-fluid rounded-circle" style="height:120px;width:115px">
                                    @else
                                        <img src="{{ url('storage/app') }}/{{ Auth::user()->profile_photo_path }}"
                                            alt="photo" class="img-fluid rounded-circle" style="height:120px;width:115px">
                                    @endif
                                </div>
                            </label>
                        </a>
                        <h5 class="font-weight-bold text-dark  mt-1">{{ Auth::user()->name }}</h5>
                    </div>

                    <div class="options">
                        <ul class="ml-4 mr-4">
                            <a href="#" data-target="PersonalInfo" tabindex="1" class="tab" id="p_info"
                                data-detail="Add information about yourself" data-title="Personal Information">
                                <li class="list_item"> Personal Information</li>
                            </a>
                            <a href="#" data-target="businessInfo" tabindex="1" class="tab" id="b_info"
                                data-detail="Add information about your business" data-title="Business Information">
                                <li class="list_item"> Business Information</li>
                            </a>
                            <a href="#" data-target="photo" class="tab" tabindex="1" id="photo"
                                data-detail="Add a nice photo of yourself for your profile" data-title="Photo">
                                <li class="list_item"> Photo</li>
                            </a>
                            <a href="#" data-target="account" class="tab" tabindex="1" id="account_tab"
                                data-detail="Edit your account settings and change your password here."
                                data-title="Account">
                                <li class="list_item"> Account</li>
                            </a>
                            <a href="#" data-target="closeaccount" class="tab" tabindex="1"
                                data-detail="Close your account permanently." data-title="Close Account">
                                <li class="list_item"> Close Account</li>
                            </a>

                        </ul>

                    </div>

                </div>
            </aside>
            <div class="col-lg-9 h-100  p-0">
                <div class="border text-center" style="padding-top:15px;padding-bottom:15px">
                    <h4 id="page_title"></h4>
                    <h6 id="page_desc"></h6>
                </div>
                <div class="content" id="content" style="min-height:400px !important">
                    <div class="card d-none PersonalInfo tabdetail">
                        <div class="p-5">
                            <p>Basics</p>
                            <form action="{{ url('store-info-personal') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="full_name" class="form-control" @if ($errors->first('full_name')) style="border:1px solid red" @endif
                                        placeholder="Full Name" value="{{ Auth::user()->name }}">
                                    {!! $errors->first('full_name', '<small class="text-danger">:message</small>') !!}

                                </div>

                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="number" value="{{ $ent->phone_number }}" name="phone_number" @if ($errors->first('phone_number')) style="border:1px solid red" @endif
                                        class="form-control" placeholder="Phone Number">
                                    {!! $errors->first('phone_number', '<small class="text-danger">:message</small>') !!}
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <select name="country" class="form-control" @if ($errors->first('country')) style="border:1px solid red" @endif>
                                        <option value="" selected disabled>Select</option>
                                        @foreach ($country as $i)
                                            <option value="{{ $i->country_name }}" @if (old('country') == $i->country_name) selected @endif @if ($ent->country == $i->country_name) selected
                                        @endif> {{ $i->country_name }}</option>
                                        @endforeach
                                    </select>
                                    {!! $errors->first('country', '<small class="text-danger">:message</small>') !!}

                                </div>
                                <div class="form-group">
                                    <label>Provinces</label>
                                    <input type="text" name="province" class="form-control" value="{{ $ent->province }}"
                                        placeholder="Province" @if ($errors->first('province')) style="border:1px solid red" @endif>
                                    {!! $errors->first('province', '<small class="text-danger">:message</small>') !!}
                                </div>

                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="gender" class="form-control" @if ($errors->first('gender')) style="border:1px solid red" @endif>
                                        <option value="" selected disabled>Select</option>
                                        <option value="Male" @if (old('gender') == 'Male') selected @endif @if ($ent->gender == 'Male') selected @endif>Male
                                        </option>
                                        <option value="Female" @if (old('gender') == 'Female') selected @endif @if ($ent->gender == 'Female') selected @endif
                                            >Female</option>
                                        <option value="Rather not say" @if (old('gender') == 'Rather not say') selected @endif @if ($ent->gender == 'Rather not say')
                                            selected @endif> Rather not say</option>
                                        <option value="Other" @if (old('gender') == 'Other') selected @endif @if ($ent->gender == 'Other') selected @endif>Other
                                        </option>
                                    </select>
                                    {!! $errors->first('gender', '<small class="text-danger">:message</small>') !!}
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" name="dob" class="form-control" value="{{ $ent->dob }}" @if ($errors->first('dob')) style="border:1px solid red" @endif>
                                    {!! $errors->first('dob', '<small class="text-danger">:message</small>') !!}
                                </div>
                                <div class="text-right ">
                                    <button type="submit" class="btn btn-secondary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card d-none businessInfo tabdetail">
                        <div class="p-5">
                            <p>Business Information</p>
                            <form action="{{ url('store-business-info') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Your role in the business</label>
                                    <select name="business_role" class="form-control" @if ($errors->first('business_role')) style="border:1px solid red" @endif>
                                        <option value="" selected disabled>Select</option>
                                        <option @if ($ent->business_role == 'Founder') selected @endif>Founder</option>
                                        <option @if ($ent->business_role == 'Co-Founder') selected @endif>Co-Founder</option>
                                        <option @if ($ent->business_role == 'CEO') selected @endif>>CEO</option>
                                        <option @if ($ent->business_role == 'Chief Financial Officer') selected @endif>>Chief Financial Officer</option>
                                        <option @if ($ent->business_role == 'Partner') selected @endif>Partner</option>
                                        <option @if ($ent->business_role == 'Advisor') selected @endif>Advisor</option>
                                    </select>
                                    {!! $errors->first('business_role', '<small class="text-danger">:message</small>') !!}
                                </div>
                                <div class="form-group">
                                    <label>Your current status</label>
                                    <select name="current_status" class="form-control" @if ($errors->first('current_status')) style="border:1px solid red" @endif>
                                        <option value="" selected disabled>Select</option>
                                        <option @if ($ent->current_status == 'University student') selected @endif>University student</option>
                                        <option @if ($ent->current_status == 'University graduate') selected @endif>University graduate</option>
                                        <option @if ($ent->current_status == 'Part-time/full-time employed') selected @endif>Part-time/full-time employed</option>
                                        <option @if ($ent->current_status == 'Unemployed') selected @endif>Unemployed</option>
                                    </select>
                                    {!! $errors->first('current_status', '<small class="text-danger">:message</small>') !!}

                                </div>
                                <div class="form-group">
                                    <label>Your highest education level</label>
                                    <select name="education_level" class="form-control" @if ($errors->first('education_level')) style="border:1px solid red" @endif>
                                        <option value="" selected disabled>Select</option>
                                        <option @if ($ent->education_level == 'School graduate') selected @endif>School graduate</option>
                                        <option @if ($ent->education_level == 'Bachelors') selected @endif>Bachelors</option>
                                        <option @if ($ent->education_level == 'Masters') selected @endif>Masters</option>
                                        <option @if ($ent->education_level == 'Other') selected @endif>Other</option>
                                    </select>
                                    {!! $errors->first('education_level', '<small class="text-danger">:message</small>') !!}
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label>Last Job experience</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Field of experience</label>
                                                <input type="text" name="field_of_experince" class="form-control"
                                                    placeholder="Enter field of experience"
                                                    value="{{ $ent->field_of_experince }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Employer</label>
                                                <input type="text" name="employer" class="form-control"
                                                    placeholder="Enter Employer" value="{{ $ent->employer }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Position</label>
                                                <input type="text" name="position" class="form-control"
                                                    placeholder="Enter Position" value="{{ $ent->position }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Years of experience</label>
                                                <input type="number" name="years_of_experience" min="0" class="form-control"
                                                    placeholder="Enter Years of Exerience"
                                                    value="{{ $ent->year_of_expirence }}">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <label>Have you been part of the incubation program previously ?</label>
                                    <select name="incubation_program" class="form-control" @if ($errors->first('incubation_program')) style="border:1px solid red" @endif>
                                        <option value="" selected disabled>Select</option>
                                        <option @if ($ent->incubation_program == 'Yes') selected @endif>Yes</option>
                                        <option @if ($ent->incubation_program == 'No') selected @endif>No</option>
                                    </select>
                                    {!! $errors->first('incubation_program', '<small class="text-danger">:message</small>') !!}
                                </div>
                                <div class="form-group">
                                    <label>Your goal behind joining Eijad virtual incubation program?</label>
                                    <select name="goal_of_join" class="form-control" @if ($errors->first('goal_of_join')) style="border:1px solid red" @endif>
                                        <option value="" selected disabled>Select</option>
                                        <option value="Establishing my business" @if ($ent->goal_of_join == 'Establishing my business') selected @endif> Establishing my business</option>
                                        <option value="Expanding my business" @if ($ent->goal_of_join == 'Expanding my business') selected @endif> Expanding my business </option>
                                    </select>
                                    {!! $errors->first('goal_of_join', '<small class="text-danger">:message</small>') !!}

                                </div>
                                <div class="form-group">
                                    <label>How did you hear about us?</label>
                                    <select name="hear_about_us" class="form-control" @if ($errors->first('hear_about_us')) style="border:1px solid red" @endif>
                                        <option value="" selected disabled>Select</option>
                                        <option value="Social Media" @if ($ent->how_did_hear_about_us == 'Social Media') selected @endif> Social Media</option>
                                        <option value="Search Engine" @if ($ent->how_did_hear_about_us == 'Search Engine') selected @endif> Search Engine</option>
                                        <option value="Incubation Programs" @if ($ent->how_did_hear_about_us == 'Incubation Programs') selected @endif> Incubation Programs</option>
                                        <option value="Events" @if ($ent->how_did_hear_about_us == 'Events') selected @endif> Events</option>
                                        <option value="Referred By Friends" @if ($ent->how_did_hear_about_us == 'Referred By Friends') selected @endif>Referred By Friends</option>
                                    </select>
                                    {!! $errors->first('hear_about_us', '<small class="text-danger">:message</small>') !!}
                                </div>
                                <hr>

                                <div class="text-right ">
                                    <button type="submit" class="btn btn-secondary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card d-none photo tabdetail">
                        <div class="p-5">
                            <p class="ml-5">Image Preview</p>
                            <div class="image-upload-preview text-center ml-5 mr-5 p-4"
                                style="border:1px solid rgb(61, 59, 59);">
                                <div class="p-2 " style="background: #e5e5e9">
                                    @if (empty(Auth::user()->profile_photo_path))
                                        <img src="{{ asset('public/img/photo.png') }}" alt="photo">

                                    @else
                                        <img src="{{ url('storage/app') }}/{{ Auth::user()->profile_photo_path }}"
                                            alt="photo">
                                    @endif
                                </div>
                            </div>
                            <form action="">
                                <div class="form-group ml-5 mr-5 mt-1">
                                    <label>Add / Change Image:</label>
                                    <input type="file" name="image" class="form-control image" accept="image/*">
                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="card d-none account tabdetail">
                        <div class="p-5">
                            <div class="form-group">
                                <div class="d-flex">
                                    <div class=" border p-1" style="width:93%">
                                        Your email address is <strong>{{ Auth::user()->email }}</strong>
                                    </div>
                                    <div class=" border p-1" style="width:7%">
                                        <button class="btn btn-sucess" data-target="#modal_email" data-toggle="modal"><i
                                                class="fa fa-pencil"></i></button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <form action="{{ url('change_password') }}" method="post">
                                @csrf
                                <div class="form-group  mt-4">
                                    <label>Password</label>
                                    <input type="password" name="current_password" class="form-control"
                                        placeholder="Enter Current Password" @if ($errors->first('current_password')) style="border:1px solid red" @endif>
                                    {!! $errors->first('current_password', '<small class="text-danger">:message</small>') !!}

                                    <input type="password" name="new_password" class="form-control mt-3"
                                        placeholder="Enter New Password" @if ($errors->first('new_password')) style="border:1px solid red" @endif>

                                    {!! $errors->first('new_password', '<small class="text-danger">:message</small>') !!}
                                    <input type="password" name="confirm_password" class="form-control mt-3"
                                        placeholder="Re-type New Password" @if ($errors->first('new_password')) style="border:1px solid red" @endif>
                                    {!! $errors->first('confirm_password', '<small class="text-danger">:message</small>') !!}

                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-secondary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card d-none closeaccount tabdetail">
                        <div class="p-5">
                            <p>Close Your Account</p>
                            <p><strong>Warning:</strong> If you close your account, you will be unsubscribed from all your 0
                                courses, and will lose access forever.</p>
                            <button class="btn btn-secondary">Close Account</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    {{-- modals --}}
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Crop image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row p-4">
                            <div class="col-md-8 p-0">
                                <!--  default image where we will set the src via jquery-->
                                <img id="image">
                            </div>
                            <div class="col-md-4 p-0">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_email" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Change Your Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ url('change_email_address') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter email"
                                value="{{ Auth::user()->email }}" @if ($errors->first('email')) style="border:1px solid red" @endif />
                            {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}

                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Enter your password"
                                @if ($errors->first('password')) style="border:1px solid red" @endif />
                            {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end --}}
@endsection


@section('jquery')
    <script src="{{ asset('public/assets/crop/cropper.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/notify/js/jquery.growl.js') }}"></script>
    @if (count($errors) == 0)
    <script>
    $(document).ready(function() {
        $('.tab').first().click();
    });
        </script>
    @endif

    @if (session()->has('notif'))
        <script>
            $(document).ready(function() {
                $.growl.notice({
                    message: '{{ session()->get('notif') }}',
                    title: 'Success !',
                });
            });
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            $(document).ready(function() {
                $.growl.error({
                    message: '{{ session()->get('error') }}',
                    title: 'Error!',
                });
            });
        </script>
    @endif

    @if ($errors->has('email') || $errors->has('password'))
        <script>
            $(document).ready(function() {
                $('#account_tab').click();
                $('#modal_email').modal({
                    show: true
                });
            });
        </script>
    @endif
    @if ($errors->has('current_password') || $errors->has('new_password')||$errors->has('confirm_password'))
    <script>
        $(document).ready(function() {
            $('#account_tab').click();
        });
    </script>
@endif

    @if ($errors->has('full_name') || $errors->has('phone_number')|| $errors->has('country')|| $errors->has('province')|| $errors->has('gender') || $errors->has('dob'))
        <script>
            $(document).ready(function() {
                $('#p_info').click();
            });
        </script>
    @endif

    @if ($errors->has('business_role') || $errors->has('current_status')|| $errors->has('education_level')|| $errors->has('incubation_program')|| $errors->has('goal_of_join') || $errors->has('hear_about_us'))
        <script>
            $(document).ready(function() {
                $('#b_info').click();
            });
        </script>
    @endif

    @if (session()->has('personal'))
    <script>
        $(document).ready(function() {
            $('#p_info').click();
        });
    </script>
    @endif
    
    
    
    
    @if (session()->has('busniess'))
    <script>
        $(document).ready(function() {
            $('#b_info').click();
        });
    </script>
    @endif

    @if (session()->has('password'))
    <script>
        $(document).ready(function() {
            $('#account_tab').click();
        });
    </script>
    @endif



    
    
    
    







    <script>
        $('body').on('click', '.tab', function() {
            $('.list_item').removeClass("active");
            $('.tabdetail').addClass('d-none');
            var data = $(this).attr('data-target');
            $('.' + data).removeClass('d-none');
            $(this).find("li").addClass("active");
            $('#page_title').html($(this).attr('data-title'));
            $('#page_desc').html($(this).attr('data-detail'));

        });
    </script>
    {{-- image crop --}}
    <script>
        var bs_modal = $('#modal');
        var image = document.getElementById('image');
        var cropper, reader, file;

        $("body").on("change", ".image", function(e) {
            var files = e.target.files;
            var done = function(url) {
                image.src = url;
                bs_modal.modal('show');
            };


            if (files && files.length > 0) {
                file = files[0];

                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function(e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });

        bs_modal.on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 3,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function() {
            cropper.destroy();
            cropper = null;
        });

        $("#crop").click(function() {
            canvas = cropper.getCroppedCanvas({
                width: 160,
                height: 160,
            });

            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    var base64data = reader.result;
                    var url = "{{ url('avatar-change') }}";
                    $.ajaxSetup({headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"}});
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: url,
                        data: {
                            image: base64data
                        },
                        success: function(data) {
                            $.growl.notice({
                            message: data.success,
                            title: 'Success !',
                        });
                            bs_modal.modal('hide');
                        }
                    });
                };
            });
        });
    </script>


@endsection
