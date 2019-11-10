<?php
session_start();
if ($_SESSION['level'] != 'mahasiswa') {
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<title>SISTEM INFORMASI TA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5 {
    font-family: "Poppins", sans-serif
  }

  body {
    font-size: 16px;
  }

  .w3-half img {
    margin-bottom: -6px;
    margin-top: 16px;
    opacity: 0.8;
    cursor: pointer
  }

  .w3-half img:hover {
    opacity: 1
  }

  body {
    background-image: url(https://pbs.twimg.com/media/EId7pQsU0AAca8l?format=png&name=900x900)
  }
</style>

<body>


  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>

    <div class="w3-container">
      <h3><b>SISTA</b></h3>
      <h4><b>SISTEM INFORMASI TUGAS AKHIR</b></h4>
      <h5>Teknik Industri<br>Universitas Diponegoro</h5>
    </div>
    <div class="w3-container">
      <h4><b>Menu Utama</b></h4>
    </div>

    <div class="w3-bar-block">
      <a href="#beranda" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Beranda</a>
      <a href="#Data_Diri" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Data Diri</a>
      <a href="#daftar" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Pendaftaran Tugas Akhir</a>
      <a href="#sempro" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Seminar Proposal</a>
      <a href="#semta" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Sidang Tugas Akhir</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
      <a href="../logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a>
    </div>
  </nav>

  <!-- Top menu on small screens -->
  <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
    <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
    <span>SISTA</span>
  </header>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Headernyaberanda -->
    <div class="w3-container" style="margin-top:80px" id="beranda">
      <h4 style="text-align:right; color:#f44336"><b>Selamat datang,</b></h4>
      <h1 class="w3-jumbo" style="text-align:right; color:#f44336"><b><?php echo $_SESSION['nama']; ?></b></h1>
      <h6 style="text-align:right; color:#f44336"><b>Status Login : <?php echo $_SESSION['level']; ?></b></h6>
      <h1 class="w3-xxxlarge w3-text-red"><b>Beranda.</b></h1>
      <hr style="width:50px;border:5px solid red" class="w3-round">
    </div>

    <!-- kontenyaberanda -->
    <div class="w3-container">
      <p><b>Apa itu Sista</b></p>
      <p>SISTA merupakan Sistem Informasi Tugas Akhir terpadu yang membantu mahasiswa tingkat akhir dalam menyelesaikan adminitrasi Tugas Akhir di Teknik Industri,
        Universitas Diponegoro.</p>
      <p>Tugas Akhir adalah karya ilmiah yang disusun oleh mahasiswa berdasarkan hasil penelitian suatu masalah yang dilakukan dengan bimbingan oleh dosen pembimbing.
        <p>Persyaratan Tugas Akhir<br>
          1. Mengambil Mata Kuliah Tugas Akhir pada KRS<br>
          2. Capaian SKS minimal 128 SKS dengan nilai minimal C<br>
          3. IPK > 2,25<br>
          4. Lulus Kerja Praktek</p>
      </p>
    </div>

    <!-- Data Diri -->
    <div class="w3-container" style="margin-top:75px" id="Data_Diri">
      <h1 class="w3-xxxlarge w3-text-red"><b>Data Diri</b></h1>
      <hr style="width:50px;border:5px solid red" class="w3-round">

      <form style="color: #f44336" method="POST" action="aksi.php">
        <label style="color:color:#f44336">
        Nama: <input type="text" name="nama_mahasiswa" required></label><br>
        NIM: <input type="text" name="nim_mahasiswa" required><br>
        Nomor Telepon: <input type="text" name="no_telp_mahasiswa" required><br>
        Alamat: <input type="text" name="alamat_mahasiswa" required><br>
        E-mail: <input type="text" name="email_mahasiswa" required><br>
        Dosen Wali: <input type="text" name="doswal_mahasiswa" required><br>

        <h2 style="color:#f44336"><b>Data Orang Tua</b></h2>
        Nama Ayah: <input type="text" name="ayah_mahasiswa" required><br>
        Nomor Telpon: <input type="text" name="ayah_no_telepon" required><br>
        Alamat: <input type="text" name="ayah_alamat" required><br>
        <input type="submit" value="Submit">
      </form>

    </div>

    <!-- Designers -->
    <div class="w3-container" id="daftar" style="margin-top:75px">
      <h1 class="w3-xxxlarge w3-text-red">Pendaftaran Tugas Akhir<b></b></h1>
      <hr style="width:50px;border:5px solid red" class="w3-round">
      <h2 style="color:#f44336"><b>Akademik</b></h2>
      <form style="color: #f44336" action="action_menuutama.php">
        IPK <input type="text" name="ipk">
        SKS <input type="text" name="sks">
        <h2 style="color:#f44336"><b>Upload Berkas</b></h2>
        Transkrip Lengkap <input type="text" name="ipk"><br>
        Pra-Bimbingan <input type="file" name="prabimbingan">
    </div>

    <div class="w3-display-middle" style="color:#f44336"><b>pengajuan TA
      </b></div>
    </form>

  </div>





  <!-- End page content -->
  </div>

  <!-- W3.CSS Container -->
  <div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
    <p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p>
  </div>

  <script>
    // Script to open and close sidebar
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
    }

    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }
  </script>

</body>

</html>