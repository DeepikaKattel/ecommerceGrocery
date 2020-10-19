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
                                <a href="#">Login</a>
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
                    <h2 class="bordered">Sign In</h2>
                    <p>Hello, Welcome to your account</p>
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

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
                            <label>{{ __('Password') }}</label>
                            <input type="password" class="le-input" name="password" value="{{ old('password') }}" required>
                            @error('password')
                                <span class="red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div><!-- /.field-row -->

                        <div class="field-row clearfix">
                            <span class="pull-left">
                                <label class="content-color"><input type="checkbox" class="le-checbox auto-width inline"> <span class="bold">Remember me</span></label>
                            </span>
                            <span class="pull-right">
                                <a href="{{ route('password.request') }}" class="content-color bold">{{ __('Forgot Your Password?') }}</a>
                            </span>
                        </div>

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">Log In</button>
                        </div><!-- /.buttons-holder -->
                    </form><!-- /.cf-style-1 -->

                </section><!-- /.sign-in -->
            </div><!-- /.col -->

            <div class="col-md-6">
                <section class="section register inner-left-xs">
                    <h2 class="bordered">Create New Account</h2>
                    <p>Create your own  Easy Shopping Nepal account</p>

                    <div class="buttons-holder">
                        <a class="le-button huge" href="/register">Sign Up</a>
                    </div><!-- /.buttons-holder -->

                    <h2 class="semi-bold outer-top-xs">Sign up today and you'll be able to :</h2>

                    <ul class="list-unstyled list-benefits">
                        <li><i class="fa fa-check primary-color"></i> Speed your way through the checkout</li>
                        <li><i class="fa fa-check primary-color"></i> Track your orders easily</li>
                        <li><i class="fa fa-check primary-color"></i> Keep a record of all your purchases</li>
                    </ul>

                </section><!-- /.register -->

            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= Login : END ========================================= -->
@endsection

