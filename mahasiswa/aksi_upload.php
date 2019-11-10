<?php
var_dump($_POST['upload']);
print_r($_POST['upload']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Membuat Upload File Dengan PHP Dan MySQL | www.malasngoding.com</title>
	</head>
	<body>
	<h1>Membuat Upload File Dengan PHP Dan MySQL <br/> www.malasngoding.com</h1>
		<?php 
		include 'connection.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg');
            $filename = $_FILES['file']['name'];
            var_dump($filename);
			$x = explode('.', $filename);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $nim = $_POST['nim'];
            var_dump($nim);
            $ipk = $_POST['ipk'];
            var_dump($ipk);
            $sks = $_POST['sks'];
            $folder = '/file';
            var_dump($sks);
            
			// if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				// if($ukuran < 1044070){			
                    print_r(__DIR__.$folder);
					move_uploaded_file($file_tmp,__DIR__.$folder.$filename);
                    $query = mysql_query("INSERT INTO tugas_akhir(id_tugasakhir,no_induk,ipk,sks,transkrip) VALUES(NULL,$nim, $ipk, $sks, $filename)");
                    print_r($query);
                    var_dump($query);
                    if ($query){
                        echo 'FILE BERHASIL DI UPLOAD';
                    } else {
                        echo 'GAGAL MENGUPLOAD GAMBAR';
                    }
                // }else{
				// 	echo 'UKURAN FILE TERLALU BESAR';
				// }
            // }else{
			// 	echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			// }
		}
		?>

		<br/>
		<br/>
		<a href="index.php">Upload Lagi</a>
		<br/>
		<br/>

		<table>
			<?php 
			$data = mysql_query("select * from tugas_akhir");
			while($d = mysql_fetch_array($data)){
			?>
			<tr>
				<td>
					<img src="<?php echo "file_transkrip/".$d['transkrip']; ?>">
				</td>		
			</tr>
			<?php } ?>
		</table>
	</body>
</html>