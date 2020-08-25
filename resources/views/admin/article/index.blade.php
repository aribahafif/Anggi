@extends('admin.default')

@section('page-header')
    Article <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.article.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
    </div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th width="40%">Description</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @php $no = 1; @endphp
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{!! !empty($item->image) ? '<img width="160" src="'.asset($item->image).'">' : '-' !!}</td>                        
                        <td>{{ !empty($item->title) ? $item->title : '-' }}</td>
                        <td style="text-align:left;">{!! !empty($item->description) ? substr(strip_tags($item->description),0,200).'...' : '-' !!}</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route(ADMIN . '.article.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                <li class="list-inline-item">
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.article.destroy', $item->id),
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
