<?php
include "../connection.php";

session_start();
if ($_SESSION['level'] != 'dosen') {
  header("location:../index.php");
}
$id = $_POST['id_daftarta'];

$status = $_POST['status2'];

$namadosen = $_SESSION['nama'];

//var_dump($status);

//var_dump($id);

$query = mysqli_query($koneksi, "UPDATE daftarta SET  statuspenguji1 = '$status' WHERE id_daftarta='$id' AND dosenpenguji='$namadosen'");

//var_dump($query);


if($query){
     header('location:index.php?pesan=berhasilupdate');
        }   else{
                echo mysqli_error($koneksi);
    }

?>