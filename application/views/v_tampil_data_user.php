<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 align="center"> FORM TAMBAH DATA MEMBER </h3>
    <center><a href="<?= base_url('User/tambahdata')?>">Tambah Data Siswa</a></center>
    <table border="3" width="50%" align="center">
        
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>jenjang Pendidikan</th>
            <th colspan="2">Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($user as $u) { ?>
            <tr>
                <td><?= $no                 ?></td>
                <td><?= $u->nama_depan      ?></td>
                <td><?= $u->nama_belakang   ?></td>
                <td><?= $u->tempat_lahir    ?></td>
                <td><?= $u->tanggal_lahir   ?></td>
                <td><?= $u->jenis_kelamin   ?></td>
                <td><?= $u->alamat          ?></td>
                <td><?= $u->jenjang_pendidikan ?></td>
                <td><a href="<?= base_url("User/edit_data_user")?>">Edit</a></td>
                <td><a href="<?= base_url("User/delet_data_user")?>">Delet</a></td>
            </tr>
            <?php $no++; } ?>
        </tbody>
    </table>
</body>
</html>