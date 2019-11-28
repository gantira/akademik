@extends('layout', ['title'=>'Data Guru'])

@section('menu')
	<a href="{{ url('/guru') }}" class="item">Data Guru</a>
	<a href="{{ url('/guru/create') }}" class="item">Tambah Guru</a>
@stop

@section('content')

	{!! Form::open(['url'=>'/guru/store', 'method'=>'post', 'files'=>true, 'class'=>'ui segment purple form']) !!}
  		
  		@include('guru.form', ['some' => 'data'])

  	{!! Form::submit('Kirim', ['class'=>'ui primary button']) !!}

 	{!! Form::close() !!}
 	
@stop

