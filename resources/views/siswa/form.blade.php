		<div class="field">
			<h4 class="ui dividing header">A. KETERANGAN PRIBADI</h4>
		</div>	

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Nama Lengkap</label>
			</div>
			<div class="six wide field">
	    	{{ Form::text('nama_lengkap', null, ['placeholder'=>'Nama Lengkap Siswa']) }}
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Nama Panggilan</label>
			</div>
			<div class="six wide field">
	    	{{ Form::text('nama_panggilan', null, ['placeholder'=>'Nama Panggilan Siswa']) }}
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Tempat Lahir</label>
			</div>
			<div class="six wide field">
	    	{{ Form::text('tempat_lahir', null, ['placeholder'=>'Tempat Lahir Siswa']) }}
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Tanggal Lahir</label>
			</div>
			<div class="six wide field">
	    	{{ Form::date('tanggal_lahir', Carbon\Carbon::now()->addYear(-10), ['placeholder'=>'Tanggal Lahir Siswa']) }}
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Jenis Kelamin</label>
			</div>
			<div class="eight wide field">
	    	<div class="ui radio checkbox">
	      	{{ Form::radio('jk', 'L', true) }}
        	<label>Laki-Laki</label>
	      </div>
	      <div class="ui radio checkbox">
	      	{{ Form::radio('jk', 'P') }}
	        <label>Perempuan</label>
	      </div>
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Agama</label>
			</div>
			<div class="six wide field">
	    	{{ Form::text('agama', null, ['placeholder'=>'Agama Siswa']) }}
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Anak ke</label>
			</div>
			<div class="two wide field">
	    	{{ Form::text('anak_ke', null, ['placeholder'=>'']) }}
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Jumlah Saudara</label>
			</div>

			<div class="thirteen wide field">
				<div class="three wide field">
	    		{{ Form::text('kandung', null, ['placeholder'=>'']) }}
	    	</div>
	    	<div class="two wide field">
	    		<label>Kandung</label>
	    	</div>

	    	<div class="three wide field">
	    		{{ Form::text('tiri', null, ['placeholder'=>'']) }}
	    	</div>
	    	<div class="two wide field">
	    		<label>Tiri</label>
	    	</div>

	    	<div class="three wide field">
	    		{{ Form::text('angkat', null, ['placeholder'=>'']) }}
	    	</div>
	    	<div class="two wide field">
	    		<label>Angkat</label>
	    	</div>
	    </div>

	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Anak Dalam Keluarga</label>
			</div>
			<div class="six wide field">
	    	{{ Form::select('anak_dalam_keluarga', ['Yatim'=>'Yatim', 'Piatu'=>'Piatu', 'Yatim Piatu'=>'Yatim Piatu', 'Lainnya'=>'Lainnya'], null, ['placeholder'=>'']) }}
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Bahasa Sehari-hari</label>
			</div>
			<div class="six wide field">
	    	{{ Form::text('bahasa', null, ['placeholder'=>'']) }}
	    </div>
	  </div>
<br>
	  <div class="field">
			<h4 class="ui dividing header">B. KETERANGAN TEMPAT TINGGAL</h4>
		</div>

		<div class="inline fields">
			<div class="three wide field">
		    <label>Alamat</label>
			</div>
			<div class="six wide field">
	    	{{ Form::text('alamat', null, ['placeholder'=>'Alamat Siswa']) }}
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Kelurahan</label>
			</div>
			<div class="six wide field">
	    	{{ Form::text('kelurahan', null, ['placeholder'=>'Kelurahan Siswa']) }}
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Kecamatan</label>
			</div>
			<div class="six wide field">
	    	{{ Form::text('kecamatan', null, ['placeholder'=>'Kecamatan Siswa']) }}
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Kota</label>
			</div>
			<div class="six wide field">
	    	{{ Form::text('kota', null, ['placeholder'=>'Kota Siswa']) }}
	    </div>
	  </div>

		<div class="inline fields">
			<div class="three wide field">
		    <label>Kode Pos</label>
			</div>
			<div class="six wide field">
	    	{{ Form::text('kode_pos', null, ['placeholder'=>'Kode Pos Siswa']) }}
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>No. Telepon / HP</label>
			</div>
			<div class="six wide field">
	    	{{ Form::text('telepon', null, ['placeholder'=>'No Telepon/HP Siswa']) }}
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Tinggal</label>
			</div>
			<div class="six wide field">
	    	{{ Form::select('tinggal', ['Dengan Orang Tua'=>'Dengan Orang Tua', 'Menumpang'=>'Menumpang', 'Asrama'=>'Asrama', 'Ngontrak'=>'Ngontrak', 'Lainnya'=>'Lainnya'], null, ['placeholder'=>'Tinggal Siswa']) }}
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Alat Transportasi Lainnya</label>
			</div>
			<div class="six wide field">
	    	{{ Form::select('transportasi', ['Jalan Kaki'=>'Jalan Kaki', 'Angkutan Umum'=>'Angkutan Umum', 'Motor Pribadi'=>'Motor Pribadi', 'Mobil Pribadi'=>'Mobil Pribadi', 'Lainnya'=>'Lainnya'], null, ['placeholder'=>'Alat Transportasi Siswa']) }}
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Jarak Ke Sekolah</label>
			</div>
			<div class="six wide field">
	    	{{ Form::select('jarak_sekolah', ['1 Km'=>'1 Km', '1 - 3 Km'=>'1 - 3 Km', '5 - 10 Km'=>'5 - 10 Km', '> 10 Km'=>'> 10 Km'], null, ['placeholder'=>'']) }}
	    </div>
	  </div>
