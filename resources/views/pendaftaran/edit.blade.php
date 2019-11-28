@extends('layout', [])

@section('menu')
	<a href="{{ url('/pendaftaran') }}" class="item">Data Pendaftaran Siswa Baru</a>
	<a href="{{ url('/pendaftaran/create') }}" class="item">Tambah Siswa</a>
	<a href="{{ url('/pendaftaran/setting') }}" class="item">Setting Penerimaan Siswa</a>
	<a href="{{ url('/pendaftaran/lulus') }}" class="item">Daftar Siswa Lulus</a>
@stop

@section('content')
	
	{!! Form::model($pendaftaran, ['url'=>'/pendaftaran/update/'.$pendaftaran->id, 'method'=>'patch', 'files'=>true, 'class'=>'ui segment teal form']) !!}
		
		@include('pendaftaran.form', ['some' => 'data'])

		{!! Form::submit('Update', ['class'=>'ui secondary button']) !!}

	{!! Form::close() !!}

@stop
