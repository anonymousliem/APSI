<?php

if(isset($_GET['pesan'])){
  if($_GET['pesan'] == "berhasilupload"){
    echo '<script language="javascript">alert("berhasil upload file")</script>';
  }
  if($_GET['pesan'] == "gagalupload"){
    echo '<script language="javascript">alert("gagal upload")</script>';
  }
}

session_start();
if ($_SESSION['level'] != 'dosen') {
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
                <a href="profile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Profile</a>
             <!--   <a href="#Data_Diri" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Data Diri</a> -->
                    
              <!--  <a href="gantipassword.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ganti Password</a> -->
                <a href="index.php#daftar" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Pendaftaran Tugas Akhir</a>

                <div class="w3-bar-block">
                    <ul>
                        <li class="dropdown">
                            <a href="index.php#bimbingan" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Seminar Proposal</a>
                            <div class="dropdown-content">
                                <a href="index.php#bimbingan">Bimbingan</a>
                                <a href="index.php#daftarsempro">Pendaftaran</a>
                              <!--  <a href="#jadwalsempro">Jadwal Seminar</a> -->
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
                             <!--   <a href="#jadwalsidangTA">Jadwal Sidang TA</a> -->
                                <a href="index.php#selamat">Upload Laporan Final</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="rekap.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Rekap</a>
    
               <!-- <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a> -->
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
                <h1 class="w3-xxxlarge w3-text-red"><b>Data Diri</b></h1>
                <hr style="width:50px;border:5px solid red" class="w3-round">

</div>

<!-- Mulai info-->
<?php	include "../connection.php"; 
    $sesi = $_SESSION['nama'];
   
    $sql = "SELECT no_induk, alamat, email FROM dosen WHERE nama='$sesi'";
    $result3 = $koneksi->query($sql);
    if ($result3->num_rows > 0) {
        while($row = $result3->fetch_assoc()) {
            $nimku =  $row["no_induk"];
            $emailku = $row["email"];
            $alamatku =  $row["alamat"];
        }
    }





    
?>
                <div class="container bootstrap snippet" >

            <div class="row" >
    	        <div class="col-sm-9" style="background:red">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
                <li><a data-toggle="tab" href="#messages">Edit Profile</a></li>
              </ul>

              <hr>
          <div class="tab-content">
            <div class="tab-pane active" id="home">
            <hr style="width:50px;border:5px solid red" class="w3-round">
                  <form class="form" method="post" id="registrationForm">
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Nama</h4></label>
                              <input type="text" class="form-control" value="<?php echo $_SESSION['nama'] ?>" disabled>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>NIDN</h4></label>
                              <input type="text" class="form-control" value="<?php echo $nimku ?>" disabled>
                          </div>
                      </div>
          
                
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Alamat</h4></label>
                              <input type="text" class="form-control" disabled value="<?php echo $alamatku ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="text" class="form-control" disabled value="<?php echo $emailku ?>">
                          </div>
                      </div>
                    
                     
                    


                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                
                            </div>
                      </div>
              	</form>
       
              
             </div>
             <!--/tab-pane-->
             <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr style="width:50px;border:5px solid red" class="w3-round">
               <form class="form"  method="POST" action="aksi_updatedosen.php">
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Nama</h4></label>
                              <input type="text" class="form-control" value="<?php echo $_SESSION['nama'] ?>" disabled>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>NIDN</h4></label>
                              <input type="text" class="form-control" value="<?php echo $nimku ?>" disabled>
                          </div>
                      </div>
          
                    
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Alamat</h4></label>
                              <input type="text" class="form-control" name="alamat_mahasiswa2" value="<?php echo $alamatku ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="text" class="form-control" name="email_mahasiswa2" value="<?php echo $emailku ?>">
                          </div>
                      </div>
                     
                    

                        
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button style="margin-button:10px" class="btn btn-lg btn-success" value="UPDATE"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               
                            </div>
                            
                      </div>
                     

              	</form>
               
             </div><!--/tab-pane-->
            
              </div><!--/tab-pane-->
              <br><br><br>
          </div><!--/tab-content-->

        </div><!--/col-9-->
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