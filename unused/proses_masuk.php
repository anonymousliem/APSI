<?php

session_start();

// cek jika sudah login
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    die("<h1>404 PAGE NOT FOUND</h1>");
}
// cek request metod harus POST
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
 die("<h1>404 PAGE NOT FOUND</h1>");
}

// cek id dan kata_sandi tidak boleh kosong
if (!isset($_POST['no_induk']) || !isset($_POST['kata_sandi'])) {
    $_SESSION['errors'] = ['no_induk' => 'no_induk dan kata_sandi tidak boleh kosong'];
 header('Location: ../APSI/index.php');
 die;
}

require_once('connections/connection.php');

$no_induk = filter_var($_POST['no_induk'], FILTER_SANITIZE_STRING);
$kata_sandi = filter_var($_POST['kata_sandi'], FILTER_SANITIZE_STRING);


// cek no_induk
$cekno_induk = $koneksi->query("SELECT * FROM `mahasiswa` WHERE `no_induk` = '$no_induk' UNION SELECT * FROM `dosbing` WHERE `no_induk` = '$no_induk' LIMIT 1");
if ($cekno_induk->num_rows <= 0) {
    $_SESSION['errors'] = ['no_induk' => 'NIM/NIP/Username atau Password salah'];
    header('Location: ../APSI/index.php');
 die;
}

$user = $cekno_induk->fetch_array();

// cek kata_sandi
if ($kata_sandi != $user['kata_sandi']) {
    $_SESSION['errors'] = ['no_induk' => 'NIM/NIP/Username atau Password salah'];
    header('Location: ../APSI/index.php');
 die;
}

$_SESSION['logged_in'] = TRUE;
$_SESSION['current_id'] = $user['no_induk'];
$_SESSION['current_mahasiswa'] = $user;

switch ($user['status']){
    case "koorta":
        header ('location: ../APSI/koorta.php');
        break;
    case "mahasiswa":
        header ('location: ../APSI/mahasiswa.php');
        break;
    case "dosbing":
        header ('location: ../APSI/dosbing.php');
        break;
    default:
        $_SESSION['errors'] = ['no_induk' => 'NIM/NIP/Username Tidak Terdaftar'];
        header('Location: ../APSI/index.php');
}
