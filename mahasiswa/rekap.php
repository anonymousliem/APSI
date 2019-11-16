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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
                <a href="index.php#beranda" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Beranda</a>
                <a href="index.php#Data_Diri" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Data Diri</a>
                <a href="profile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Profile</a>
                <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Rekapan</a>
                <a href="index.php#daftar" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Pendaftaran Tugas Akhir</a>

                <div class="w3-bar-block">
                    <ul>
                        <li class="dropdown">
                            <a href="index.php#bimbingan" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Seminar Proposal</a>
                            <div class="dropdown-content">
                                <a href="index.php#bimbingan">Bimbingan</a>
                                <a href="index.php#daftarsempro">Pendaftaran</a>
                               <!-- <a href="index.php#jadwalsempro">Jadwal Seminar</a> -->
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="w3-bar-block">
                    <ul>
                        <li class="dropdown">
                            <a href="index.php#bimbingansidangTA" class="w3-bar-item w3-button w3-hover-white" onclick="w3_close()">Sidang Tugas Akhir</a>
                            <div class="dropdown-content">
                                <a href="index.php#bimbingansidangTA">Bimbingan</a>
                                <a href="index.php#daftarsidangTA">Pendaftaran</a>
                                 <!-- <a href="index.php#jadwalsidangTA">Jadwal Sidang TA</a> -->
                                <a href="index.php#selamat">Upload Laporan Final</a>
                            </div>
                        </li>
                    </ul>
                </div>

              <!--  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a> -->
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

            </div>

            <!-- Data Diri -->
            <div class="w3-container" style="margin-top:75px;margin-left:80px;" id="Data_Diri">
                <h1 class="w3-xxxlarge w3-text-red"><b>Rekapan</b></h1>
                <hr style="width:50px;border:5px solid red" class="w3-round">

            </div>

            <!-- Mulai info-->
            <?php	include "connection.php"; 
    $sesi = $_SESSION['nama'];

    $sql = "SELECT no_induk FROM ortu WHERE nama='$sesi'";
    $result3 = $koneksi->query($sql);
    if ($result3->num_rows > 0) {
        // output data of each row
        while($row = $result3->fetch_assoc()) {
            $nimku =  $row["no_induk"];
        }
    }

    $sql2 = "SELECT no_telepon FROM ortu WHERE nama='$sesi'";
    $result2 = $koneksi->query($sql2);
    if ($result2->num_rows > 0) {
        // output data of each row
        while($row = $result2->fetch_assoc()) {
            $teleponku =  $row["no_telepon"];
        }
    }

    $sql3 = "SELECT doswal FROM ortu WHERE nama='$sesi'";
    $result3 = $koneksi->query($sql3);
    if ($result3->num_rows > 0) {
        // output data of each row
        while($row = $result3->fetch_assoc()) {
            $doswalku =  $row["doswal"];
        }
    }

    $sql4 = "SELECT alamat FROM ortu WHERE nama='$sesi'";
    $result4 = $koneksi->query($sql4);
    if ($result4->num_rows > 0) {
        // output data of each row
        while($row = $result4->fetch_assoc()) {
            $alamatku =  $row["alamat"];
        }
    }

    $sql5 = "SELECT email FROM ortu WHERE nama='$sesi'";
    $result5 = $koneksi->query($sql5);
    if ($result5->num_rows > 0) {
        // output data of each row
        while($row = $result5->fetch_assoc()) {
            $emailku =  $row["email"];
        }
    }

    $sql6 = "SELECT nama_ayah FROM ortu WHERE nama='$sesi'";
    $result6 = $koneksi->query($sql6);
    if ($result6->num_rows > 0) {
        // output data of each row
        while($row = $result6->fetch_assoc()) {
            $namaAyah =  $row["nama_ayah"];
        }
    }

    $sql7 = "SELECT no_ayah FROM ortu WHERE nama='$sesi'";
    $result7 = $koneksi->query($sql7);
    if ($result7->num_rows > 0) {
        // output data of each row
        while($row = $result7->fetch_assoc()) {
            $noAyah =  $row["no_ayah"];
        }
    }

    $sql8 = "SELECT alamat_ayah FROM ortu WHERE nama='$sesi'";
    $result8 = $koneksi->query($sql8);
    if ($result8->num_rows > 0) {
        // output data of each row
        while($row = $result8->fetch_assoc()) {
            $alamatAyah =  $row["alamat_ayah"];
        }
    }

