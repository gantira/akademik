	  <div class="field">
	    <label>Nama Mata Pelajaran</label>
	    {{ Form::text('nama_matapelajaran', null, ['placeholder'=>'Nama Mata Pelajaran']) }}
	  </div>

	  <div class="field">
	    <label>KKM</label>
	    {{ Form::text('kkm', null, ['placeholder'=>'Nilai KKM Mata Pelajaran']) }}
	  </div>

	  <div class="field">
	    <label>Semester</label>
	    {{ Form::select('semester', ['I'=>'I','II'=>'II','III'=>'III'], null, ['placeholder'=>'', 'class'=>'ui dropdown']) }}
	  </div>

	  <div class="field">
	    <label>Tahun Ajaran</label>
	    {{ Form::select('tahunajaran_id', $tahunajaran, null, ['placeholder'=>'', 'class'=>'ui dropdown']) }}
	  </div>