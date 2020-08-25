@extends('web.layouts.app')

@section('title','Blog')

@section('body')

<!-- single page -->
<section class="single py-5">
	<div class="container py-md-3">
		<div class="col-lg-9 matter mt-5 mx-auto">
			<h4>{{$item->title}}</h4><small>Diposting tanggal: {{$tgl}}</small><br><br>
            <center><img src="{{asset($item->image)}}" alt="{{$item->title}}" width="350px" class="img-fluid"/></center>
			<p class="my-4">{!! $item->description !!}</p>
		</div>	
	</div>	
</section>
<!-- //single page -->

@endsection