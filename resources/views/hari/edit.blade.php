@extends('layout', [])

@section('menu')
	<a href="{{ url('/jadwal') }}" class="item">Data Jadwal</a>
	<a href="{{ url('/hari') }}" class="item">Data hari</a>
	<a href="{{ url('/hari/create') }}" class="item">Tambah hari</a>
@stop

@section('content')
	
	{!! Form::model($hari, ['url'=>'/hari/update/'.$hari->id, 'method'=>'patch', 'files'=>true, 'class'=>'ui segment teal form']) !!}
		
		@include('hari.form', ['some' => 'data'])

		{!! Form::submit('Update', ['class'=>'ui secondary button']) !!}

	{!! Form::close() !!}

@stop
