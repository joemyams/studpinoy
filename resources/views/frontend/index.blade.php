
@extends('frontend.layouts.app')

@section('title')
    {!! trans('strings.frontend.home') !!}
@endsection

@section('after-styles')

<style type="text/css">
    #background {
        display:none;
        right: 0;
        bottom: 0;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        z-index:-100;
        object-fit: cover;
        overflow: hidden;
        border: 1px solid rgba(255,255,255,0.6);
    }
    
    @media (min-width: 62em) {
       #background {
          display:block;
       }
       
       .jumbotron .bg-stripe-overlay {
            background: url(/images/bg-jumbotron.png) repeat;
            text-align: left;
            padding: 70px 0;           
        }
    }
    .awe-parallax{
        background-color: rgba(17, 83, 140, 0.6);
        z-index:100;
    }
    
    .button-set-header {
        padding: 10px 25px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }
    
    .button-set-header.one {
        background: rgba(0, 0, 0, 0.2);
        border-bottom: solid 1px rgba(168, 152, 164, 0.65);
        margin: 20px 0 20px;
    }
    
    .jumbotron h2{
        margin-top:0;
    }
    
    /* typeahead */
    .jumbotron .search-item{
      color: #ddd;
    }
      
      .jumbotron .twitter-typeahead, 
      .jumbotron .tt-hint, 
      .jumbotron .tt-input, 
      .jumbotron .tt-menu { width: 100%; }
      .jumbotron .tt-menu.tt-open {margin-top: 0;}
      .jumbotron .tt-query, /* UPDATE: newer versions use tt-input instead of tt-query */
      .jumbotron .tt-hint {
          padding: 8px 12px;
          font-size: 14px;
          line-height: 30px;
          border: 2px solid #ccc;
          border-radius: 4px;
          outline: none;
      }
      
      .jumbotron .tt-query { /* UPDATE: newer versions use tt-input instead of tt-query */
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
      }
      
      .jumbotron .tt-hint {
          color: #fff;
      }
      
      .jumbotron .tt-menu { /* UPDATE: newer versions use tt-menu instead of tt-dropdown-menu */
          min-width: 100%;
          color: #fff !important;
          padding: 0px;
          text-align: left;
          background-color: rgba(0, 0, 0, 0.2);
          border: 1px solid rgba(255, 255, 255, 0.6);
        }
        
        
        .jumbotron .tt-menu a { 
            color: #d3d3d3 !important;
            font-size: 1.4em;
            line-height: 1.4em;
        }
      
        .jumbotron .tt-suggestion {
            padding: 3px 10px;
            font-size: 15px;
            line-height: 24px;
        }
         .jumbotron .tt-highlight{
             color: #fff;
         }
        .jumbotron .tt-suggestion.tt-is-under-cursor,
        .jumbotron .tt-suggestion.tt-cursor{ 
            color: #fff;
            background-color: rgba(255, 255,255,0.2);
      
        }
      
        .jumbotron #mk-fullscreen-search-input:focus, 
        .jumbotron #mk-fullscreen-search-input,
        .jumbotron [type=text].form-control{ 
            box-shadow: none !important; border: 1px solid #ddd;
            -webkit-box-shadow: none !important; border: 1px solid #ddd;
            border: 1px solid rgba(255,255,255,0.3);
            width: 100%; 
            background:rgba(255,255,255,0.2);
            color:#fff;
        }

        .mc-section-1-content-1 .big {
            margin-bottom: 10px;
        }
        .big {
            font-family: 'Lato', sans-serif;
            font-size: 25px;
            line-height: 1.5em;
            color: #9a9a9a;
            font-weight: bold;
        }
       .one ::-webkit-input-placeholder {
            color:#f5f5f5 !important;
        }
        
        .one ::-moz-placeholder {
            color:#f5f5f5 !important;
        }
        
        .one ::-ms-placeholder {
            color:#f5f5f5 !important;
        }
        
        .one ::placeholder {
            color:#f5f5f5 !important;
        }
        
       
       
