@extends('web.layouts.app')

@section('title','Diagnosa')

@section('body')

<!-- banner -->
<section class="inner-banner">
	<div class="container">
	</div>
</section>
<!-- //banner -->


<!-- Diagnosa -->
<section class="contact py-5">
	<div class="container py-md-3">
		<div class="heading">
			<h3 class="head text-center">Diagnosa Penyakit</h3>
			<p class="my-3 head text-center"> Silahkan masukkan data diri Balita yang akan diperiksa, pastikan anda menisi semua tabel dengan benar.<br>
            Jangan lupa memasukkan semua gejala penyakit yang sedang dialami.<br></p>
		</div>
		<div class="contact-form mt-5">
			<div class="row">
				<div class="col-md-11 mx-auto">
					<form name="contactform" id="contactform" action="{{route('diagnosa.submit')}}" method="post"  novalidate="novalidate">
                        @csrf
                        <input name="id" type="hidden" value="{{$id}}">
						<div class="form-group">
						  <label>Name</label>
						  <input type="text" class="form-control" id="nama" placeholder="Ketikkan Nama" name="nama" class="@error('nama') is-invalid @enderror" required>
                            @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
						</div>
						<div class="form-group">
						  <label>Tanggal Lahir</label>
						  <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" class="@error('tanggal_lahir') is-invalid @enderror" required>
                            @error('tanggal_lahir')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if(!empty($msgUmur))
                                <span class="text-danger">{{ $msgUmur }}</span>
                            @endif
						</div>

						<div class="form-group">
						  <label>Tinggi Badan (cm)</label>
						  <input type="number" class="form-control" id="tinggi_badan" placeholder="Tinggi Badan" name="tinggi_badan" class="@error('tinggi_badan') is-invalid @enderror" required>
                            @error('tinggi_badan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
						</div>
						<div class="form-group">
						  <label>Berat Badan (kg)</label>
						  <input type="number" class="form-control" id="berat_badan" placeholder="Berat Badan" name="berat_badan" class="@error('berat_badan') is-invalid @enderror" required>
                            @error('berat_badan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
						</div>
						<div class="form-group">
						  <label>Pilih gejala yang dialami</label>
						  <div class="row" style="margin:10px">
                                <div class="col-md-6">
                                @php $i=0; @endphp
                                @foreach($gejala as $g)
                                    @if($i < $jmlgejala)
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="g{{$g->id}}" name="gejala[]" value="{{$g->id}}" class="@error('gejala') is-invalid @enderror">
                                            <label class="custom-control-label" for="g{{$g->id}}">{{$g->name}}</label>
                                        </div>
                                        @php $i++; @endphp
                                    @else
                                    </div>
                                    <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="g{{$g->id}}" name="gejala[]" value="{{$g->id}}" class="@error('gejala') is-invalid @enderror">
                                            <label class="custom-control-label" for="g{{$g->id}}">{{$g->name}}</label>
                                        </div>
                                        @php $i=1; @endphp
                                    @endif
                                @endforeach
                                </div>
                            </div>
                         @error('gejala')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Diagnosa -->

@endsection
