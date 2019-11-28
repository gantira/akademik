@extends('layout', [])

@section('menu')
	<a href="{{ url('/pendaftaran') }}" class="item">Data Pendaftaran Siswa Baru</a>
	<a href="{{ url('/pendaftaran/create') }}" class="item">Tambah Siswa</a>
	<a href="{{ url('/pendaftaran/setting') }}" class="item">Setting Penerimaan Siswa</a>
	<a href="{{ url('/pendaftaran/lulus') }}" class="item">Daftar Siswa Lulus</a>
@stop

@section('content')
	
	{!! Form::open(['url'=>'/pendaftaran/setting', 'method'=>'post']) !!}
	<div class="ui form segment">
		<div class="field">
			<label>Jumlah Penerimaan Siswa</label>
			{!! Form::text('jumlah_penerimaan', $setting->jumlah_penerimaan, ['placeholder'=>'Jumlah Penerimaan Siswa']) !!}
		</div>

		<div class="field">
			<label>Minimal Nilai Kelulusan</label>
			{!! Form::text('nilai_kelulusan', $setting->nilai_kelulusan, ['placeholder'=>'Minimal Nilai Kelulusan']) !!}
		</div>

		<div class="field">
			{!! Form::submit('Submit', ['class'=>'ui secondary button']) !!}
		</div>
	</div>
	{!! Form::close() !!}
@stop

@push('scripts')
	<!-- Ckeditor -->
    {{ Html::script('ckeditor/ckeditor.js') }}
@endpush