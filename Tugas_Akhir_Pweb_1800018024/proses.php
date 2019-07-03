<!DOCTYPE>
<html>
<head>
	<title>PEMROGRAMAN WEB BIODATA</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script language="javascript" src="js/js2.js"></script>
 
<style type="text/css">
  @import "style/css.css";
  
</style>
<body>
  <div class="images">

  </div>
<div class="topnav">
  <div class="search-container">
    </form>
  </div>
</div>
  <br>
</div>
<?php
$fp = fopen("datasignup.txt","a+");//code di samping berfungsi agar data yang akan di proses php akan tersimpan kedalam file txt. fungsi a+ adalah Membaca dan menambah tanpa membuang isi file yang lama, sementara fungsi fopen sendiri di gunakan untuk membuka file.
$nama_depan = $_POST['firstname'];//pendeklarasian variabel php sesuai dengan nama yang di tag form html
$nama_belakang = $_POST['lastname'];//pendeklarasian variabel php sesuai dengan nama yang di tag form html
$email = $_POST['email'];//pendeklarasian variabel php sesuai dengan nama yang di tag form html
$address = $_POST['address'];//pendeklarasian variabel php sesuai dengan nama yang di tag form html
fputs($fp,"$nama_depan|$nama_belakang|$email|$address\n"); // fungsi fputs adalah fungsi php yang di gunakan untuk menulis ke file terbuka.fungsi akan berhenti pada akhir file atau saat mencapai panjang tertentu, mana yang lebih dulu.
fclose($fp);//fungsi fclose untuk menutup file yang sudah dibuka.

$target_dir = "uploads/"; // pendeklarasian variabel/
if(!file_exists($target_dir)){ // fungsi code php di samping adalah untuk mengecek apakah ada directory atau file.
mkdir($target_dir);// fungsi code di samping berguna untuk membuat directory dengan nama directory 'upload'.
}

if(isset($_POST["kirim"])) { // fungsi isset di samping akan mengecek apakah apakah sebuah variabel telah di definisikan maka akan bernilai true.
	$ala = $_FILES["fileUpload"]["type"]; // pendeklarasian variabel untuk menampung data file yang akan di upload beserta typenya.
$target_file = $target_dir . basename($_FILES["fileUpload"] // nama file atau di directory di ambil menggunakan fungsi basename.
	["name"]);

if($ala == 'text/plain'){ // fungsi kondisi dimana data upload yang di ambil hanya text/plain saja selain dari itu data tidak bisa di uplood.
move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);// memindahkan dan mengupload file kedalam directory yang telah di buat.s
echo "File". $_FILES["fileUpload"]["name"]. "sukses di Upload"; // menampilkan sebuah kalimat jika data nya bisa di upload
}

else {
echo "tidak sukses  upload file"; // menampilkan kalimat jika datanya tidak bisa di upload
}

}
echo "<h2> Terima Kasih Atas Partisipasi Anda Mengisi Data  Pembayaran</h2><br>";
echo"&nbsp&nbsp&nbsp&nbsp";
echo "<a href=index.html class='btn btn-danger'> Home </a><br> ";// Hyperlink yang menuju ke index.html (Halaman Awal).
?>