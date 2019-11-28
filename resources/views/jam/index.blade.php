@extends('layout', [])

@section('menu')
	<a href="{{ url('/jadwal') }}" class="item">Data Jadwal</a>
	<a href="{{ url('/jam') }}" class="item">Data Jam</a>
	<a href="{{ url('/jam/create') }}" class="item">Tambah jam</a>
@stop

@section('content')
	
	<table class="ui teal selectable table">
		<thead>
			<tr>
				<th></th>
				<th>Jam</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($jam as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td>{{ $row->jam }}</td>
				<td><a href="{{ url('/jam/'.$row->id) }}" title="Detail"><i class="search icon"></i></a>
					<a href="{{ url('/jam/destroy/'.$row->id) }}" title="Delete"><i class="delete icon"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@stop
