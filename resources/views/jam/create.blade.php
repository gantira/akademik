@extends('layout', ['title'=>'Data jam'])

@section('menu')
	<a href="{{ url('/jadwal') }}" class="item">Data Jadwal</a>
	<a href="{{ url('/jam') }}" class="item">Data Jam</a>
	<a href="{{ url('/jam/create') }}" class="item">Tambah Jam</a>
@stop


@section('content')
	{!! Form::open(['url'=>'/jam/store', 'method'=>'post', 'files'=>true, 'class'=>'ui segment teal form']) !!}
		@include('jam.form', ['some' => 'data'])

		{!! Form::submit('Kirim', ['class'=>'ui primary button']) !!}
	</div>	
	{!! Form::close() !!}
@stop
