@extends('layouts.app')

@section('content')
<div class="wrapper">
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
                                    <a href="#">About Us</a>
                                </li>
                            </ul>
                        </li><!-- /.breadcrumb-nav-holder -->
                    </ul>
                </nav>
            </div><!-- /.container -->
        </div><!-- /#top-mega-nav -->
        <!-- ========================================= BREADCRUMB : END ========================================= -->
    </div>
    <!-- ========================================= MAIN ========================================= -->
    <main id="about-us">
        <div class="container inner-top-xs inner-bottom-sm" style="border: 1px solid;box-shadow: rgba(0, 0, 0, 0.7) 3px 3px 10px 1px;">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-md-8 col-lg-8 col-sm-6">
                    <section id="who-we-are" class="section m-t-0">
                        <h2 style="text-align: center">{{$about->heading}}</h2>
                        <p>{{$about->message}}</p>
                    </section><!-- /#who-we-are -->
{{--                    <section id="our-goal-and-idea" class="section">--}}
{{--                        <h2>Our Goal and Idea</h2>--}}
{{--                        <p>Donec libero dolor, tincidunt id laoreet vitae, ullamcorper eu tortor. Maecenas pellentesque, dui vitae iaculis mattis, tortor nisi faucibus magna, vitae ultrices lacus purus vitae metus. Ut nec odio facilisis, ultricies nunc eget, fringilla orci. Nulla lobortis sem dapibus, aliquet turpis eu, ornare neque. Sed nec sem diam. Mauris neque purus, malesuada at velit vel, tempus congue nisl. Ut aliquam semper augue hendrerit varius. Fusce pretium tempus volutpat. Vivamus dignissim posuere aliquet. In hac habitasse platea dictumst. </p>--}}
{{--                    </section><!-- /#our-goal-and-idea -->--}}

                </div><!-- /.col -->
{{--                <div class="col-xs-12 col-md-4 col-lg-4 col-sm-6">--}}
{{--                    <section id="our-team">--}}
{{--                        <h2 class="sr-only">Our team</h2>--}}
{{--                        <ul class="team-members list-unstyled">--}}

{{--                            <li class="team-member">--}}
{{--                                <img src="assets/images/team/1.jpg" alt="" class="profile-pic img-responsive">--}}
{{--                                <div class="profile">--}}
{{--                                    <h3>John Snow <small class="designation">CEO/Founder</small></h3>--}}
{{--                                    <ul class="social list-unstyled">--}}
{{--                                        <li>--}}
{{--                                            <a href="http://facebook.com/">--}}
{{--                                                <span class="fa-stack fa-lg">--}}
{{--                                                    <i class="fa fa-circle fa-stack-2x"></i>--}}
{{--                                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>--}}
{{--                                                </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="http://twitter.com/">--}}
{{--                                                <span class="fa-stack fa-lg">--}}
{{--                                                    <i class="fa fa-circle fa-stack-2x"></i>--}}
{{--                                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>--}}
{{--                                                </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="http://linkedin.com/">--}}
{{--                                                <span class="fa-stack fa-lg">--}}
{{--                                                    <i class="fa fa-circle fa-stack-2x"></i>--}}
{{--                                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>--}}
{{--                                                </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div><!-- /.profile -->--}}
{{--                            </li><!-- /.team-member -->--}}

{{--                            <li class="team-member">--}}
{{--                                <img src="assets/images/team/2.jpg" alt="" class="profile-pic img-responsive">--}}
{{--                                <div class="profile">--}}
{{--                                    <h3>Smith John <small class="designation">Support Staff</small></h3>--}}
{{--                                    <ul class="social list-unstyled">--}}
{{--                                        <li>--}}
{{--                                            <a href="http://facebook.com/">--}}
{{--                                                <span class="fa-stack fa-lg">--}}
{{--                                                    <i class="fa fa-circle fa-stack-2x"></i>--}}
{{--                                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>--}}
{{--                                                </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="http://twitter.com/">--}}
{{--                                                <span class="fa-stack fa-lg">--}}
{{--                                                    <i class="fa fa-circle fa-stack-2x"></i>--}}
{{--                                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>--}}
{{--                                                </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="http://linkedin.com/">--}}
{{--                                                <span class="fa-stack fa-lg">--}}
{{--                                                    <i class="fa fa-circle fa-stack-2x"></i>--}}
{{--                                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>--}}
{{--                                                </span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div><!-- /.profile -->--}}
{{--                            </li><!-- /.team-member -->--}}

{{--                        </ul><!-- /.team-members -->--}}
{{--                    </section><!-- #our-team -->--}}

{{--                </div><!-- /.col -->--}}
{{--            </div><!-- /.row -->--}}
{{--        </div><!-- /.container -->--}}

{{--        <section id="what-can-we-do-for-you" class="row light-bg inner-sm">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-3 section m-t-0">--}}
{{--                        <h2>What can we do for you ?</h2>--}}
{{--                        <p>Donec libero dolor, tincidunt id laoreet vitae, ullamcorper eu tortor. Maecenas pellentesque, dui vitae iaculis mattis, tortor nisi faucibus magna, vitae ultrices lacus purus vitae metus.</p>--}}
{{--                    </div><!-- /.section -->--}}

{{--                    <div class="col-md-9">--}}
{{--                        <ul class="services list-unstyled row m-t-35">--}}
{{--                            <li class="col-md-4">--}}
{{--                                <div class="service">--}}
{{--                                    <div class="service-icon primary-bg"><i class="fa fa-truck"></i></div>--}}
{{--                                    <h3>Fast Delivery</h3>--}}
{{--                                    <p>Sed in mi rutrum, mattis eros ut, sagittis orci. Suspendisse vehicula auctor leo, nec egestas tellus fringilla ac integer.</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="col-md-4">--}}
{{--                                <div class="service">--}}
{{--                                    <div class="service-icon primary-bg"><i class="fa fa-life-saver"></i></div>--}}
{{--                                    <h3>Support 24/7</h3>--}}
{{--                                    <p>Sed in mi rutrum, mattis eros ut, sagittis orci. Suspendisse vehicula auctor leo, nec egestas tellus fringilla ac integer.</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="col-md-4">--}}
{{--                                <div class="service">--}}
{{--                                    <div class="service-icon primary-bg"><i class="fa fa-star"></i></div>--}}
{{--                                    <h3>Best Quality</h3>--}}
{{--                                    <p>Sed in mi rutrum, mattis eros ut, sagittis orci. Suspendisse vehicula auctor leo, nec egestas tellus fringilla ac integer.</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul><!-- /.services -->--}}
{{--                    </div>--}}
{{--                </div><!-- /.row -->--}}
{{--            </div><!-- /.container -->--}}
{{--        </section><!-- /#what-can-we-do-for-you -->--}}
    </main><!-- /#aboutUs-us -->
<!-- ========================================= MAIN : END ========================================= -->
</div><!-- /.wrapper -->
@endsection
