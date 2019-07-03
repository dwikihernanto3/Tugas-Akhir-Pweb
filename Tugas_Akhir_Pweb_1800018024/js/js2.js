function cari() { // mendklarasikan fungsi cari
var kata = document.formcari.keyword.value; // pembuatan variabel yang nantinya idi jadikan keyword untuk ,encari kata atau kalimat yang di masukan.
var hasil = "http://www.google.com/search?q=" + kata ;// pendklarasian variabbel hasil, diimana data yang akan di cari bersumber dari google
window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes')// windows.open akan membuka data yang tela di cari berdasarkan keyword yang telah di tentukan.
}

    function myFunction() {// mendeklarasikan fungsi
  confirm("Yakin Ingin Cari?"); // notice dari code confirm di samping akan muncul ketika fungsi telah terdeklarasikan atau terhubungan dengan fungsi js yan telah di masukan di tombol submit.
}

 function tampil(){// mendeklarasikan fungsi
    document.getElementById('demo').innerHTML=Date()// ffungsi di samping akan menampilkan waktu,jam,tanggal sesuai hari ini.

}
                      function myFunction2(){//mendeklarasikan fungsi
                alert('Data anda tersimpan');
                document.location.href = "proses.php";// berfungsi untuk memberikan hyperlink ke halaman web sesuai tujuan
              }