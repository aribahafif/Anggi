@extends('web.layouts.app')

@section('title','Hasil Diagnosa')

@section('body')

@section('css')
<style>
    .button-cetak {
        background: #c33046;
        padding: 11px 30px;
        font-size: 17px;
        letter-spacing: 1px;
        color: #fff;
        border-radius: 5px;
        display: inline-block;
    }

    .button-diagnosa {
        background: #30c39e;
        padding: 11px 30px;
        font-size: 17px;
        letter-spacing: 1px;
        color: #fff;
        border-radius: 5px;
        display: inline-block;
    }
</style>
@endsection

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
			<h3 class="head text-center">Hasil Diagnosa Penyakit</h3>
			<p class="my-3 head text-center"> Kesimpulan hasil diagnosa terdiri dari kesimpulan secara umum yang menampilkan hasil diagnosa penyakit dari gejala yang dialami serta menampilkan hsail dari nilai CF (nilai kepastian) dan presentase dari diagnosa penyakit yang dihitung dengan menggunakan metode <i>certainty factor</i> berdasarkan pengetahuan pakar/dokter</p>
		</div>
		<div class="contact-form mt-5">
            <div class="card">
                <div class="card-header">Informasi Balita</div>
                <div class="card-body">
                    <table class="table table-striped table-borderless" cellspacing="0" border="0" width="100%">
                        <tbody>
                            <tr>
                                <th width="15%">Nama</th>
                                <th width="2%">:</th>
                                <th width="83%">{{ $item->nama }}</th>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <th>:</th>
                                <th>{{ $birthday }}</th>
                            </tr>
                            <tr>
                                <th>Umur</th>
                                <th>:</th>
                                <th>{{ $age }}</th>
                            </tr>
                            <tr>
                                <th>Tinggi Badan</th>
                                <th>:</th>
                                <th>{{ $item->tb }} cm</th>
                            </tr>
                            <tr>
                                <th>Berat Badan</th>
                                <th>:</th>
                                <th>{{ $item->bb }} kg</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Gejala Terpilih</div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="95%">Gejala</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gejalaterpilih as $i => $gt)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>
                                    @foreach($gejala as $g)
                                        @if($gt == $g->id)
                                            {{$g->name}}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <!-- <div class="card">
                <div class="card-header">Hasil Diagnosa</div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="60%">Diagnosa Penyakit</th>
                                <th width="15%">Nilai CF</th>
                                <th width="20%">Tingkat Kepercayaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($diagnosa as $i => $d)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>
                                    @foreach($penyakit as $p)
                                        @if($p->id == $d->id_penyakit)
                                            {{$p->name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $d->cf }}</td>
                                <td>{{ $d->cf*100 }}%</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <br> -->
            <div class="card">
                <div class="card-header">Kesimpulan</div>
                <div class="card-body">
                    <p>Berdasarkan gejala yang telah dimasukkan, balita dengan nama <b>{{ $item->nama }}</b> memiliki kemungkinan menderita penyakit <b>{{ $kesimpulan_p->name }}</b> dengan persentase sebesar <b>{{ $kesimpulan->cf*100 }}%</b></p>
                </div>
            </div>
		</div>
        <br>
	</div>
</section>
<!-- Diagnosa -->

@endsection
