@extends('layout', ['title'=>'Data jadwal'])

@section('menu')
	<a href="{{ url('/jadwal') }}" class="item">Data Jadwal</a>
	<a href="{{ url('/jadwal/create') }}" class="item">Tambah Jadwal</a>
	<a href="{{ url('/jam') }}" class="item"><i class="alarm icon"></i>Set Jam</a>
	<a href="{{ url('/hari') }}" class="item"><i class="calendar icon"></i>Set Hari</a>
@stop


@section('content')
	{!! Form::open(['url'=>'/jadwal/store', 'method'=>'post', 'files'=>true, 'class'=>'ui segment orange form']) !!}
		@include('jadwal.form', ['some' => 'data'])
		{!! Form::submit('Kirim', ['class'=>'ui primary button']) !!}
	</div>	
	{!! Form::close() !!}
@stop
