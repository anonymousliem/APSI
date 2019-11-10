<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'connection.php';

// menangkap data yang dikirim dari form login
$no_induk = $_POST['no_induk'];
$kata_sandi = $_POST['kata_sandi'];


// menyeleksi data user dengan no_induk dan katasandi yang sesuai
$login = mysqli_query($koneksi, "SELECT * FROM user WHERE no_induk = '$no_induk'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah no_induk dan katasandi di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);
    if (password_verify($kata_sandi, $data["kata_sandi"])) {
        // cek jika user login sebagai mahasiswa
        if ($data['level'] == "mahasiswa") {

            $_SESSION['no_induk'] = $no_induk;
            $_SESSION['level'] = "mahasiswa";
            $_SESSION['nama'] = $data['nama'];
            // alihkan ke halaman dashboard mahasiswa
            header("location:mahasiswa/index.php");
        }
        // cek jika user login sebagai dosen
        else if ($data['level'] == "dosen") {

            $_SESSION['no_induk'] = $no_induk;
            $_SESSION['level'] = "dosen";
            $_SESSION['nama'] = $data['nama'];
            // alihkan ke halaman dashboard dosen
            header("location:dosen/index.php");
        }
        // cek jika user login sebagai koor
        else if ($data['level'] == "koordinator") {

            $_SESSION['no_induk'] = $no_induk;
            $_SESSION['level'] = "koordinator";
            $_SESSION['nama'] = $data['nama'];
            // alihkan ke halaman dashboard admin
            header("location:koordinator/index.php");
        }
    } else {
        // alihkan ke halaman login kembali
        $error = true;
        header("location:index.php?pesan=gagal");
        set_message('<div class="alert alert-warning" role="alert"><p>username dan password tidak ditemukan! Silahkan Sign up </p></div>');
    }
} else {
    header("location:index.php?pesan=gagal");
    set_message('<div class="alert alert-warning" role="alert"><p>username dan password tidak ditemukan! Silahkan Sign up </p></div>');
}
