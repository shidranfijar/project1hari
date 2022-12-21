<?php
 header('Content-Type: application/json; charset=utf8');
 //panggil koneksi.php
 include("koneksi.php");
 
 //query tabel produk
 $sql="SELECT * FROM produk";
 $result = mysqli_query($conn, $sql);

//data array
 $array=array();
 while($data = mysqli_fetch_assoc($result)) {
   $array[]=$data; 
 }
 
//mengubah data array menjadi json
 echo json_encode($array);
?>