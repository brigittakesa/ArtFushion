<?php
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($kon, "SELECT * FROM data_login WHERE username = '$username'");
    $data = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result)>0){
        if ($data['password']==$password){
            header("location: ../index.html");
            session_start();
            $_SESSION['id']=$data['id'];
            $_SESSION['tipe']=$data['tipe'];
        }
        else {
            echo "<script> alert('password salah');window.location.href= '../login.html';</script>";
        }
    }else {
        echo "<script> alert('username tidak ditemukan');window.location.href= '../login.html';</script>";
    }

?>