
@extends('layouts.master')
@section('css')
    <style>
        .main-header .header-upper {
        background-color: #2B4763;
        }

    </style>
@endsection
@section('content')    
<section class="login-section">
    <div class="auto-container">
        <div class="login-box">
            
            <!-- Title Box -->
            <div class="title-box">
                <h1 class="h1">Login</h1>
            <x-jet-validation-errors class="mb-4 text-danger" />  
              @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
              @else  @endif
            </div>
            
            <!-- Login Form -->
            <div class="styled-form">
                <div class="form-group text-center">
                    <a class="btn btn-google btn-block " href="{{ url('/redirect') }}"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Sign in with Google</a> 
                    <div  class="or-wrapper pt-3 pb-0"><div  class="or-divider">or</div></div>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input  type="email" name="email" value="{{old('email')}}" required placeholder="Enter Email" >
                    </div>

                 <div class="form-group">
                        <input id="password"  type="password" name="password"  autocomplete="current-password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="check-box">
                                    <input type="checkbox" name="remember" id="type-1"> 
                                    <label for="type-1">Remember me</label>
                                </div>
                                
                            </div>
                            <div class="pull-right">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-block btn-danger"><span class="txt">Login <i class="fa fa-angle-right"></i></span></button>
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
    <script>
        $('#show').mousedown(function(){
            $('#password').attr('type','text');
        });
        $('#show').mouseup(function(){
            $('#password').attr('type','password');
        });
    </script>
@endsection

