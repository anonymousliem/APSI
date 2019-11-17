<?php
include "../connection.php";

$nidn = $_POST['no_induk'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$query = mysqli_query($koneksi, "INSERT INTO dosen(no_induk,nama,alamat,email)
         VALUES ('$nidn','$nama','$alamat','$email')");

if($query){
    header('location:../dosen/datadiridosen.php?pesan=berhasilupdatedata');
}else{
    echo mysqli_error($connect);
}

?>