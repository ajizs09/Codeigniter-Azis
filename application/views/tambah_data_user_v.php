<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h13align="center"> TAMBAH DATA USER </h3>
    <form action="<?= base_url('User/action_tambah_data')?>" method="post">
    <table border="center">
        <tr>
            <td> Nama Depan </td>
            <td> : </td>
            <td><input type="text" name="nama_depan" class="from-control"></td>
        </tr>
        <tr>
            <td> Nama Belakang </td>
            <td> : </td>
            <td><input type="text" name="nama_belakang" class="from-control"></td>
        </tr>
        <tr>
            <td> Tempat Lahir </td>
            <td> : </td>
            <td><input type="text" name="tempat_lahir" class="from-control"></td>
        </tr>
        <tr>
            <td> Tanggal Lahir </td>
            <td> : </td>
            <td><input type="date" name="tanggal_lahir" class="from-control"></td>
        </tr>
        <tr>
            <td> Jenis Kelamin </td>
            <td> : </td>
            <td> 
                <input type="radio" name="jenis_kelamin" value="L">L
                <input type="radio" name="jenis_kelamin" value="P">P
            </td>
        </tr>
        <tr>
            <td> Alamat </td>
            <td> : </td>
            <td> <textarea type="text" name="alamat" class="from-control"></textarea></td>
        </tr>
        <tr>
            <td> Jenjang Pendidikan </td>
            <td> : </td>
            <td> 
                <select name="jenjang_pendidikan" id="" class="form-control">
                    <option value="SMK">SMK</option>
                    <option value="SMA">SMA</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>
        <tr>
            <td colspan="3" class="text-center">
                <button type="submit" class="btn btn-primary"> SIMPAN </button>
                <a href="" class="btn btn-warning"> KEMBALI </a>
            </td>
        </tr>
    </table>
    </form>

    
</body>
</html>