</style>
@stop 

@section('content')
<div  class="page-header header-filter" data-parallax="true" style="background-image: url('/images/parallax-2.jpg');">
        <div class="container">
            <div class="row"> 
 
                <div class="col-md-8 col-md-offset-2 text-center" id ="#home">
                    <h1 class="title">Learn new skills<br> Land a job <br> Make Business</h1>
                    <h4>Find a course and the right Instructor for you.</h4>
                    <br />
            <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="row search-form-box hidden-xs" style="margin-top: 0px;">
                            <div class="well button-set one" style="padding: 10px; border: 0 solid red !important; margin-top:0; width:100%;"> 
                                <form action="{{ route('frontend.course.get') }}" class="form-horizontal" method="get" id="mk-fullscreen-searchform">
                                    <input type="text" name="search" autocomplete="off" class="main-search form-control input-lg" placeholder="{{trans('strings.frontend.search-author-or-title')}}..." id="mk-fullscreen-search-input">
                                </form>
                            </div>
                        </div>
                          </div>    
                 
                
                    <a href="#pablo" class="btn btn-rose btn-round btn-lg">
                        <i class="material-icons">format_align_left</i> GET STARTED
                    </a>
                </div>
            </div>
        </div>
    </div>


      
  </div>  


   <div class="cd-section" id="blogs">

    <!--     *********     BLOGS 1      *********      -->

    <div class="blogs-3">

        <div class="container">
            <div class="row">

                
                    <div class="text-center">
                    <h2 class="title"><span><i class="material-icons">find_in_page</i></span> {{trans('strings.frontend.recent-posts')}}</h2>
                    </div> 
                   <div class="col-md-10 col-md-offset-1 ">
                    @foreach($posts as $p) 
                            <div class="card card-plain card-blog">
                                 <div class="row">
                                     <div class="col-md-4">
                                            <div class="card-image">
                                             <img class="img img-raised" src="images/card-blog1.jpg" />
                                            </div>
                                       </div>  
                                      
                            <div class="col-md-8">
                              
                                <h3 class="card-title">
                                  <a href="{{route('frontend.posts.show', $p)}}">{{$p->title}}</a>
                                </h3>
                                <p class="card-description">
                                      {!! str_limit(strip_tags($p->body), 120) !!}
                                        <span><a href="{{route('frontend.posts.show', $p)}}">{{trans('strings.frontend.read-more')}} <i class="fa fa-angle-double-right"></i></a></span>
                                </p>
                                <p class="author">
                                    by: <a ><b>Study Pinoy</b></a>
                            </div>      
                        </div>
                    @endforeach        

                               
                                </div>
                            </div>
                


                    </div>
                </div>
                   

                </div>

            </div>

        </div>
    </div>

</div>

</div>

<div class="cd-section" id="projects" id ="#work">
<div class="section section-overview">
            <div class="features-5"  style="background-image: url('images/new-header.png')">


                <div class="col-md-8 col-md-offset-2 text-center">
                <h2 class="title">Business, Learn, Teach and Earn</h2>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">format_bold</i>
                                </div>
                                <h4 class="info-title">Bootstrap Grid</h4>
                                <p>Enjoy the fluid grid system based on 12 columns. Material Kit PRO is built over Bootstrap and has all the benefits that the framework comes with.</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">phonelink</i>
                                </div>
                                <h4 class="info-title">Fully Responsive</h4>
                                <p>This Bootstrap kit is built mobile-first and looks amazing on any device. Regardless of the screen size, the website content will naturally fit the given resolution. </p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">access_time</i>
                                </div>
                                <h4 class="info-title">Save Time</h4>
                                <p>Using the Material Kit PRO will save you large amount of time. You don't have to worry about customising the basic Bootstrap design or generating new components.</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <h4 class="info-title">Save Money</h4>
                                <p>Creating your design from scratch with dedicated designers can be very expensive. Using a kit is the best option to start your development while bootstrapping your budget. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
