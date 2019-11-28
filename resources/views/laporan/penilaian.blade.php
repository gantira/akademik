@extends('layout', [])

@section('menu')
	<a href="{{ url('/laporan/penilaian') }}" class="item">Data Laporan Nilai Siswa</a>
@stop

@section('content')
	
	<div class="ui right aligned basic segment">
		{!! Form::open(['url'=>'/laporan/cetaknilai']) !!}
			{{ Form::select('kelas_id', App\Kelas::pluck('nama_kelas', 'id'), null, ['placeholder'=>'Kelas', 'class'=>'ui dropdown']) }}
			{{-- {{ Form::select('siswa_id', App\Siswa::pluck('nis', 'id'), null, ['placeholder'=>'Nis', 'class'=>'ui dropdown']) }} --}}
			<button class="ui teal button">Cetak</button>
		{!! Form::close() !!}
	</div>

	<table class="ui green selectable table">
		<thead>
			<tr>
				<th></th>
				<th>NIS</th>
				<th>Nama Siswa</th>
				<th>Kelas</th>
				<th>Matapelajaran</th>
				<th>Tugas</th>
				<th>Quiz</th>
				<th>UTS</th>
				<th>UAS</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($penilaian as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td>{{ $row->siswa->nis }}</td>
				<td>{{ $row->siswa->nama_lengkap }}</td>
				<td>{{ $row->kelas->nama_kelas }}</td>
				<td>{{ $row->matapelajaran->nama_matapelajaran }}</td>
				<td>{{ $row->tugas }}</td>
				<td>{{ $row->quiz }}</td>
				<td>{{ $row->uts }}</td>
				<td>{{ $row->uas }}</td>
			</tr>
		@endforeach
		</tbody>
		<tfoot>
			<tr>
				<th colspan="9"></th>
			</tr>
		</tfoot>
	</table>
@stop
