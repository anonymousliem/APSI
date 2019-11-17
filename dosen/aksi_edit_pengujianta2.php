<?php
include "../connection.php";

session_start();
if ($_SESSION['level'] != 'dosen') {
  header("location:../index.php");
}
$id = $_POST['id_daftarsempro'];

$status = $_POST['status'];

$namadosen = $_SESSION['nama'];


$query = mysqli_query($koneksi, "UPDATE daftarsempro SET  status2 = '$status' WHERE id_daftarsempro='$id' AND dosenpenguji2='$namadosen'");

if($query){
     header('location:index.php?pesan=berhasilupdate');
        }   else{
                echo mysqli_error($koneksi);
    }

?>