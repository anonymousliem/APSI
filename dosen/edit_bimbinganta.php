<?php
require '../connection.php';

session_start();
if ($_SESSION['level'] != 'dosen') {
  header("location:index.php");
}
$id = $_GET['id_bimbinganta'];
$namaDosen = $_SESSION['nama'];
$sql8 = "SELECT id_bimbinganta, catatan,  tanggal, dosbing, nama ,status FROM bimbinganta WHERE dosbing='$namaDosen' and id_bimbinganta='$id' ";
$result8 = $koneksi->query($sql8);
if ($result8->num_rows > 0) {
  // output data of each row
  while($row = $result8->fetch_assoc()) {
     $catatan =  $row["catatan"];
      $namaMhs =  $row["nama"];
      $tanggal =  $row["tanggal"];
      $dosbing =  $row["dosbing"];
      $status =  $row["status"];
      $id_bimbinganta =  $row["id_bimbinganta"];
   
  }
} 

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-btn {
            width: 500px;
        }
    </style>
    <title>Login | SISTEM INFORMASI TA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>

<body id="index" style="background-image: url(https://scontent-sin6-2.cdninstagram.com/vp/bc5cfff8536f149968e956c134a32e70/5DC2C71D/t51.2885-15/e35/65673466_686091891817492_4145229985833254060_n.jpg?_nc_ht=scontent-sin6-2.cdninstagram.com); background-repeat: no-repeat; background-position-y: -10rem; background-size:100%;">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <h1 style="color: white; text-align:right;">SISTEM INFORMASI TUGAS AKHIR</h1>
    <h2 style="color: white; text-align:right;">TEKNIK INDUSTRI<BR>UNIVERSITAS DIPONEGORO</h2>

<center>
    <section class="col-lg-4 col-12 px-0 shadow">
        <div class="card-body" CLASS="w3-display-topleft" style="background-color: rgba(255, 0, 0, 0.7)">
            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/2/2d/Undip.png/220px-Undip.png" width="50" height="50">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr8h51vHbfUHQBjNY8MHS0H7JDF0QZ9ZA9e_AZwrdCQD0Rkx87&s" width="100" height="50">

        </div>

        <div class="card-body py-3" style="background-color: rgba(255, 0, 0, 0.7);" id="form">



            <form  method="POST" action="aksi_edit_bimbinganta.php">
                <div class="form-group my-3">
                <label for="no_induk" style="color: white" >ID Bimbingan</label>
                    <input type="text" name="id_bimbinganta" readonly value="<?php echo $id_bimbinganta  ?>" class="form-control">

                    </div>
                <div class="form-group my-3">
                    <label for="nama" style="color: white" >Nama</label>
                    <input type="text" name="nama" class="form-control" name="nama" readonly value="<?php echo $namaMhs ?>" >
                </div>
                <div class="form-group my-3">
                    <label for="kata_sandi" style="color: white" >Tanggal</label>
                    <input type="text"  name="tanggal" readonly value="<?php echo $tanggal ?>" class="form-control">
                </div>
                <div class="form-group my-3">
                    <label for="kata_sandi" style="color: white" > Catatan</label>
                    <input type="textarea" name="dosbing" readonly value="<?php echo $catatan ?>" class="form-control" >
                </div>
            
                <select class="mb-3" name="status" required >
                      <option value="Pending">Pending</option>
                    <option value="Approved">Approved</option>
                    <option value="Rejected">Rejected</option>
                </select>
                <br>
                <input type="submit" class="w3-button w3-block w3-grey">
                    
                 
              <!--  <a href="" >
               <span class='glyphicon glyphicon-edit'></span>UPDATE</button>-->
            </form>
            <br>
            <p class=text-center style="color:white"><a href="index.php">Kembali</a>
                <p>
        </div>

        </div>
    </section>

    </center>

</body>

</html>