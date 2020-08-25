@extends('admin.default')

@section('page-header')
    Basis Pengetahuan <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.basispengetahuan.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
    </div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Gejala</th>
                    <th>Penyakit</th>
                    <th>Nilai MB</th>
                    <th>Nilai MD</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($items  as $item)
                    <tr>
                        <td>{{ !empty($item->kode) ? $item->kode : '-' }}</td>
                        <td>{{ !empty($item->id_gejala) ? $item->gejala->name : '-' }}</td>
                        <td>{{ !empty($item->id_penyakit) ? $item->penyakit->name : '-'}}</td>
                        <td>{{ !empty($item->mb) ? $item->mb : '-' }}</td>
                        <td>{{ !empty($item->md) ? $item->md : '-' }}</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route(ADMIN . '.basispengetahuan.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                <li class="list-inline-item">
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.basispengetahuan.destroy', $item->id),
                                        'method' => 'DELETE',
                                        ])
                                    !!}

                                        <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>

                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

@endsection
