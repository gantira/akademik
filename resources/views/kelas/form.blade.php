		<div class="field">
	    <label>Nama Kelas</label>
	    {{ Form::text('nama_kelas', null, ['placeholder'=>'Nama Kelas']) }}
	  </div>

		<div class="field">
	    <label>Wali Kelas</label>
	    {{ Form::select('guru_id', $guru, null, ['placeholder'=>'', 'class'=>'ui dropdown']) }}
	  </div>

	  <div class="field">
	    <label>Kapasitas</label>
	    {{ Form::text('kapasitas', null, ['placeholder'=>'Kapasitas']) }}
	  </div>

	  <div class="field">
	    <label>Tahun Ajaran</label>
	    {{ Form::select('tahunajaran_id', $tahunajaran, null, ['placeholder'=>'', 'class'=>'ui dropdown']) }}
	  </div>
	  
