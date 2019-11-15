<?php
session_start();
if ($_SESSION['level'] != 'mahasiswa') {
header("location:../index.php");
}

?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <?php 

    
        include 'connection.php';
        $lembarproposal= $_POST['lembar_proposal'];
		if($lembarproposal){
			$ekstensi_diperbolehkan	= array('pdf','docx','doc');
            $filename = $_FILES['lembar_proposal']['name'];
			$x = explode('.', $filename);
			$ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['lembar_proposal']['tmp_name'];
            $folder = 'lembarproposal/';
            move_uploaded_file($file_tmp,$folder.$filename);
		/*	 if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
         }else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			 }*/
        }
        
             
             $nama = $_SESSION['nama'];
             $nim = $_POST['nim'];
             $dosenpembimbing = $_POST['dosbing'];
			 $topik = $_POST['topik'];
			 $tanggal = $_POST['tanggal'];
             $jam = $_POST['jam'];
             $tema = $_POST['topik'];
             $lembarpersetujuan= $_POST['lembar_persetujuan'];
             if($lembarpersetujuan){
                $ekstensi_diperbolehkan2	= array('pdf','docx','doc');
                $filename2 = $_FILES['lembar_persetujuan']['name'];
                $folder2 = 'lembarpersetujuan/';
                $x2 = explode('.', $filename2);
                $ekstensi2 = strtolower(end($x2));
            //	$ukuran	= $_FILES['file']['size'];
                $file_tmp2 = $_FILES['lembar_persetujuan']['tmp_name'];
                  move_uploaded_file($file_tmp2,$folder2.$filename2);
    
               /*  if(in_array($ekstensi2, $ekstensi_diperbolehkan2) === true){
    
                        
                      
                       // if ($query){
                          
                            //echo '<script language="javascript">alert("FILE Berhasil Ditambahkan")</script>';
                           // header('location:index.php?pesan=berhasilupload');
    
                       // } 
    
             }else{
                    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                 }*/
            } 
            $cekisi    = "SELECT * FROM daftarsempro WHERE nama='$nama' AND status != 'Rejected' ";
            $ada = $koneksi->query($cekisi);
            if ($ada->num_rows > 0) {
                header('location:index.php?pesan=sudahada');
            }else{
            $query = mysqli_query($koneksi, 
                        "INSERT INTO daftarsempro (tema, status, nama, nim, dosbing, tanggal, jam, proposalta,seminarproposal)
                         VALUES ('$tema','pending','$nama','$nim','$dosenpembimbing','$tanggal', '$jam', '$lembarproposal','$lembarpersetujuan')
                         ") or die(mysqli_error($koneksi));
            if($query){
                    echo '<script language="javascript">alert("Data Berhasil Ditambahkan")</script>';
                     header('location:index.php?pesan=berhasilupload');
                      }   else{
                     echo mysqli_error($koneksi);
             }
        }


        
		?>

</body>

</html>