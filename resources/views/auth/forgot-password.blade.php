@extends('layouts.master')
@section('css')
    <style>
        .main-header .header-upper {
        background-color: #2B4763;
    }
/* .submit {
    position: relative;
    display: inline-block;
    font-size: 15px;
    line-height: 30px;
    color: #ffffff;
    padding: 17px 20px 14px;
    font-weight: 400;
    overflow: hidden;
    background: none;
    border-radius: 50px;
    background-color: #ED5154;
    text-transform: capitalize;
    font-family: 'Poppins', sans-serif;
    -webkit-box-shadow: 0 10px 30px rgb(0 171 21 / 10%);
    -moz-box-shadow: 0 10px 30px rgba(0,171,21,0.10);
    -ms-box-shadow: 0 10px 30px rgba(0,171,21,0.10);
    -o-box-shadow: 0 10px 30px rgba(0,171,21,0.10);
    box-shadow: 0 10px 30px rgb(0 171 21 / 10%);
}
.styled-form .form-group .users a {
    position: relative;
    color: #ED5154;
    font-weight: 600;
    text-decoration: underline;
} */

    </style>
@endsection
@section('content')    
<section class="login-section">
    <div class="auto-container">
        <div class="text-center mb-4">
            <img src="{{asset('public/assist/images/logo.png')}}" alt="Logo">
        </div>

        <div class="login-box">
            <!-- Title Box -->
            <div class="title ">
           <span class="mb-3">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</span>
            
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-success">
                    {{ session('status') }}
                </div>
            @endif
            <span class="text-danger"><x-jet-validation-errors class="mb-4" /></span>

            </div>
            
            <!-- Login Form -->
            <div class="styled-form pt-3">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input  type="email" name="email" value="{{old('email')}}" required placeholder="Enter Email" >
                    </div>
                
                    <div class="form-group text-center mt-4">
                        {{-- <button type="submit" class="theme-btn submit" sty><span class="">  {{ __('Email Password Reset Link') }} <i class="fa fa-angle-right"></i></span></button> --}}
                        <button type="submit" class="btn btn-block btn-danger"><span class="txt">Email Password Reset Link <i class="fa fa-angle-right"></i></span></button>

                    </div>
                    <div class="form-group">
                        <div class="users">New User? <a href="{{url('/register')}}">Sign Up</a></div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</section>
@endsection

@section('jquery')

@endsection


