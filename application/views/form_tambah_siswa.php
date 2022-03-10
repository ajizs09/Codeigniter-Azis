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
    <form action="<?= base_url('User/action_tambahdata')?>" method="post">
    <table border="3" width="50%" align="center">
        <tr>
            <td> Nama </td>
            <td> : </td>
            <td><input type="text" name="namaa" placeholder="Masukan Nama Lengkap"></td>
        </tr>
        <tr>
            <td> Alamat </td>
            <td> : </td>
            <td><textarea name="alamatt" id="" cols="50" rows="5" placeholder="Masukan Alamat Lengkap"></textarea></td>
        </tr>
        <tr>
            <td> NO HP </td>
            <td> : </td>
            <td><input type="text" name="nohpp" placeholder="Masukan No HP"></td>
        </tr>
        <tr>
            <td> Email </td>
            <td> : </td>
            <td><input type="email" name="emaill" placeholder="Masukan Alamat Email"></td>
        </tr>
        <tr>
            <td> Sekolah </td>
            <td> : </td>
            <td> <input type="text" name="sekolahh" placeholder="Masukan Nama Sekolah"></td>
        </tr>
        <tr>
            <td> Tempat Lahir </td>
            <td> : </td>
            <td> <input type="text" name="tempatt" placeholder="Masukan Tempat Lahir"></td>
        </tr>
        <tr>
            <td> Tanggal Lahir </td>
            <td> : </td>
            <td> <input type="date" name="tanggall" ></td>
        </tr>
        <tr>
            <td> Jenis Kelamin </td>
            <td> : </td>
            <td> 
                <select name="jeniss" id="">
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
            </td>
        </tr>
        <tr>
            <td> Hobi </td>
            <td> : </td>
            <td> 
                <input type="checkbox" name="hobii" value="Menyanyi"> Menyanyi
                <input type="checkbox" name="hobii" value="Memasak"> Memasak
                <input type="checkbox" name="hobii" value="Berenang"> Berenang
                <input type="checkbox" name="hobii" value="Menulis"> Menulis
            </td>
        </tr>
        <tr>
            <td> Setatus Pernikahan </td>
            <td> : </td>
            <td> 
                <input type="radio" name="statuss" Value="Lajang"> Lajang
                <input type="radio" name="statuss" Value="Gadis"> Gadis
                <input type="radio" name="statuss" Value="Janda"> Janda
                <input type="radio" name="statuss" Value="Duda"> Duda
                <input type="radio" name="statuss" Value="Cerai"> Cerai
            </td>
        </tr>
        <tr>
            <td> Upload Foto Profile </td>
            <td> : </td>
            <td> <input type="file" name="fotoo"></td>
        </tr>
        <tr>
            <td> <button name="simpan">SIMPAN</button> </td>
        </tr>
    </form>

    
</body>
</html>