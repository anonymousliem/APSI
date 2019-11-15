<?php
include "../connection.php";

session_start();
if ($_SESSION['level'] != 'koordinator') {
  header("location:../index.php");
}
$id = $_POST['id_daftarta'];
$ruangan = $_POST['ruangan'];
$dosenpenguji = $_POST['dosenpenguji'];
$status = $_POST['status'];


$query = mysqli_query($koneksi, "UPDATE daftarta SET dosenpenguji='$dosenpenguji' , ruangan = '$ruangan' , status = '$status' WHERE id_daftarta='$id' ");
//var_dum($query);

if($query){

     header('location:index.php?pesan=berhasilupdate');
        }   else{
                echo mysqli_error($koneksi);
    }

?>