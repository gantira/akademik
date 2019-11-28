@extends('layout', [])

@section('menu')
	<a href="{{ url('/laporan/absensi') }}" class="item">Laporan Absensi Siswa</a>
@stop

@section('content')
	
	<div class="ui right aligned basic segment">
		{!! Form::open(['url'=>'/laporan/cetakabsensi']) !!}
			{{ Form::select('kelas_id', App\Kelas::pluck('nama_kelas', 'id'), null, ['placeholder'=>'Kelas', 'class'=>'ui dropdown']) }}
			<button class="ui teal button">Cetak</button>
		{!! Form::close() !!}
		</div>

	<table class="ui red selectable table" id="">
		<thead>
			<tr>
				<th></th>
				<th>Tanggal</th>
				<th>NIS</th>
				<th>Nama Siswa</th>
				<th>Kelas</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($absensi as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td>{{ $row->tanggal }}</td>
				<td>{{ $row->siswa->nis }}</td>
				<td>{{ $row->siswa->nama_lengkap }}</td>
				<td>{{ $row->kelas->nama_kelas }}</td>
				<td>{{ $row->keterangan }}</td>
			</tr>
		@endforeach
		</tbody>
		<tfoot>
			<tr>
				<th colspan="6"></th>
			</tr>
		</tfoot>
	</table>


@stop
