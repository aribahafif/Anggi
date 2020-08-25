@extends('admin.default')

@section('page-header')
	Gejala <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['Admin\GejalaController@update', $item->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.gejala.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
