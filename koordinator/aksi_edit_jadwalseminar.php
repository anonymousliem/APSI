<?php
include "../connection.php";

session_start();
if ($_SESSION['level'] != 'koordinator') {
  header("location:../index.php");
}
$id = $_POST['id_daftarta'];
//$ruangan = $_POST['ruangan'];
$dosenpenguji = $_POST['dosenpenguji'];
//$status = $_POST['status'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$dosenpenguji2 = $_POST['dosenpenguji2'];


$query = mysqli_query($koneksi, 
"UPDATE daftarta SET tanggal = '$tanggal', jam='$jam', dosenpenguji='$dosenpenguji' , dosenpenguji2 = '$dosenpenguji2', statuspenguji1='Pending', statuspenguji2='Pending' WHERE id_daftarta='$id' ");


if($query){

     header('location:index.php?pesan=berhasilupdate');
        }   else{
                echo mysqli_error($koneksi);
    }

?>