<?php
    include "koneksi.php";
    $foto = $_POST['foto'];    
    $nama = $_POST['nama'];    
    $deskripsi = $_POST['deskripsi'];    
    
    $query = mysqli_query($kon,"INSERT INTO karya_seni VALUES ('','$foto','$nama','$deskripsi')");

    if($query){
        echo "<script>alert('Data Berhasil Ditambahkan');window.location.href='../galleryseniman.php'</script>";
    }
?>