<br>
	  <div class="field">
			<h4 class="ui dividing header">C. KETERANGAN KESEHATAN</h4>
		</div>	

		<div class="inline fields">
			<div class="three wide field">
		    <label>Berat Badan</label>
			</div>
			
			<div class="thirteen wide field">
				<div class="three wide field">
	    		{{ Form::text('kg', null, ['placeholder'=>'']) }}
	    	</div>
	    	<div class="two wide field">
	    		<label>Kg</label>
	    	</div>
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Tinggi Badan</label>
			</div>
			
			<div class="thirteen wide field">
				<div class="three wide field">
	    		{{ Form::text('cm', null, ['placeholder'=>'']) }}
	    	</div>
	    	<div class="two wide field">
	    		<label>Cm</label>
	    	</div>
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Golongan Darah</label>
			</div>

			<div class="thirteen wide field">
				
		    	<div class="ui radio checkbox">
		      	{{ Form::radio('golongan_darah', 'A', true) }}
	        	<label>A</label>
		      </div>
				
		      <div class="ui radio checkbox">
		      	{{ Form::radio('golongan_darah', 'B') }}
		        <label>B</label>
		      </div>
	      
		      <div class="ui radio checkbox">
		      	{{ Form::radio('golongan_darah', 'AB') }}
	        	<label>AB</label>
		      </div>
	      
		      <div class="ui radio checkbox">
		      	{{ Form::radio('golongan_darah', 'O') }}
		        <label>O</label>
		      </div>
		    
	    </div>
	  </div>

	  <div class="inline fields">
			<div class="three wide field">
		    <label>Penyakit Berat Yang pernah diderita</label>
			</div>
			<div class="thirteen wide field">
	    		{{ Form::textarea('penyakit_berat', null, ['placeholder'=>'']) }}
	    </div>
	  </div>
