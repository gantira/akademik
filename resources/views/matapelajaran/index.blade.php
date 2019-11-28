@extends('layout', ['title'=>'Data Mata Pelajaran'])

@section('menu')
	<a href="{{ url('/matapelajaran') }}" class="item">Data Matapelajaran</a>
	<a href="{{ url('/matapelajaran/create') }}" class="item">Tambah Matapelajaran</a>
@stop

@section('content')

	<table class="ui black selectable table">
		<thead>
			<tr>
				<th></th>
				<th>Nama Mata Pelajaran</th>
				<th>KKM</th>
				<th>Semester</th>
				<th>Tahun Ajaran</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($matapelajaran as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td><i class="book icon"></i>{{ $row->nama_matapelajaran }}</td>
				<td>{{ $row->kkm }}</td>
				<td>{{ $row->semester }}</td>
				<td>{{ $row->tahunajaran->tahunajaran }}</td>
				<td><a href="{{ url('/matapelajaran/'.$row->id) }}" title="Detail"><i class="search icon"></i></a>
					<a href="{{ url('/matapelajaran/destroy/'.$row->id) }}" title="Delete"><i class="remove icon"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>

@stop
