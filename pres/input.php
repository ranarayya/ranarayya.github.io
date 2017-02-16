<?php
header('Location: terimakasih.html');

$host = "localhost";
$user = "procodecg";
$pass = "procodecg";
$dbname = "procodecgware";
$con = mysql_connect($host,$user,$pass);
if (!$con) { 
echo "Failed :" .mysql_error();
}
else { 
    mysql_select_db($dbname);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
        
$query = "INSERT INTO visitor(nama, email,message) values('$name','$email','$message')";
    
$hasil = mysql_query($query);

if ($hasil)
{
  echo "<script type='text/javascript'> alert ('Data berhasil di tambahkan!') </script>";  //Pesan jika proses tambah sukses
}
 else{

 echo "<script type='text/javascript'> alert ('Data gagal ditambahkan!') </script>";  //Pesan jika proses tambah data gagal

 }


?>