?>
                <div class="container bootstrap snippet">

                    <div class="row">
                        <div class="col-sm-9">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Tab1</a></li>
                                <li><a data-toggle="tab" href="#messages">tab2</a></li>
                                <li><a data-toggle="tab" href="#daftarsempro">tab3</a></li>
                                <li><a data-toggle="tab" href="#jadwalseminarsempro">tab4</a></li>
                                <li><a data-toggle="tab" href="#bimbinganTA">tab5</a></li>
                                <li><a data-toggle="tab" href="#pendaftaranTA">tab6</a></li>
                                
                                <li><a data-toggle="tab" href="#jadwalseminarTA">tab7</a></li>
                                
                            </ul>
                            <hr>
                            <!-- <div class="col-sm-9" > -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <form class="form" method="post" id="registrationForm">
                                        <h1>Pendaftaran Tugas Akhir</h1>
                                        <table class="table table-striped table-bordered table-hover table-condensed ">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Nim</th>
                                                    <th>Topik</th>
                                                    <th>Dosen Pembimbing</th>
                                                    <th>status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                        
                                         $query = "SELECT no_induk, nama, tema1, dosbing1, status FROM tugas_akhir where nama='$sesi'";
                                         $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
                                         while ($row = mysqli_fetch_array($result)) {
                                     ?>

                                                    <tr>
                                                        <td>
                                                            <?php echo $row['no_induk']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['nama']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['tema1']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['dosbing1']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['status']; ?>
                                                        </td>
                                                        <!-- <td>
                                                            <a href='edit_mahasiswa.php?id=<?php echo $row[' id ']; ?>' class='btn btn-success'>
                                                                <span class='glyphicon glyphicon-edit'></span>Edit</button>
                                                            </a>
                                                            <a href='hapus_mahasiswa.php?id=<?php echo $row[' id ']; ?>' class='btn btn-danger'>
                                                                <span class='glyphicon glyphicon-remove-sign'>Delete</button></a>
                                                        </td> -->
                                                    </tr>
                                                    <?php
                        }
                        ?>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <!--/tab-pane-->
                                <div class="tab-pane" id="messages">
                                    <h2></h2>
                                    <div class="tab-pane active" id="home">
                                        <form class="form" method="post" id="registrationForm">
                                            <h1>Bimbingan Sempro</h1>
                                            <table class="table table-striped table-bordered table-hover table-condensed ">
                                                <thead>
                                                    <tr>
                                                        <th>Tanggal</th>
                                                        <th>Catatan</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- ISINYA -->
                                                    <?php

                                        $query = "SELECT catatan, tanggal, status FROM bimbingansempro where nama='$sesi' ";
                                        $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>

                                                        <tr>
                                                            <td>
                                                                <?php echo $row['tanggal']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['catatan']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['status']; ?>
                                                            </td>

                                                            <!-- <td>
                                                           <a href='edit_mahasiswa.php?id=<?php echo $row[' id ']; ?>' class='btn btn-success'>
                                                               <span class='glyphicon glyphicon-edit'></span>Edit</button>
                                                           </a>
                                                           <a href='hapus_mahasiswa.php?id=<?php echo $row[' id ']; ?>' class='btn btn-danger'>
                                                               <span class='glyphicon glyphicon-remove-sign'>Delete</button></a>
                                                       </td> -->
                                                        </tr>
                                                        <?php
                       }
                       ?>

                                                </tbody>
                                            </table>
                                        </form>
                                    </div>

                                </div>
                                <!--/tab-pane-->

                                <div class="tab-pane" id="daftarsempro">
                                    <h2></h2>
                                    <div class="tab-pane active" id="home">
                                        <form class="form" method="post" id="registrationForm">
                                            <h1>Pendaftaran Sempro</h1>
                                            <table class="table table-striped table-bordered table-hover table-condensed ">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Nim</th>
                                                        <th>Dosen Pembimbing</th>
                                                        <th>Topik TA</th>
                                                        <th>Tanggal Seminar</th>
                                                        <th>Jam Seminar</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- ISINYA -->
                                                    <?php

                                        $query = "SELECT nama, nim, dosbing, tema, tanggal, jam, status FROM daftarsempro WHERE nama='$sesi' ";
                                        $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>

                                                        <tr>
                                                            <td>
                                                                <?php echo $row['nama']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['nim']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['dosbing']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['tema']; ?>
                                                            </td>

                                                            <td>
                                                                <?php echo $row['tanggal']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['jam']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['status']; ?>
                                                            </td>


                                                            <!-- <td>
                                                           <a href='edit_mahasiswa.php?id=<?php echo $row[' id ']; ?>' class='btn btn-success'>
                                                               <span class='glyphicon glyphicon-edit'></span>Edit</button>
                                                           </a>
                                                           <a href='hapus_mahasiswa.php?id=<?php echo $row[' id ']; ?>' class='btn btn-danger'>
                                                               <span class='glyphicon glyphicon-remove-sign'>Delete</button></a>
                                                       </td> -->
                                                        </tr>
                                                        <?php
                       }
                       ?>

                                                </tbody>
                                            </table>
                                        </form>
                                    </div>

                                </div>
                                <!-- tab pan-->

                                <!-- tab jadwal seminar sempro -->
                                <div class="tab-pane" id="jadwalseminarsempro">
                                    <h2></h2>
                                    <div class="tab-pane active" id="home">
                                        <form class="form" method="post" id="registrationForm">
                                            <h1>Jadwal Seminar Proposal</h1>
                                            <table class="table table-striped table-bordered table-hover table-condensed ">
                                                <thead>
                                                    <tr>
                                                        <th>Tanggal</th>
                                                        <th>Jam</th>
                                                        <th>Ruangan</th>
                                                        <th>Dosen Penguji</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- ISINYA -->
                                                    <?php

                                        $query = "SELECT tanggal, jam, ruangan, dosenpenguji, status FROM daftarsempro where nama='$sesi' and status !='Rejected' ";
                                        $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>

                                                        <tr>
                                                            <td>
                                                                <?php echo $row['tanggal']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['jam']; ?>
                                                            </td>
                                                           <td>
                                                                <?php echo $row['ruangan']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['dosenpenguji']; ?>
                                                            </td>

                                                            <td>
                                                                <?php echo $row['status']; ?>
                                                            </td>
                                                            <!-- <td>
                                                                <?php echo $row['jam']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['status']; ?>
                                                            </td> -->


                                                            <!-- <td>
                                                           <a href='edit_mahasiswa.php?id=<?php echo $row[' id ']; ?>' class='btn btn-success'>
                                                               <span class='glyphicon glyphicon-edit'></span>Edit</button>
                                                           </a>
                                                           <a href='hapus_mahasiswa.php?id=<?php echo $row[' id ']; ?>' class='btn btn-danger'>
                                                               <span class='glyphicon glyphicon-remove-sign'>Delete</button></a>
                                                       </td> -->
                                                        </tr>
                                                        <?php
                       }
                       ?>

                                                </tbody>
                                            </table>
                                        </form>
                                    </div>

                                </div>
                             


                                <!--penutup tab jadwal seminar sempro -->

                                <!-- tab bimbingan seminar ta -->
                                 <div class="tab-pane" id="bimbinganTA">
                                    <h2></h2>
                                    <div class="tab-pane active" id="home">
                                        <form class="form" method="post" id="registrationForm">
                                            <h1>Bimbingan TA</h1>
                                            <table class="table table-striped table-bordered table-hover table-condensed ">
                                                <thead>
                                                    <tr>
                                                      
                                                        <th>Tanggal</th>
                                                        <th>Catatan</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- ISINYA -->
                                                    <?php

                                        $query = "SELECT tanggal, catatan, status FROM bimbinganta where nama='$sesi' ";
                                        $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>

                                                        <tr>
                                                            <td>
                                                                <?php echo $row['tanggal']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['catatan']; ?>
                                                            </td>
                                                          <td>
                                                                <?php echo $row['status']; ?>
                                                            </td>
                                                            <!--  <td>
                                                                <?php echo $row['tema']; ?>
                                                            </td>

                                                            <td>
                                                                <?php echo $row['tanggal']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['jam']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['status']; ?>
                                                            </td> -->


                                                            <!-- <td>
                                                           <a href='edit_mahasiswa.php?id=<?php echo $row[' id ']; ?>' class='btn btn-success'>
                                                               <span class='glyphicon glyphicon-edit'></span>Edit</button>
                                                           </a>
                                                           <a href='hapus_mahasiswa.php?id=<?php echo $row[' id ']; ?>' class='btn btn-danger'>
                                                               <span class='glyphicon glyphicon-remove-sign'>Delete</button></a>
                                                       </td> -->
                                                        </tr>
                                                        <?php
                       }
                       ?>

                                                </tbody>
                                            </table>
                                        </form>
                                    </div>

                                </div>
                             
                         <!-- tab PENUTUP bimbingan seminar ta -->


         <!-- tab pendaftaran seminar ta -->
         <div class="tab-pane" id="pendaftaranTA">
                                    <h2></h2>
                                    <div class="tab-pane active" id="home">
                                        <form class="form" method="post" id="registrationForm">
                                            <h1>Pendaftaran TA</h1>
                                            <table class="table table-striped table-bordered table-hover table-condensed ">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Nim</th>
                                                        <th>Dosen Pembimbing</th>
                                                        <th>Topik TA</th>
                                                        <th>Tanggal Seminar</th>
                                                        <th>Jam Seminar</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- ISINYA -->
                                                    <?php

                                        $query = "SELECT nama, nim, dosbing, tema, tanggal, jam,  status FROM daftarta where nama='$sesi' ";
                                        $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>

                                                        <tr>
                                                            <td>
                                                                <?php echo $row['nama']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['nim']; ?>
                                                            </td>
                                                          <td>
                                                                <?php echo $row['dosbing']; ?>
                                                            </td>
                                                             <td>
                                                                <?php echo $row['tema']; ?>
                                                            </td>

                                                            <td>
                                                                <?php echo $row['tanggal']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['jam']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['status']; ?>
                                                            </td> 


                                                            <!-- <td>
                                                           <a href='edit_mahasiswa.php?id=<?php echo $row[' id ']; ?>' class='btn btn-success'>
                                                               <span class='glyphicon glyphicon-edit'></span>Edit</button>
                                                           </a>
                                                           <a href='hapus_mahasiswa.php?id=<?php echo $row[' id ']; ?>' class='btn btn-danger'>
                                                               <span class='glyphicon glyphicon-remove-sign'>Delete</button></a>
                                                       </td> -->
                                                        </tr>
                                                        <?php
                       }
                       ?>

                                                </tbody>
                                            </table>
                                        </form>
                                    </div>

                                </div>
                             
                         <!-- tab PENUTUP pendaftaran seminar ta -->

