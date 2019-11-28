<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{ Html::style('semantic/semantic.min.css') }}
	<title>Cetak Nilai Siswa Kelas {{ $kelas }}</title>
</head>
<body onload="window.print()">
		
	<div class="ui grid">
	  	<div class="left floated two wide column">
	    	<img src="{{ asset('logo.png') }}" alt="" width="80px" height="80px">
	 	</div>
	  	<div class="twelve wide column">
		  	<center>
	  			<h3>SMA PURAGABAYA BANDUNG <br> 2017 <br><br> Laporan Nilai Siswa Kelas {{ $kelas }}</h3>
	  		</center>
	  	</div>
	  	<div class="right floated two wide column right aligned">
		    <img src="{{ asset('logo.png') }}" alt="" width="80px" height="80px">
	  	</div>
	</div>
	
	<hr>
	@if ($penilaian->count())
		
		<table class="ui green selectable table" id="dataTables">
		<thead>
			<tr>
				<th></th>
				<th>NIS</th>
				<th>Nama Siswa</th>
				<th>Kelas</th>
				<th>Matapelajaran</th>
				<th>Tugas</th>
				<th>Quiz</th>
				<th>UTS</th>
				<th>UAS</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($penilaian as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td>{{ $row->siswa->nis }}</td>
				<td>{{ $row->siswa->nama_lengkap }}</td>
				<td>{{ $row->kelas->nama_kelas }}</td>
				<td>{{ $row->matapelajaran->nama_matapelajaran }}</td>
				<td>{{ $row->tugas }}</td>
				<td>{{ $row->quiz }}</td>
				<td>{{ $row->uts }}</td>
				<td>{{ $row->uas }}</td>
			</tr>
		@endforeach
		</tbody>
	</table>

	@else
		<center>Tidak ada data nilai</center>
	@endif

	<script type="text/javascript">
		setTimeout(function(){ 
			window.history.back();

		}, 200);
	</script>  	
</body>
</html>