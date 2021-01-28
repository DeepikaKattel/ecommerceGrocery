@extends('layouts.app')

@section('content')

<div class="animate-dropdown">
    <!-- ========================================= BREADCRUMB ========================================= -->
    <div id="top-mega-nav">
        <div class="container">
            <nav>
                <ul class="inline">
                    <li class="dropdown le-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-list"></i> shop by department
                        </a>
                        <ul class="dropdown-menu" id="departmentList">

                        </ul>
                    </li>

                    <li class="breadcrumb-nav-holder">
                        <ul>
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item current gray">
                                <a href="#">Resgister</a>
                            </li>
                        </ul>
                    </li><!-- /.breadcrumb-nav-holder -->
                </ul>
            </nav>
        </div><!-- /.container -->
    </div><!-- /#top-mega-nav -->
    <!-- ========================================= BREADCRUMB : END ========================================= -->
</div>
<!-- ========================================= Login ========================================= -->
<main id="authentication" class="inner-bottom-md">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <section class="section sign-in inner-right-xs">
                    <h2 class="bordered">Register</h2>
                    <p>Create Your new Account</p>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="field-row">
                            <label>{{ __('Name') }}</label>
                            <input type="text" class="le-input" name="name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                            <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div><!-- /.field-row -->

                        <div class="field-row">
                            <label>{{ __('E-Mail Address') }}</label>
                            <input type="text" class="le-input" name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                            <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div><!-- /.field-row -->
                        <div class="field-row">
                            <label>{{ __('House Number') }}</label>
                            <input type="text" class="le-input" name="house_number" autofocus>
                            @error('house_number')
                            <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div><!-- /.field-row -->

                        <div class="field-row">
                            <label>{{ __('Password') }}</label>
                            <input type="password" class="le-input" name="password" value="{{ old('password') }}" required>
                            @error('password')
                                <span class="red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div><!-- /.field-row -->

                        <div class="field-row">
                            <label>{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="le-input" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="field-row clearfix">
                            <span class="pull-left">
                                <label class="content-color"><input type="checkbox" class="le-checbox auto-width inline"> <span class="bold">Remember me</span></label>
                            </span>
                            <span class="pull-right">
                                <a href="{{ route('password.request') }}" class="content-color bold">{{ __('Forgot Your Password?') }}</a>
                            </span>
                        </div>

                        <div class="buttons-holder outer-top-xs">
                            <button type="submit" class="le-button huge">Log In</button>
                        </div><!-- /.buttons-holder -->
                    </form><!-- /.cf-style-1 -->

                </section><!-- /.sign-in -->
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= Login : END ========================================= -->
@endsection
