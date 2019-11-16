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

$password = $_POST['password'];
//var_dump($password);
//var_dump($namaMhs);
//var_dump($nimMhs);


$query = mysqli_query($koneksi, "UPDATE user SET  kata_sandi= sha32('$password') WHERE nama='$namaMhs' and no_induk='$nimMhs' ");
//var_dump($query);
//die();

if($query){
     header('location:index.php?pesan=berhasilupdate');
        }   else{
                echo mysqli_error($koneksi);
    } 

?>