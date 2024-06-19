<?php
    include "koneksi.php";
    $foto = $_POST['foto'];    
    $tanggal = $_POST['tanggal'];    
    $nama = $_POST['nama'];    
    $tempat = $_POST['tempat'];    
    $deskripsi = $_POST['deskripsi'];    
    
    $query = mysqli_query($kon,"INSERT INTO event VALUES ('','$nama','$tempat','$foto','$tanggal
    ','$deskripsi')");

    if($query){
        echo "<script>alert('Data Berhasil Ditambahkan');window.location.href='../eventsadmin.php'</script>";
    }
?>