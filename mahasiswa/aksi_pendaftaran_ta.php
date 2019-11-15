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
			 $jam = $_POST['time'];
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

            $toefl= $_POST['toefl'];
            if($toefl){
                $ekstensi_diperbolehkan4	= array('pdf','docx','doc');
                $filename3 = $_FILES['lembar_persetujuan']['name'];
                $folder3 = 'lembarpersetujuan/';
                $x3 = explode('.', $filename3);
                $ekstensi2 = strtolower(end($x3));
            //	$ukuran	= $_FILES['file']['size'];
                $file_tmp2 = $_FILES['lembar_persetujuan']['tmp_name'];
                  move_uploaded_file($file_tmp3,$folder3.$filename3);
    
               /*  if(in_array($ekstensi2, $ekstensi_diperbolehkan2) === true){
    
                        
                      
                       // if ($query){
                          
                            //echo '<script language="javascript">alert("FILE Berhasil Ditambahkan")</script>';
                           // header('location:index.php?pesan=berhasilupload');
    
                       // } 
    
             }else{
                    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                 }*/
            } 
            
            $tema = $_POST['topik'];

            $cekisi    = "SELECT * FROM daftarta WHERE nama='$nama' AND status != 'Rejected' ";
            $ada = $koneksi->query($cekisi);
            if ($ada->num_rows > 0) {
                header('location:index.php?pesan=sudahada');
            }else{
        $query = mysqli_query($koneksi, 
                        "INSERT INTO daftarta (hari, ruangan, dosenpenguji, tema, status, nama, nim, dosbing, tanggal, jam, proposalta,seminarproposal,toefl)
                         VALUES ('belum diatur','belum diatur','belum diatur','$tema','Pending','$nama','$nim','$dosenpembimbing','$tanggal', '$jam', '$lembarproposal','$lembarpersetujuan','$toefl')
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