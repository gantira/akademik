<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{ Html::style('semantic/semantic.min.css') }}
	<title>Cetak Siswa Kelas {{ $kelas }}</title>
</head>
<body onload="window.print()">
		
	<div class="ui grid">
	  	<div class="left floated two wide column">
	    	<img src="{{ asset('logo.png') }}" alt="" width="80px" height="80px">
	 	</div>
	  	<div class="twelve wide column">
		  	<center>
	  			<h3>SMA PURAGABAYA BANDUNG <br> 2017 <br><br> Laporan Siswa Kelas {{ $kelas }}</h3>
	  		</center>
	  	</div>
	  	<div class="right floated two wide column right aligned">
		    <img src="{{ asset('logo.png') }}" alt="" width="80px" height="80px">
	  	</div>
	</div>
	
	<hr>
	@if ($siswa->count())
		
		<table class="ui table">
			<thead>
				<tr>
					<th></th>
					<th>NIS</th>
					<th>Nama</th>
					<th>JK</th>
					<th>Tanggal Lahir</th>
					<th>Kelas</th>
					<th>Tahun Ajaran</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($siswa as $no => $row)
				<tr>
					<td>{{ $no+1 }}</td>
					<td>{{ $row->nis }}</td>
					<td>{{ $row->nama_lengkap }}</td>
					<td>{{ $row->jk }}</td>
					<td>{{ $row->tanggal_lahir }}</td>
					<td>{{ $row->kelas->nama_kelas }}</td>
					<td>{{ $row->kelas->tahunajaran->tahunajaran }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>

	@else
		<center>Tidak ada data siswa</center>
	@endif

	<script type="text/javascript">
		setTimeout(function(){ 
			window.history.back();

		}, 200);
	</script>  	
</body>
</html>