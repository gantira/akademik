@extends('layout', ['title'=>'Data Guru'])

@section('menu')
	<a href="{{ url('/guru') }}" class="item">Data Guru</a>
	<a href="{{ url('/guru/create') }}" class="item">Tambah Guru</a>
@stop

@section('content')
	
	<table class="ui purple selectable table">
		<thead>
			<tr>
				<th></th>
				<th>Nama Guru</th>
				<th>NIP</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Telepon</th>
				<th>Photo</th>
				<th>Username</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($guru as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td><i class="user icon"></i>{{ $row->nama }}</td>
				<td>{{ $row->nip }}</td>
				<td>{{ $row->tanggal_lahir }}</td>
				<td>{{ $row->alamat }}</td>
				<td>{{ $row->jk }}</td>
				<td>{{ $row->telepon }}</td>
				<td>
				 @if (!empty($row->photo))
			  		<img src="{{ asset($row->photo) }}" class="ui avatar image">
			  	@else
			  		<img src="{{ asset('no-image.jpg') }}" class="ui avatar image">
			    @endif
			    </td>
				<td>{{ $row->user['name'] }}</td>
				<td><a href="{{ url('/guru/'.$row->id) }}" title="Detail"><i class="search icon"></i></a>
					<a href="{{ url('/guru/destroy/'.$row->id) }}" title="Delete"><i class="remove user icon"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>

@stop
