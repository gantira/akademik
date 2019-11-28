@extends('layout', [])

@section('menu')
	<a href="{{ url('/guru') }}" class="item">Data Guru</a>
	<a href="{{ url('/guru/create') }}" class="item">Tambah Guru</a>

@stop

@section('content')
	
	{!! Form::model($guru, ['url'=>'/guru/update/'.$guru->id, 'method'=>'patch', 'files'=>true, 'class'=>'ui segment purple form']) !!}
		
		@include('guru.form', ['some' => 'data'])

		{!! Form::submit('Update', ['class'=>'ui secondary button']) !!}

	{!! Form::close() !!}

@stop
