<?php
include "connection.php";

session_start();
if ($_SESSION['level'] != 'mahasiswa') {
  header("location:../index.php");
}
$namaMhs = $_SESSION['nama'];
$sql8 = "SELECT no_induk FROM user WHERE nama='$namaMhs'";
$result8 = $koneksi->query($sql8);
if ($result8->num_rows > 0) {
  // output data of each row
  while($row = $result8->fetch_assoc()) {
      $nimMhs =  $row["no_induk"];
  }
} 


/*$sql9 = "SELECT doswal FROM user WHERE nama='$namaMhs'";
$result9 = $koneksi->query($sql9);
if ($result9->num_rows > 0) {
  // output data of each row
  while($row = $result9->fetch_assoc()) {
    $doswalMhs = $_POST['doswal_mahasiswa'];
  }
}*/


//$namaMhs = $_POST['nama_mahasiswa'];
//$nimMhs = $_POST['nim_mahasiswa'];
$noTelpMhs = $_POST['no_telp_mahasiswa2'];
$alamatMhs = $_POST['alamat_mahasiswa2'];
$emailMhs = $_POST['email_mahasiswa2'];
//$doswalMhs = $_POST['doswal_mahasiswa'];
$namaAyah = $_POST['ayah_mahasiswa2'];
$noAyah = $_POST['ayah_no_telepon2'];
$alamatAyah = $_POST['ayah_alamat2'];

$query = mysqli_query($koneksi, "UPDATE ortu SET nama='$namaMhs', no_induk='$nimMhs',
 no_telepon='$noTelpMhs', alamat='$alamatMhs', email='$emailMhs', doswal='$doswalMhs', 
 nama_ayah='$namaAyah',  no_ayah='$noAyah', alamat_ayah='$alamatAyah'");

if($query){
     echo '<script language="javascript">alert("Data Berhasil Ditambahkan")</script>';
     header('location:index.php?pesan=berhasilupload');
        }   else{
                echo mysqli_error($koneksi);
    }

?>