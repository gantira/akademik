@extends('layout', [])

@section('menu')
	<a href="{{ url('/absensi') }}" class="item">Data Absensi Siswa</a>
@stop

@section('content')
	
	<table class="ui selectable red table">
		<thead>
			<tr>
				<th>Tahun Ajaran</th>
				<th>Wali Kelas</th>
				<th>Kelas</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($kelas as $row)
			<tr>
				<td>{{ $row->tahunajaran->tahunajaran }}</td>
				<td>{{ $row->guru->nama }}</td>
				<td>{{ $row->nama_kelas }}</td>
				<td><a href="{{ url('/absensi/'.$row->id.'/'.$row->tahunajaran->id) }}"><button class="ui teal button"><i class="sign in icon"></i>Absen Kelas</button></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

@stop
