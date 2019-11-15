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

$cekisi    = "SELECT * FROM ortu WHERE nama='$namaMhs'";
$ada = $koneksi->query($cekisi);
if ($ada->num_rows > 0) {
	header('location:index.php?pesan=sudahada');
}else{
$noTelpMhs = $_POST['no_telp_mahasiswa'];
$alamatMhs = $_POST['alamat_mahasiswa'];
$emailMhs = $_POST['email_mahasiswa'];
$doswalMhs = $_POST['doswal_mahasiswa'];
$namaAyah = $_POST['ayah_mahasiswa'];
$noAyah = $_POST['ayah_no_telepon'];
$alamatAyah = $_POST['ayah_alamat'];

  $query = mysqli_query($koneksi, "INSERT INTO ortu ( nama, no_induk, no_telepon, alamat, email, doswal, nama_ayah, no_ayah, alamat_ayah)
  VALUES ('$namaMhs','$nimMhs','$noTelpMhs','$alamatMhs','$emailMhs','$doswalMhs','$namaAyah','$noAyah','$alamatAyah') ");
print_r($query);
//var_dump($query)
if($query){
   echo '<script language="javascript">alert("Data Berhasil Ditambahkan")</script>';
   header('location:index.php?pesan=berhasilupload');
      }   else{
              echo mysqli_error($koneksi);
  }
}



?>