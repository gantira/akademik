@extends('layout', [])

@section('menu')
	<a href="{{ url('/laporan/jadwal') }}" class="item">Laporan Jadwal Pelajaran</a>
@stop

@section('content')
	
	<div class="ui segments">
		
		<div class="ui right aligned basic segment">
		{!! Form::open(['url'=>'/laporan/cetakjadwal']) !!}
			{{ Form::select('kelas_id', App\Kelas::pluck('nama_kelas', 'id'), null, ['placeholder'=>'Kelas', 'class'=>'ui dropdown']) }}
			{{-- {{ Form::select('hari_id', App\Hari::pluck('hari', 'id'), null, ['placeholder'=>'Hari', 'class'=>'ui dropdown']) }} --}}
			<button class="ui teal button">Cetak</button>
		{!! Form::close() !!}
		</div>

		<table class="ui orange selectable table">
			<thead>
				<tr>
					<th></th>
					<th>Hari</th>
					<th>Jam</th>
					<th>Mata Pelajaran</th>
					<th>Guru</th>
					<th>Kelas</th>
					<th>Tahun Ajaran</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($jadwal as $no => $row)
				<tr>
					<td>{{ $no+1 }}</td>
					<td>{{ $row->hari->hari }}</td>
					<td>{{ $row->jam->jam }}</td>
					<td>{{ $row->matapelajaran->nama_matapelajaran }}</td>
					<td>{{ $row->guru->nama }}</td>
					<td>{{ $row->kelas->nama_kelas }}</td>
					<td>{{ $row->tahunajaran->tahunajaran }}</td>
					
				</tr>
			@endforeach
			</tbody>
		</table>

	</div>

@stop
