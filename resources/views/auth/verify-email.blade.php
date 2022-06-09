@extends('layouts.master')
@section('css')

@endsection
@section('content')
    <div class="sidebar-page-container" style="padding: 100px 0px 0px 0px">

    </div>
    <section class="login-section">
		<div class="auto-container">
            <div class="p-2">
                <div class="row justify-content-center">
                    <div class="col-md-6 card pt-4 pb-4">
                        <h5 class="mb-3" style="color:#252841;font-weight:700;text-align: center">Email Verification Request !</h5>
                        <div class="mb-4" style="color:gray">
                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                        </div>
        
                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-sm text-green" style="color:green">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif
        
                        <div class="mt-4 d-flex text-center justify-content-between">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
        
                                <div>
                                    <button type="submit" class="btn btn-secondary">
                                        {{ __('Resend Verification Email') }}
                                    </button>
                                </div>
                            </form>
        
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Logout') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
        
            </div>
		</div>
	</section>
   
@endsection
@section('jquery')

@endsection
