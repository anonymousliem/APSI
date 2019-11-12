<?php
var_dump($_POST['upload']);
print_r($_POST['upload']);
?>

<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>

		<?php 
		include 'connection.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('pdf','docx','doc');
            $filename = $_FILES['file']['name'];
           // var_dump($filename);
			$x = explode('.', $filename);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $nim = $_POST['nim'];
          //  var_dump($nim);
            $ipk = $_POST['ipk'];
           // var_dump($ipk);
            $sks = $_POST['sks'];
            $folder = 'file/';
           // var_dump($sks);
            
			 if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				 if($ukuran < 1044070){			
                    
					$query = mysqli_query($koneksi, 
					"INSERT INTO tugas_akhir (no_induk, ipk, sks, transkrip)
					 VALUES ('$nim', '$ipk', '$sks', '$filename')
					 ") or die(mysqli_error($koneksi));
                    print_r($query);
                    var_dump($query);
                    if ($query){
						move_uploaded_file($file_tmp,$folder.$filename);
                        echo '<script language="javascript">alert("FILE Berhasil Ditambahkan")</script>';
            header('location:index.php?pesan=berhasilupload');
						

					} else {
						echo 'GAGAL MENGUPLOAD GAMBAR';
						mysqli_error($koneksi);
                    }
                 }else{
				 	echo 'UKURAN FILE TERLALU BESAR';
				 }
         }else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			 }
		}
		?>

		<br/>
		<br/>
		<a href="index.php">Upload Lagi</a>
		<br/>
		<br/>

		<table>
			<?php 
			$data = mysqli_query($koneksi, "select * from tugas_akhir");
			while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td>
					<img src="<?php echo "file/".$d['transkrip']; ?>">
				</td>		
			</tr>
			<?php } ?>
		</table>
	</body>
</html>