@extends('layout', [])

@section('menu')
	<a href="{{ url('/jadwal') }}" class="item">Data Jadwal</a>
	<a href="{{ url('/jam') }}" class="item">Data jam</a>
	<a href="{{ url('/jam/create') }}" class="item">Tambah jam</a>
@stop

@section('content')
	
	{!! Form::model($jam, ['url'=>'/jam/update/'.$jam->id, 'method'=>'patch', 'files'=>true, 'class'=>'ui segment teal form']) !!}
		
		@include('jam.form', ['some' => 'data'])

		{!! Form::submit('Update', ['class'=>'ui secondary button']) !!}

	{!! Form::close() !!}

@stop
