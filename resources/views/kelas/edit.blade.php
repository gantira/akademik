@extends('layout', [])

@section('menu')
	<a href="{{ url('/kelas') }}" class="item">Data kelas</a>
	<a href="{{ url('/kelas/create') }}" class="item">Tambah kelas</a>
@stop

@section('content')
	
	{!! Form::model($kelas, ['url'=>'/kelas/update/'.$kelas->id, 'method'=>'patch', 'files'=>true, 'class'=>'ui segment orange form']) !!}
		
		@include('kelas.form', ['some' => 'data'])

		{!! Form::submit('Update', ['class'=>'ui secondary button']) !!}

	{!! Form::close() !!}

@stop
