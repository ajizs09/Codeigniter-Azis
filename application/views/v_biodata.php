<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center">  SELAMAT DATANG DI BIODATA SAYA </h2>
      <center><a href="<?= base_url('User/tambah_data')?>">Input Data</a></center>
    <table border="3" width="40%" align="center">
    <tr>
        <td> Nama </td>
        <td> : </td>
        <td><?= $nm ?></td>
    </tr>
    <tr>
        <td> Alamat </td>
        <td> : </td>
        <td><?= $alt ?></td>
    </tr>
    <tr>
        <td> No Hp </td>
        <td> : </td>
        <td><?= $np ?></td>
    </tr>
    <tr>
        <td> Email </td>
        <td> : </td>
        <td><?= $em ?></td>
    </tr>
    <tr>
        <td> Sekolah </td>
        <td> : </td>
        <td><?= $skl ?></td>
    </tr>
    <tr>
        <td> Tempat Lahir </td>
        <td> : </td>
        <td><?= $tempat ?></td>
    </tr>
    <tr>
        <td> Tanggal Lahir </td>
        <td> : </td>
        <td><?= $tanggal ?></td>
    </tr>
    <tr>
        <td> Jenis Kelamin </td>
        <td> : </td>
        <td><?= $jk ?></td>
    </tr>
    <tr>
        <td> Hobi </td>
        <td> : </td>
        <td><?= $hb ?></td>
    </tr>
    <tr>
        <td> Status Pernikahan </td>
        <td> : </td>
        <td><?= $sp ?></td>
    </tr>
    <tr>
        <td> Upload Foto </td>
        <td> : </td>
        <td><?= $ft ?></td>
    </tr>
    
</body>
</html>