@extends('frontend.layouts.app')
@section('title')
    {{ trans('strings.frontend.courses') }}
@endsection
 
@section('content')
    <div class="jumbotron">
        <div class="bg-stripe-overlay">
            <div class="container">
                <div class="left">
                    <h2>{{trans('strings.frontend.browse-our-library')}}</h2>
                    <p>{{trans('strings.frontend.browse-our-library-small')}}</p>
               
                </div>
            </div>
        </div>
    </div>
    <!-- END / SECTION 2 -->
    
    <section class="page-control">
        <div class="container">
            <div class="page-info">
                <a href="/"><i class="icon fa fa-long-arrow-left"></i>
                    {{trans('strings.frontend.back-to-home')}}
                </a>
            </div>
            @if($search_term)
                <div class="page-info">
                     <a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <i class="fa fa-search-plus"></i> {{ $courses->count() }} search {{str_plural('result', $courses->count()) }} for <em>"{{$search_term}}"</em></a>
                </div>
            @endif
            <div class="page-view">
                <div class="mc-select">
                    <button class="btn btn-default dropdown-toggle sortbtn" style="box-shadow: none; text-transform: none;" type="button" id="sortOrder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        @if(array_key_exists('sort_order', $filters) && $filters['sort_order'] == 'dte_recent_first')
                            {{trans('strings.frontend.recent-first')}}
                        @elseif(array_key_exists('sort_order', $filters) && $filters['sort_order'] == 'dte_recent_last')
                            {{trans('strings.frontend.oldest-first')}}
                        @elseif(array_key_exists('sort_order', $filters) && $filters['sort_order'] == 'price_asc') 
                            {{trans('strings.frontend.price-asc')}}
                        @elseif(array_key_exists('sort_order', $filters) && $filters['sort_order'] == 'price_desc') 
                            {{trans('strings.frontend.price-desc')}}
                        @elseif(array_key_exists('sort_order', $filters) && $filters['sort_order'] == 'highest_rated') 
                            {{trans('strings.frontend.highest-rated')}}
                        @else
                            {{trans('strings.frontend.sort-by')}}
                        @endif
                        &nbsp;&nbsp;
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sortOrder">
                        <li><a href="{{Request::fullUrlWithQuery(['sort_order' => 'dte_recent_first'])}}">{{trans('strings.frontend.recent-first')}}</a></li>
                        <li><a href="{{Request::fullUrlWithQuery(['sort_order' => 'dte_recent_last'])}}">{{trans('strings.frontend.oldest-first')}}</a></li>
                        <li><a href="{{Request::fullUrlWithQuery(['sort_order' => 'price_asc'])}}">{{trans('strings.frontend.price-asc')}}</a></li>
                        <li><a href="{{Request::fullUrlWithQuery(['sort_order' => 'price_desc'])}}">{{trans('strings.frontend.price-desc')}}</a></li>
                        <li><a href="{{Request::fullUrlWithQuery(['sort_order' => 'highest_rated'])}}">{{trans('strings.frontend.highest-rated')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END / PAGE CONTROL -->
    
    <section id="categories-content" class="last categories-content">
        <div class="container">
            <div class="row">
                
                <!-- SIDEBAR CATEGORIES -->
                <div class="col-md-3">
                    <aside class="sidebar-categories">
                        <div class="inner">
                            <!--
                            <button class="btn btn-default btn-block dropdown-toggle sortbtn" style="box-shadow: none; text-transform: none;" type="button" id="sortOrder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Select
                                &nbsp;&nbsp;
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="sortOrder">
                                <li><a href="{{Request::fullUrlWithQuery(['sort_order' => 'dte_recent_first'])}}">{{trans('strings.frontend.recent-first')}}</a></li>
                                <li><a href="{{Request::fullUrlWithQuery(['sort_order' => 'dte_recent_last'])}}">{{trans('strings.frontend.oldest-first')}}</a></li>
                                <li><a href="{{Request::fullUrlWithQuery(['sort_order' => 'price_asc'])}}">{{trans('strings.frontend.price-asc')}}</a></li>
                                <li><a href="{{Request::fullUrlWithQuery(['sort_order' => 'price_desc'])}}">{{trans('strings.frontend.price-desc')}}</a></li>
                                <li><a href="{{Request::fullUrlWithQuery(['sort_order' => 'highest_rated'])}}">{{trans('strings.frontend.highest-rated')}}</a></li>
                            </ul>
                            -->
                            <!-- WIDGET CATEGORIES -->

                                
                           
                                <ul class="nav nav-pills nav-pills-icons " role="tablist">
                                    <strong><h3 class ="title">{{trans('strings.frontend.categories')}}</h3></strong>
                                    <li class="{{ !array_key_exists('category', $filters) ? 'current' : '' }}">
                                        <a href="{{Request::fullUrlWithQuery(['category' => ''])}}"><i class="material-icons">collections</i> {{trans('strings.frontend.all')}}</a>
                                    </li>

                                  
                                </li>
                                    @foreach($all_categories as $c)
                                        <li class="{{ array_key_exists('category', $filters) && $filters['category'] == $c->slug ? 'current' : '' }}">
                                          <a href="{{Request::fullUrlWithQuery(['category' => $c->slug])}}">  <i class="material-icons">collections</i>{{ $c->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- END / WIDGET CATEGORIES -->
                            <!-- WIDGET ACCESS -->

                           <div class="inner">
                                  <ul class="nav price nav-pills-icons " role="tablist">
                                    <strong> <h3 class ="title">{{trans('strings.frontend.price')}}</strong></h3>
                                    <li class="{{ !array_key_exists('price', $filters) ? 'current' : '' }}">
                                        <a href="{{Request::fullUrlWithQuery(['price' => ''])}}">  <i class="material-icons">local_atm</i> {{trans('strings.frontend.all')}}</a>
                                    </li>
                                    <li class="{{ array_key_exists('price', $filters) && $filters['price'] == 'free' ? 'current' : '' }}">
                                        <a href="{{Request::fullUrlWithQuery(['price' => 'free'])}}">  <i class="material-icons">local_atm</i> {{trans('strings.frontend.free-courses')}}</a>
                                    </li>
                                    <li class="{{ array_key_exists('price', $filters) && $filters['price'] == 'paid' ? 'current' : '' }}">
                                        <a href="{{Request::fullUrlWithQuery(['price' => 'paid'])}}">  <i class="material-icons">local_atm</i> {{trans('strings.frontend.paid-courses')}}</a>
                                    </li>   
                                </ul>
                            </div>
                            <!-- END / WIDGET ACCESS -->
                            
                            <!-- WIDGET ACCESS -->
                          <div class="inner">
                                <ul class="nav  price nav-pills-icons " role="tablist">
                                    <strong><h3 class ="title">{{trans('strings.frontend.level')}}</strong></h3>
                                    <li class="{{ !array_key_exists('level', $filters) ? 'current' : '' }}">
                                        <a href="{{Request::fullUrlWithQuery(['level' => ''])}}"><i class="material-icons">folder_special</i> {{trans('strings.frontend.all')}}</a>
                                    </li>
                                    <li class="{{ array_key_exists('level', $filters) && $filters['level'] == 'entry' ? 'current' : '' }}">
                                        <a href="{{Request::fullUrlWithQuery(['level' => 'beginner'])}}"><i class="material-icons">folder_special</i> {{trans('strings.frontend.beginner')}}</a>
                                    </li>  
                                    <li class="{{ array_key_exists('level', $filters) && $filters['level'] == 'intermediate' ? 'current' : '' }}">
                                        <a href="{{Request::fullUrlWithQuery(['level' => 'intermediate'])}}"><i class="material-icons">folder_special</i> {{trans('strings.frontend.intermediate')}}</a>
                                    </li>
                                    <li class="{{ array_key_exists('level', $filters) && $filters['level'] == 'advanced' ? 'current' : '' }}">
                                        <a href="{{Request::fullUrlWithQuery(['level' => 'advanced'])}}"><i class="material-icons">folder_special</i> {{trans('strings.frontend.advanced')}}</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END / WIDGET ACCESS -->
                            
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
                        <div class="infinite-scroll" style="display:none">
                            
                            @foreach($courses->chunk(3) as $collection)
                                <div class="row">
                                    @foreach($collection as $course)
                                        @include('frontend._course._course')
                                    @endforeach
                                </div>
                            @endforeach
                            {{ $courses->links() }}
                      
                            
                        </div>
                    </div>
                </div>
                
                
                
                
                
                
            </div> <!--/ end row -->
        </div>
    </section>
    
    <section id="before-footer" class="before-footer course">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="mc-count-itemx">
                        <h3 class="title">{{trans('strings.frontend.popular-tags')}}</h3>
                        <p>
                            @foreach($used_tags as $tag)
                                <a href="{{ route('frontend.course.tag.get', strToLower($tag->name)) }}" class="tag-btn"> {{ strToUpper($tag->name) }} ({{ strToUpper($tag->tag_count) }})</a>
                            @endforeach
                        </p>
                    </div>
                    
                </div>

            </div>
        </div>
    </section>
    <!-- END / BEFORE FOOTER -->
    
@endsection
@section('after-scripts')
    <script type="text/javascript">
        $('.infinite-scroll').delay(1000).fadeIn(1000);
        $('.spinner').delay(500).fadeOut(200);

    </script>

@endsection