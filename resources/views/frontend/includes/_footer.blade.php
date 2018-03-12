

 <div class="social-line social-line-white text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="title">Thank you for your support!</h4>
                            </div>
                                <a href="#pablo" class="btn btn-twitter btn-round">
                                    <i class="fa fa-twitter"></i> Twitter · 2.5k
                                </a>
                                <a href="#pablo" class="btn btn-facebook btn-round">
                                    <i class="fa fa-facebook-square"></i> Facebook · 3.2k
                                </a>
                                <a href="#pablo" class="btn btn-google btn-round">
                                    <i class="fa fa-google-plus"></i> Google · 1.2k
                                </a>
                                
                        </div>
                    </div>
                </div>

                    <footer class="footer footer-black">
                        <div class="container">
                            <a href="{{ url('/') }}" class="navbar-brand" style="padding:5px 15px; ">
            <img src="/images/studypinoylogo.png"  />
          </a>


                            <ul class="pull-center">
                                <li><a href="/contact-us">{{trans('strings.frontend.contact-us')}}</a></li>
                                @foreach($footerPages as $page)
                                    <li><a href="{{route('frontend.pages.show', $page)}}">{{$page->title}}</a></li>
                                @endforeach
                            </ul>

                            <ul class="social-buttons pull-right">
                                <li>
                                    <a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-just-icon btn-simple">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-just-icon btn-simple">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-just-icon btn-simple">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </footer>