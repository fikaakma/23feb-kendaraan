<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tampil</title>
</head>
<body>
    <h2>Tampil Data</h2>
    <a href="tambah.php"><input type="button" value="tambah"></a>
    <table border = "1">
        <tr>
            <th>No</th>
            <th>Nama Pemilik</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No Polisi</th>
            <th>Jenis Kendaraan</th>
            <th>Tanggal Member</th>
            <th>Aksi</th>
</tr>

<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM tb_kendaraan INNER JOIN tb_pemilik ON 
tb_kendaraan.id_kendaraan = tb_pemilik.id_kendaraan");

$no = 1;
foreach($query as $row):
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['namapemilik']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['jeniskelamin']; ?></td>
        <td><?= $row['nopolisi']; ?></td>
        <td><?= $row['jeniskendaraan']; ?></td>
        <td><?= $row['tglmember']; ?></td>
        <td>
            <a href="edit.php?id_kendaraan=<?= $row['id_kendaraan']; ?>">Edit</a> | 
            <a href="hapus.php?id_kendaraan=<?= $row['id_kendaraan']; ?>">hapus</a>
</td>
</tr> 
<?php endforeach; ?>
</table>
</body>
</html>