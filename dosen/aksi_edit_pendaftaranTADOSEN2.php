<?php
include "../connection.php";

session_start();
if ($_SESSION['level'] != 'dosen') {
  header("location:../index.php");
}
$id = $_POST['id_tugasakhir'];

$status = $_POST['status2'];

$namadosen = $_SESSION['nama'];


$query = mysqli_query($koneksi, "UPDATE tugas_akhir SET  status2 = '$status' WHERE id_tugasakhir='$id' AND dosbing2='$namadosen'");

if($query){
     header('location:index.php?pesan=berhasilupdate');
        }   else{
                echo mysqli_error($koneksi);
    }

?>