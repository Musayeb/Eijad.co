@extends('master')
@section('css')
    
@endsection

@section('content')
    <section class="register-section">
        <div class="auto-container">
            <div class="register-box">
                <!-- Title Box -->
                <div class="title-box">
                    <h3>Entreprenur Second Step Register</h3>
                    <div class="text"><span class="theme_color">Welcome!</span> Please confirm that you are visiting</div>
                </div>
                <div class="styled-form">
                    <form method="post" action="{{ url('/entrepreneur_2step_register') }}">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="form-group col-9">
                                <label>Your role in the business <label class="text-danger">*</label> </label>
                                <select @if ($errors->first('business_role')) style="border:1px solid red" @endif
                                    name="business_role">
                                    <option selected disabled value="">---Select role---</option>
                                    <option>Founder</option>
                                    <option>Co-founder</option>
                                </select>
                                {!! $errors->first('business_role', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group col-9">
                                <label>Date of birth <label class="text-danger">*</label> </label>
                                <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" @if ($errors->first('date_of_birth')) style="border:1px solid red" @endif>
                                {!! $errors->first('date_of_birth', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group col-9">
                                <label>Your Current Status <label class="text-danger">*</label> </label>
                                <select @if ($errors->first('current_status')) style="border:1px solid red" @endif
                                    name="current_status">
                                    <option selected disabled value="">---Select status---</option>
                                    <option @if(old('current_status')=="University student") selected @endif>University student</option>
                                    <option @if(old('current_status')=="University graduate") selected @endif>University graduate</option>
                                    <option @if(old('current_status')=="Part-time/full-time employed") selected @endif>Part-time/full-time employed</option>
                                    <option @if(old('current_status')=="Unemployed") selected @endif>Unemployed</option>
                                </select>
                                {!! $errors->first('current_status', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group col-9">
                                <label>Your highest Education level <label class="text-danger">*</label> </label>
                                <select @if ($errors->first('highest_education_lavel')) style="border:1px solid red" @endif
                                    name="highest_education_lavel">
                                    <option selected disabled value="">---Select education level---</option>
                                    <option @if(old('highest_education_lavel')=="School graduate") selected @endif>School graduate</option>
                                    <option @if(old('highest_education_lavel')=="Bachelors") selected @endif>Bachelors</option>
                                    <option @if(old('highest_education_lavel')=="Masters") selected @endif>Masters</option>
                                    <option @if(old('highest_education_lavel')=="Other") selected @endif>Other</option>
                                </select>
                                {!! $errors->first('highest_education_lavel', '<small class="text-danger">:message</small>') !!}
                            </div>

                            <div class="form-group col-9  ">
                                <label>Job Experience</label>
                                <label class="float-right"><button type="button" class="btn btn-info" data-toggle="modal"
                                        data-target="#myModal">+ Add</button></label>
                                <div>
                                </div>
                            </div>
                            <div class="form-group col-9">
                                <label>Have You Part od the Incobation Program Previosly? <label
                                        class="text-danger">*</label> </label>
                                <select @if ($errors->first('incobation_program')) style="border:1px solid red" @endif
                                    name="incobation_program">
                                    <option selected disabled value="">---Select option ---</option>
                                    <option @if(old('incobation_program')=="Yes") selected @endif>Yes</option>
                                    <option @if(old('incobation_program')=="No") selected @endif>No</option>
                                </select>
                                {!! $errors->first('incobation_program', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="col-9">
                                <label>Your goal joining Eijad virtual incobation program? <label
                                        class="text-danger">*</label> </label>
                                
                               <select @if ($errors->first('incobation_program')) style="border:1px solid red" @endif
                                    name="incobation_program">
                                    <option selected disabled value="">---Select option ---</option>
                                    <option @if(old('incobation_program')=="No") selected @endif>Establishing my business</option>
                                    <option @if(old('incobation_program')=="No") selected @endif>Expanding my business</option>
                                </select>
                                {!! $errors->first('incobation_program', '<small class="text-danger">:message</small>') !!}
                            </div>

                            <div class="form-group col-9">
                                <label>What do you expect from Eijad virtual incobation? <label
                                        class="text-danger">*</label> </label>
                                <input type="text" placeholder="Expact from Eijad" name="expect_from_eijad"
                                    value="{{ old('expect_from_eijad') }}" @if ($errors->first('expect_from_eijad')) style="border:1px solid red" @endif>
                                {!! $errors->first('expect_from_eijad', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group col-9">
                                <label>Any other comments you want us to know about your business?</label>
                                <input type="text" placeholder="Insert your comments" name="comments"
                                    value="{{ old('comments') }}" @if ($errors->first('comments')) style="border:1px solid red" @endif>
                                {!! $errors->first('comments', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group col-9">
                                <button type="submit" class="btn btn-success float-right">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- modals --}}
    <div id="myModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{url('create_experience')}}" >
                    @csrf
                    <div class="modal-header">
                        <p class="modal-title" id="myModalLabel">Job Experience</p>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="styled-form">
                            <div class="form-group ">
                                <label>Field of Experience</label>
                                <input type="text" placeholder="Experience Field " name="experience_field"
                                    value="{{ old('experience_field') }}" @if ($errors->first('experience_field')) style="border:1px solid red" @endif>
                                {!! $errors->first('experience_field', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group ">
                                <label>Position</label>
                                <input type="text" placeholder="Position " name="position" value="{{ old('position') }}"
                                    @if ($errors->first('position')) style="border:1px solid red" @endif>
                                {!! $errors->first('position', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group ">
                                <label>Employere</label>
                                <input type="text" placeholder="Employer " name="employer" value="{{ old('employer') }}"
                                    @if ($errors->first('employer')) style="border:1px solid red" @endif>
                                {!! $errors->first('employer', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="form-group ">
                                <label>Years of experience</label>
                      
                                    <select @if ($errors->first('year_of_experience')) style="border:1px solid red" @endif
                                        name="year_of_experience">
                                        <option selected disabled value="">---Select Experience---</option>
                                        <option>1-3</option>
                                        <option>3-5</option>
                                        <option>5-7</option>
                                        <option>7+</option>
                                    </select>
                                {!! $errors->first('year_of_experience', '<small class="text-danger">:message</small>') !!}
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success waves-effect">Save</button>
                    </div>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


@endsection
@section('jquery')
    
@endsection