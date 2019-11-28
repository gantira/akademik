@extends('layout', [])

@section('menu')
	<a href="{{ url('/siswa') }}" class="item">Data Siswa</a>
@stop

@section('content')
	
	<table class="ui red selectable table" id="dataTables">
		<thead>
			<tr>
				<th></th>
				<th>Nama</th>
				<th>Nis</th>
				<th>Jenis Kelamin</th>
				<th>Kelas</th>
				<th>Tangga Lahir</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($siswa as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td><i class="student icon"></i>{{ $row->nama_lengkap }}</td>
				<td>{{ $row->nis }}</td>
				<td>{{ $row->jk }}</td>
				<td>{{ $row->kelas->nama_kelas }}</td>
				<td>{{ $row->tanggal_lahir }}</td>
				<td><a href="{{ url('siswa/'.$row->id) }}"><i class="search icon"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@stop
