@extends('layout', [])

@section('menu')
	<a href="{{ url('/siswa') }}" class="item">Data Siswa</a>
@stop

@section('content')
	
	{!! Form::model($siswa, ['url'=>'/siswa/update/'.$siswa->id, 'method'=>'patch', 'files'=>true, 'class'=>'ui segment red form']) !!}
		
		@include('siswa.form', ['some' => 'data'])

		{!! Form::submit('Update', ['class'=>'ui secondary button']) !!}

	{!! Form::close() !!}

@stop
