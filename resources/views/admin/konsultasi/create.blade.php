@extends('admin.default')

@section('page-header')
	Konsultasi
@stop


@section('content')
	{!! Form::open([
			'action' => ['Admin\KonsultasiController@store'],
			'files' => true
		])
	!!}

		@include('admin.konsultasi.form')

		<button type="submit" class="btn btn-primary">Process</button>

	{!! Form::close() !!}

@stop
