<?php
include "../connection.php";

session_start();
if ($_SESSION['level'] != 'koordinator') {
  header("location:../index.php");
}
$id = $_POST['id_daftarsempro'];
//var_dump($id);
//$ruangan = $_POST['ruangan'];
//var_dump($ruangan);
$dosenpenguji = $_POST['dosenpenguji'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$dosenpenguji2 = $_POST['dosenpenguji2'];

//$status = $_POST['status'];
//var_dump($dosenpenguji);

$query = mysqli_query($koneksi, "UPDATE daftarsempro SET tanggal = '$tanggal', jam='$jam', dosenpenguji='$dosenpenguji' , dosenpenguji2 = '$dosenpenguji2', statuspenguji1='Pending'  WHERE id_daftarsempro='$id' ");
//var_dump($query);
//die();
if($query){

     header('location:index.php?pesan=berhasilupdate');
        }   else{
                echo mysqli_error($koneksi);
    }

?>