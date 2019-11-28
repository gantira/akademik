@extends('layout', [])

@section('menu')
	<a href="{{ url('/matapelajaran') }}" class="item">Data Matapelajaran</a>
	<a href="{{ url('/matapelajaran/create') }}" class="item">Tambah Matapelajaran</a>

@stop

@section('content')
	
	{!! Form::model($matapelajaran, ['url'=>'/matapelajaran/update/'.$matapelajaran->id, 'method'=>'patch', 'files'=>true, 'class'=>'ui segment black form']) !!}
		
		@include('matapelajaran.form', ['some' => 'data'])

		{!! Form::submit('Update', ['class'=>'ui secondary button']) !!}

	{!! Form::close() !!}

@stop
