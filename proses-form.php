<?php  include "config.php";  

if(isset($_POST['Simpan'])){	 	
 			 
    $no = $_POST['no'];	 		
    $nama_merek = $_POST['nama_merek'];	 		
    $warna = $_POST['warna'];	
    $jumlah = $_POST['jumlah'];	 			 	
 			 		
    $sql = "INSERT INTO printer (no, nama_merek, warna, jumlah) VALUE ('$no', '$nama_merek', '$warna', '$jumlah')";	 	
    $query = mysqli_query($db, $sql);	 		
 			 			
    if( $query ) {	 				
        
        header('Location: index.php?status=sukses');	 		
    } else {	 			
        	 		
        header('Location: index.php?status=gagal');	 			
    }	 				
} else {	 				
    die("Akses dilarang...");	 				
}