<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo '<script language="javascript">alert("username or password salah lurd")</script>';
		}else if($_GET['pesan'] == "logout"){
			echo '<script language="javascript">alert("logout berhasil")</script>';
		}else if($_GET['pesan'] == "belum_login"){
			echo '<script language="javascript">alert("login dulu bos")</script>';
        }
        else if($_GET['pesan'] == "berhasildaftardosen"){
			echo '<script language="javascript">alert("dosen berhasil didaftarkan")</script>';
		}
	}
	?>