@extends('admin.default')

@section('page-header')
	Basis Pengetahuan <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['Admin\BasisPengetahuanController@update', $item->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.basispengetahuan.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
