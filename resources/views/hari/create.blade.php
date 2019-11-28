@extends('layout', ['title'=>'Data hari'])

@section('menu')
	<a href="{{ url('/jadwal') }}" class="item">Data Jadwal</a>
	<a href="{{ url('/hari') }}" class="item">Data Hari</a>
	<a href="{{ url('/hari/create') }}" class="item">Tambah Hari</a>
@stop


@section('content')
	{!! Form::open(['url'=>'/hari/store', 'method'=>'post', 'files'=>true, 'class'=>'ui segment teal form']) !!}
		@include('hari.form', ['some' => 'data'])

		{!! Form::submit('Kirim', ['class'=>'ui primary button']) !!}
	</div>	
	{!! Form::close() !!}
@stop
