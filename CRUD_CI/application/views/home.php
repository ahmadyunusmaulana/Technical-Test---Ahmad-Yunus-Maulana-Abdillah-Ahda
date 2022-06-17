<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "technical_test";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    //echo "Connection failed: " . $e->getMessage();
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Body</title>
    <link rel="stylesheet" href="">
</head>
<body>
	<div style="width: 100%; height: 10vh; background-color: blue; color: white; font-size: 2em; text-align: center;">
    	DATA JADWAL DOKTER RS TRUSMEDIKA SURABAYA
	</div>

    <table border="1" style="width: 100%;">
    	<tr style="background-color: blue; color: white;">
    		<td>No</td>
    		<td>Klinik</td>
    		<td>Senin</td>
    		<td>Selasa</td>
    		<td>Rabu</td>
    		<td>Kamis</td>
    		<td>Jum'at</td>
    		<td>Sabtu</td>
    		<td>Minggu</td>
    	</tr>

    	<?php 
    		$count=0;
    		foreach ($queryAllPol as $row) {
    			$count+=1;
    	?>
    	
    	<tr>
    		<td><?php echo $count; ?></td>
    		<td><?php echo $row->unit_nama; ?></td>
    		<td></td>
    		<td></td>
    		<td></td>
    		<td></td>
    		<td></td>
    		<td></td>
    		<td></td>
    	</tr>

    	<?php } ?>
    </table>

    <div style="width: 33.2%; height: 100vh; border: solid 1px blue; float: left;">
    	<h1>Registrasi Jadwal Dokter</h1>

		<form method="post">
		  
		  <label for="dokter">Nama Dokter: </label>
		  <select name="list_dokter" id="list_dokter">
		    <?php 
	            $q_ambil_data_dokter = "SELECT * FROM master_dokter ORDER BY pegawai_nama";
	            foreach ($conn->query($q_ambil_data_dokter) as $dt_ambil_data_dokter){
	            	echo "<option value='".$dt_ambil_data_dokter['pegawai_nama']."'>" . $dt_ambil_data_dokter['pegawai_nama'] . "</option>";
	            }
	        ?>	
		  </select><br>

		  <label for="poli">Poli Tugas: </label>
		  <select name="list_poli" id="list_poli">
		    <?php 
	            $q_ambil_data_unit = "SELECT * FROM master_unit ORDER BY unit_nama";
	            foreach ($conn->query($q_ambil_data_unit) as $dt_ambil_data_unit){
	            	echo "<option value='".$dt_ambil_data_unit['unit_nama']."'>" . $dt_ambil_data_unit['unit_nama'] . "</option>";
	            }
	        ?>	
		  </select><br>

		  <label for="hari">Hari Tugas: </label>
		  <label for="hari"> Senin</label>
		  <br>
		  <label for="in_senin">Masuk: </label>
		  <input type="text" id="in_senin" name="in_senin"><br>
		  <label for="out_senin">Keluar: </label>
		  <input type="text" id="out_senin" name="out_senin"><br>


		  <label for="hari">Hari Tugas: </label>
		  <label for="hari"> Selasa</label>
		  <br>
		  <label for="in_selasa">Masuk: </label>
		  <input type="text" id="in_selasa" name="in_selasa"><br>
		  <label for="out_selasa">Keluar: </label>
		  <input type="text" id="out_selasa" name="out_selasa"><br>


		  <label for="hari">Hari Tugas: </label>
		  <label for="hari"> Rabu</label>
		  <br>
		  <label for="in_rabu">Masuk: </label>
		  <input type="text" id="in_rabu" name="in_rabu"><br>
		  <label for="out_rabu">Keluar: </label>
		  <input type="text" id="out_rabu" name="out_rabu"><br>


		  <label for="hari">Hari Tugas: </label>
		  <label for="hari"> Kamis</label>
		  <br>
		  <label for="in_kamis">Masuk: </label>
		  <input type="text" id="in_kamis" name="in_kamis"><br>
		  <label for="out_kamis">Keluar: </label>
		  <input type="text" id="out_kamis" name="out_kamis"><br>


		  <label for="hari">Hari Tugas: </label>
		  <label for="hari"> Jum'at</label>
		  <br>
		  <label for="in_jumat">Masuk: </label>
		  <input type="text" id="in_jumat" name="in_jumat"><br>
		  <label for="out_jumat">Keluar: </label>
		  <input type="text" id="out_jumat" name="out_jumat"><br>


		  <label for="hari">Hari Tugas: </label>
		  <label for="hari"> Sabtu</label>
		  <br>
		  <label for="in_sabtu">Masuk: </label>
		  <input type="text" id="in_sabtu" name="in_sabtu"><br>
		  <label for="out_sabtu">Keluar: </label>
		  <input type="text" id="out_sabtu" name="out_sabtu"><br>


		  <label for="hari">Hari Tugas: </label>
		  <label for="hari"> Minggu</label>
		  <br>
		  <label for="in_minggu">Masuk: </label>
		  <input type="text" id="in_minggu" name="in_minggu"><br>
		  <label for="out_minggu">Keluar: </label>
		  <input type="text" id="out_minggu" name="out_minggu"><br>

		  <button type="submit" name="save" id="save">Simpan</button>
		</form>
    </div>










    <div style="width: 33.2%; height: 100vh; border: solid 1px blue; float: left;">

    	<h1>Registrasi Data Pegawai</h1>

		<form method="post">
		  
		  <label for="nama">Nama Pegawai: </label>
		  <input type="text" id="nama_pegawai" name="nama_pegawai"><br>

		  <label for="jen_kel">Jenis Kelamis: </label>
		  <select name="jenis_kelamin" id="jenis_kelamin">
		    <option value="P">P</option>
		    <option value="L">L</option>
		  </select><br>

		  <label for="sip">Nomor SIP Pegawai: </label>
		  <input type="text" id="sip_pegawai" name="sip_pegawai"><br>

		  <button type="submit" name="simpan_pegawai" id="simpan_pegawai">Simpan</button>
		</form>

		<?php 
		    if(isset($_POST["simpan_pegawai"])){

		    	$peg = $conn->prepare('SELECT COUNT(*) FROM master_dokter');
		        $peg->execute();
		        $num_rows_peg = $peg->fetchColumn();
		        //echo "$num_rows";
		        $total_num_row_peg = (int)$num_rows_peg + 1;
		        $generate_key_id_pegawai = "000".$total_num_row_peg."";

		        try {
		            $q_insert_to_master_data_pegawai = "INSERT INTO master_dokter(
		            																	pegawai_id, 
		            																	pegawai_nomor, 
		            																	pegawai_nama, 
		            																	pegawai_jenis_kelamin,
		            																	pegawai_sip
		            																	) 
		            									VALUES
		            									(
		            									'".$total_num_row_peg."',
		            									'".$generate_key_id_pegawai."',
		            									'".$_POST["nama_pegawai"]."',
		            									'".$_POST["jenis_kelamin"]."',
		            									'".$_POST["sip_pegawai"]."'
		            								)";
		            $conn->query($q_insert_to_master_data_pegawai);
		            $conn = null;
		        }//end try
		        catch(PDOException $e){
		            echo $e->getMessage();
		        }//end catch

		        echo "
		            <script type='text/javascript'>window.location = 'http://localhost/CRUD_CI/';</script>
		        ";
		        echo "
		            <script type= 'text/javascript'>
		                alert('Data Successfully Inserted.');
		            </script>
		        ";
		    }//end isset
		?>
		

		<h1>Registrasi Data Pasien</h1>

		<form method="post">
		  
		  <label for="nama">Nama Pasien: </label>
		  <input type="text" id="nama_pasien" name="nama_pasien"><br>

		  <label for="jen_kel">Jenis Kelamis: </label>
		  <select name="jenkel_pasien" id="jenkel_pasien">
		    <option value="P">P</option>
		    <option value="L">L</option>
		  </select><br>

		  <label for="sip">Nomor KTP Pasien: </label>
		  <input type="text" id="ktp_pasien" name="ktp_pasien"><br>

		  <label for="sip">Alamat Pasien: </label>
		  <input type="text" id="alamat_pasien" name="alamat_pasien"><br>

		  <label for="sip">Kota: </label>
		  <input type="text" id="kota_pasien" name="kota_pasien"><br>

		  <button type="submit" name="simpan_pasien" id="simpan_pasien">Simpan</button>
		</form>

		<?php 
		    if(isset($_POST["simpan_pasien"])){

		    	$pas = $conn->prepare('SELECT COUNT(*) FROM master_pasien');
		        $pas->execute();
		        $num_rows_pas = $pas->fetchColumn();
		        //echo "$num_rows";
		        $total_num_row_pas = (int)$num_rows_pas + 1;
		        date_default_timezone_set("asia/jakarta");
		        $time_zone = date("his");
		        $generate_key_id_pasien = "PAS-".$total_num_row_pas."".$time_zone;

		        try {
		            $q_insert_to_master_data_pasien = "INSERT INTO master_pasien(
		            																	pasien_id, 
		            																	pasien_norm, 
		            																	pasien_nik, 
		            																	pasien_nama, 
		            																	pasien_kelamin,
		            																	pasien_alamat,
		            																	pasien_kota) 
		            									VALUES
		            									(
		            									'".$total_num_row_pas."',
		            									'".$generate_key_id_pasien."',
		            									'".$_POST["ktp_pasien"]."',
		            									'".$_POST["nama_pasien"]."',
		            									'".$_POST["jenkel_pasien"]."',
		            									'".$_POST["alamat_pasien"]."',
		            									'".$_POST["kota_pasien"]."'
		            								)";
		            $conn->query($q_insert_to_master_data_pasien);
		            $conn = null;
		        }//end try
		        catch(PDOException $e){
		            echo $e->getMessage();
		        }//end catch

		        echo "
		            <script type='text/javascript'>window.location = 'http://localhost/CRUD_CI/';</script>
		        ";
		        echo "
		            <script type= 'text/javascript'>
		                alert('Data Successfully Inserted.');
		            </script>
		        ";
		    }//end isset
		?>

    </div>







    <div style="width: 33.2%; height: 100vh; border: solid 1px blue; float: left;">
    	
    	<h1>Update Data Pegawai</h1>

		<form method="post">
		  
		  <label for="dokter">Cari Nomor Dokter: </label>
		  <select name="list_dokter" id="list_dokter">
		  	<option value=""></option>
		    <?php 
	            $q_ambil_data_dokter = "SELECT * FROM master_dokter ORDER BY pegawai_nomor";
	            foreach ($conn->query($q_ambil_data_dokter) as $dt_ambil_data_dokter){

	            	$list_data = "".$dt_ambil_data_dokter['pegawai_nama']." - ".$dt_ambil_data_dokter['pegawai_nomor'];
	            	echo "<option value='".$dt_ambil_data_dokter['pegawai_nomor']."'>" .$list_data. "</option>";
	            }
	        ?>	
		  </select><br>

		  <label for="dokter">Nama Dokter: </label>
		  <input type="text" id="nama_dokter_update" name="nama_dokter_update" value=""><br>

		  <label for="jen_kel">Jenis Kelamis: </label>
		  <select name="jenis_kelamin_update" id="jenis_kelamin_update">
		    <option value="P">P</option>
		    <option value="L">L</option>
		  </select><br>

		  <label for="sip">Nomor SIP Pegawai: </label>
		  <input type="text" id="sip_pegawai_update" name="sip_pegawai_update"><br>

		  <button type="submit" name="update_pegawai" id="update_pegawai">Update</button>
		</form>


		<?php 
		    if(isset($_POST["update_pegawai"])){
		    	$list_dokter_update = $_POST["list_dokter"];
		    	$pegawai_nama_update = $_POST["nama_dokter_update"];
		    	$pegawai_jenis_kelamin_update = $_POST["jenis_kelamin_update"];
		    	$pegawai_sip_update = $_POST["sip_pegawai_update"];

		        try {
		            $q_update_to_master_data_pegawai = "UPDATE master_dokter SET pegawai_nama = '".$pegawai_nama_update."' WHERE pegawai_nomor = '".$list_dokter_update."'";
		            $conn->query($q_update_to_master_data_pegawai);
		            $conn = null;
		        }//end try
		        catch(PDOException $e){
		            echo $e->getMessage();
		        }//end catch

		        echo "
		            <script type='text/javascript'>window.location = 'http://localhost/CRUD_CI/';</script>
		        ";
		        echo "
		            <script type= 'text/javascript'>
		                alert('Data Successfully Inserted.');
		            </script>
		        ";
		    }//end isset
		?>
    </div>













