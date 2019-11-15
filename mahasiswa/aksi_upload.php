<?php
include "connection.php";

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

$namaMhs = $_SESSION['nama'];
$sql8    = "SELECT no_induk FROM user WHERE nama='$namaMhs'";
$result8 = $koneksi->query($sql8);
if ($result8->num_rows > 0) {
    // output data of each row
    while ($row = $result8->fetch_assoc()) {
        $nimMhs = $row["no_induk"];
    }
}

if ($_POST['upload']) {
    $ekstensi_diperbolehkan = array(
        'pdf',
        'docx',
        'doc'
    );
    $filename               = $_FILES['file']['name'];
    // var_dump($filename);
    $x                      = explode('.', $filename);
    $ekstensi               = strtolower(end($x));
    $ukuran                 = $_FILES['file']['size'];
    $file_tmp               = $_FILES['file']['tmp_name'];
    //$nim = $_POST['nim'];
    //  var_dump($nim);
    $ipk                    = $_POST['ipk'];
    // var_dump($ipk);
    $sks                    = $_POST['sks'];
    $tema1                  = $_POST['tema1'];
    $tema2                  = $_POST['tema2'];
    $dosbing1               = $_POST['dosbing1'];
    $dosbing2               = $_POST['dosbing2'];
    
    $folder = 'file/';
    // var_dump($sks);
    
    // if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    //     if($ukuran < 1044070){            
    
    
    /*  }else{
    echo 'UKURAN FILE TERLALU BESAR';
    } */
    //   }
    /*else{
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    } */
}

$cekisi    = "SELECT * FROM tugas_akhir WHERE nama='$namaMhs' and status!='Rejected' ";
$ada = $koneksi->query($cekisi);

//$cekreject    = "SELECT * FROM tugas_akhir WHERE nama='$namaMhs' and status='Rejected' ";
//$adareject = $koneksi->query($cekisi);

if ($ada->num_rows > 0) {
	header('location:index.php?pesan=sudahada');
}else{
	$query = mysqli_query($koneksi, "INSERT INTO tugas_akhir (status, nama, no_induk, ipk, sks, transkrip, tema1, tema2, dosbing1, dosbing2)
	VALUES ('pending','$namaMhs','$nimMhs', '$ipk', '$sks', '$filename', '$tema1','$tema2','$dosbing1','$dosbing2')
	") or die(mysqli_error($koneksi));
	if ($query) {
		move_uploaded_file($file_tmp, $folder . $filename);
		echo '<script language="javascript">alert("FILE Berhasil Ditambahkan")</script>';
		header('location:index.php?pesan=berhasilupload');
	} else {
		header('location:index.php?pesan=gagalupload');
		mysqli_error($koneksi);
		}
}




?>

        <br/>
        <br/>
        <a href="index.php">Upload Lagi</a>
        <br/>
        <br/>

    <!--    <table>
        <?php
/*
$data = mysqli_query($koneksi, "select * from tugas_akhir");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td>
<img src="<?php echo "file/".$d['transkrip']; ?>">
</td>        
</tr>
<?php } */
?> 
        </table>
        -->
    </body>
</html>
Download Formatting took: 283 msPHP Formatter made by Spark Labs  
Copyright Gerben van Veenendaal  
