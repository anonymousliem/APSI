<?php
include "connection.php";

session_start();
if ($_SESSION['level'] != 'mahasiswa') {
  header("location:../index.php");
}


$namaMhs = $_POST['nama_mahasiswa'];
$nimMhs = $_POST['nim_mahasiswa'];
$noTelpMhs = $_POST['no_telp_mahasiswa'];
$alamatMhs = $_POST['alamat_mahasiswa'];
$emailMhs = $_POST['email_mahasiswa'];
$doswalMhs = $_POST['doswal_mahasiswa'];
$namaAyah = $_POST['ayah_mahasiswa'];
$noAyah = $_POST['ayah_no_telepon'];
$alamatAyah = $_POST['ayah_alamat'];

$query = mysqli_query($koneksi, "INSERT INTO ortu ( nama, no_induk, no_telepon, alamat, email, doswal, nama_ayah, no_ayah, alamat_ayah)
    VALUES ('$namaMhs','$nimMhs','$noTelpMhs','$alamatMhs','$emailMhs','$doswalMhs','$namaAyah','$noAyah','$alamatAyah') ");

if($query){
     echo '<script language="javascript">alert("Data Berhasil Ditambahkan")</script>';
            header('location:index.php');
        }   else{
                echo mysqli_error($koneksi);
    }

?>