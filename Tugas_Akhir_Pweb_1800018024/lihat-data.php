<!DOCTYPE>
<html>
<head>
	<title>PEMROGRAMAN WEB BIODATA</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script language="javascript" src="js/js2.js"></script>
 
<style type="text/css">
  @import "style/css3.css";
</style>
<body>
  <div class="images">

  </div>
<div class="topnav">
  <a class="active" href="index.html">Home</a>
  <a href="bio.html">About</a>
  <a href="#contact">See-Data</a>
  <div class="search-container">
     <form name="formcari" onSubmit="cari()">
       <input class="search" name="keyword" type="text" placeholder="Cari..." required>   
      <button type="submit" value="Cari" onclick="myFunction()"><i class="fa fa-search"></i></button><!--Onclick="myfunction" berfungsi untuk menghubungan tag html dengan fungsi java script yang di buat agar lebih menarik!-->
    </form>
  </div>
</div>
  <br>
</div>
    <div class="wk">
    <button id="demo" class="button" onclick="tampil()">Waktu Saat ini</button><!--Onclick="tampil" berfungsi untuk menghubungan tag html dengan fungsi java script yang di buat agar lebih menarik!-->
  </div>
    <table class="" >
                <thead class=''>
                  <tr>
                        <th><center>First Name</center></th>
                        <th><center>Last Name</center></th>
                        <th><center>Email</center></th>
                        <th><center>Address</center></th>

                    </tr>
                    </thead>
                    <tbody>
<?php
echo "<head><title>DATA BAYAR</title></head>";
$fp = fopen("datasignup.txt","r");//code di samping berfungsi agar data yang akan di proses php akan tersimpan kedalam file txt. fungsi r di gunakan untuk membaca file yang ada, sementara fungsi fopen sendiri di gunakan untuk membuka file.
while ($isi = fgets($fp,80))// fungsi fgets di samping di gunakan untuk membaca satu baris dari sebuah file.
{
$pisah = explode("|",$isi);// menggunakan explode yaitu pemisah string jadi string yang telah di pisah akan menjadi array
echo"<tr>";
echo "<td><center> $pisah[0]</center></td>";// pemanggilan data yang telah di deklarasikan menggunakan variabel dan array.
echo "<td><center> $pisah[1]</center></td>";// pemanggilan data yang telah di deklarasikan menggunakan variabel dan array.
echo "<td><center> $pisah[2]</center></td>";// pemanggilan data yang telah di deklarasikan menggunakan variabel dan array.
echo "<td><center> $pisah[3]</center></td>";// pemanggilan data yang telah di deklarasikan menggunakan variabel dan array.
}
echo"</tr>";
echo "</table>";
?>
</tbody>
</table>
</body>
</html>