<br>
	  <div class="field">
			<h4 class="ui dividing header">D. KETERANGAN PENDIDIKAN SEBELUMNYA</h4>
		</div>	

	  <div class="field">
	    <div class="sixteen wide field">
	    	<p><b>Asal Sekolah</b></p>
	    	A. Sekolah Dasar
		    <ul>
				    <div class="inline fields">
				    	<div class="sixteen wide field">
					    	<label class="two wide field">Nama Sekolah</label>
					    	<div class="six wide field">
					    		{{ Form::text('sd_nama', null, ['placeholder'=>'']) }}
					    	</div>
				    	</div>
				    </div>

				    <div class="inline fields">
				    	<div class="sixteen wide field">
					    	<label class="two wide field">No Seri Ijazah</label>
					    	<div class="six wide field">
					    		{{ Form::text('sd_no_ijazah', null, ['placeholder'=>'']) }}
					    	</div>
					    	<label class="field">Tahun</label>
					    	<div class="two wide field">
					    		{{ Form::text('sd_no_ijazah_tahun', null, ['placeholder'=>'']) }}
					    	</div>
				    	</div>
				    </div>

				    <div class="inline fields">
				    	<div class="sixteen wide field">
					    	<label class="two wide field">Lama Belajar</label>
					    	<div class="two wide field">
					    		{{ Form::text('sd_lama_belajar', null, ['placeholder'=>'']) }}
					    	</div>
					    	<label class="field">Tahun</label>
				    	</div>
				    </div>
		    </ul>

	    	B. Sekolah Menengah Atas
		    <ul>
				    <div class="inline fields">
				    	<div class="sixteen wide field">
					    	<label class="two wide field">Nama Sekolah</label>
					    	<div class="six wide field">
					    		{{ Form::text('smp_nama', null, ['placeholder'=>'']) }}
					    	</div>
				    	</div>
				    </div>

				    <div class="inline fields">
				    	<div class="sixteen wide field">
					    	<label class="two wide field">No. Seri Ijazah</label>
					    	<div class="six wide field">
					    		{{ Form::text('smp_no_ijazah', null, ['placeholder'=>'']) }}
					    	</div>
					    	<label class="field">Tahun</label>
					    	<div class="two wide field">
					    		{{ Form::text('smp_no_ijazah_tahun', null, ['placeholder'=>'']) }}
					    	</div>
				    	</div>
				    </div>

				    <div class="inline fields">
				    	<div class="sixteen wide field">
					    	<label class="two wide field">No. Seri SKHUN</label>
					    	<div class="six wide field">
					    		{{ Form::text('no_skhun', null, ['placeholder'=>'']) }}
					    	</div>
					    	<label class="field">Tahun</label>
					    	<div class="two wide field">
					    		{{ Form::text('no_skhun_tahun', null, ['placeholder'=>'']) }}
					    	</div>
				    	</div>
				    </div>

				    <div class="inline fields">
				    	<div class="sixteen wide field">
					    	<label class="two wide field">Lama Belajar</label>
					    	<div class="two wide field">
					    		{{ Form::text('lama_belajar', null, ['placeholder'=>'']) }}
					    	</div>
					    	<label class="field">Tahun</label>
				    	</div>
				    </div>
		    </ul>

		    C. Pindahan dari Sekolah
		    <ul>
				    <div class="inline fields">
				    	<div class="sixteen wide field">
					    	<label class="two wide field">Nama Sekolah</label>
					    	<div class="six wide field">
					    		{{ Form::text('nama_sekolah_pindahan', null, ['placeholder'=>'']) }}
					    	</div>
				    	</div>
				    </div>

				    <div class="inline fields">
				    	<div class="sixteen wide field">
					    	<label class="two wide field">Diterima di sekolah ini tanggal</label>
					    	<div class="six wide field">
					    		{{ Form::date('tanggal_diterima', Carbon\Carbon::now(), ['placeholder'=>'']) }}
					    	</div>
				    	</div>
				    </div>
		    </ul>
