@extends('frontend.layouts.app')
@section('title')
    {{$page->title}}
@stop
@section('content')
   <div class="jumbotron">
        <div class="bg-stripe-overlay">
            <div class="container">
                <div class="left">
                   <h2 >{{$page->title}}</h2>
                   
               
                </div>
            </div>
        </div>
    </div>
    <!-- END / SECTION 2 -->


 
    <section id="mc-section-3" class="mc-section-3 section">
        <div class="container">
            <div class="row">
                <!-- SIDEBAR CATEGORIES -->
                <div class="col-md-3">
                    <aside class="sidebar-categories">
                        <div class="inner">
                            
                            <!-- WIDGET TOP -->
                            
                            <div class="widget">
                                 <ul class="nav price nav-pills-icons " role="tablist">
                                    <h3><strong>{{trans('strings.frontend.site-pages')}}</strong></h3>
                                    <hr />
                                    @foreach($pages as $p)
                                        <li><a href="{{route('frontend.pages.show', $p)}}"><i class="material-icons">pageview</i> {{$p->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <!-- END / WIDGET TOP -->
                            <!-- Banner Add -->
                            
                        </div>
                    </aside>
                </div>
                
                <div class="col-md-9">
                    <div id="courses" class="content grid">
                        <div class="spinner">
                            <center>
                                <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw text-muted"></i>
                            </center>
                        </div>
                        {!! $page->body !!}
                        
                        <hr />
                        <div class="content list">
                        <center>
                            @if(config('demo.demo_mode'))
                                <div style="width: 728px; height: auto; background: #eee; color: #999; line-height: 90px; text-align: center; ">AD BANNER</div>
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
                    </div>
                </div>
                
            </div> <!--/ end row -->
        </div>
    </section>
    
@endsection
@section('after-scripts')
    <script type="text/javascript">
        $('.infinite-scroll').delay(1000).fadeIn(1000);
        $('.spinner').delay(500).fadeOut(200);

    </script>

@endsection