<!-- tab jadwal seminar ta -->
<div class="tab-pane" id="jadwalseminarTA">
                                    <h2></h2>
                                    <div class="tab-pane active" id="home">
                                        <form class="form" method="post" id="registrationForm">
                                            <h1>Jadwal Seminar Tugas Akhir</h1>
                                            <table class="table table-striped table-bordered table-hover table-condensed ">
                                                <thead>
                                                    <tr>
                                                       <!-- <th>Hari</th> -->
                                                        <th>Tanggal</th>
                                                        <th>Jam</th>
                                                        <th>Ruangan</th>
                                                        <th>Dosen Penguji</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- ISINYA -->
                                                    <?php

                                        $query = "SELECT status, hari, ruangan, dosenpenguji, tanggal, jam FROM daftarta where nama='$sesi' and status !='Rejected'  ";
                                        $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>

                                                        <tr>
                                                            <!-- <td>
                                                                <?php echo $row['hari']; ?>
                                                            </td> -->
                                                            <td>
                                                                <?php echo $row['tanggal']; ?>
                                                            </td>
                                                        <td>
                                                                <?php echo $row['jam']; ?>
                                                            </td>
                                                               <td>
                                                                <?php echo $row['ruangan']; ?>
                                                            </td>

                                                            <td>
                                                                <?php echo $row['dosenpenguji']; ?>
                                                            </td>
                                                       <!--     <td>
                                                                <?php echo $row['jam']; ?>
                                                            </td> -->
                                                            <td>
                                                                <?php echo $row['status']; ?>
                                                            </td>

                                                            <!-- <td>
                                                           <a href='edit_mahasiswa.php?id=<?php echo $row[' id ']; ?>' class='btn btn-success'>
                                                               <span class='glyphicon glyphicon-edit'></span>Edit</button>
                                                           </a>
                                                           <a href='hapus_mahasiswa.php?id=<?php echo $row[' id ']; ?>' class='btn btn-danger'>
                                                               <span class='glyphicon glyphicon-remove-sign'>Delete</button></a>
                                                       </td> -->
                                                        </tr>
                                                        <?php
                       }
                       ?>

                                                </tbody>
                                            </table>
                                        </form>
                                    </div>

                                </div>
                             


                                <!--penutup tab jadwal seminar ta -->

                            </div>
                            <!--/tab-pane-->
                            <br>
                            <br>
                            <br>
                        </div>
                        <!--/tab-content-->

                    </div>
                    <!--/col-9-->
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