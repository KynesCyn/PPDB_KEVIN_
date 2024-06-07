<?php
include ('../../../koneksi.php');
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$sebagai = $_POST['sebagai'];

$gel = "INSERT INTO user (nama,username,password,level) VALUES ('$nama', '$user', '$pass', '$sebagai')";
if (mysqli_query($koneksi, $gel)) {
    header("location:../../registrasi.php");
} else {
    echo "Error: " . $gel . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);

?>