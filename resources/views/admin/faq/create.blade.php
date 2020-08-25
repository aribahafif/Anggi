@extends('admin.default')

@section('page-header')
	FAQ <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['Admin\FaqController@store'],
			'files' => true
		])
	!!}

		@include('admin.faq.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
