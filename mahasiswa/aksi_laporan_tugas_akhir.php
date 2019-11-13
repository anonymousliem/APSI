
<?php
session_start();
if ($_SESSION['level'] != 'mahasiswa') {
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>

		<?php 
        include 'connection.php';
        $nama2 = $_SESSION['nama'];
        $laporan= $_POST['laporan'];
        if($laporan){
            $ekstensi_diperbolehkan4	= array('pdf','docx','doc');
            $filename3 = $_FILES['laporan']['name'];
            $folder3 = 'lembarpersetujuan/';
            $x3 = explode('.', $filename3);
            $ekstensi2 = strtolower(end($x3));
      
            $file_tmp2 = $_FILES['laporan']['tmp_name'];
              move_uploaded_file($file_tmp3,$folder3.$filename3);
        
        } 
			
				 if($ukuran < 1044070){			
                   
					$query = mysqli_query($koneksi, 
					"INSERT INTO laporanfinal (nama,file_laporan_final)
					 VALUES ('$nama2','$laporan')
					 ") or die(mysqli_error($koneksi));
                  
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
        
		
		?>

		<br/>
		<br/>
		<a href="index.php">Upload Lagi</a>
		<br/>
		<br/>

	</body>
</html>