<br>
		    <div class="field">
					<h4 class="ui dividing header">D. KETERANGAN ORANGTUA/WALI SISWA</h4>
				</div>	
				{{-- ayah --}}
				<div class="inline fields">
			    	<label class="three wide field">Nama Ayah Kandung</label>
			    	<div class="six wide field">
			    		{{ Form::text('nama_ayah', null, ['placeholder'=>'']) }}
			    	</div>
		    </div>

		    <div class="inline fields">
			    	<label class="three wide field">Tempat Lahir</label>
			    	<div class="six wide field">
			    		{{ Form::text('tempat_lahir_ayah', null, ['placeholder'=>'']) }}
			    	</div>
		    </div>

		    <div class="inline fields">
			    	<label class="three wide field">Tanggal Lahir</label>
			    	<div class="six wide field">
			    		{{ Form::date('tanggal_lahir_ayah', Carbon\Carbon::now()->addYear(-30), ['placeholder'=>'']) }}
			    	</div>
		    </div>

		    <div class="inline fields">
					<div class="three wide field">
				    <label>Pekerjaan</label>
					</div>

					<div class="thirteen wide field">
						
				    	<div class="ui radio checkbox">
				      	{{ Form::radio('pekerjaan_ayah', 'PNS', true) }}
			        	<label>PNS</label>
				      </div>
						
				      <div class="ui radio checkbox">
				      	{{ Form::radio('pekerjaan_ayah', 'TNI/POLRI') }}
				        <label>TNI/POLRI</label>
				      </div>
			      
				      <div class="ui radio checkbox">
				      	{{ Form::radio('pekerjaan_ayah', 'Pegawai Swasta') }}
			        	<label>Pegawai Swasta</label>
				      </div>
			      
				      <div class="ui radio checkbox">
				      	{{ Form::radio('pekerjaan_ayah', 'Pedagang/ Wiraswasta') }}
				        <label>Pedagang/ Wiraswasta</label>
				      </div>
				    	
				    	<div class="ui radio checkbox">
				      	{{ Form::radio('pekerjaan_ayah', 'Buruh') }}
				        <label>Buruh</label>
				      </div>

			    </div>
			  </div>

			  <div class="inline fields">
					<div class="three wide field">
				    <label>Pendidikan</label>
					</div>

					<div class="thirteen wide field">
						
				    	<div class="ui radio checkbox">
				      	{{ Form::radio('pendidikan_ayah', 'SD', true) }}
			        	<label>SD</label>
				      </div>
						
				      <div class="ui radio checkbox">
				      	{{ Form::radio('pendidikan_ayah', 'SLTP') }}
				        <label>SLTP</label>
				      </div>
			      
				      <div class="ui radio checkbox">
				      	{{ Form::radio('pendidikan_ayah', 'SLTA') }}
			        	<label>SLTA</label>
				      </div>
			      
				      <div class="ui radio checkbox">
				      	{{ Form::radio('pendidikan_ayah', 'D1') }}
				        <label>D1</label>
				      </div>
				    	
				    	<div class="ui radio checkbox">
				      	{{ Form::radio('pendidikan_ayah', 'D3/D4') }}
				        <label>D3/D4</label>
				      </div>

				      <div class="ui radio checkbox">
				      	{{ Form::radio('pendidikan_ayah', 'S1') }}
				        <label>S1</label>
				      </div>

				      <div class="ui radio checkbox">
				      	{{ Form::radio('pendidikan_ayah', 'S2') }}
				        <label>S2</label>
				      </div>

			    </div>
			  </div>

			   <div class="inline fields">
			    	<label class="three wide field">Penghasilan</label>
			    	<div class="four wide field">
			    		{{ Form::select('penghasilan_ayah', 
			    		['<= Rp. 500.000'=>'<= Rp. 500.000', 
			    		 '500.000 - 1.000.000'=>'500.000 - 1.000.000', 
			    		 '1.000.000 - 3.000.000'=>'1.000.000 - 3.000.000', 
			    		 '> 3.000.000'=>'> 3.000.000'], null,['placeholder'=>'']) }}
			    	</div>
		    </div>

		    <div class="inline fields">
			    	<label class="three wide field">No. Telepon/ HP</label>
			    	<div class="six wide field">
			    		{{ Form::text('telepon_ayah', null, ['placeholder'=>'']) }}
			    	</div>
		    </div>

		    <div class="inline fields">
			    	<label class="three wide field">Alamat</label>
			    	<div class="six wide field">
			    		{{ Form::text('alamat_ayah', null, ['placeholder'=>'']) }}
			    	</div>
		    </div>

		    {{-- Ibu --}}
		    <div class="inline fields">
			    	<label class="three wide field">Nama Ibu Kandung</label>
			    	<div class="six wide field">
			    		{{ Form::text('nama_ibu', null, ['placeholder'=>'']) }}
			    	</div>
		    </div>

		    <div class="inline fields">
			    	<label class="three wide field">Tempat Lahir</label>
			    	<div class="six wide field">
			    		{{ Form::text('tempat_lahir_ibu', null, ['placeholder'=>'']) }}
			    	</div>
		    </div>

		    <div class="inline fields">
			    	<label class="three wide field">Tanggal Lahir</label>
			    	<div class="six wide field">
			    		{{ Form::date('tanggal_lahir_ibu', Carbon\Carbon::now()->addYear(-30), ['placeholder'=>'']) }}
			    	</div>
		    </div>

		    <div class="inline fields">
					<div class="three wide field">
				    <label>Pekerjaan</label>
					</div>

					<div class="thirteen wide field">
						
				    	<div class="ui radio checkbox">
				      	{{ Form::radio('pekerjaan_ibu', 'PNS', true) }}
			        	<label>PNS</label>
				      </div>
						
				      <div class="ui radio checkbox">
				      	{{ Form::radio('pekerjaan_ibu', 'TNI/POLRI') }}
				        <label>TNI/POLRI</label>
				      </div>
			      
				      <div class="ui radio checkbox">
				      	{{ Form::radio('pekerjaan_ibu', 'Pegawai Swasta') }}
			        	<label>Pegawai Swasta</label>
				      </div>
			      
				      <div class="ui radio checkbox">
				      	{{ Form::radio('pekerjaan_ibu', 'Pedagang/ Wiraswasta') }}
				        <label>Pedagang/ Wiraswasta</label>
				      </div>
				    	
				    	<div class="ui radio checkbox">
				      	{{ Form::radio('pekerjaan_ibu', 'Buruh') }}
				        <label>Buruh</label>
				      </div>

			    </div>
			  </div>

			  <div class="inline fields">
					<div class="three wide field">
				    <label>Pendidikan</label>
					</div>

					<div class="thirteen wide field">
						
				    	<div class="ui radio checkbox">
				      	{{ Form::radio('pendidikan_ibu', 'SD', true) }}
			        	<label>SD</label>
				      </div>
						
				      <div class="ui radio checkbox">
				      	{{ Form::radio('pendidikan_ibu', 'SLTP') }}
				        <label>SLTP</label>
				      </div>
			      
				      <div class="ui radio checkbox">
				      	{{ Form::radio('pendidikan_ibu', 'SLTA') }}
			        	<label>SLTA</label>
				      </div>
			      
				      <div class="ui radio checkbox">
				      	{{ Form::radio('pendidikan_ibu', 'D1') }}
				        <label>D1</label>
				      </div>
				    	
				    	<div class="ui radio checkbox">
				      	{{ Form::radio('pendidikan_ibu', 'D3/D4') }}
				        <label>D3/D4</label>
				      </div>

				      <div class="ui radio checkbox">
				      	{{ Form::radio('pendidikan_ibu', 'S1') }}
				        <label>S1</label>
				      </div>

				      <div class="ui radio checkbox">
				      	{{ Form::radio('pendidikan_ibu', 'S2') }}
				        <label>S2</label>
				      </div>

			    </div>
			  </div>

			   <div class="inline fields">
			    	<label class="three wide field">Penghasilan</label>
			    	<div class="four wide field">
			    		{{ Form::select('penghasilan_ibu', 
			    		['<= Rp. 500.000'=>'<= Rp. 500.000', 
			    		 '500.000 - 1.000.000'=>'500.000 - 1.000.000', 
			    		 '1.000.000 - 3.000.000'=>'1.000.000 - 3.000.000', 
			    		 '> 3.000.000'=>'> 3.000.000'], null, ['placeholder'=>'']) }}
			    	</div>
		    </div>

		    <div class="inline fields">
			    	<label class="three wide field">No. Telepon/ HP</label>
			    	<div class="six wide field">
			    		{{ Form::text('telepon_ibu', null, ['placeholder'=>'']) }}
			    	</div>
		    </div>

		    <div class="inline fields">
			    	<label class="three wide field">Alamat</label>
			    	<div class="six wide field">
			    		{{ Form::text('alamat_ibu', null, ['placeholder'=>'']) }}
			    	</div>
		    </div>
