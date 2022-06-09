@extends('layouts.master')
@section('css')
<style>
    .main-header .header-upper {
background-color: #2B4763;
}
</style>
@endsection
@section('content')    
<section class="register-section">
    <div class="auto-container">
        <div class="register-box">
            
            <!-- Title Box -->
            <div class="title-box">
                <h2>Register</h2>
            </div>
            
            <!-- Login Form -->
            <div class="styled-form">
                <div class="form-group text-center">
                    <a class="btn btn-google btn-block " href="{{ url('/redirect') }}"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Sign Up with Google</a> 
                    <div  class="or-wrapper pt-3 pb-0"><div  class="or-divider">or</div></div>
                </div>
                <form method="post" action="{{url('/register')}}">
                    @csrf
                    
                    <div class=" clearfix">
                        <!-- Form Group -->
                        <div class="form-group">
                            <input type="text" name="full_name" value="{{old('full_name')}}" @if($errors->first('full_name')) style="border:1px solid red" @endif  placeholder="Full Name" >
                            {!!$errors->first('full_name', '<small class="text-danger">:message</small>')!!}
                        </div>                        
                        <!-- Form Group -->
                        <div class="form-group ">
                            <input type="email" name="email" value="{{old('email')}}" @if($errors->first('email')) style="border:1px solid red" @endif   placeholder="Email address" >
                            {!!$errors->first('email', '<small class="text-danger">:message</small>')!!}
                        </div>
                  

                        <!-- Form Group -->
                        <div class="form-group">
                            <input type="password" name="password"  value="{{old('password')}}"  placeholder="Password" @if($errors->first('password')) style="border:1px solid red" @endif >
                            {!!$errors->first('password', '<small class="text-danger">:message</small>')!!}

                        </div>
                        
                        <!-- Form Group -->
                        <div class="form-group ">
                            <input type="password" name="password_confirmation"   value="{{old('password_confirmation')}}" placeholder="Confirm password" @if($errors->first('password')) style="border:1px solid red" @endif >
                            {!!$errors->first('password_confirmation', '<small class="text-danger">:message</small>')!!}
                       
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <div class="column col-lg-12 col-md-12 col-sm-12">
                                    <div class="check-box">
                                        <input type="checkbox" class="form-control" id="type-4" name="terms" value="{{ old('terms') }}" /> 
                                        <label for="type-4">I agree the user agreement and <a href="privacy.html">Terms &amp; Conditions</a></label>
                                        {!!$errors->first('terms', '<small class="text-danger">:message</small>')!!}
                                    </div>
                                </div>
                            </div>

                        </div>
                 
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-block btn-danger"><span class="txt">Sign Up  <i class="fa fa-angle-right"></i></span></button>
                        </div>
                        
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="users">Already have an account? <a href="{{url('/login')}}">Sign In</a></div>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
</section>
@endsection
@section('jquery')



@endsection