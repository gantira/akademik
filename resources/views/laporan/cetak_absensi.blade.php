<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{ Html::style('semantic/semantic.min.css') }}
	<title>Cetak Absensi Kelas {{ $kelas }}</title>
</head>
<body onload="window.print()">
		
	<div class="ui grid">
	  	<div class="left floated two wide column">
	    	<img src="{{ asset('logo.png') }}" alt="" width="80px" height="80px">
	 	</div>
	  	<div class="twelve wide column">
		  	<center>
	  			<h3>SMA PURAGABAYA BANDUNG <br> 2017 <br><br> Laporan Absensi Kelas {{ $kelas }}</h3>
	  		</center>
	  	</div>
	  	<div class="right floated two wide column right aligned">
		    <img src="{{ asset('logo.png') }}" alt="" width="80px" height="80px">
	  	</div>
	</div>
	
	<hr>
	@if ($absensi->count())
		
		<table class="ui red selectable table" id="dataTables">
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
	</table>

	@else
		<center>Tidak ada data absensi</center>
	@endif

	<script type="text/javascript">
		setTimeout(function(){ 
			window.history.back();

		}, 200);
	</script>  	
</body>
</html>