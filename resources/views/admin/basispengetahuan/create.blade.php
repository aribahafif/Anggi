@extends('admin.default')

@section('page-header')
	Basis Pengetahuan <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\BasisPengetahuanController@store'],
			'files' => true
		])
	!!}

		@include('admin.basispengetahuan.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
