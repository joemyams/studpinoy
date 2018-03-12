@extends('frontend.layouts.app')
@section('title')
    {{trans('strings.frontend.blog')}}
@stop
@section('content')


<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('images/blogs.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                  <h1 class ="title" >{{trans('strings.frontend.blog')}}</h1>
                    <h4  class ="title">{{trans('strings.frontend.blog-small')}}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">

            <div class="col-md-10 col-md-offset-1">
                  

                    <div class="row">
                         @foreach($posts as $post)
                        <div class="col-md-4">
                            <div class="card card-plain card-blog">
                                <div class="card-image">
                                    <a>
                                        <img class="img img-raised" src="assets/img/examples/card-blog4.jpg">
                                    </a>
                                </div>

                                <div class="card-content">
                            
                                    <h4 class="card-title">
                                       <a href="{{route('frontend.posts.show', $post)}}">{{$post->title}}</a>
                                    </h4>
                                    <p class="card-description">
                                        {!! str_limit($post->body, 400) !!}
                                    </p>
                                    <p>
                                        <a href="{{route('frontend.posts.show', $post)}}" class="btn btn-danger btn-round">
                                      <i class="material-icons">format_align_left</i>{{trans('strings.frontend.read-more')}}Read Article
                                   </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                     @endforeach
                          <span class="pull-right">
                                {!! $posts->links() !!}
                         </span>

                      
                
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
