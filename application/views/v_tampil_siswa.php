<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center"> HII SELAMAT DATANG DI BIODATA SAYA </h2>
    <table border="3" width="50%" align="center">
        <thead>
        <tr>
            <th>No</th>
            <th>NISN siswa</th>
            <th>NIS Siswa</th>
            <th>Nama Lengkap Siswa</th>
            <th>Tempat Lahir Siswa</th>
            <th>Tanggal Lahir Siswa</th>
            <th>NO HP Siswa</th>
            <th>ID Program</th>
        </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($siswa as $s) { ?>
            <tr>
                <td><?= $no                 ?></td>
                <td><?= $s->siswa_nisn     ?></td>
                <td><?= $s->siswa_nis   ?></td>
                <td><?= $s->siswa_nama_lengkap  ?></td>
                <td><?= $s->siswa_tempat_lahir  ?></td>
                <td><?= $s->siswa_tgl_lahir  ?></td>
                <td><?= $s->siswa_nohp         ?></td>
                <td><?= $s->program_id  ?></td>
            </tr>
            <?php $no++; } ?>
        </tbody>
    </table>
</body>
</html>