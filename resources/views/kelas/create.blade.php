@extends('layout', ['title'=>'Data kelas'])

@section('menu')
	<a href="{{ url('/kelas') }}" class="item">Data kelas</a>
	<a href="{{ url('/kelas/create') }}" class="item">Tambah kelas</a>
@stop


@section('content')
	{!! Form::open(['url'=>'/kelas/store', 'method'=>'post', 'files'=>true, 'class'=>'ui segment orange form']) !!}
		@include('kelas.form', ['some' => 'data'])

		{!! Form::submit('Kirim', ['class'=>'ui primary button']) !!}
	</div>	
	{!! Form::close() !!}
@stop
