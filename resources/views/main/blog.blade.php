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
                                        <a href="#">Blog</a>
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
<main id="blog" class="inner-bottom-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="posts sidemeta">
                    <div class="post format-image">
                        <div class="date-wrapper">
                            <div class="date">
                                <span class="month">Jul</span>
                                <span class="day">14</span>
                            </div>
                        </div><!-- /.date-wrapper -->
                        <div class="format-wrapper">
                            <a href="#"><i class="fa fa-image"></i></a>
                        </div><!-- /.format-wrapper -->
                        <div class="post-content">
                            <div class="post-media">
                                <img src="assets/images/blog-post/blog-post-image.jpg" alt="">
                            </div>
                            <h2 class="post-title">A Beautiful Day &ndash; Standard Post with Image</h2>
                            <ul class="meta">
                                <li>Posted By : Admin</li>
                                <li><a href="#">OffTopic</a>, <a href="#">Announcements</a></li>
                                <li><a href="#">3 Comments</a></li>
                            </ul><!-- /.meta -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus mollis et. Praesent a mi sem, sed vulputate metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.</p>
                            <a href="blog-post.html" class="le-button huge">Read More</a>
                        </div><!-- /.post-content -->
                    </div><!-- /.post -->

                    <div class="post format-audio">
                        <div class="date-wrapper">
                            <div class="date">
                                <span class="month">Jul</span>
                                <span class="day">12</span>
                            </div>
                        </div><!-- /.date-wrapper -->
                        <div class="format-wrapper">
                            <a href="#"><i class="fa fa-music"></i></a>
                        </div><!-- /.format-wrapper -->
                        <div class="post-content">
                            <div class="post-media">
                                <iframe height="166" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/71631296&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                            </div>
                            <h2 class="post-title">Listen to your Media &ndash; Standard Post with Audio</h2>
                            <ul class="meta">
                                <li>Posted By : Admin</li>
                                <li><a href="#">OffTopic</a>, <a href="#">Announcements</a></li>
                                <li><a href="#">3 Comments</a></li>
                            </ul><!-- /.meta -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus mollis et. Praesent a mi sem, sed vulputate metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.</p>
                            <a href="blog-post.html" class="le-button huge">Read More</a>
                        </div><!-- /.post-content -->
                    </div><!-- /.post -->

{{--                    <div class="post format-video">--}}
{{--                        <div class="date-wrapper">--}}
{{--                            <div class="date">--}}
{{--                                <span class="month">Jul</span>--}}
{{--                                <span class="day">09</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- /.date-wrapper -->--}}
{{--                        <div class="format-wrapper">--}}
{{--                            <a href="#"><i class="fa fa-film"></i></a>--}}
{{--                        </div><!-- /.format-wrapper -->--}}
{{--                        <div class="post-content">--}}
{{--                            <div class="post-media">--}}
{{--                                <iframe src="//player.vimeo.com/video/40259368?title=0&amp;byline=0&amp;color=c9ff23" height="467"></iframe>--}}
{{--                            </div>--}}
{{--                            <h2 class="post-title">Introduction to CSS3 &ndash; Standard Post with Video</h2>--}}
{{--                            <ul class="meta">--}}
{{--                                <li>Posted By : Admin</li>--}}
{{--                                <li><a href="#">OffTopic</a>, <a href="#">Announcements</a></li>--}}
{{--                                <li><a href="#">3 Comments</a></li>--}}
{{--                            </ul><!-- /.meta -->--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus mollis et. Praesent a mi sem, sed vulputate metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.</p>--}}
{{--                            <a href="blog-post.html" class="le-button huge">Read More</a>--}}
{{--                        </div><!-- /.post-content -->--}}
{{--                    </div><!-- /.post -->--}}

{{--                    <div class="post format-standard">--}}
{{--                        <div class="date-wrapper">--}}
{{--                            <div class="date">--}}
{{--                                <span class="month">Jul</span>--}}
{{--                                <span class="day">07</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- /.date-wrapper -->--}}
{{--                        <div class="format-wrapper">--}}
{{--                            <a href="#"><i class="fa fa-paragraph"></i></a>--}}
{{--                        </div><!-- /.format-wrapper -->--}}
{{--                        <div class="post-content">--}}
{{--                            <h2 class="post-title">Announcement &ndash; Standard Post without Image</h2>--}}
{{--                            <ul class="meta">--}}
{{--                                <li>Posted By : Admin</li>--}}
{{--                                <li><a href="#">OffTopic</a>, <a href="#">Announcements</a></li>--}}
{{--                                <li><a href="#">3 Comments</a></li>--}}
{{--                            </ul><!-- /.meta -->--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus mollis et. Praesent a mi sem, sed vulputate metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.</p>--}}
{{--                            <a href="blog-post.html" class="le-button huge">Read More</a>--}}
{{--                        </div><!-- /.post-content -->--}}
{{--                    </div><!-- /.post -->--}}

