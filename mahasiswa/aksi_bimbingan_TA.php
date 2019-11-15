<?php
include "connection.php";

session_start();
if ($_SESSION['level'] != 'mahasiswa') {
  header("location:../index.php");
}


$nama = $_SESSION['nama'];;
$tanggal1 = $_POST['tanggal1TA'];
$catatan1 = $_POST['catatan1TA'];

//$status1 = $_POST['status1'];
//$status2 = $_POST['status2'];
//$status3 = $_POST['status3'];

$cekisi    = "SELECT dosbing FROM daftarta WHERE nama='$nama' and status = 'Approved' ";
$ada = $koneksi->query($cekisi);
if ($ada->num_rows > 0) {
  while($row = $ada->fetch_assoc()) {
    $dosbing =  $row["dosbing"];
}


    $query = mysqli_query($koneksi, "INSERT INTO 
    bimbinganta (dosbing, nama, tanggal, catatan, status)
    VALUES ('$dosbing','$nama','$tanggal1','$catatan1','Pending')  ");

if($query){
 
     echo '<script language="javascript">alert("Data Berhasil Ditambahkan")</script>';
            header('location:index.php?pesan=berhasilupload');
        }   else{
                echo mysqli_error($koneksi);
    }


}else{
  header('location:index.php?pesan=belumdaftarsempro');
}


?>