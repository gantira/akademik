@extends('layout', [])

@section('menu')
	<a href="{{ url('/jadwal') }}" class="item">Data Jadwal</a>
	<a href="{{ url('/jadwal/create') }}" class="item">Tambah Jadwal</a>
	<a href="{{ url('/jam') }}" class="item"><i class="alarm icon"></i>Set Jam</a>
	<a href="{{ url('/hari') }}" class="item"><i class="calendar icon"></i>Set Hari</a>
@stop


@section('content')
	@include('errors.session', ['some' => 'data'])

	<table class="ui orange  selectable table">
		<thead>
			<tr>
				<th></th>
				<th>Hari</th>
				<th>Jam</th>
				<th>Mata Pelajaran</th>
				<th>Guru</th>
				<th>Kelas</th>
				<th>Tahun Ajaran</th>
				<th>Aksi</th>
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
				<td><a href="{{ url('/jadwal/'.$row->id) }}" title="Detail"><i class="search icon"></i></a>
					<a href="{{ url('/jadwal/destroy/'.$row->id) }}" title="Delete"><i class="remove from calendar icon"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	
	</table>
@stop
