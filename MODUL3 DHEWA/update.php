<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
    require('connect.php');

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    $id = $_GET['id'];

    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    function UseThisUpdate($koneksi){ 
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
            // a. Ambil data nama mobil
            $nama_mobil = $_POST['nama_mobil'];

            // b. Ambil data brand mobil
            $brand_mobil = $_POST['brand_mobil'];

            // c. Ambil data warna mobil
            $warna_mobil = $_POST['warna_mobil'];

            // d. Ambil data tipe mobil
            $tipe_mobil = $_POST['tipe_mobil'];

            // e. Ambil data harga mobil
            $harga_mobil = $_POST['harga_mobil'];
        
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        $query = "UPDATE showroom_mobil SET nama_mobil = '$nama_mobil', brand_mobil = '$description', warna_mobil = '$warna_mobil', tipe_mobil = $tipe_mobil, harga_mobil = '$harga_mobil' WHERE id = $id;";

        // Eksekusi perintah SQL
        $run_query = mysqli_query($connection, $query);

        // Buatkan kondisi jika eksekusi query berhasil
        if($run_query){
            echo "<script> alert('Data Berhasil diubah') </script>";
            header("Location: list_mobil.php");
        
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        } else{
            echo "<script> alert('Data Gagal diubah') </script>";
            header("Location: list_mobil.php");
            echo "<script>alert('Error:'. mysqli_error($run_query))</script>";
        }
    }
    // Panggil fungsi update dengan data yang sesuai
    UseThisUpdate();

// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($connection);
?>