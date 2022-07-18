<?php 

	//Koneksi Database

$server="localhost";
$user="root";
$pass="";
$database="ibsrsys";


 $koneksi=mysqli_connect($server,$user,$pass,$database) or die(mysqli_error($koneksi));


 //jika tombol simpan diklik
 	if (isset($_POST['bsimpan']))
 	{
 		//Pengujian Apakah Data Akan diedit Atau disimpan baru
 		if($_GET['hal']=="edit")  
 		{
 			//Data Akan diedit
 			$edit=mysqli_query($koneksi," UPDATE table_ibs set
 											tanggal    ='$_POST[ttanggal]',
 											rm         ='$_POST[trm]',
 											nama       ='$_POST[tnama]',
 											tgl_lahir  ='$_POST[tlahir]',
 											umur       ='$_POST[tumur]',
 											jk         ='$_POST[tjk]',
 											ruangan    ='$_POST[truangan]',
 											vicite     ='$_POST[tvicite]',
 											asa        ='$_POST[tasa]',
 											tanda      ='$_POST[ttanda]',
 											libat      ='$_POST[tlibat]',
 											operasi    ='$_POST[toperasi]',
 											diagnosa   ='$_POST[tdiagnosa]',
 											Klasifikasi='$_POST[tklasifikasi]',
 											jaminan    ='$_POST[tjaminan]',
 											wlaksana   ='$_POST[twlaksana]',
 											wselesai   ='$_POST[twselesai]',
 											jadwalop   ='$_POST[tjadwalop]',
 											telat      ='$_POST[ttelat]',
 											asalpasien ='$_POST[tasalpasien]',
 											dokterop   ='$_POST[tdokterop]',
 											anestesi   ='$_POST[tanestesi]',
 											janestesi   ='$_POST[tjanestesi]',
 											obat       ='$_POST[tobat]',
 											scor      ='$_POST[tscor]',
 											ket        ='$_POST[tket]'
 											WHERE id_pasien ='$_GET[id]'

 										");
 		if ($edit)//Jika Edit Sukses
 		 {
 			echo "<script>
 			alert('Edit Data SUKSES!')
 			documen.location='index.php';
 			</script>";
 		}
 		else
 		{
 			echo "<script>
 			alert('Edit Data GAGAL!')
 			documen.location='index.php';
 			</script>";
 		}

 		}else
 		{
 			//data Akan Di simpan Baru

 			$simpan=mysqli_query($koneksi,"INSERT INTO table_ibs  (tanggal,rm,nama,tgl_lahir,Umur,jk,ruangan,vicite,
 				asa,tanda,libat,operasi,diagnosa,Klasifikasi,jaminan,wlaksana,wselesai,jadwalop,telat,
 				asalpasien,dokterop,anestesi,janestesi,obat,scor,ket)
 										values ('$_POST[ttanggal]', 
		 										'$_POST[trm]',
		 										'$_POST[tnama]',
		 										'$_POST[tlahir]',
		 										'$_POST[tumur]',
		 										'$_POST[tjk]',
		 										'$_POST[truangan]',
		 										'$_POST[tvicite]',
		 										'$_POST[tasa]',
		 										'$_POST[ttanda]',
		 										'$_POST[tlibat]',
		 										'$_POST[toperasi]',
		 										'$_POST[tdiagnosa]',
		 										'$_POST[tklasifikasi]',
		 										'$_POST[tjaminan]',
		 										'$_POST[twlaksana]',
		 										'$_POST[twselesai]',
		 										'$_POST[tjadwalop]',
		 										'$_POST[ttelat]',
		 										'$_POST[tasalpasien]',
		 										'$_POST[tdokterop]',
		 										'$_POST[tanestesi]',
		 										'$_POST[tjanestesi]',
		 										'$_POST[tobat]',
		 										'$_POST[tscor]',
		 										'$_POST[tket]')

 										");
 		if ($simpan)//Jika Simpan Sukses
 		 {
 			echo "<script>
 			alert('Simpan Data SUKSES!')
 			documen.location='index.php';
 			</script>";
 		}
 		else
 		{
 			echo "<script>
 			alert('Simpan Data GAGAL!')
 			documen.location='index.php';
 			</script>";
 		}

 		}
 
 	}


 	//Pengujian Jika TOmbol Edit atau Hapus
 	if(isset($_GET['hal']))
 	{
 		//Pengujian Jika Edit data
 		if($_GET ['hal']=="edit")
		{
			// Tampilkan Data yang Akan diedit
			$tampil=mysqli_query($koneksi,"SELECT *FROM table_ibs WHERE id_pasien='$_GET[id]'");
			$data=mysqli_fetch_array($tampil);
			if($data)
			{
				//Jika Data Di Temukan,maka data titampung ke dalam variabel
				$vtanggal=$data['tanggal'];
				$vrm=$data['rm'];
				$vnama=$data['nama'];
				$vtgl_lahir=$data['tgl_lahir'];
				$vumur=$data['umur'];
				$vjk=$data['jk'];
				$vruangan=$data['ruangan'];
				$vvicite=$data['vicite'];
				$vasa=$data['asa'];
				$vtanda=$data['tanda'];
				$vlibat=$data['libat'];
				$voperasi=$data['operasi'];
				$vdiagnosa_prepost=$data['diagnosa'];
				$vklasifikasi=$data['klasifikasi'];
				$vjaminan=$data['jaminan'];
				$vwlaksana=$data['wlaksana'];
				$vwselesai=$data['wselesai'];
				$vjadwalop=$data['jadwalop'];
				$vtelat=$data['telat'];
				$vasalpasien=$data['asalpasien'];
				$vruangan=$data['ruangan'];
				$vdokterop=$data['dokterop'];
				$vanestesi=$data['anestesi'];
				$vjanestesi=$data['janestesi'];
				$vobat=$data['obat'];
				$vscor=$data['scor'];
				$vket=$data['ket'];
			}
		}
		else if ($_GET['hal']=="hapus")
		{
			//Persiapan Hapus Data
			$hapus=mysqli_query($koneksi,"DELETE FROM table_ibs WHERE id_pasien='$_GET[id]'");
			if($hapus){

				echo "<script>
 			alert('Hapus Data Berhasil!')
 			documen.location='index.php';
 			</script>";


			}
		}
 	}



 ?>





<!DOCTYPE html>
<html>
		<head>
			<title > INSTALASI BEDAH SENTRAL</title>
			<link rel="icon" type="text/cssimg/x-icon" href="assets/img/logo.yos.jpg">
			<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="stylesheet" href="asset/css/dataTables.bootstrap.min.css">
					 <!-- Custom fonts for this template-->
		    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		    <link
		        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		        rel="stylesheet">

		    <!-- Custom styles for this template-->
		    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
		    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

		</head>
<body class="bg-info">
			<div class="container">
				<marquee><b class="text-white"><i>Selamat Bekerja Semoga Tetap Semangat Dalam Memberikan Pelayanan.GBU</i></b></marquee>
			<h1 class="text-center text-white" mt-3><img src="assets/img/ibs.bram.png" width="85" height="85" />REGISTER PASIEN IBS</h1>

		<!----Awal Row---->
		<div class="row">
			<div class="col-md-8 mx-auto">

			<!----------------Awal Card Form------------------------------------------------------------>
			<div class="card mt-3">
				<div class="card-header bg-primary text-white">
					INPUT NAMA PASIEN
				</div>
			 
				<div class="card-body">
					<form method="post" action="">
						<div class="form-group">
							<label>Tanggal Pelaksanaan</label>
							<input type="date" name="ttanggal" value="<?=@$vtanggal ?>" class="form-control" placeholder="Input nim Anda disini" required="Wajib di isi">
							
						</div>
						<div class="form-group">
							<label>Nomor RM</label>
							<input type="text" name="trm"value="<?=@$vrm ?>" class="form-control" placeholder="00-00-00-00"  required="Wajib di isi"  >	
						</div>
						<div class="form-group">
							<label>Nama Pasien</label>
							 <input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="Masukan nama pasien dengan benar">
						</div>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							 <input type="date" name="tlahir" value="<?=@$vtgl_lahir?>" class="form-control" placeholder="" >
						</div>
						<div class="form-group">
							<label>Umur</label>
							 <input type="text" name="tumur" value="<?=@$vumur?>" class="form-control" placeholder="" >
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							 <select class="form-control" name="tjk" value="<?=@$vjk?>">
							 	<option></option>
							 	<option>Laki-laki</option>
							 	<option>Perempuan</option>
							 </select>
						</div>
						<div class="form-group">
							<label>Asal Ruangan</label>
							 <select class="form-control" name="truangan">
								 <option><?=@$vruangan?></option>
								 <option value="ADE IRMA">ADE IRMA</option>
								 <option value="DEWI SARTIKA">DEWI SARTIKA</option>
								 <option value="LARUFA">LARUFA</option>
								  <option value="ICU">ICU</option>
								   <option value="HCU">HCU</option>
								    <option value="NICU">NICU</option>
								     <option value="EDELWEIS">EDELWEIS</option>
								     <option value="SUDIRMAN">SUDIRMAN</option>
							 </select>
						</div>
						<div class="form-group">
							<label>Pre Vicite</label>
							<select class="form-control" name="tvicite">
								<OPTION><?=@$vicite?></OPTION>
								<option value="IBS">IBS</option>
								<option value="Ruangan">RUANGAN</option>
							</select>
						</div>

						<div class="form-group">
							<label>Asa Scor</label>
							<select class="form-control" name="tasa">
								<OPTION><?=@$vasa?></OPTION>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>	
						</div>
						<div class="form-group">
							<label>Penandaan</label>
							<select class="form-control" name="ttanda">
								<OPTION><?=@$vtanda?></OPTION>
								<option value="Ya">Ya</option>
								<option value="Tidak">Tidak</option>
								<option value="Tidak-Perluh">Tidak Perlu</option>
							</select>
						<div class="form-group">
							<label>Melibatkan Pasien/Keluarga ?</label>
							<select class="form-control" name="tlibat">
								<OPTION><?=@$vlibat?></OPTION>
								<option value="Ya">Ya</option>
								<option value="Tidak">Tidak</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</div>

						<div class="form-group">
							<label>Nama Operasi</label>
							 <input type="text" name="toperasi" value="<?=@$voperasi?>" class="form-control" placeholder="Masukan nama operasi dengan benar" required="">
						</div>
						<div class="form-group">
							<label>Diagnosa Pre Dan Post operasi</label>
							 <input type="text" name="tdiagnosa" value="<?=@$vdiagnosa?>" class="form-control" placeholder="Masukan nama diagnosa dengan benar">
						</div>
						<div class="form-group">
							<label>Klasifikasi Operasi</label>
							<select class="form-control" name="tklasifikasi">
								<OPTION><?=@$vklasifikasi?></OPTION>
								<option value="Extra Mayor">Extra Mayor</option>
								<option value="Supra Mayor">Supra Mayor</option>
								<option value="Mayor">Mayor</option>
								<option value="Medium">Medium</option>
								<option value="Minor">Minor</option>
							</select>	
						</div>
						<div class="form-group">
							<label>Jaminan</label>
							<select class="form-control" name="tjaminan">
								<OPTION><?=@$vjaminan?></OPTION>
								<option value="Pribadi">Pribadi</option>
								<option value="BPJS Kesehatan">BPJS Kesehatan</option>
								<option value="Asuransi/Perusahaan">Asuransi/Perusahaan</option>
							</select>	
						</div>
						
						<div class="form-group">
							<label>Waktu Terlaksana</label>
							<input type="time" name="twlaksana"value="<?=@$vwlaksana ?>" class="form-control" placeholder="" required="">
						</div>

						<div class="form-group">
							<label>Waktu Selesai</label>
							<input type="time" name="twselesai"value="<?=@$vwselesai ?>" class="form-control" placeholder="" required="">
						</div>

						<div class="form-group">
							<label>Dijadwalkan</label>
							<input type="time" name="tjadwalop"value="<?=@$vjadwalop ?>" class="form-control" placeholder="jadwal operasi" required="">
						</div>


						<div class="form-group">
							<label>Alasan Terlambat</label>
							 <input type="text" name="ttelat" value="<?=@$vtelat?>" class="form-control" placeholder="Apa alasan telat?">
						</div>

						<div class="form-group">
							<label>Asal Pasien</label>
							 <select class="form-control" name="tasalpasien"value="<?=@$vasalpasien?>">
							 	<option></option>
							 	<option value="RS.Yos">RS.Yos</option>
							 	<option value="Pasus">Pasus</option>
							 </select>
						</div>


							<div class="form-group">
								<label>Dokter Operator</label>
								 <select class="form-control" name="tdokterop">
									 <option><?=@$vdokterop ?></option>
									 <option value="dr.Ananto Pratikno,SpOG,MARS">dr.Ananto Pratikno,SpOG,MARS</option>
									 <option value="dr.Masdarul Maarif,SpOG">dr.Masdarul Maarif,SpOG</option>
									 <option value="dr.Engga Lift Irwanto,SpOG">dr.Engga Lift Irwanto,SpOG</option>
									  <option value="dr.Alexander Cahyadi, SpBS">dr.Alexander Cahyadi,SpBS</option>
									   <option value="dr.Edi Leonardo Simbolon,SpOT">dr.Edi Leonardo Simbolon,SpOT</option>
									    <option value="dr.Alvarino,SpB.U">dr.Alvarino,SpB.U</option>
									    <option value="dr.Daan Khambri,SpB Onk,M.Kes">dr.Daan Khambri,SpB Onk,M.Kes</option>
									   <option value="dr.Hendra Maska,Sp.OT">dr.Hendra Maska,Sp.OT</option>
									   <option value="dr.Juni Mitra,SpB-KBD">dr.Juni Mitra,SpB-KBD</option>
									    <option value="dr.Daan Khambri,SpB Onk,M.Kes">dr.Daan Khambri,SpB Onk,M.Kes</option>
									   <option value="dr.Harmen,Sp.M">dr.Harmen,Sp.M</option>
									   <option value="dr.Al Hafiz,Sp.THT-KL(K)">dr.Al Hafiz,Sp.THT-KL(K)</option>
									    <option value="dr.Novialdi,Sp.THT">dr.Novialdi,Sp.THT</option>
									     <option value="dr.Benny Raymond,SpBP-RE">dr.Benny Raymond,SpBP-RE</option>
									      <option value="dr.Krisna Lukman,Sp.THT">dr.Krisna Lukman,Sp.THT</option>
									       <option value="dr.Al Hafiz,Sp.THT-KL(K)">dr.Al Hafiz,Sp.THT-KL(K)</option>
									        <option value="dr.Julita,Sp.M">dr.Julita,Sp.M</option>
									         <option value="dr.Kemala Sayuti,Sp.M">dr.Kemala Sayuti,Sp.M</option>
									          <option value="dr.I piet Iskandar,MD,MS,FINANCS">dr.I piet Iskandar,MD,MS,FINANCS</option>
									           <option value="dr.Yahya Marpaung,SpB.FINANCS">dr.Yahya Marpaung,SpB.FINANCS</option>
									             <option value="dr.Musrineldy,SpB">dr.Musrineldy,SpB</option>



								 </select>
							</div>
						<div class="form-group">
							<label>Dokter Anestesi</label>
							 <select class="form-control" name="tanestesi">
								 <option><?=@$vanestesi ?></option>
								 <option value="dr.Edi Widodo,Sp.An">dr.Edi Widodo,Sp.An</option>
								 <option value="dr.Emilzon Taslim,Sp.An">dr.Emilzon Taslim,Sp.An</option>
								 <option value="dr.Rinal efendi,Sp.An">dr.Rinal Efendi,Sp.An</option>

							 </select>
						</div>

						<div class="form-group">
							<label>Jenis Anestesi</label>
							 <select class="form-control" name="tjanestesi">
								 <option><?=@$vjnestesi ?></option>
								 <option value="Umum">Umum</option>
								 <option value="Spinal">Spinal</option>
								 <option value="Spinalum">Spinalum</option>
								 <option value="Lokal">Lokal</option>

							 </select>
						</div>

						<div class="form-group">
							<label>Pemberian Obat Antibiotik</label>
							 <input type="text" name="tobat" value="<?=@$vobat?>" class="form-control" placeholder="Masukan Nama AB Kurang dari 1jam atau lebih">
						</div>

						<div class="form-group">
							<label>Aldrate/Brimage Scor</label>
							 <input type="text" name="tscor" value="<?=@$vscor?>" class="form-control" placeholder="">
						</div>
						<div class="form-group">
							<label>Ket.</label>
							 <input type="text" name="tket" value="<?=@$vket?>" class="form-control" placeholder="">
						</div><br><br>

						<button type="submit" class="btn btn-success" name="bsimpan"> Simpan</button>
						<button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
						</div>
						</div>
						<marquee> <i>Lengkapi data dengan baik dan benar dan di cek kembali bila masih ragu</i></marquee>
					</form>
				</div>		
			</div>
		</div>
		<!----Awal Row---->

		</div>
		
			

			<!--Akhir Card Form-->

		<!---------------------------------------------------------------------------------------------------------------------->
 


		<div class="text-center bg-info">
					

				<footer class="sticky-footer bg-info text-white">
						
						<div class="pull-right hidden-xs">
							<i><small><a href="">By.Bram Randa.2022-<?=date('Y') ?></a></small></i>
						</div>
					<strong class="text-white">
						<span><small><i>Copyright &copy;2022 Bram Randa.</i><a href="https://youtu.be/tmgHf47M3Cw">RS.Yos Sudarso</a></small></span>
					</strong>All rights
					reserved.
				</footer><b>Version</b>1.0.0
		</div>

	<!-----Awal Container------------------------------------------------------>

    <div class="container-fluid">
		<!---------------------Awal card Table----------------------------------->
		<div class="card card-responsive">
			<div class=" card-header py-3 bg-success text-white">DATA PASIEN IBS</div>

			
			<!-----------------Awal Card Body------------------------------------------>
			<div class="card-body">
				<!--------Rekapitulasi-------------->
					<div class="">
						<form>
							<label class="btn-success">Pilih Tanggal Kunjungan</label>
							<input type="date" name="tanggal">
							<input type="submit" name="" value="Filter" class="btn-warning">
						</form>
					</div>
					<div class="">
						<?php
							$tgl_sekarang= date('d-m-Y') 
						 ?>

						<table class="">
							<tr class="bg-dark text-white">
								<th>Tgl Har  ini</th>
								<td>:<?=$tgl_sekarang  ?></td>
							</tr>
						</table>
						
					</div>
			<!-------Alhir Rekapitulasi--------------->
			  <div class="table-responsive">
				<table class="table table-bordered table-hover" id="dataTable" width="200%" height="50%"      cellspacing="0">
			 	<thead class="bg-primary text-white text-center"  >
			 		<tr>
			 			<th>No</th>
			 			<th>Tanggal Pelaksanaan</th>
			 			<th>Nomor.RM</th>
			 			<th>NamaPasien</th>
			 			<th>TanggalLahir</th>
			 			<th>Umur(Th)</th>
			 			<th>Jenis Kelamin</th>
			 			<th>Ruangan</th>
			 			<th>Pre Vicite</th>
			 			<th>Asa</th>
			 			<th>Penandaan</th>
			 			<th>Melibatkan Pasien/Keluarga</th>
			 			<th>Nama Operasi</th>
			 			<th>Diagnosa Pre & Post operasi</th>
			 			<th>Klasifikasi Operasi</th>
			 			<th>Jaminan</th>
			 			<th>Waktu Terlaksana</th>
			 			<th>Waktu Selesai</th>
			 			<th>Dijadwalkan</th>
			 			<th>Alasan Telat</th>
			 			<th>Asal Pasien</th>
			 			<th>Dokter Operator</th>
			 			<th>Dokter Anestesi</th>
			 			<th>Jenis Anestesi</th>
			 			<th>Pemberian Obat Antibiotik</th>
			 			<th>Scor</th>
			 			<th>Ket</th>
			 			<th class="bg-info">Aksi</th>
			 		</tr>
			 	</thead>
				 	<?php 
				 		$tgl = date('Y-m-d');//Menampilkan tanggal hari ini

				 		$no=1; 
				 		if (isset($_GET['tanggal'])) {
				 			$tgl=$_GET['tanggal'];
				 		}

						$tampil=mysqli_query($koneksi,"SELECT * from table_ibs WHERE tanggal='$tgl' order by id_pasien desc");
						while($data=mysqli_fetch_array($tampil)):
			 	 ?>
			 	<tbody class="scroll">
			 		<tr class="text-center fonts-10px">
			 			<td><?=$no++; ?></td>
			 			<td><?=$data['tanggal']; ?></td>
			 			<td><?=$data['rm'];?></td>
			 			<td><?=$data['nama'];?></td>
			 			<td><?=$data['tgl_lahir'];?></td>
			 			<td><?=$data['umur'];?></td>
			 			<td><?=$data['jk'];?></td>
			 			<td><?=$data['ruangan'];?></td>
			 			<td><?=$data['vicite'];?></td>
			 			<td><?=$data['asa'];?></td>
			 			<td><?=$data['tanda'];?></td>
			 			<td><?=$data['libat'];?></td>
			 			<td><?=$data['operasi'];?></td>
			 			<td><?=$data['diagnosa'];?></td>
			 			<td><?=$data['klasifikasi'];?></td>
			 			<td><?=$data['jaminan'];?></td>
			 			<td><?=$data['wlaksana'];?></td>
			 			<td><?=$data['wselesai'];?></td>
			 			<td><?=$data['jadwalop'];?></td>
			 			<td><?=$data['telat'];?></td>
			 			<td><?=$data['asalpasien'];?></td>
			 			<td><?=$data['dokterop'];?></td>
			 			<td><?=$data['anestesi'];?></td>
			 			<td><?=$data['janestesi'];?></td>
			 			<td><?=$data['obat'];?></td>
			 			<td><?=$data['scor'];?></td>
			 			<td><?=$data['ket'];?></td> 
			 			<td>
			 				 	<a href="index.php?hal=edit&id=<?=$data['id_pasien']?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
			 				 	<a href="index.php?hal=hapus&id=<?=$data['id_pasien']?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
			 			</td>
			 		</tr>
			 		<?php echo $no; ?>
			 		<?php endwhile;// Penutup Perulangan While ?>
			</table>

					<a href="index.php" class="btn btn-primary bg-gradien">Back to input</a>
				</div>
				
			</div>
			<!-----------------Akhir card body--------------------------------------->
			
		</div>
	  </div>
	  <!---Akhir Container----------------------------------------------------------->
</body>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>


    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>


</html>
