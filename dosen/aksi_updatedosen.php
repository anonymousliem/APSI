<?php
include "../connection.php";

session_start();
if ($_SESSION['level'] != 'dosen') {
  header("location:../index.php");
}
$namaDosen = $_SESSION['nama'];
$sql8 = "SELECT no_induk FROM dosen WHERE nama='$namaDosen'";
$result8 = $koneksi->query($sql8);
if ($result8->num_rows > 0) {
  while($row = $result8->fetch_assoc()) {
      $nidn =  $row["no_induk"];
  }
} 


$alamatMhs = $_POST['alamat_mahasiswa2'];
$emailMhs = $_POST['email_mahasiswa2'];




$query = mysqli_query($koneksi, "UPDATE dosen SET  alamat='$alamatMhs', email='$emailMhs' where nama='$namaDosen';  
");

if($query){
     header('location:profile.php');
        }   else{
                echo mysqli_error($koneksi);
    }

?>