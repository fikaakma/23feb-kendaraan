<?php
include("koneksi.php");
if(isset($_POST['edit']));
$id_pemilik = $_POST['id_pemilik'];
$namapemilik = $_POST['namapemilik'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$nopolisi = $_POST['nopolisi'];
$jeniskendaraan = $_POST['jeniskendaraan'];
$tglmember = $_POST['tglmember'];

$sql = "UPDATE tb_pemilik set namapemilik='$namapemilik', alamat='$alamat', jeniskelamin='$jeniskelamin' WHERE id_pemilik='$id_pemilik'";
$query = mysqli_query($koneksi, $sql);
$sql = "UPDATE tb_kendaraan set nopolisi='$nopolisi', jeniskendaraan='$jeniskendaraan', tglmember='$tglmember' WHERE id_kendaraan='$id_pemilik'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header('location:tampil.php?status=sukses');
} else {
    header('location:tampil.php?status=gagal');
}
?>