<main>


    <div class="main-wrapper ">
        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Tüm Bloglar</span>
                            <h1 class="text-capitalize mb-4 text-lg">Laravel Blog Uygulaması</h1>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="/" class="text-white">Anasayfa</a></li>
                                <li class="list-inline-item"><span class="text-white">/</span></li>
                                <li class="list-inline-item"><a href="#" class="text-white-50">Blog Yazıları</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if (Auth::check())
            <section class="section blog-wrap bg-gray">
                <div class="container">
                    <div class="row">

                        @foreach ($blog as $item)
                            <div class="col-lg-6 col-md-6 mb-5">
                                <div class="blog-item">
                                 

                                    <div class="blog-item-content bg-white p-5">
                                        <div class="blog-item-meta bg-gray py-1 px-2">
                                           
                                            <span class="text-muted text-capitalize mr-3"><i
                                                    class="ti-comment mr-2"></i>Yorumlar: {{ $item->comments()->count()}}</span>
                                            <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i>
                                                {{ $item->created_at->diffForHumans() }}</span>
                                                <span class="text-black text-capitalize mr-3"><i class="bi bi-clock"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                                      </svg>
                                                    {{ $item->date }}</span>

          

                                        </div>

                                        <h3 class="mt-3 mb-3"><a href="/">{{ $item->title }}</a></h3>
                                        <p class="mb-4">{!! Str::limit(strip_tags($item->description), $limit = 50, $end = '...') !!}</p>

                                        <a href="{{ route('blog.detail', $item->slug) }}"
                                            class="btn btn-small btn-main btn-round-full">Detay</a>



                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                @else
                    <section class="contact-form-wrap section">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <ul class="p-0 m-0" style="list-style: none;">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if(session()->has('message'))
                                    <p class="alert alert-danger"> {{ session()->get('message') }}</p>
                                    @endif
                                 



                                    <form method="post" action="{{ route('auth.login') }}" enctype="multipart/form-data"
                                        class="center-block g-width-350--xs g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-60--xs g-radius--4">

                                        @csrf
                                        <div class="g-text-center--xs g-margin-b-40--xs">
                                            <h2 class="g-font-size-30--xs g-color--white">Kullanıcı Girişi</h2>
                                        </div>
                                        <div class="g-margin-b-30--xs">
                                            <input type="email" class="form-control s-form-v3__input" name="email"
                                                :value="old('email')" placeholder="* Email Adresinizi Giriniz"  autofocus>
                                        </div>
                                        
                                        <div class="g-margin-b-30--xs">
                                            <input type="password" class="form-control s-form-v3__input" name="password"
                                                placeholder="* Şifrenizi Giriniz"  autocomplete="current-password">
                                        </div>
                                        
                                        <div class="g-text-center--xs">
                                            <button type="submit" class="btn btn-main">GİRİŞ</button>


                                        </div>
                                        <div class="g-text-center--xs">


                                        </div>
                                    </form>
                                </div>

                                <div class="col-lg-5 col-sm-12">

                                    <div class="contact-content pl-lg-5 mt-5 mt-lg-0">

                                        <form action="{{ route('register') }}" method="POST"
                                            class="register-form inputs-border inputs-bg">
                                            @csrf

                                            <div class="form-group">
                                                <div class="required">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Ad - Soyad">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="required">
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="Email Adresi">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="required">
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Şifre">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="required">
                                                    <input type="password" name="password_confirmation"
                                                        class="form-control" placeholder="Şifreyi Tekrar Giriniz">
                                                </div>
                                            </div>
                                            <div class="form-group text-right">
                                                <button class="btn btn-primary">Üye Ol</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


        @endif



    </div>
    </section>




    </div>
</main>
