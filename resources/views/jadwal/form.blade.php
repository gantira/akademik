	  <div class="field">
	    <label>Kelas</label>
	    {{ Form::select('kelas_id', $kelas, null, ['placeholder'=>'', 'class'=>'ui dropdown']) }}
	  </div>

		<div class="field">
	    <label>Mata Pelajaran</label>
	    {{ Form::select('matapelajaran_id', $matapelajaran, null, ['placeholder'=>'', 'class'=>'ui dropdown']) }}
	  </div>

	  <div class="field">
	    <label>Guru</label>
	    {{ Form::select('guru_id', $guru, null, ['placeholder'=>'', 'class'=>'ui dropdown']) }}
	  </div>
	  <div class="field">
	    <label>Tahun Ajaran</label>
	    {{ Form::select('tahunajaran_id', $tahunajaran, null, ['placeholder'=>'', 'class'=>'ui dropdown']) }}
	  </div>

	  <div class="field">
	    <label>Hari</label>
	    {{ Form::select('hari_id', $hari, null, ['placeholder'=>'', 'class'=>'ui dropdown']) }}
	  </div>

	  <div class="field">
	    <label>Jam</label>
	    {{ Form::select('jam_id', $jam, null, ['placeholder'=>'', 'class'=>'ui dropdown']) }}
	  </div>
	  
