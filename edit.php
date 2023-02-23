<?php
include("koneksi.php");
if(!isset($_GET['id_kendaraan'])){
    header("location:tampil.php");
}

$id_kendaraan=$_GET['id_kendaraan'];
$sql="SELECT * FROM tb_kendaraan INNER JOIN tb_pemilik ON tb_kendaraan.id_kendaraan= tb_pemilik.id_kendaraan
WHERE tb_kendaraan.id_kendaraan='$id_kendaraan'";
$query=mysqli_query($koneksi,$sql);
$tb_pemilik=mysqli_fetch_assoc($query);
?>

<html>
    <head>
</head>
<body>

    <h2>Edit Data</h2>
    <table border="1">
       <form action="proses-edit.php" method="POST">
       <input type="hidden" name="id_pemilik" value="<?php echo $tb_pemilik['id_pemilik']?>" />
       <tr>
        <td><label for="namapemilik"> Nama Pemilik : </label></td>
        <td><input type="text" name="namapemilik" value="<?php echo $tb_pemilik['namapemilik']?>" /></td>
</tr>
    <tr>
        <td><label for="alamat"> Alamat : </label></td>
        <td><input type="text" name="alamat" value="<?php echo $tb_pemilik['alamat']?>" /></td>
</tr>
    <tr>
        <td><label for="jeniskelamin"> Jenis Kelamin : </label></td>
        <td><input type="radio" name="jeniskelamin" value="lakilaki">Laki-laki
        <input type="radio" name="jeniskelamin" value="perempuan">Perempuan</td>
</tr>
    <tr>
        <td><label for="nopolisi"> No Polisi : </label></td>
        <td><input type="text" name="nopolisi" value="<?php echo $tb_pemilik['nopolisi']?>" /></td>
</tr>
<tr>
        <td><label for="jeniskendaraan"> Jenis Kendaraan : </label></td>
        <td><input type="radio" name="jeniskendaraan" value="motor">Motor
        <input type="radio" name="jeniskendaraan" value="mobil">Mobil</td>
</tr>
    <tr>
        <td><label for="tglmember"> Tanggal Member : </label></td>
        <td><input type="date" name="tglmember" value="<?php echo $tb_pemilik['tglmember']?>" /></td>
</tr>
</table><p>
<td><input type="submit" name="edit" value="edit"></td>


</form>
</body>
</html>