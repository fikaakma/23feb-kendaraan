<?php
include("koneksi.php");
if(isset($_POST['submit'])){
  $nopolisi=$_POST['nopolisi'];
  $jeniskendaraan=$_POST['jeniskendaraan'];
  $tglmember=$_POST['tglmember'];
  $namapemilik=$_POST['namapemilik'];
  $alamat=$_POST['alamat'];
  $jeniskelamin=$_POST['jeniskelamin'];

  $sql = "INSERT INTO tb_kendaraan(nopolisi,jeniskendaraan,tglmember)
  VALUES('$nopolisi','$jeniskendaraan','$tglmember')";
  $query = mysqli_query($koneksi, $sql);

  $sql="SELECT max(id_kendaraan)AS kendaraan_id FROM tb_kendaraan LIMIT 1";
  $query=mysqli_query($koneksi, $sql);

  $data=mysqli_fetch_array($query);
  $kendaraan_id=$data['kendaraan_id'];

  $sql="INSERT INTO tb_pemilik(id_kendaraan,namapemilik,alamat,jeniskelamin)
  VALUES('$kendaraan_id','$namapemilik','$alamat','$jeniskelamin')";
  $query=mysqli_query($koneksi, $sql);

  if($query){
    header('location:tampil.php?status=sukses');
  }else{
    header('location:tampil.php?status=gagal');
  }
}
?>