<?php
include "../connection.php";

session_start();
if ($_SESSION['level'] != 'dosen') {
  header("location:../index.php");
}
$id = $_POST['id_tugasakhir'];

$status = $_POST['status'];

$namadosen = $_SESSION['nama'];


$query = mysqli_query($koneksi, "UPDATE tugas_akhir SET  status2 = '$status' WHERE id_tugasakhir='$id' AND dosbing2='$namadosen'");
/*var_dump($id);
var_dump($status);
var_dump($query);

die(); */
if($query){
     header('location:index.php?pesan=berhasilupdate');
        }   else{
                echo mysqli_error($koneksi);
    }

?>