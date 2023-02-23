<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tampil</title>
</head>
<body>
<table border = "0">
    <form action="proses-tambah.php" method="POST">
        <tr><h2>Tambah Data</h2></tr>

        <p>
            <label for="namapemilik"> Nama Pemilik :</label>
            <label><input type="text" name="namapemilik" /></label>
</p>
<p>
            <label for="alamat"> Alamat :</label>
            <label><input type="text" name="alamat" /></label>
</p>
<p>
            <label for="jeniskelamin"> Jenis Kelamin :</label>
            <label><input type="radio" name="jeniskelamin" value="lakilaki" />Laki-laki</label>
            <label><input type="radio" name="jeniskelamin" value="perempuan" />Perempuan</label>
</p>
<p>
            <label for="nopolisi"> No Polisi :</label>
            <label><input type="text" name="nopolisi" /></label>
</p>
<p>
            <label for="jeniskendaraan"> Jenis Kendaraan :</label>
            <label><input type="radio" name="jeniskendaraan" value="motor" />Motor</label>
            <label><input type="radio" name="jeniskendaraan" value="mobil" />Mobil</label>
</p>
<p>
            <label for="tglmember"> Tanggal Member :</label>
            <label><input type="date" name="tglmember" /></label>
</p>

<input type="submit" name="submit" value="submit"/>
</body>
</html>