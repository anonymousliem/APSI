<?php
setlocale(LC_TIME, ['id_ID', 'INDONESIA']);

$hostname = "localhost";
$username = "debian-sys-maint";
$password = "2k9YkosFTmNc9DXa";
$database = "apsi";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

// Checking error
if (mysqli_connect_errno()) {
	die('Koneksi gagal: <br>' . mysqli_connect_error());
}


function registrasi($data)
{
	global $koneksi;

	$no_induk = $data["no_induk"];
	$nama = $data['nama'];
	$kata_sandi1 = mysqli_real_escape_string($koneksi, $data["kata_sandi1"]);
	$kata_sandi2 = mysqli_real_escape_string($koneksi, $data["kata_sandi2"]);
	$level = $data["level"];

	// cek username sudah ada atau belum
	$result = mysqli_query($koneksi, "SELECT no_induk FROM user WHERE no_induk = '$no_induk'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}


	// cek konfirmasi password
	if ($kata_sandi1 !== $kata_sandi2) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}

	// enkripsi password
	$kata_sandi = password_hash($kata_sandi1, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($koneksi, "INSERT INTO user VALUES('$no_induk', '$nama', '$kata_sandi', '$level')");

	return mysqli_affected_rows($koneksi);
}
