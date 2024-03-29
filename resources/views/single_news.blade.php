@extends('master')

@section('title', 'Single news ')

@push('css')
  <link rel="stylesheet" href="{{ asset('default/css/animate.css')}}">
@endpush

@push('hanldejs')
    <script>
      /* Loading Js*/
    $(window).on('load', function() {
      setTimeout(function () {
        $(".preloader").delay(700).fadeOut(700).addClass('loaded');
      }, 800);
    });
    </script>
@endpush


@section('content')

    <!-- Page Title Start -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Lifestyle</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page title end -->

    <!-- 1rd Block Wrapper Start -->
    <section class="utf_block_wrapper">
        <div class="container">
            <div class="row">
              <div class="post-media post-video">
                <div class="embed-responsive"> 
                  <iframe src="https://www.youtube.com/watch?v=ZpNXsJlVewY" width="500" height="281" allowfullscreen=""></iframe>
                </div>
              </div>   
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="single-post">
                        <div class="post-media post-featured-image"> <img src="images/news/lifestyle/food1.jpg"
                                class="img-fluid" alt=""> </div>
                        <div class="utf_post_title-area"> <a class="utf_post_cat" href="#">Food</a>
                            <h2 class="utf_post_title">Lorem Ipsum is simply dummy text of the printing and type setting
                                industry simply dummy text type.</h2>
                            <div class="utf_post_meta"> <span class="utf_post_author"> By <a href="#">John Wick</a>
                                </span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 15 Jan, 2022</span> <span
                                    class="post-hits"><i class="fa fa-eye"></i> 21</span> <span class="post-comment"><i
                                        class="fa fa-comments-o"></i> <a href="#"
                                        class="comments-link"><span>01</span></a></span> </div>
                        </div>

                        <div class="utf_post_content-area">
                            <div class="entry-content">
                                <p> <span class="dropcap">L</span> orem Ipsum is simply dummy text of the printing and type
                                    setting industry. Lorem Ipsum has been the industry's standard Lorem Ipsum is simply
                                    dummy text of the printing and type setting industry. Lorem Ipsum has been the
                                    industry's standard.</p>
                                <blockquote>Lorem Ipsum is simply dummy text of the printing and type setting industry Lorem
                                    Ipsum is simply dummy text of the printing type setting industry. Lorem Ipsum has been
                                    Lorem Ipsum has been the industry's standard.</blockquote>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since when an unknown printer took a
                                    galley of type and scrambled it to make a type specimen book. It has survived not only
                                    five centuries, but also the leap into electronic typesetting, remaining essentially
                                    unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                    Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p><img class="pull-left" src="images/news/news-details1.jpg" alt=""></p>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since when an unknown printer took a
                                    galley of type and scrambled it to make a type specimen book. It has survived not only
                                    five centuries, but also the leap into electronic typesetting, remaining essentially
                                    unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                    Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since when an unknown printer took a
                                    galley of type and scrambled it to make a type specimen book. It has survived not only
                                    five centuries, but also the leap into electronic typesetting, remaining essentially
                                    unchanged.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since when an unknown printer took a
                                    galley of type and scrambled it to make a type specimen book. It has survived not only
                                    five centuries, but also the leap into electronic typesetting, remaining essentially
                                    unchanged.</p>
                            </div>

                            <div class="tags-area clearfix">
                                <div class="post-tags">
                                    <span>Tags:</span>
                                    <a href="#"># Business</a>
                                    <a href="#"># Corporate</a>
                                    <a href="#"># Services</a>
                                    <a href="#"># Customer</a>
                                </div>
                            </div>

                            <div class="share-items clearfix">
                                <ul class="post-social-icons unstyled">
                                    <li class="facebook"> <a href="#"> <i class="fa fa-facebook"></i> <span
                                                class="ts-social-title">Facebook</span></a> </li>
                                    <li class="twitter"> <a href="#"> <i class="fa fa-twitter"></i> <span
                                                class="ts-social-title">Twitter</span></a> </li>
                                    <li class="gplus"> <a href="#"> <i class="fa fa-google-plus"></i> <span
                                                class="ts-social-title">Google +</span></a> </li>
                                    <li class="pinterest"> <a href="#"> <i class="fa fa-pinterest"></i> <span
                                                class="ts-social-title">Pinterest</span></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <nav class="post-navigation clearfix">
                        <div class="post-previous">
                            <a href="#"> <span><i class="fa fa-angle-left"></i>Previous Post</span>
                                <h3>Zhang social media pop also known when smart innocent...</h3>
                            </a>
                        </div>
                        <div class="post-next">
                            <a href="#"> <span>Next Post <i class="fa fa-angle-right"></i></span>
                                <h3>Zhang social media pop also known when smart innocent...</h3>
                            </a>
                        </div>
                    </nav>

                    
                    <div class="related-posts block">
                        <h3 class="utf_block_title"><span>Related Posts</span></h3>
                        <div id="utf_latest_news_slide" class="owl-carousel owl-theme utf_latest_news_slide">
                            @for($i = 1; $i <= 3; $i++)
                            <div class="item">
                                <div class="utf_post_block_style clearfix">
                                    <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                                src="images/news/lifestyle/travel5.jpg" alt="" /></a> </div>
                                    <a class="utf_post_cat" href="#">Health</a>
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop
                                                also innocent...</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                    class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                         </div>
                    </div>

                    <!-- Post comment start -->
                    <div id="comments" class="comments-area block">
                        <h3 class="utf_block_title"><span>03 Comments</span></h3>
                        <ul class="comments-list">
                            <li>
                                <div class="comment"> <img class="comment-avatar pull-left" alt=""
                                        src="images/news/user1.png">
                                    <div class="comment-body">
                                        <div class="meta-data"> <span class="comment-author">Miss Lisa Doe</span> <span
                                                class="comment-date pull-right">15 Jan, 2022</span> </div>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since It has
                                                survived not only five centuries, but also the leap into electronic type
                                                setting, remaining essentially unchanged.</p>
                                        </div>
                                        <div class="text-left"> <a class="comment-reply" href="#"><i
                                                    class="fa fa-share"></i> Reply</a> </div>
                                    </div>
                                </div>

                                <ul class="comments-reply">
                                    <li>
                                        <div class="comment"> <img class="comment-avatar pull-left" alt=""
                                                src="images/news/user2.png">
                                            <div class="comment-body">
                                                <div class="meta-data"> <span class="comment-author">Miss Lisa Doe</span>
                                                    <span class="comment-date pull-right">15 Jan, 2022</span> </div>
                                                <div class="comment-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                                        ever since It has survived not only five centuries, but also the
                                                        leap into electronic type setting, remaining essentially unchanged.
                                                    </p>
                                                </div>
                                                <div class="text-left"> <a class="comment-reply" href="#"><i
                                                            class="fa fa-share"></i> Reply</a> </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="comment last"> <img class="comment-avatar pull-left" alt=""
                                        src="images/news/user1.png">
                                    <div class="comment-body">
                                        <div class="meta-data"> <span class="comment-author">Miss Lisa Doe</span> <span
                                                class="comment-date pull-right">15 Jan, 2022</span> </div>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since It has
                                                survived not only five centuries, but also the leap into electronic type
                                                setting, remaining essentially unchanged.</p>
                                        </div>
                                        <div class="text-left"> <a class="comment-reply" href="#"><i
                                                    class="fa fa-share"></i> Reply</a> </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Post comment end -->

                    <!-- Comments Form Start -->
                    <div class="comments-form">
                        <h3 class="title-normal">Leave a comment</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" placeholder="Name"
                                            type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" placeholder="Email"
                                            type="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Phone" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control required-field" id="message" placeholder="Comment" rows="10" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">
                                <button class="comments-btn btn btn-primary" type="submit">Post Comment</button>
                            </div>
                        </form>
                    </div>
                    <!-- Comments form end -->
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="sidebar utf_sidebar_right">
                        <div class="widget">
                            <h3 class="utf_block_title"><span>Follow Us</span></h3>
                            <ul class="social-icon">
                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        
                        <div class="widget color-default">
                            <h3 class="utf_block_title"><span>Popular News</span></h3>
                            <div class="utf_list_post_block">
                                <ul class="utf_list_post">
                                  @for($i = 1; $i <= 3; $i++)
                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/tech/gadget3.jpg" alt="" /> </a> <a
                                                    class="utf_post_cat" href="#">Gadgets</a> </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a href="#">Zhang social
                                                        media pop also known when smart innocent...</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                            class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                                    <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                        2022</span> </div>
                                            </div>
                                        </div>
                                    </li>
                                  @endfor
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="widget text-center"> <img class="banner img-fluid"
                                src="images/banner-ads/ad-sidebar.png" alt="" /> </div>
                        <div class="widget widget-tags">
                            <h3 class="utf_block_title"><span>Popular Tags</span></h3>
                            <ul class="unstyled clearfix">
                              @for($i = 1; $i <= 3; $i++)
                                <li><a href="#">Business</a></li>
                              @endfor  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 1rd Block Wrapper End -->

@endsection
