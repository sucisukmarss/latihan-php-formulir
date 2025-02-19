<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $email = $_POST["email"];
    $telepon = $_POST["telepon"];
    
    echo "<h2>Data yang Diterima:</h2>";
    echo "Nama Lengkap:" .$nama. "<br>";
    echo "Alamat:" .$alamat. "<br>";
    echo "Email:" .$email. "<br>";
    echo "Nomor Telepon:" .$telepon. "<br>";
}
?>
