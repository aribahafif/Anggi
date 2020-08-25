@extends('admin.default')

@section('page-header')
	Penyakit <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['Admin\PenyakitController@update', $item->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.penyakit.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
