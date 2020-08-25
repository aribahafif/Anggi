@extends('admin.default')

@section('page-header')
	FAQ <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['Admin\FaqController@update', $item->id],
			'method' => 'put',
			'files' => true
		])
	!!}

		@include('admin.faq.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
