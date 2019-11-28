<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Akademik</title>
	{{ Html::style('semantic/semantic.min.css') }}
	{{ Html::style('semantic/lib/css/dataTables.semanticui.min.css') }}
	{{ Html::style('semantic/lib/css/buttons.semanticui.min.css') }}
</head>
<body style="background-image: url('{{ asset('images1.jpg') }}'); background-size: cover;
">

<div class="ui fluid container">

	<div class="ui fixed menu">
	  <a class="browse item">
	    Browse
	    <i class="dropdown icon"></i>
	  </a>
	  <div class="ui fluid popup top left transition hidden" style="top: auto; left: 1px; bottom: 69px; right: auto; width: 670px;">
	    <div class="ui four column relaxed divided grid">
	      @if (Auth::user()->role == 'admin')
	      <div class="column">
	        <h4 class="ui header">Kelola Data</h4>
	        <div class="ui link list">
	          <a class="item" href="{{ url('/pendaftaran') }}">Data Pendaftaran Siswa Baru</a>
	          <a class="item" href="{{ url('/guru') }}">Data Guru</a>
	          <a class="item" href="{{ url('/tahunajaran') }}">Data Tahun Ajaran</a>
	          <a class="item" href="{{ url('/kelas') }}">Data Kelas</a>
	          <a class="item" href="{{ url('/matapelajaran') }}">Data Mata Pelajaran</a>
	          <a class="item" href="{{ url('/siswa') }}">Data Siswa</a>
	        </div>
	      </div>
	      <div class="column">
	        <h4 class="ui header">Akademik</h4>
	        <div class="ui link list">
	          <a class="item" href="{{ url('/jadwal') }}">Data Jadwal Pelajaran</a>
	          <a class="item" href="{{ url('/penilaian') }}">Data Nilai Siswa</a>
	          <a class="item" href="{{ url('/absensi') }}">Data Absensi Siswa</a>
	        </div>
	      </div>
	      <div class="column">
	        <h4 class="ui header">Laporan</h4>
	        <div class="ui link list">
	          <a class="item" href="{{ url('/laporan/siswa') }}">Laporan Data Siswa Baru</a>
	          <a class="item" href="{{ url('/laporan/jadwal') }}">Laporan Data Jadwal Pelajaran</a>
	          <a class="item" href="{{ url('/laporan/penilaian') }}">Laporan Data Nilai Siswa</a>
	          <a class="item" href="{{ url('/laporan/absensi') }}">Laporan Absensi Siswa</a>
	          <a class="item" href="{{ url('/laporan/rapor') }}">Laporan Rapor Siswa</a>
	        </div>
	      </div>
	      <div class="column">
	        <h4 class="ui header">Sekolah</h4>
	        <div class="ui link list">
	          <a class="item" href="{{ url('/profile') }}">Profile</a>
	          <a class="item" href="{{ url('/sejarah') }}">Sejarah</a>
	          <a class="item" href="{{ url('/visimisi') }}">Visi dan Misi</a>
	        </div>
	      </div>
	      @endif
	      @if (Auth::user()->role == 'kepsek')
	      	<div class="column">
		        <h4 class="ui header">Laporan</h4>
		        <div class="ui link list">
		          <a class="item" href="{{ url('/laporan/siswa') }}">Laporan Data Siswa Baru</a>
		          <a class="item" href="{{ url('/laporan/jadwal') }}">Laporan Data Jadwal Pelajaran</a>
		          <a class="item" href="{{ url('/laporan/penilaian') }}">Laporan Data Nilai Siswa</a>
		          <a class="item" href="{{ url('/laporan/absensi') }}">Laporan Absensi Siswa</a>
		          <a class="item" href="{{ url('/laporan/rapor') }}">Laporan Rapor Siswa</a>
		        </div>
		    </div>
		    <div class="column">
		        <h4 class="ui header">Sekolah</h4>
		        <div class="ui link list">
		          <a class="item" href="{{ url('/profile') }}">Profile</a>
		          <a class="item" href="{{ url('/sejarah') }}">Sejarah</a>
		          <a class="item" href="{{ url('/visimisi') }}">Visi dan Misi</a>
		        </div>
		    </div>
	      @endif
	      @if (Auth::user()->role == 'guru')
	      	<div class="column">
	        <h4 class="ui header">Akademik</h4>
	        <div class="ui link list">
	          <a class="item" href="{{ url('/jadwal') }}">Data Jadwal Pelajaran</a>
	          <a class="item" href="{{ url('/penilaian') }}">Data Nilai Siswa</a>
	          <a class="item" href="{{ url('/absensi') }}">Data Absensi Siswa</a>
	        </div>
	      </div>
	      <div class="column">
	        <h4 class="ui header">Laporan</h4>
	        <div class="ui link list">
	          <a class="item" href="{{ url('/laporan/siswa') }}">Laporan Data Siswa Baru</a>
	          <a class="item" href="{{ url('/laporan/jadwal') }}">Laporan Data Jadwal Pelajaran</a>
	          <a class="item" href="{{ url('/laporan/penilaian') }}">Laporan Data Nilai Siswa</a>
	          <a class="item" href="{{ url('/laporan/absensi') }}">Laporan Absensi Siswa</a>
	          <a class="item" href="{{ url('/laporan/rapor') }}">Laporan Rapor Siswa</a>
	        </div>
	      </div>
	      @endif
	    </div>
	  </div>
	  
	  @yield('menu', '')

	  <div class="right menu">
		<a class="ui item">
			{{ Auth::user()->role}}
		</a>
		<a href="{{ url('logout') }}" class="item">
			<i class="power icon"></i>
			Logout
		</a>
	  </div>

	 
	</div>

		
	<div class="ui container" style="padding-top: 60px">
		
		@yield('content', 'default')

	</div>
	<br>
