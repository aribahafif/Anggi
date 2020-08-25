@extends('admin.default')

@section('page-header')
    Riwayat Konsultasi
@endsection

@section('content')

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Gejala</th>
                    <th>Penyakit</th>
                    <th>Nilai CF</th>
                    <th>Presentase Hasil</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($items  as $i => $item)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                        @php $i=1; @endphp
                        @foreach(json_decode($item->gejala, true) as $gt)
                            @foreach($gejala as $g)
                                @if($gt == $g->id) 
                                    @if($i==1)
                                        {{$g->name}}
                                    @else
                                        <b> AND </b>{{$g->name}}
                                    @endif
                                    @php $i++; @endphp
                                @endif
                            @endforeach
                        @endforeach
                        </td>
                        
                        <td>
                        @php $p=1; @endphp
                        @foreach($item->diagnosa->sortByDesc('cf') as $d)
                            @if($p==1)
                                @foreach($penyakit as $pe)
                                    @if($d->id_penyakit == $pe->id) 
                                        {{$pe->name}}
                                    @endif
                                @endforeach
                            @endif
                            @php $p++; @endphp
                        @endforeach
                        </td>
                        <td>
                        @php $cf=1; @endphp
                        @foreach($item->diagnosa->sortByDesc('cf') as $d)
                            @if($cf==1)
                                {{$d->cf}}
                            @endif
                            @php $cf++; @endphp
                        @endforeach
                        </td>
                        <td>
                        @php $ph=1; @endphp
                        @foreach($item->diagnosa->sortByDesc('cf') as $d)
                            @if($ph==1)
                                {{$d->cf*100}}%
                            @endif
                            @php $ph++; @endphp
                        @endforeach
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route(ADMIN . '.riwayat.show', $item->id) }}" title="Detail" class="btn btn-success btn-sm"><span class="ti-eye"></span></a>
                                </li>

                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

@endsection
