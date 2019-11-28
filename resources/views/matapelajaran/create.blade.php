@extends('layout', ['title'=>'Data Matapelajaran'])

@section('menu')
	<a href="{{ url('/matapelajaran') }}" class="item">Data Matapelajaran</a>
	<a href="{{ url('/matapelajaran/create') }}" class="item">Tambah Matapelajaran</a>
@stop

@section('content')

	{!! Form::open(['url'=>'/matapelajaran/store', 'method'=>'post', 'files'=>true, 'class'=>'ui segment black form']) !!}
  		
  		@include('matapelajaran.form', ['some' => 'data'])

  	{!! Form::submit('Kirim', ['class'=>'ui primary button']) !!}

 	{!! Form::close() !!}
 	
@stop
