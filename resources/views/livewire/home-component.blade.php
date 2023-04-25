<main>

<!-- Header Start --> 



<!-- Header Close --> 

<div class="main-wrapper ">
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Tüm Bloglar</span>
          <h1 class="text-capitalize mb-4 text-lg">Laravel Blog Uygulaması</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Anasayfa</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Blog Yazıları</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap bg-gray">
    <div class="container">
        <div class="row">

			@foreach ($blog as $item)
				
		
	<div class="col-lg-6 col-md-6 mb-5">
		<div class="blog-item">
			{{-- <img src="images/blog/1.jpg" alt="" class="img-fluid rounded"> --}}

			<div class="blog-item-content bg-white p-5">
				<div class="blog-item-meta bg-gray py-1 px-2">
					{{-- <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span> --}}
					<span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>Yorumlar</span>
					<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> {{$item->created_at->diffForHumans()}}</span>
				</div> 

				<h3 class="mt-3 mb-3"><a href="/">{{$item->title}}</a></h3>
				<p class="mb-4">{!! Str::limit(strip_tags($item->description), $limit = 50, $end = '...') !!}</p>

				<a href="{{route('blog.detail' , $item->slug )}}" class="btn btn-small btn-main btn-round-full">Detay</a>
			</div>
		</div>
	</div>
	@endforeach
	
</div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-6 text-center">
            	<nav class="navigation pagination d-inline-block">
	                <div class="nav-links">
	                    <a class="prev page-numbers" href="#">Prev</a>
	                    <span aria-current="page" class="page-numbers current">1</span>
	                    <a class="page-numbers" href="#">2</a>
	                    <a class="next page-numbers" href="#">Next</a>
	                </div>
	            </nav>
            </div>
        </div>
    </div>
</section>

<!-- footer Start -->

   
    </div>
</main>