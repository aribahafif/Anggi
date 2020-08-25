@extends('admin.default')

@section('content')

    <div class="row gap-20">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item  w-100">
            <br><br>
            <h1>Selamat Datang, {{ auth()->user()->name }} !!</h1>
            <h2>Sistem Pakar Diagnosa Penyakit THT (Telinga, Hidung dan Tenggorokan) pada Balita menggunakan metode Certainty Factor.</h2>
    </div>

@endsection
