<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "main_missionorder";
    
    $mysqli = new mysqli($host, $username, $password, $database);
    
    if($mysqli->connect_error){
        die("Koneksi Gagal");
    }
    //die("Koneksi Berhasil");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $messages = $_POST['messages'];
    
    $sql = "INSERT INTO pelanggan (nama, email, messages) VALUES ('$name', '$email', '$messages')";
    
    
    if($mysqli->query($sql)){
        echo "data berhasil disimpan";
    } else {
        echo "gagal disimpan";
    }
    