<br>
		    <div class="field">
					<h4 class="ui dividing header">E. KETERANGAN KEGEMARAN/HOBBY DAN CITA-CITA</h4>
				</div>

				<div class="inline fields">
			    	<label class="three wide field">Hobby</label>
			    	<div class="six wide field">
			    		{{ Form::text('hobby', null, ['placeholder'=>'']) }}
			    	</div>
		    </div>

		    <div class="inline fields">
			    	<label class="three wide field">Cita-Cita</label>
			    	<div class="six wide field">
			    		{{ Form::text('cita_cita', null, ['placeholder'=>'']) }}
			    	</div>
		    </div>

		    <div class="field">
					<h4 class="ui dividing header">F. ETC</h4>
				</div>

				<div class="inline fields">
			    	<label class="three wide field">Ijazah</label>
			    	<div class="six wide field">
			    		{{ Form::file('file_ijazah', null) }}
				    	@if (!empty($siswa->file_ijazah))
				    	<br>
				    		<img src="{{ asset($siswa->file_ijazah) }}" class="ui tiny image">
				    	@endif
			    	</div>
		    </div>

		    <div class="inline fields">
			    	<label class="three wide field">Nilai Ijazah</label>
			    	<div class="four wide field">
			    		{{ Form::number('nilai_ijazah', null, ['placeholder'=>'Nilai Ijazah Siswa']) }}
			    	</div>
		    </div>