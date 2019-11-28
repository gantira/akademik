@extends('layout', [])

@section('menu')
	<a href="{{ url('/tahunajaran') }}" class="item">Data tahunajaran</a>
	<a href="{{ url('/tahunajaran/create') }}" class="item">Tambah tahunajaran</a>
@stop

@section('content')
	
	{!! Form::model($tahunajaran, ['url'=>'/tahunajaran/update/'.$tahunajaran->id, 'method'=>'patch', 'files'=>true, 'class'=>'ui segment teal form']) !!}
		
		@include('tahunajaran.form', ['some' => 'data'])

		{!! Form::submit('Update', ['class'=>'ui secondary button']) !!}

	{!! Form::close() !!}

@stop
