<?php
include "../connection.php";

session_start();
if ($_SESSION['level'] != 'dosen') {
  header("location:../index.php");
}
$id = $_POST['id_tugasakhir'];

$status = $_POST['status'];

$namadosen = $_SESSION['nama'];


$query = mysqli_query($koneksi, "UPDATE tugas_akhir SET  status = '$status' WHERE id_tugasakhir='$id' AND dosbing1='$namadosen'");

if($query){
     header('location:index.php?pesan=berhasilupdate');
        }   else{
                echo mysqli_error($koneksi);
    }

?>