</div>

	{{ Html::script('js/jquery.min.js') }}
	{{ Html::script('semantic/lib/js/jquery.dataTables.min.js') }}
	{{ Html::script('semantic/lib/js/dataTables.semanticui.min.js') }}
	{{ Html::script('semantic/lib/js/dataTables.buttons.min.js') }}
	{{ Html::script('semantic/lib/js/buttons.semanticui.min.js') }}
	{{ Html::script('semantic/lib/js/jszip.min.js') }}
	{{ Html::script('semantic/lib/js/pdfmake.min.js') }}
	{{ Html::script('semantic/lib/js/vfs_fonts.js') }}
	{{ Html::script('semantic/lib/js/buttons.html5.min.js') }}
	{{ Html::script('semantic/lib/js/buttons.print.min.js') }}
	{{ Html::script('semantic/lib/js/buttons.colVis.min.js') }}
	{{ Html::script('semantic/semantic.min.js') }}
	{{-- {{ Html::script('semantic/tablesort.js') }} --}}


	<script type="text/javascript">
		$(document).ready(function() {
		    var table = $('#dataTables').DataTable( {
		        lengthChange: false,
		        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
		    } );
		 
		    table.buttons().container()
		        .appendTo( $('div.eight.column:eq(0)', table.table().container()) );
		} );


		$('.menu .browse')
		  .popup({
		    inline     : true,
		    hoverable  : true,
		    position   : 'bottom right',
		    delay: {
		      show: 100,
		      hide: 500
		    }
		  })
		;

		// $('table').tablesort();
		$('.ui.checkbox').checkbox();
		$('.ui.accordion').accordion();
		$('.ui.dropdown').dropdown();
		
		$('.message .close')
		  .on('click', function() {
		    $(this)
		      .closest('.message')
		      .transition('fade')
		    ;
		  })
		;

		$('.fade')
		  .transition('slide down', '20ms')
		  .transition('slide down')
		;
	
	</script>

	@stack('scripts')	
</body>
</html>