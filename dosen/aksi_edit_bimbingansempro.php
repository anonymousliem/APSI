<?php
include "../connection.php";

session_start();
if ($_SESSION['level'] != 'dosen') {
  header("location:../index.php");
}
$id = $_POST['id_bimbingansempro'];

$status = $_POST['status'];

$namadosen = $_SESSION['nama'];

$query = mysqli_query($koneksi, "UPDATE bimbingansempro SET  status = '$status' WHERE id_bimbingansempro='$id' AND dosbing='$namadosen'");

if($query){

 
  
     header('location:index.php?pesan=berhasilupdate');
        }   else{
                echo mysqli_error($koneksi);
    }

?>