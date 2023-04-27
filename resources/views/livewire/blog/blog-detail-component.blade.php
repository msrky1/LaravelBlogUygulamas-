<main>

    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Blog</span>
                        <h1 class="text-capitalize mb-4 text-lg">Blog Detayı</h1>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="/blog-list" class="text-white">Anasayfa</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="#" class="text-white-50">{{$blog->title}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section blog-wrap bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="single-blog-item">
                                <img src="images/blog/2.jpg" alt="" class="img-fluid rounded">

                                <div class="blog-item-content bg-white p-5">
                                    <div class="blog-item-meta bg-gray py-1 px-2">
                                       
                                        <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>{{$blog->comments()->count()}} Yorum</span>
                                        <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> {{$blog->created_at->diffForHumans()}} 
                                            </span>
                                    </div>

                                    <h2 class="mt-3 mb-4"><a href="blog-single.html">{{$blog->title}}</a>
                                    </h2>
                                    <p class="lead mb-4">{{$blog->description}}</p>
                                      <form action="{{route('like')}}" wire:submit.prevent ="blogLike" method="post" > 
                                        @csrf
                                        <input type="hidden" value="{{ $blog->id }}" wire:ignore wire:model = "blog_id">
                                  <button >    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                      </svg>

                                    </button>
                                      </form>
                                    
                                </div>
                               
                            </div>
                        </div>


                       

                        <div class="col-lg-12 mb-5">
                            <div class="comment-area card border-0 p-5">
                                <h4 class="mb-4">Toplam Yorum: {{$blog->comments()->count()}}


                             
                                 
         
                               </h4>
                                <ul class="comment-tree list-unstyled">
                                    
                                    @foreach ($blog->comments ?? [] as $con)
                                    
                                    <li class="mb-5">
                                        <div class="comment-area-box">
                                        

                                            <h5 class="mb-1">{{$con->user->name}}</h5>
                                            {{-- <span>United Kingdom</span> --}}

                                            <div
                                                class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
                                               
                                                <span class="date-comm">{{$con->created_at->diffForHumans()}} </span>
                                            </div>

                                            <div class="comment-content mt-3">
                                                <p>   {{ $con->body }} </p>
                                            </div>

                                          

                                        </div>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            @if (Auth::check())
                            <form class="contact-form bg-white rounded p-5" method="POST" enctype="multipart/form-data" action="{{route('comment')}}" id="comment-form">
                                @csrf
                                <h4 class="mb-4">Yorum Yapabilirsiniz</h4>
                               
                                 <input type="hidden" name="blog_id" value="{{$blog->id}}" /> 

                                <textarea class="form-control mb-3" name="body" id="comment" cols="30" rows="5"
                                    placeholder="Yorumunuzu buraya yazınız"></textarea>

                                <input class="btn btn-main btn-round-full" type="submit" name="submit-contact"
                                     value="Yorum yap">
                            </form>

                       
                                
                            @endif
                                
                            

                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-wrap">
                        

                        <div class="sidebar-widget card border-0 mb-3">
                            <img src="images/blog/blog-author.jpg" alt="" class="img-fluid">
                            <div class="card-body p-4 text-center">
                                <h5 class="mb-0 mt-4">{{$blog->user->name}}</h5>
                                <p>Blog Yazarı</p>
                               

                                <ul class="list-inline author-socials">
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
                                    </li>
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-twitter text-muted"></i></a>
                                    </li>
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
                                    </li>
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-pinterest text-muted"></i></a>
                                    </li>
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-behance text-muted"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                            <h5>Latest Posts</h5>

                            <div class="media border-bottom py-3">
                                <a href="#"><img class="mr-4" src="images/blog/bt-3.jpg" alt=""></a>
                                <div class="media-body">
                                    <h6 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h6>
                                    <span class="text-sm text-muted">03 Mar 2018</span>
                                </div>
                            </div>

                            <div class="media border-bottom py-3">
                                <a href="#"><img class="mr-4" src="images/blog/bt-2.jpg" alt=""></a>
                                <div class="media-body">
                                    <h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
                                    <span class="text-sm text-muted">03 Mar 2018</span>
                                </div>
                            </div>

                            <div class="media py-3">
                                <a href="#"><img class="mr-4" src="images/blog/bt-1.jpg" alt=""></a>
                                <div class="media-body">
                                    <h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper
                                            sagittis</a></h6>
                                    <span class="text-sm text-muted">03 Mar 2018</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget bg-white rounded tags p-4 mb-3">
                            <h5 class="mb-4">Tags</h5>

                            <a href="#">Web</a>
                            <a href="#">agency</a>
                            <a href="#">company</a>
                            <a href="#">creative</a>
                            <a href="#">html</a>
                            <a href="#">Marketing</a>
                            <a href="#">Social Media</a>
                            <a href="#">Branding</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
