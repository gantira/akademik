		<div class="field">
	    <label>NIP</label>
	    {{ Form::text('nip', null, ['placeholder'=>'NIP']) }}
	  </div>

	  <div class="field">
	    <label>Nama Lengkap</label>
	    {{ Form::text('nama', null, ['placeholder'=>'Nama Guru']) }}
	  </div>

	  <div class="field">
	    <label>Alamat</label>
	    {{ Form::text('alamat', null, ['placeholder'=>'Alamat Guru']) }}
	  </div>

	  <div class="field">
	    <label>Tempat Lahir</label>
	    {{ Form::text('tempat_lahir', null, ['placeholder'=>'Tempat Lahir Guru']) }}
	  </div>

	  <div class="field">
	    <label>Tanggal Lahir</label>
	    {{ Form::date('tanggal_lahir', Carbon\Carbon::now(), ['placeholder'=>'Tanggal Lahir Guru']) }}
	  </div>

	  <div class="grouped fields">
	    <div class="field">
	    <label>Jenis Kelamin</label>
	      <div class="ui radio checkbox">
	      	{{ Form::radio('jk', 'Laki-Laki', true) }}
        	<label>Laki-Laki</label>
	      </div>
	    </div>
	    <div class="field">
	      <div class="ui radio checkbox">
	      	{{ Form::radio('jk', 'Perempuan') }}
	        <label>Perempuan</label>
	      </div>
	    </div>
	  </div>

	  <div class="field">
	    <label>Foto</label>
	    @if (!empty($guru->photo))
	  		<img src="{{ asset($guru->photo) }}" class="ui small image">
	  	@else
	  		<img src="{{ asset('no-image.jpg') }}" class="ui small image">
	    @endif
	    {{ Form::file('photo') }}
	  </div>

	  <div class="field">
	    <label>No Telepon</label>
	    {{ Form::text('telepon', null, ['placeholder'=>'No Telepon Guru']) }}
	  </div>

 		<div class="field">
	    <label>Agama</label>
	    {{ Form::text('agama', null, ['placeholder'=>'Agama Guru']) }}
	  </div>

 		<div class="field">
	    <label>Jabatan</label>
	    {{ Form::text('jabatan', null, ['placeholder'=>'Jabatan Guru']) }}
	  </div>

	  <div class="field">
	    <label>Ijazah</label>
	    {{ Form::text('ijazah', null, ['placeholder'=>'Ijazah Guru']) }}
	  </div>

 	  <div class="field">
	    <label>Golongan</label>
	    {{ Form::text('golongan', null, ['placeholder'=>'Golongan Guru']) }}
	  </div>

	  <div class="ui yellow segment">
	  	<div class="field">
	  		<label>Username</label>
		    {{ Form::text('name', null, ['placeholder'=>'Username Guru']) }}
	  	</div>

	  	<div class="field">
	  		<label>Password</label>
		    {{ Form::text('password', null, ['placeholder'=>'Password Guru']) }}
	  	</div>
	  </div>

	  {{-- <div class="field">
	    <label>Tanggal Pegawai</label>
	    {{ Form::date('tanggal_pegawai', Carbon\Carbon::now(), ['placeholder'=>'Tanggal Pegawai Guru']) }}
	  </div>

	  <div class="field">
	    <label>Tanggal Mulai Kerja</label>
	    {{ Form::date('tanggal_kerja', Carbon\Carbon::now(), ['placeholder'=>'Tanggal Mulai Kerja Guru']) }}
	  </div>

	  <div class="field">
	    <label>Naik Tingkat</label>
	    {{ Form::text('naik_tingkat', null, ['placeholder'=>'Naik Tingkat Guru']) }}
	  </div>

 		<div class="field">
	    <label>Masa Kerja</label>
	    {{ Form::text('masa_kerja', null, ['placeholder'=>'Masa Kerja Guru']) }}
	  </div>

	  <div class="field">
	    <label>Gaji Pokok</label>
	    {{ Form::text('gaji_pokok', null, ['placeholder'=>'Gaji Pokok Guru']) }}
	  </div>

 		<div class="field">
	    <label>Naik Gaji Berkala</label>
	    {{ Form::text('naik_gaji_berkala', null, ['placeholder'=>'Naik Gaji Berkala Guru']) }}
	  </div>

	  <div class="field">
	    <label>SK Pindahan</label>
	    {{ Form::text('sk_pindahan', null, ['placeholder'=>'SK Pindahan Guru']) }}
	  </div>

 		<div class="field">
	    <label>Tempat Tugas Luar</label>
	    {{ Form::text('tempat_tugas_luar', null, ['placeholder'=>'Tempat Tugas Luar Guru']) }}
	  </div> --}}