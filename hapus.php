<?php
include ("koneksi.php");


$id = $_GET['id_kendaraan'];
$sql = "DELETE FROM tb_kendaraan WHERE id_kendaraan='$id'";
$sql = "DELETE FROM tb_pemilik WHERE id_kendaraan='$id'";

$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:tampil.php?status=sukses');
} else {
    echo "gagal";
}
?>