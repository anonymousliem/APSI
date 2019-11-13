<?php

if(isset($_GET['pesan'])){
  if($_GET['pesan'] == "berhasilupload"){
    echo '<script language="javascript">alert("berhasil upload file")</script>';
  }
}

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
            a opacity: 0.8;
            cursor: pointer
        }
        
        .w3-half img:hover {
            opacity: 1
        }
        
        ul {
            margin: 0;
            padding: 0;
            background-color: red;
        }
        
        li {
            float: left;
            background-color: red;
        }
        
        li a,
        .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            text-decoration: none;
        }
        
        li a:hover,
        .dropdown:hover .dropbtn {
            background-color: red;
        }
        
        li.dropdown {
            display: inline-block;
            background-color: red;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        
        .dropdown-content a:hover {
            background-color: red;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        body {
            background-image: url(https://pbs.twimg.com/media/EId7pQsU0AAca8l?format=png&name=900x900)
        }
        
        thead {
            color: red;
        }
        
        tbody {
            color: blue;
        }
        
        tfoot {
            color: red;
        }
        
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

    <body>

        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar">
            <br>
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>

            <div class="w3-container">
                <h3><b>SISTA</b></h3>
                <h4><b>SISTEM INFORMASI TUGAS AKHIR</b></h4>
                <h5>Teknik Industri<br>Universitas Diponegoro</h5>
            </div>

            <div class="w3-container">

            </div>

            <div class="w3-container">
                <h4><b>Menu Utama</b></h4>
            </div>

            <div class="w3-bar-block">
                <a href="#beranda" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Beranda</a>
                <a href="#Data_Diri" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Data Diri</a>
                <a href="#daftar" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Pendaftaran Tugas Akhir</a>

                <div class="w3-bar-block">
                    <ul>
                        <li class="dropdown">
                            <a href="#bimbingan" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Seminar Proposal</a>
                            <div class="dropdown-content">
                                <a href="#bimbingan">Bimbingan</a>
                                <a href="#daftarsempro">Pendaftaran</a>
                                <a href="#jadwalsempro">Jadwal Seminar</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="w3-bar-block">
                    <ul>
                        <li class="dropdown">
                            <a href="#bimbingansidangTA" class="w3-bar-item w3-button w3-hover-white" onclick="w3_close()">Sidang Tugas Akhir</a>
                            <div class="dropdown-content">
                                <a href="#bimbingansidangTA">Bimbingan</a>
                                <a href="#daftarsidangTA">Pendaftaran</a>
                                <a href="#jadwalsidangTA">Jadwal Sidang TA</a>
                                <a href="#selamat">Upload Laporan Final</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
                <a href="../logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a>
            </div>
        </nav>

        </div>

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
                <p>SISTA merupakan Sistem Informasi Tugas Akhir terpadu yang membantu mahasiswa tingkat akhir dalam menyelesaikan adminitrasi Tugas Akhir di Teknik Industri, Universitas Diponegoro.</p>
                <p>Tugas Akhir adalah karya ilmiah yang disusun oleh mahasiswa berdasarkan hasil penelitian suatu masalah yang dilakukan dengan bimbingan oleh dosen pembimbing.
                    <p>Persyaratan Tugas Akhir
                        <br> 1. Mengambil Mata Kuliah Tugas Akhir pada KRS
                        <br> 2. Capaian SKS minimal 128 SKS dengan nilai minimal C
                        <br> 3. IPK > 2,25
                        <br> 4. Lulus Kerja Praktek</p>
                </p>
            </div>

            <!-- Data Diri -->
            <div class="w3-container" style="margin-top:75px" id="Data_Diri">
                <h1 class="w3-xxxlarge w3-text-red"><b>Data Diri</b></h1>
                <hr style="width:50px;border:5px solid red" class="w3-round">

                <div class="w3-container">
                    <form style="color: #f44336" method="POST" action="aksi.php">
                        <label style="color:color:#f44336">
                            Nama:
                            <br>
                            <input type="text" name="nama_mahasiswa" required>
                        </label>
                        <br> NIM:
                        <br>
                        <input type="text" name="nim_mahasiswa" required>
                        <br> Nomor Telepon:
                        <br>
                        <input type="text" name="no_telp_mahasiswa" required>
                        <br> Alamat:
                        <br>
                        <input type="text" name="alamat_mahasiswa" required>
                        <br> E-mail:
                        <br>
                        <input type="text" name="email_mahasiswa" required>
                        <br> Dosen Wali:
                        <br>
                        <input type="text" name="doswal_mahasiswa" required>
                        <br>

                        <h2 style="color:#f44336"><b>Data Orang Tua</b></h2> Nama Ayah:
                        <br>
                        <input type="text" name="ayah_mahasiswa" required>
                        <br> Nomor Telpon:
                        <br>
                        <input type="text" name="ayah_no_telepon" required>
                        <br> Alamat:
                        <br>
                        <input type="text" name="ayah_alamat" required>
                        <br>
                        <br>
                        <input type="submit" value="Submit" style="background:red; width:200px">
                    </form>

                </div>

                <!-- Designers -->
                <div class="w3-container" id="daftar" style="margin-top:75px">
                    <h1 class="w3-xxxlarge w3-text-red">Pendaftaran Tugas Akhir<b></b></h1>
                    <hr style="width:50px;border:5px solid red" class="w3-round">
                    <h2 style="color:#f44336"><b>Akademik</b></h2>
                    <form method="POST" style="color: #f44336" enctype="multipart/form-data" action="aksi_upload.php">
                        NAMA:
                        <br>
                        <input type="text" name="nama" disabled value="<?php echo $_SESSION['nama']; ?>"><br>
                        NIM:
                        <br>
                        <input type="text" name="nim">
                        <br> IPK:
                        <br>
                        <input type="text" name="ipk">
                        <br> SKS:
                        <br>
                        <input type="text" name="sks">

                        <h2 style="color:#f44336"><b>Upload Berkas</b></h2>
                        <!-- Transkrip Lengkap <input type="text" name="ipk"><br> -->
                        Tranksrip Lengkap
                        <br>
                        <input type="file" name="file">
                        <br>

                        <br>
                        <h2 style="color:#f44336"><b>Pengajuan Tema</b></h2>
                        <B> TEMA 1 </B><br>
                        <input type="text" name="tema1">
                      <!--  <select name="tema1" style="width:250px;">
                            <option value="volvo"></option>
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="fiat">Fiat</option>
                            <option value="audi">Audi</option>
                        </select>
                        -->
                        <br>
                    
                        <B> TEMA 2 </B><br>
                        <input type="text" name="tema2">
                        <!--  <select name="tema1" style="width:250px;">
                            <option value="volvo"></option>
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="fiat">Fiat</option>
                            <option value="audi">Audi</option>
                        </select>
                        -->
                        <br>
                        <h2 style="color:#f44336"><b>Pengajuan Dosen Pembimbing</b></h2>
                        <B> DOSEN PEMBIMBING 2 </B>
                        <BR>
                        <select name="dosbing2" style="width:250px;">
                            <option value="volvo"></option>
                            <option value="volvo">A</option>
                            <option value="saab">B</option>
                            <option value="fiat">C</option>
                            <option value="audi">D</option>
                        </select>
                        <br>
                        <B> DOSEN PEMBIMBING 1 </B>
                        <BR>
                        <select name="dosbing1" style="width:250px;">
                            <option value="volvo"></option>
                            <option value="volvo">E</option>
                            <option value="saab">F</option>
                            <option value="fiat">G</option>
                            <option value="audi">H</option>
                        </select>
                        <br>
                       
                        <br>
                        <br>
                        <input type="submit" value="Submit" name="upload" style="background:red;width:200px">
                    </form>
                </div>

                <!-- pengumuman dosen -->
                
    <?php	include "connection.php"; 
    $sesi = $_SESSION['nama'];
   
    $sql = "SELECT no_induk FROM tugas_akhir WHERE nama='$sesi'";
    $result = $koneksi->query($sql);
    $sql2 = "SELECT tema1 FROM tugas_akhir WHERE nama='$sesi'";
    $result2 = $koneksi->query($sql2);
    $sql3 = "SELECT dosbing1 FROM tugas_akhir WHERE nama='$sesi'";
    $result3 = $koneksi->query($sql3);
    $sql4 = "SELECT tanggal FROM daftarsempro WHERE nama='$sesi'";
    $result4 = $koneksi->query($sql4);
    $sql5 = "SELECT jam FROM daftarsempro WHERE nama='$sesi'";
    $result5 = $koneksi->query($sql5);
    $sql6 = "SELECT tanggal FROM daftarta WHERE nama='$sesi'";
    $result6 = $koneksi->query($sql6);
    $sql7 = "SELECT jam FROM daftarta WHERE nama='$sesi'";
    $result7 = $koneksi->query($sql7);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $nimku =  $row["no_induk"];
        }
    } 

      
    if ($result2->num_rows > 0) {
        // output data of each row
        while($row = $result2->fetch_assoc()) {
            $temaku =  $row["tema1"];
        }
    } 

    if ($result3->num_rows > 0) {
        // output data of each row
        while($row = $result3->fetch_assoc()) {
            $dosbingku =  $row["dosbing1"];
        }
    }

    if ($result4->num_rows > 0) {
            // output data of each row
            while($row = $result4->fetch_assoc()) {
                $tanggalsempro =  $row["tanggal"];
            }
    } 

    if ($result5->num_rows > 0) {
        // output data of each row
        while($row = $result5->fetch_assoc()) {
            $jamsempro =  $row["jam"];
        }
    } 
    if ($result6->num_rows > 0) {
        // output data of each row
        while($row = $result6->fetch_assoc()) {
            $tanggalta =  $row["tanggal"];
        }
    } 
    if ($result7->num_rows > 0) {
        // output data of each row
        while($row = $result7->fetch_assoc()) {
            $jamta =  $row["jam"];
        }
    } 
     ?>
    

                <div class="w3-container" id="pengumumandosen" style="margin-top:75px">
                    <h3 class="w3-xxxlarge w3-text-red">Pengumuman Dosen Pembimbing<b></b></h3>
                    <hr style="width:50px;border:5px solid red" class="w3-round">

                    <form method="POST" style="color: #f44336" enctype="multipart/form-data" action="#">
                        NAMA:
                        <br>
                        <input type="text" disabled name="nim" value="<?php echo $sesi ?>">
                        <br> NIM:
                        <br>
                        <input type="text" disabled  name="ipk" value="<?php echo $nimku; ?>">
                        <br> TOPIK TA:
                        <br>
                        <input type="text" disabled  name="sks" value="<?php echo $temaku; ?>">
                        <br> Dosen Pembimbing
                        <br>
                        <input type="text" disabled value="<?php echo $dosbingku; ?>">
                    </form>
                </div>

                <!-- bimbingan sempro -->
                <div class="w3-container" id="bimbingan" style="margin-top:75px">
                    <h3 class="w3-xxxlarge w3-text-red">Bimbingan<b></b></h3>
                    <hr style="width:50px;border:5px solid red" class="w3-round">
                    <form  method="POST" action="aksi_bimbingan_sempro.php">
                        <table>
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Catatan Bimbingan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="date" name="tanggal1">
                                    </td>
                                    <td>
                                        <textarea rows="4" cols="50" name="textarea1"></textarea>
                                    </td>
                                    <td>
                                        <input type="checkbox" style="width:50px;" name="status1" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="date" name="tanggal2">
                                    </td>
                                    <td>
                                        <textarea rows="4" cols="50" name="textarea2"></textarea>
                                    </td>
                                    <td>
                                        <input type="checkbox" style="width:50px;" name="status2" >
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>
                                        <input type="date" name="tanggal3">
                                    </td>
                                    <td>
                                        <textarea rows="4" cols="50" name="textarea3"></textarea>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="status3" style="width:50px;  " >
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <br>
                        <input type="submit" value="Submit" style="background:red; width:200px">
                    </form>
                </div>

                <!-- Pendaftaran Sempro -->
                <div class="w3-container" id="daftarsempro" style="margin-top:75px">
                    <h3 class="w3-xxxlarge w3-text-red">Pendaftaran<b></b></h3>
                    <hr style="width:50px;border:5px solid red" class="w3-round">

                    <div class="w3-container">
                        <form style="color: #f44336" method="POST" action="aksi_pendaftaran_sempro.php">
                            <label style="color:color:#f44336">
                                Nama:
                                <br>
                                <input type="text" disabled name="nama" value="<?php echo $sesi ?>">
                            </label>
                            <br> NIM:
                            <br>
                            <input type="text" name="nim" required>
                            <br> DOSEN PEMBIMBING
                            <BR>
                            <select name="dosbing" style="width:250px;">
                                <option value="volvo"></option>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select>
                            <br> Topik TA:
                            <br>
                            <input type="text" name="topik" required>
                            <br> Tanggal Seminar:
                            <br>
                            <input type="date" name="tanggal" required>
                            <br> Jam Seminar:
                            <br>
                            <input type="time" name="jam" required>
                            <br> Proposal Tugas Akhir (format pdf)
                            <br>
                            <input type="file" value="Submit" name="lembar_proposal">

                            <br> Lembar Persetujuan Seminar Proposal
                            <br>
                            <input type="file" value="Submit" name="lembar_persetujuan">
                            <br>
                            <br>
                            <input type="submit" value="Submit" style="background:red; width:200px" name="uploadSempro">
                        </form>

                    </div>
                </div>

                <!-- jadwal semimar proposal -->
                <div class="w3-container" id="jadwalsempro" style="margin-top:75px">
                    <h3 class="w3-xxxlarge w3-text-red">Jadwal Seminar Proposal<b></b></h3>
                    <hr style="width:50px;border:5px solid red" class="w3-round">

                    
                      

                    <form method="POST" style="color: #f44336" enctype="multipart/form-data" action="#">
                        Hari:
                        <br>
                        <input type="text" name="nim" >
                        <br> Tanggal:
                        <br>
                        <input type="date" name="ipk" value="<?php echo $tanggalsempro ?>" disabled > 
                        <br> Jam
                        <br>
                        <input type="time" name="sks" value="<?php echo $jamsempro ?>" disabled>
                        <br> Ruangan
                        <br>
                        <input type="text" name="sks">
                        <br> Dosen Penguji
                        <br>
                        <input type="text" name="sks">
                    </form>
                </div>

                <!-- bimbingan sidang tugas akhir-->
                <div class="w3-container" id="bimbingansidangTA" style="margin-top:75px">
                    <h3 class="w3-xxxlarge w3-text-red">Bimbingan<b></b></h3>
                    <hr style="width:50px;border:5px solid red" class="w3-round">
                    <form method="POST" action="aksi_bimbingan_TA.php">
                        <table>
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Catatan Bimbingan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="date" name="tanggal1TA" required>
                                    </td>
                                    <td>
                                        <textarea rows="4" cols="50" name="catatan1TA"required ></textarea>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="status1TA" style="width:50px;" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <input type="date" name="tanggal2TA">
                                    </td>
                                    <td>
                                    <textarea rows="4" cols="50" name="catatan2TA" ></textarea>
                                    </td>
                                    <td>
                                    <input type="checkbox" name="status2TA" style="width:50px;">
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>
                                    <input type="date" name="tanggal3TA">
                                    </td>
                                    <td>
                                    <textarea rows="4" cols="50" name="catatan3TA" ></textarea>
                                    </td>
                                    <td>
                                    <input type="checkbox" name="status3TA" style="width:50px;">
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <br>
                        <input type="submit" value="Submit" style="background:red; width:200px">
                    </form>
                </div>

                <!-- Pendaftaran Sidang tugas akhir -->
                <div class="w3-container" id="daftarsidangTA" style="margin-top:75px">
                    <h3 class="w3-xxxlarge w3-text-red">Pendaftaran<b></b></h3>
                    <hr style="width:50px;border:5px solid red" class="w3-round">

                    <div class="w3-container">
                        <form style="color: #f44336" method="POST" action="aksi_pendaftaran_ta.php">
                            <label style="color:color:#f44336">
                                Nama:
                                <br>
                                <input type="text" name="nama_mahasiswa" value="<?php echo $_SESSION['nama'] ?>" disabled>
                            </label>
                            <br> NIM:
                            <br>
                            <input type="text" name="nim" required>
                            <br> DOSEN PEMBIMBING
                            <BR>
                            <select name="dosbing" style="width:250px;">
                                <option value="volvo"></option>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select>
                            <br> Topik TA:
                            <br>
                            <input type="text" name="topik" required>
                            <br> Tanggal Seminar:
                            <br>
                            <input type="date" name="tanggal" required>
                            <br> Jam Seminar:
                            <br>
                            <input type="time" name="time" required>
                            <br> Proposal Tugas Akhir (format pdf)
                            <br>
                            <input type="file" value="Submit" name="lembar_proposal">

                            <br> Lembar Persetujuan Sidang TA
                            <br>
                            <input type="file" value="Submit" name="lembar_persetujuan">
                            <br>
                           
                            <br> Sertifikat TOEFL
                            <br>
                            <input type="file" value="Submit" name="toefl">
                            <BR>
                            <BR>
                            <input type="submit" value="Submit" style="background:red; width:200px">
                        </form>

                    </div>
                </div>

                <!-- jadwal sidang tugas akhir -->
                <div class="w3-container" id="jadwalsidangTA" style="margin-top:75px">
                    <h3 class="w3-xxxlarge w3-text-red">Jadwal Sidang Tugas Akhir<b></b></h3>
                    <hr style="width:50px;border:5px solid red" class="w3-round">

                  
                        Hari:
                        <br>
                        <input type="text" name="nim">
                        <br> Tanggal:
                        <br>
                        <input type="date" name="ipk" disabled value="<?php echo $tanggalta?>">
                        <br> Jam
                        <br>
                        <input type="time" name="sks" disabled value="<?php echo $jamta?>">
                        <br> Ruangan
                        <br>
                        <input type="text" name="sks">
                        <br> Dosen Penguji
                        <br>
                        <input type="text" name="sks">
                        <br>
                        <br>
                      <a  href="#selamat"><button  style="background:red; width:200px">LANJUT</a>
                  
                </div>

                <!-- Upload Laporan Final -->
                <div class="w3-container" style="margin-top:75px" id="selamat">
                    <h1> <FONT COLOR="red"><b>SELAMAT!</b></h1>

                    <p><b><h2><?php echo $_SESSION['nama'] ?></h2></b> Kamu telah mencapai tahap</p>
                    <p>akhir dari Tugas Akhir. Silahkan upload hasil</p>
                    <p>Laporan Tugas Akhir Di Bawah Ini</p>
                    <hr style="width:50px;border:5px solid red" class="w3-round">
                    </font>
                    <form  method="POST" action="aksi_laporan_tugas_akhir.php">
                        <br> Laporan Tugas Akhir (format pdf)
                        <br>
                        <input type="file" name="laporan">
                        <br>
                        <br>
                        <input type="submit" value="Submit" style="background:red; width:200px">
                    </form>
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