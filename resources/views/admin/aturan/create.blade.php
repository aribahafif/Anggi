@extends('admin.default')

@section('page-header')
	Aturan <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('css')
<style>
    .nav-tabs a{
        color:#72777a;
    }
    .tab-content {
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        padding: 10px;
    }
</style>
@endsection

@section('content')
	{!! Form::open([
			'action' => ['Admin\AturanController@store'],
			'files' => true
		])
	!!}

		@include('admin.aturan.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
