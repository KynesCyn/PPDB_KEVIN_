<?php
include ('../../../koneksi.php');
$noPendaftar = $_POST['no_pendaftar'];
$namaSiswa = $_POST['nama_siswa'];
$tanggal = $_POST['tanggal'];
$ukuran = $_POST['ukuran'];

$update_siswa_query = "UPDATE data_siswa SET nama_siswa='$namaSiswa', tanggal='$tanggal', ukuran='$ukuran' 
WHERE no_pendaftaran='$noPendaftar'";
if (mysqli_query($koneksi, $update_siswa_query)) {
    $update_ortu_query = "UPDATE data_ortu SET nama_siswa='$namaSiswa' 
    WHERE id=(SELECT id FROM data_siswa WHERE no_pendaftaran='$noPendaftar')";
    if (!mysqli_query($koneksi, $update_ortu_query)) {
        echo "Error: " . $update_ortu_query . "<br>" . mysqli_error($koneksi);
    }
    $update_wali_query = "UPDATE data_wali SET nama_siswa='$namaSiswa' 
    WHERE id=(SELECT id FROM data_siswa WHERE no_pendaftaran='$noPendaftar')";
    if (!mysqli_query($koneksi, $update_wali_query)) {
        echo "Error: " . $update_wali_query . "<br>" . mysqli_error($koneksi);
    }
    header("location:../../data_kaos.php");
} else {
    echo "Error: " . $update_siswa_query . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>