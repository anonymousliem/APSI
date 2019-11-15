<?php
include "../connection.php";

session_start();
if ($_SESSION['level'] != 'dosen') {
  header("location:../index.php");
}
$id = $_POST['id_bimbinganta'];

$status = $_POST['status'];

$namadosen = $_SESSION['nama'];

$query = mysqli_query($koneksi, "UPDATE bimbinganta SET  status = '$status' WHERE id_bimbinganta='$id' AND dosbing='$namadosen'");

if($query){

 
  
     header('location:index.php?pesan=berhasilupdate');
        }   else{
                echo mysqli_error($koneksi);
    }

?>