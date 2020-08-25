@extends('web.layouts.app')

@section('title','Blog')

@section('body')

<!-- banner -->
<section class="inner-banner">
	<div class="container">
	</div>
</section>
<!-- //banner -->

<!-- Blog -->
<section class="latest-news py-5">
	<div class="container py-md-5">
		<div class="heading">
			<h3 class="head text-center">All Blog Post</h3>
			<p class="my-3 head text-center">Berisi artikel menarik terkait penyakit THT (Telinga, Hidung dan Tenggorokan) dan informasi lainnya</p>
		</div>
		<div class="row news_grids mx-auto mt-5 pt-3">
            @foreach($article as $item)
			<div class="col-lg-4 col-md-6">
				<div class="blog-post mb-4">
					<div class="bg-light p-4">
						<h4 class="">{{$item->title}}</h4>
					</div>
					<img src="{{asset($item->image)}}" alt="{{$item->title}}" width="350px" class="img-fluid"/>
                    <p style="padding:10px;text-align: justify;">{!! substr(strip_tags($item->description),0,200).'...' !!}</p>
				</div>
				<a href="{{ route('blog.detail', $item->slug) }}"> Read Story </a>
			</div>
            @endforeach
		</div>
	</div>
</section>
<!-- //Blog -->

@endsection
