@extends('layout', [])

@section('menu')
	<a href="{{ url('/pendaftaran') }}" class="item">Data Pendaftaran Siswa Baru</a>
	<a href="{{ url('/pendaftaran/create') }}" class="item">Tambah Siswa</a>
	<a href="{{ url('/pendaftaran/setting') }}" class="item">Setting Penerimaan Siswa</a>
	<a href="{{ url('/pendaftaran/lulus') }}" class="item">Daftar Siswa Lulus</a>
@stop

@section('content')
	<div class="ui warning message">
	  <i class="close icon"></i>
	  <div class="header">
	    PETUNJUK PENGISIAN
	  </div>
	  <ol class="list">
	  	<li>Penulisan nama, tempat dan tanggal lahir serta nama orang tua harus sesuai dengan Nama yang tercantum pada ijazah SMP dan Akte Kelahiran/ Kenal lahir.</li>
 	  	<li>Isilah dengan lengkap dan benar data tersebut di bawah pada kolom yang disediakan</li>
	  </ol>
	</div>

	{!! Form::open(['url'=>'/pendaftaran/store', 'method'=>'post', 'files'=>true, 'class'=>'ui black form segment']) !!}
		
		@include('pendaftaran.form', ['some' => 'data'])

		{!! Form::submit('Kirim', ['class'=>'ui primary button']) !!}

	{!! Form::close() !!}


@stop