</div>   
</div>


        <div class="projects-1" id="projects-1 ">

        <div class="container" id ="#course">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="title"><span><i class="material-icons">collections</i></span> Courses and Instructor</h2>

                    <ul class="nav nav-pills nav-pills-rose">
                      <li class="active"><a href="#pill1" data-toggle="tab">All</a></li>
                      <li><a href="#pill2" data-toggle="tab">Marketing</a></li>
                      <li><a href="#pill3" data-toggle="tab">Development</a></li>
                      <li><a href="#pill4" data-toggle="tab">Social Media</a></li>
                      <li><a href="#pill5" data-toggle="tab">Web Design</a></li>
                      <li><a href="#pill6" data-toggle="tab">Drop Shipping</a></li>
                    </ul>
                    <div class="tab-content tab-space">
                        <div class="tab-pane active" id="pill1">


                        </div>
                        <div class="tab-pane" id="pill2">

                        </div>
                        <div class="tab-pane" id="pill3">

                        </div>
                        <div class="tab-pane" id="pill4">

                        </div>
                         <div class="tab-pane" id="pill5">

                        </div>
                         <div class="tab-pane" id="pill6">

                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">

                </div>

                <div class="row">
                            <div class="col-md-6">

                                <div class="card card-background" style="background-image: url('assets/img/examples/office1.jpg')">

                                    <div class="card-content">
                                        <h6 class="category text-info">Productivy Apps</h6>
                                        <a href="#pablo">
                                            <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                        </a>
                                        <p class="card-description">
                                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                        </p>
                                        <a href="#pablo" class="btn btn-white btn-simple">
                                            <i class="material-icons">subject</i> Read Article
                                        </a>
                                        <a href="#pablo" class="btn btn-white btn-simple">
                                            <i class="material-icons">watch_later</i> Watch Later
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-background" style="background-image: url('assets/img/examples/card-blog3.jpg')">
                                    <div class="card-content">
                                        <h6 class="category text-info">Materials</h6>
                                        <h3 class="card-title">The Sculpture Where Details Matter</h3>
                                        <p class="card-description">
                                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                        </p>
                                        <a href="#pablo" class="btn btn-danger btn-round">
                                            <i class="material-icons">subject</i> Read Article
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
               

             

            </div>

        </div>
    </div>

<div class="cd-section" id="#pricing">
<div class="pricing-3 section-image" style="background-image: url('images/programmer.jpg')" id="pricing-3">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2 class="title"><span><i class="material-icons">local_library</i></span> Start learning NOW!</h2>
                    <h4 >Joining takes less than a minute, You may cancel it any time.</h4>
                    <div class="section-space"></div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 col-md-offset-2">
                    <div class="card card-pricing">
                        <div class="card-content">
                            <h3 class="category"><b>Free</b></h3>
                            <h1 class="card-title"><small>₱</small>0<small>/mo</small></h1>
                            <ul>
                                <li><b>Watch Free Study Pinoy Course</b> </li>
                                <li><b>Limited Downloads</b> </li>
                                <li><b>Limited Access</b> </li>
                                <li><b>Can Earn through Affiliate</li>
                            </ul>
                            <a class="btn btn-primary btn-round">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-pricing card-raised">
                        <div class="card-content content-primary">
                            <h3 class="category text-info"><b>Premium</b></h3>
                            <h1 class="card-title"><small>₱</small>499<small>/mo</small></h1>
                            <ul>
                                <li><b>Watch ALL Study Pinoy Course</b> </li>
                                <li><b>Unlimited Downloads</b> </li>
                                <li><b>Access All Pages</b> </li>
                                <li><b>Can Earn through Affiliate</li>
                            </ul>
                            <a class="btn btn-white btn-round">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
            </div>
</div>

