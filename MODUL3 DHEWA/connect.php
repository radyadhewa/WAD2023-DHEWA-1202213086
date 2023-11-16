<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
  $koneksi = mysqli_connect("localhost:3306", "root", "", "modul3_wad");
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
  if(!$koneksi) {
    die("Koneksi Gagal: ". mysqli_error($koneksi));
  }

// 
?>