@extends('frontend.layouts.app')
@section('title')
    {{$blog->title}}
@stop
@section('content')
  <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('images/blogs.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                  <h1 class ="title" >{{$blog->title}}</h1>
                    <h4  class ="title">{{trans('strings.frontend.blog-small')}}</h4>
                </div>
            </div>
        </div> 
 
       </div>



   <div class="main main-raised">
        <div class="container">
            <div class="section section-text">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        {!! $blog->body !!}
                   </div>
                  
               
                </div>
            </div>

            <div class="section section-blog-info">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog-tags">
                                    Tags:
                                    <span class="label label-primary">Photography</span>
                                    <span class="label label-primary">Stories</span>
                                    <span class="label label-primary">Castle</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                              
                             <social-sharing url="{{route('frontend.posts.show', $blog)}}" 
                                title="{{$blog->title}}" 
                                description="{!! str_limit($blog->body, 200) !!}" inline-template>
                             
                                <network network="facebook">
                                  <a href="#pablo" class="btn btn-facebook btn-round pull-right">
                                    <i class="fa fa-facebook-square"></i> 872
                                </a>

                                </network>
                                <network network="googleplus">
                                   <a href="#pablo" class="btn btn-google btn-round pull-right">
                                    <i class="fa fa-google"></i> 232
                                </a>
                                </network> 
                               
                                                           
                                <network network="twitter">
                                     <a href="#pablo" class="btn btn-twitter btn-round pull-right">
                                    <i class="fa fa-twitter"></i> 910
                                </a>
                                </network>
                               
                              
                            </social-sharing>                       
                            

                            </div>
                        </div>

                        <hr>

                        <div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card-avatar">
                                        <a href="#pablo">
                                            <img class="img" src="../assets/img/faces/card-profile1-square.jpg">
                                        </a>
                                    <div class="ripple-container"></div></div>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="card-title">Alec Thompson</h4>
                                    <p class="description">I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...I like good music from Youtube.</p>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-default pull-right btn-round">Follow</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="section section-comments">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="media-area">
                            <h3 class="title text-center">3 Comments</h3>
                            <div class="media">
                                <a class="pull-left" href="#pablo">
                                    <div class="avatar">
                                        <img class="media-object" src="../assets/img/faces/card-profile4-square.jpg" alt="...">
                                    </div>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Tina Andrew <small>· 7 minutes ago</small></h4>
                                    <h6 class="text-muted"></h6>

                                    <p>Chance too good. God level bars. I'm so proud of @LifeOfDesiigner #1 song in the country. Panda! Don't be scared of the truth because we need to restart the human foundation in truth I stand with the most humility. We are so blessed!</p>

                                    <div class="media-footer">
                                        <a href="#pablo" class="btn btn-primary btn-simple pull-right" rel="tooltip" title="" data-original-title="Reply to Comment">
                                            <i class="material-icons">reply</i> Reply
                                        </a>
                                        <a href="#pablo" class="btn btn-danger btn-simple pull-right">
                                            <i class="material-icons">favorite</i> 243
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                              <a class="pull-left" href="#pablo">
                                  <div class="avatar">
                                     <img class="media-object" alt="Tim Picture" src="../assets/img/faces/card-profile1-square.jpg">
                                  </div>
                              </a>
                              <div class="media-body">
                                 <h4 class="media-heading">John Camber <small>· Yesterday</small></h4>

                                 <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                 <p> Don't forget, You're Awesome!</p>

                                <div class="media-footer">
                                    <a href="#pablo" class="btn btn-primary btn-simple pull-right" rel="tooltip" title="" data-original-title="Reply to Comment">
                                        <i class="material-icons">reply</i> Reply
                                    </a>
                                    <a href="#pablo" class="btn btn-default btn-simple pull-right">
                                        <i class="material-icons">favorite</i> 25
                                    </a>
                                 </div>
                                 <div class="media">
                                      <a class="pull-left" href="#pablo">
                                            <div class="avatar">
                                                <img class="media-object" alt="64x64" src="../assets/img/faces/card-profile4-square.jpg">
                                            </div>
                                      </a>
                                      <div class="media-body">
                                            <h4 class="media-heading">Tina Andrew <small>· 12 Hours Ago</small></h4>

                                            <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                            <p> Don't forget, You're Awesome!</p>

                                            <div class="media-footer">
                                                <a href="#pablo" class="btn btn-primary btn-simple pull-right" rel="tooltip" title="" data-original-title="Reply to Comment">
                                                    <i class="material-icons">reply</i> Reply
                                                </a>
                                                <a href="#pablo" class="btn btn-default btn-simple pull-right">
                                                    <i class="material-icons">favorite</i> 2
                                                </a>
                                            </div>
                                      </div>
                                  </div>
                              </div>
                            </div>

                        </div>
                          <h3 class="title text-center">Post your comment</h3>
                          <div class="media media-post">
                              <a class="pull-left author" href="#pablo">
                                  <div class="avatar">
                                        <img class="media-object" alt="64x64" src="../assets/img/faces/card-profile6-square.jpg">
                                  </div>
                              </a>
                              <div class="media-body">
                                    <div class="form-group is-empty"><textarea class="form-control" placeholder="Write some nice stuff or nothing..." rows="6"></textarea><span class="material-input"></span></div>
                                    <div class="media-footer">
                                         <a href="#pablo" class="btn btn-primary btn-round btn-wd pull-right">Post Comment</a>
                                    </div>
                              </div>
                          </div> <!-- end media-post -->
                    </div>
                </div>
            </div>

        </div>
    
</div>


  
        <div class="container">
         
            <div class="row stories">
 

                <div class="col-md-12">
                    <h2 class="title text-center">Similar Stories</h2>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-blog">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img img-raised" src="../assets/img/examples/blog6.jpg">
                                    </a>
                                <div class="colored-shadow" style="background-image: url(&quot;../assets/img/examples/blog6.jpg&quot;); opacity: 1;"></div></div>

                                <div class="card-content">
                                    <h6 class="category text-info">Enterprise</h6>
                                    <h4 class="card-title">
                                        <a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
                                    </h4>
                                    <p class="card-description">
                                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-blog">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img img-raised" src="../assets/img/examples/blog8.jpg">
                                    </a>
                                <div class="colored-shadow" style="background-image: url(&quot;../assets/img/examples/blog8.jpg&quot;); opacity: 1;"></div></div>
                                <div class="card-content">
                                    <h6 class="category text-success">
                                        Startups
                                    </h6>
                                    <h4 class="card-title">
                                        <a href="#pablo">Lyft launching cross-platform service this week</a>
                                    </h4>
                                    <p class="card-description">
                                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-blog">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img img-raised" src="../assets/img/examples/blog7.jpg">
                                    </a>
                                <div class="colored-shadow" style="background-image: url(&quot;../assets/img/examples/blog7.jpg&quot;); opacity: 1;"></div></div>

                                <div class="card-content">
                                    <h6 class="category text-danger">
                                        <i class="material-icons">trending_up</i> Enterprise
                                    </h6>
                                    <h4 class="card-title">
                                        <a href="#pablo">6 insights into the French Fashion landscape</a>
                                    </h4>
                                    <p class="card-description">
                                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>
                
                            
    </div>                        
                           
           
    
@endsection
@section('after-scripts')
    <script type="text/javascript">
        $('.infinite-scroll').delay(1000).fadeIn(1000);
        $('.spinner').delay(500).fadeOut(200);

    </script>

@endsection