<?php
include "connection.php";

session_start();
if ($_SESSION['level'] != 'mahasiswa') {
  header("location:../index.php");
}


$nama = $_SESSION['nama'];;
$tanggal1 = $_POST['tanggal1'];
$tanggal2 = $_POST['tanggal2'];
$tanggal3 = $_POST['tanggal3'];
$catatan1 = $_POST['textarea1'];
$catatan2 = $_POST['textarea2'];
$catatan3 = $_POST['textarea3'];
$status1 = $_POST['status1'];
//$status2 = $_POST['status2'];
//$status3 = $_POST['status3'];
$query = mysqli_query($koneksi, "INSERT INTO 
bimbingansempro ( nama, tanggal, catatan, status)
    VALUES ('$nama','$tanggal1','$catatan1','checked')  ");
print_r($query);
//var_dump($query)
if($query){
     echo '<script language="javascript">alert("Data Berhasil Ditambahkan")</script>';
            header('location:index.php?pesan=berhasilupload');
        }   else{
                echo mysqli_error($koneksi);
    }

?>