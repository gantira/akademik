@extends('layout', ['title'=>'Data tahunajaran'])

@section('menu')
	<a href="{{ url('/tahunajaran') }}" class="item">Data tahunajaran</a>
	<a href="{{ url('/tahunajaran/create') }}" class="item">Tambah tahunajaran</a>
@stop


@section('content')
	{!! Form::open(['url'=>'/tahunajaran/store', 'method'=>'post', 'files'=>true, 'class'=>'ui segment teal form']) !!}
		@include('tahunajaran.form', ['some' => 'data'])

		{!! Form::submit('Kirim', ['class'=>'ui primary button']) !!}
	</div>	
	{!! Form::close() !!}
@stop