<div id ="newsletter" class="subscribe-line subscribe-line-image" style="background-image: url('images/e-newsletter1.png');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="text-center">
                                    <h3 class="title"><span><i class="material-icons">mail</i></span> Subscribe to our Newsletter</h3>
                                    <p class="description">
                                        Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                                    </p>
                                </div>

                                <div class="card card-raised card-form-horizontal">
                                    <div class="card-content">
                                        <form method="" action="">
                                            <div class="row">
                                                <div class="col-sm-8">

                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">mail</i>
                                                        </span>
                                                        <input type="email" value="" placeholder="Your Email..." class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <button type="button" class="btn btn-primary btn-block">Subscribe</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>




   

<div class="testimonials-2 section-dark">

        <div class="container">

            <div class="row">

                <div id="carousel-testimonial" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner" role="listbox">
                        <div class="item">
                            <div class="card card-testimonial card-plain">
                                <div class="card-avatar">
                                    <a>
                                        <img class="img" src="images/avatar.jpg">
                                    </a>
                                </div>

                                <div class="card-content">
                                    <h4>"I speak yell scream directly at the old guard on behalf of the future. I gotta say at that time I’d like to meet Kanye I speak yell scream directly at the old guard on behalf of the future. My brother Chance!!! <br>Thank you for letting me work on this masterpiece. One of my favorite people."
                                    </h4>
                                    <h4 class="card-title">Kendall Thompson</h4>
                                    <h6 class="category text-muted">CEO @ Marketing Digital Ltd.</h6>
                                    <div class="footer">
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item active">
                            <div class="card card-testimonial card-plain">
                                <div class="card-avatar">
                                    <a>
                                        <img class="img" src="images/camp.jpg">
                                    </a>
                                </div>

                                <div class="card-content">
                                    <h4>"Thank you Anna for the invite thank you to the whole Vogue team Called I Miss the Old Kanye At the God's last game Chop up the soul Kanye. I promise I will never let the people down. I want a better life for all!!! Pablo Pablo Pablo Pablo! Thank you Anna for the invite thank you to the whole Vogue team."
                                    </h4>
                                    <h4 class="card-title">Christian Louboutin</h4>
                                    <h6 class="category text-muted">Designer @ Louboutin &amp; Co.</h6>
                                    <div class="footer">
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                        <i class="material-icons text-warning">star</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#carousel-testimonial" role="button" data-slide="prev">
                        <i class="material-icons" aria-hidden="true">chevron_left</i>
                    </a>
                    <a class="right carousel-control" href="#carousel-testimonial" role="button" data-slide="next">
                        <i class="material-icons" aria-hidden="true">chevron_right</i>
                    </a>
                </div>

            </div>

        </div>
    </div>



    
    @if(!is_null($coupon))
        <section id="testimonial">
            <div class="container">
                <div class="coupon-info">
                    <h3 class="code orange">{{$coupon->percent}}% {{trans('strings.frontend.off')}}</h3>
                    <h3>{{trans('strings.frontend.any-course')}}</h3>
                    <h3>{{trans('strings.frontend.use-coupon')}}</h3>
                    
                    <h3  class="orange">{{$coupon->code}}</h3>
                    <h3>{{trans('strings.frontend.expires-in')}}</h3>
                    <h3 class="orange"><div id="getting-started"></div></h3>
                </div>
            </div>
        </section>
    @endif
  
    
    @if(config('settings.adsense_top_responsive_slot') != '')
        <section id="mc-section-3" class="mc-section-3 section">
            <div class="container">
            <center>
                @if(config('demo.demo_mode'))
                    <div style="max-width: 100%; height: auto; background: rgb(153, 153, 153); color: #fff; line-height: 90px; text-align: center; ">AD BANNER</div>
                @endif
                <!-- Banner Add -->
                <google-adsense
                  ad-client="{{config('settings.adsense_ad_client')}}"
                  ad-slot="{{config('settings.adsense_top_responsive_slot')}}"
                  ad-style="display: block"
                  ad-format="auto">
                </google-adsense>
            </center>
            </div>
        </section>
    @endif
    
    @if($featuredCategories->count() > 0)
        @foreach($featuredCategories as $category)
            @if(count($category->courses))
            <section id="mc-section-3" class="mc-section-3 section">
                <div class="container">
                    <!-- FEATURE -->
                    <div class="feature-course">
                        <h4 class="title-box text-uppercase">{{trans('strings.frontend.featured-in')}} <b><a href="{{route('frontend.course.get')}}?category={{$category->slug}}">{{$category->name}}</a></b></h4>
                        <a href="{{route('frontend.course.get')}}?category={{$category->slug}}" class="all-course mc-btn btn-style-1 hidden-xs hidden-sm">
                            {{trans('strings.frontend.more')}}
                        </a>
                        
                        <div class="spinner">
                            <center>
                                <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw text-muted"></i>
                            </center>
                        </div>
                        <div class="row">
                            <div class="feature-slider" style="display:none">
                                @foreach($category->courses as $course)
                                    @include('frontend._course_home')
                                @endforeach
                            </div>
                        </div>
                        
                        
                    </div>
                    <!-- END / FEATURE -->
                </div>
            </section>
            
            @if(Auth::check())
        <!-- Modal -->
        @foreach($category->courses as $course)
            <div class="modal fade" id="affiliateLink-{{$course->id}}" role="dialog">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                        <strong>
                            {{trans('strings.frontend.copy-affiliate-link')}}  
                        </strong>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="input-group">
                              <input type="text" class="form-control" style="font-size:12px !important;" id="promoLink-{{$course->id}}" value="{{ URL::route('frontend.course.show', ['course' => $course, 'ref' => Auth::user()->affiliate_id]) }}">
                              <span class="input-group-addon">
                                  <a href="javascript:void(0)" class="copyLink" id="copyLink" onclick="copyToClipboard('#promoLink-{{$course->id}}')">
                                      <i class="fa fa-clipboard"></i>
                                  </a>
                              </span>
                            </div>
                            <small class="text-success feedback-message"></small>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">
                          {{trans('strings.frontend.close')}}
                      </button>
                    </div>
                  </div>
                </div>
            </div>
        @endforeach
    @endif
            
            
            @endif
            <!-- END / SECTION 3 -->
            
        @endforeach
    @endif
    
    @if(config('settings.adsense_top_responsive_slot') != '')
        <section id="mc-section-3" class="mc-section-3 section">
            <div class="container">
            <center>
                @if(config('demo.demo_mode'))
                    <div style="max-width: 100%; height: auto; background: rgb(153, 153, 153); color: #fff; line-height: 90px; text-align: center; ">AD BANNER</div>
                @endif
                <!-- Banner Add -->
                <google-adsense
                  ad-client="{{config('settings.adsense_ad_client')}}"
                  ad-slot="{{config('settings.adsense_top_responsive_slot')}}"
                  ad-style="display: block"
                  ad-format="auto">
                </google-adsense>
            </center>
            </div>
        </section>
    @endif
    <input type="hidden" value="" id="days-left"/>
    
    
    
@endsection
@section('after-scripts')
    @if(!is_null($coupon))
        <script type="text/javascript">
            $('#getting-started').countdown('{{$coupon->expires}}', function(event) {
                $(this).html(event.strftime("%D {{str_plural(trans('strings.frontend.day'), $coupon->days_left)}} %H:%M:%S"));
            });
        </script>
    @endif
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('.search-form-box').fadeIn(100);
        });
        

        function copyToClipboard(el){
            document.querySelector(el).select();
            document.execCommand('copy');
            $('.feedback-message').text("{{trans('strings.frontend.copied-to-clipboard')}}");
            setTimeout(() => {
               $('.feedback-message').text('');
            }, 3000);
            
        }
    </script>
    
    
    
@endsection