@extends('layout', [])

@section('menu')
	<a href="{{ url('/penilaian') }}" class="item">Data Penilaian Siswa</a>
	<a href="{{ url('#') }}" class="item">{{ $kelas->tahunajaran->tahunajaran }}</a>
	<a href="{{ url('/penilaian/kelas/'.$kelas->id) }}" class="item">Kelas {{ $kelas->nama_kelas }}</a>
@stop

@section('content')
	
	<table class="ui selectable green table">
		<thead>
			<tr>
				<th></th>
				<th>Mata Pelajaran</th>
				<th>Tahun Ajaran</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($kelas->jadwal as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td>{{ $row->matapelajaran->nama_matapelajaran }}</td>
				<td>{{ $row->matapelajaran->tahunajaran->tahunajaran }}</td>
				<td>
				<a href="{{ url('/penilaian/'.$kelas->id.'/'.$kelas->tahunajaran->id.'/'.$row->matapelajaran->id) }}"><button class="ui button"><i class="edit icon"></i>Beri Nilai</button></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@stop