{{--                    <div class="post format-quote">--}}
{{--                        <div class="date-wrapper">--}}
{{--                            <div class="date">--}}
{{--                                <span class="month">Jul</span>--}}
{{--                                <span class="day">03</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- /.date-wrapper -->--}}
{{--                        <div class="format-wrapper">--}}
{{--                            <a href="#"><i class="fa fa-quote-left"></i></a>--}}
{{--                        </div><!-- /.format-wrapper -->--}}
{{--                        <div class="post-content">--}}
{{--                            <blockquote>--}}
{{--                                <p>Been putting off creating my electronics store for several years, then I found Media Center and aboutUs 30 minutes later ... I have an awesome looking electronics store. Totally love it – keep up the good work!</p>--}}
{{--                                <footer><cite>Bill Jobs</cite></footer>--}}
{{--                            </blockquote>--}}
{{--                        </div><!-- /.post-content -->--}}
{{--                    </div><!-- /.post -->--}}

{{--                    <div class="post format-link">--}}
{{--                        <div class="date-wrapper">--}}
{{--                            <div class="date">--}}
{{--                                <span class="month">Jul</span>--}}
{{--                                <span class="day">01</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- /.date-wrapper -->--}}
{{--                        <div class="format-wrapper">--}}
{{--                            <a href="#"><i class="fa fa-link"></i></a>--}}
{{--                        </div><!-- /.format-wrapper -->--}}
{{--                        <div class="post-content">--}}
{{--                            <h2 class="post-title">--}}
{{--                                <a href="http://demo.transvelo.com/media-center" target="_blank">Super-Awesome E-Commerce Electronics Store Template</a>--}}
{{--                            </h2>--}}
{{--                            <a href="http://demo.transvelo.com/media-center" target="_blank">http://demo.transvelo.com/media-center</a>--}}
{{--                        </div><!-- /.post-content -->--}}
{{--                    </div><!-- /.post -->--}}
                </div><!-- /.posts -->
                <hr/>
                <ul class="pagination blog-pagination">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">Next</a></li>
                </ul><!-- /.pagination -->
            </div><!-- /.col -->

            <div class="col-md-3">
                <aside class="sidebar blog-sidebar">
                    <div class="widget clearfix">
                        <div class="body">
                            <form role="search" class="search-form">
                                <div class="form-group">
                                    <label class="sr-only" for="page-search">Type your search here</label>
                                    <input id="page-search" class="search-input form-control" type="search" placeholder="Enter Keywords...">
                                </div>
                                <button class="page-search-button">
                                                <span class="fa fa-search">
                                                    <span class="sr-only">Search</span>
                                                </span>
                                </button><!-- /.page-search-button-->
                            </form><!-- /.search-form -->
                        </div>
                    </div><!-- /.widget -->

                    <div class="widget">
                        <h4>About Blog</h4>
                        <div class="body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. </p>
                        </div>
                    </div><!-- /.widget -->

                    <div class="widget">
                        <h4>Categories</h4>
                        <div class="body">
                            <ul class="le-links">
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Entertainment</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Stories</a></li>
                                <li><a href="#">Travel</a></li>
                            </ul><!-- /.le-links -->
                        </div>
                    </div><!-- /.widget -->

                    <div class="widget">
                        <div class="simple-banner">
                            <a href="#"><img alt="" class="img-responsive" src="assets/images/blank.gif" data-echo="assets/images/banners/banner-simple.jpg" /></a>
                        </div>
                    </div>

                    <!-- ========================================= RECENT POST ========================================= -->
                    <div class="widget">
                        <h4>Recent Posts</h4>
                        <div class="body">
                            <ul class="recent-post-list">
                                <li class="sidebar-recent-post-item">
                                    <div class="media">
                                        <a href="#" class="thumb-holder pull-left">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/recent-posts/1.jpg" />
                                        </a>
                                        <div class="media-body">
                                            <h5><a href="#">Coffee Time in Office </a></h5>
                                            <div class="posted-date">July 12 2014</div>
                                        </div>
                                    </div>
                                </li><!-- /.sidebar-recent-post-item -->

                                <li class="sidebar-recent-post-item">
                                    <div class="media">
                                        <a href="#" class="thumb-holder pull-left">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/recent-posts/2.jpg" />
                                        </a>
                                        <div class="media-body">
                                            <h5><a href="#">Lets Meet The Whole Team of MediaCenter </a></h5>
                                            <div class="posted-date">July 10 2014</div>
                                        </div>
                                    </div>
                                </li><!-- /.sidebar-recent-post-item -->

                                <li class="sidebar-recent-post-item">
                                    <div class="media">
                                        <a href="#" class="thumb-holder pull-left">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/recent-posts/3.jpg" />
                                        </a>
                                        <div class="media-body">
                                            <h5><a href="#">The Best Wordpress Support 24/7 </a></h5>
                                            <div class="posted-date">July 06 2014</div>
                                        </div>
                                    </div>
                                </li><!-- /.sidebar-recent-post-item -->

                                <li class="sidebar-recent-post-item">
                                    <div class="media">
                                        <a href="#" class="thumb-holder pull-left">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/recent-posts/4.jpg" />
                                        </a>
                                        <div class="media-body">
                                            <h5><a href="#">Gallery Post with Supported Animation</a></h5>
                                            <div class="posted-date">July 04 2014</div>
                                        </div>
                                    </div>
                                </li><!-- /.sidebar-recent-post-item -->

                                <li class="sidebar-recent-post-item">
                                    <div class="media">
                                        <a href="#" class="thumb-holder pull-left">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/recent-posts/5.jpg" />
                                        </a>
                                        <div class="media-body">
                                            <h5><a href="#">Sweet memories in our Store </a></h5>
                                            <div class="posted-date">July 01 2014</div>
                                        </div>
                                    </div>
                                </li><!-- /.sidebar-recent-post-item -->

                            </ul><!-- /.recent-post-list -->
                        </div><!-- /.body -->
                    </div><!-- /.widget -->
                    <!-- ========================================= RECENT POST : END ========================================= -->

{{--                    <div class="widget">--}}
{{--                        <h4>Popular Tags</h4>--}}
{{--                        <div class="body">--}}
{{--                            <div class="tagcloud">--}}
{{--                                <a style="font-size: 12pt;" href="#">Beautiful</a>--}}
{{--                                <a style="font-size: 20pt;" href="#">Media Center</a>--}}
{{--                                <a style="font-size: 10pt;" href="#">Quality</a>--}}
{{--                                <a style="font-size: 14pt;" href="#">Website</a>--}}
{{--                                <a style="font-size: 16pt;" href="#">Template</a>--}}
{{--                                <a style="font-size: 12pt;" href="#">Professional</a>--}}
{{--                                <a style="font-size: 20pt;" href="#">Design</a>--}}
{{--                                <a style="font-size: 10pt;" href="#">Multipurpose</a>--}}
{{--                                <a style="font-size: 16pt;" href="#">Portfolio</a>--}}
{{--                                <a style="font-size: 10pt;" href="#">Customization</a>--}}
{{--                                <a style="font-size: 19pt;" href="#">Bootstrap</a>--}}
{{--                                <a style="font-size: 9pt;" href="#">Mobile</a>--}}
{{--                                <a style="font-size: 14pt;" href="#">Features</a>--}}
{{--                                <a style="font-size: 9pt;" href="#">Styles</a>--}}
{{--                                <a style="font-size: 13pt;" href="#">Responsive</a>--}}
{{--                                <a style="font-size: 9pt;" href="#">Font Icons</a>--}}
{{--                                <a style="font-size: 22pt;" href="#">Love</a>--}}
{{--                                <a style="font-size: 10pt;" href="#">Digital</a>--}}
{{--                                <a style="font-size: 18pt;" href="#">Awesome</a>--}}
{{--                                <a style="font-size: 12pt;" href="#">Passion</a>--}}
{{--                                <a style="font-size: 13pt;" href="#">Typography</a>--}}
{{--                                <a style="font-size: 13pt;" href="#">Clean</a>--}}
{{--                                <a style="font-size: 9pt;" href="#">Easy to use</a>--}}
{{--                                <a style="font-size: 20pt;" href="#">Buy it</a>--}}
{{--                                <a style="font-size: 12pt;" href="#">Success</a>--}}
{{--                            </div><!-- /.tagcloud -->--}}
{{--                        </div><!-- /.body -->--}}
{{--                    </div><!-- /.widget -->--}}
                </aside><!-- /.sidebar .blog-sidebar -->
            </div>
        </div><!-- /.row -->

    </div><!-- /.container -->
</main><!-- /.inner-bottom-xs -->
<!-- ========================================= MAIN : MAIN ========================================= -->
    </div>
@endsection
