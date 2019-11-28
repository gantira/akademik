@extends('layout', [])

@section('menu')
	<a href="{{ url('/jadwal') }}" class="item">Data Jadwal</a>
	<a href="{{ url('/hari') }}" class="item">Data Hari</a>
	<a href="{{ url('/hari/create') }}" class="item">Tambah hari</a>
@stop

@section('content')
	
	<table class="ui teal selectable table">
		<thead>
			<tr>
				<th>#</th>
				<th>Hari</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($hari as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td>{{ $row->hari }}</td>
				<td><a href="{{ url('/hari/'.$row->id) }}" title="Detail"><i class="search icon"></i></a>
					<a href="{{ url('/hari/destroy/'.$row->id) }}" title="Delete"><i class="delete icon"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@stop