<?php 
    if(isset($_POST["save"])){

    	$res = $conn->prepare('SELECT COUNT(*) FROM master_data_pegawai');
        $res->execute();
        $num_rows = $res->fetchColumn();
        echo "$num_rows";
        $total_num_row = (int)$num_rows + 1;
        date_default_timezone_set("asia/jakarta");
        $time_zone = date("his");
        $generate_key_id_reg = "".$total_num_row."".$time_zone;


        $nama_dokter = $_POST["list_dokter"];
        $poli_tugas = $_POST["list_poli"];
        $hari_tugas = $_POST["hari_tugas"];
        $masuk = $_POST["in"];
        $keluar = $_POST["out"];

        $total_waktu = "".$masuk." - ".$keluar;

        $total_waktu_senin 	= "".$_POST["in_senin"]." - ".$_POST["out_senin"];
        $total_waktu_selasa = "".$_POST["in_selasa"]." - ".$_POST["out_selasa"];
        $total_waktu_rabu 	= "".$_POST["in_rabu"]." - ".$_POST["out_rabu"];
        $total_waktu_kamis 	= "".$_POST["in_kamis"]." - ".$_POST["out_kamis"];
        $total_waktu_jumat 	= "".$_POST["in_jumat"]." - ".$_POST["out_jumat"];
        $total_waktu_sabtu 	= "".$_POST["in_sabtu"]." - ".$_POST["out_sabtu"];
        $total_waktu_minggu = "".$_POST["in_minggu"]." - ".$_POST["out_minggu"];



        try {
            
            $q_insert_to_master_data_pegawai = "INSERT INTO master_data_pegawai(
            																	no, 
            																	id_reg, 
            																	nama_dokter, 
            																	nomor_pegawai, 
            																	pegawai_sip,
            																	poli,
            																	senin,
            																	selasa,
            																	rabu,
            																	kamis,
            																	jumat,
            																	sabtu,
            																	minggu) 
            									VALUES
            									(
            									'".$total_num_row."',
            									'".$generate_key_id_reg."',
            									'".$nama_dokter."',
            									'',
            									'',
            									'".$poli_tugas."',
            									'".$total_waktu_senin."',
            									'".$total_waktu_selasa."',
            									'".$total_waktu_rabu."',
            									'".$total_waktu_kamis."',
            									'".$total_waktu_jumat."',
            									'".$total_waktu_sabtu."',
            									'".$total_waktu_minggu."'
            								)";
            $conn->query($q_insert_to_master_data_pegawai);



            $conn = null;
        }//end try

        catch(PDOException $e){
            echo $e->getMessage();
        }//end catch

        echo "
            <script type='text/javascript'>window.location = 'http://localhost/CRUD_CI/';</script>

        ";

        echo "
            <script type= 'text/javascript'>
                alert('Data Successfully Inserted.');
            </script>
        ";
    }//end isset
?>


</body>
</html>