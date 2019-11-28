@extends('layout', [])

@section('menu')
	<a href="{{ url('/jadwal') }}" class="item">Data Jadwal</a>
	<a href="{{ url('/jadwal/create') }}" class="item">Tambah Jadwal</a>
@stop

@section('content')
	
	{!! Form::model($jadwal, ['url'=>'/jadwal/update/'.$jadwal->id, 'method'=>'patch', 'files'=>true, 'class'=>'ui segment orange form']) !!}
		
		@include('jadwal.form', ['some' => 'data'])

		{!! Form::submit('Update', ['class'=>'ui secondary button']) !!}

	{!! Form::close() !!}

@stop
