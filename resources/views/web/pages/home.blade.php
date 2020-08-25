@extends('web.layouts.app')

@section('title','Home')

@section('body')

<!-- banner -->
<section class="banner">
	<div class="container">
		<div class="row banner-grids">
			<div class="col-lg-6 banner-info">
				<h2 class="">Sistem Pakar THT</h2>
				<h3 class="mb-3">Certainty Factor</h3>
				<p class="mb-4">Sistem Pakar Diagnosa Penyakit THT (Telinga, Hidung dan Tenggorokan) pada Balita menggunakan metode Certainty Factor</p>
				<a href="{{route('diagnosa')}}">Diagnosa</a>
			</div>
			<div class="col-lg-6 col-md-9 banner-image">
				<img src="{{asset('web/images/medical1.png')}}" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</section>
<!-- //banner -->

<!-- banner bottom -->
<section class="banner-bottom py-5">
	<div class="container py-md-3">
		<div class="heading">
			<h3 class="head text-center">Panduan Tata Cara Diagnosa Penyakit</h3>
			<p class="my-3 head text-center">Sistem pakar diagnosa penyakit THT (Telinga, Hidung dan Tenggorokan) merupakan sistem yang mampu melakukan diagnosa penyakit THT berdasarkan gejala yang ada pada tubuh manusia yang dapat dirasakan. Untuk melakukan diagnosa penyakit ada beberapa tatacara dan aturan yang harus dilakukan.</p>
		</div>
		<div class="row bottom_grids text-center mt-5 pt-3">
			<div class="col-lg-4 col-md-6">
				<img src="{{asset('web/images/tht2.png')}}" width="100px" height="100px" class="img-fluid"/>
				<h3 class="my-3">Bagaimana Cara Melakukan Diagnosa Penyakit THT Pada Balita?</h3>
				<p class="mb-4"> Diagnosa penyakit dapat dilakukan apabila telah memasukkan  gejala minimal 1 gejala atau lebih, dikarenakan untuk mendiagnosa sebuah penyakit dibutuhkan sebuah gejala agar penyakit dapat didiagnosa.</p>
			</div>
            <div class="col-lg-4">
				<img src="{{asset('web/images/tht3.png')}}" width="100px" height="100px" class="img-fluid"/>
				<h3 class="my-3">Apakah Diagnosa Penyakit Pada Sistem Sudah 100% Benar?</h3>
				<p class="mb-4"> Diagnosa penyakit pada sistem dilakukan dengan perhitungan matematis yang bersumber dari pakar/dokter ahli THT guna melakukan uapaya dini terhadap penyakit tersebut, tetapi akan lebih baik jika melakukan konsultasi ulang bersama dokter ahli THT agar masalah yang anda hadapi dapat ditangani lebih baik.</p>
			</div>
			<div class="col-lg-4 col-md-6">
				<img src="{{asset('web/images/tht1.png')}}" width="100px" height="100px" class="img-fluid"/>
				<h3 class="my-3">Bagaimana Jika Gejala Yang Anda Rasakan Tidak Terdapat Di Sistem?</h3>
				<p class="mb-4">Pada saat inihanya terdapat beberapa gejala dan penyakit yang dapat didiagnosa oleh sistem, maka dari itu proses diagnosa penyakit hanya bisa dilakukan jika gejala dan penyakit sudah terdaftar pada sistem.</p>
			</div>
		</div>
	</div>
</section>
<!-- banner bottom -->

<!-- latest news -->
<section class="latest-news py-5">
	<div class="container py-md-5">
		<div class="heading">
			<h3 class="head text-center">Blog</h3>
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
<!-- //latest news -->

@endsection