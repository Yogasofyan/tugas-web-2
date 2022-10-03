<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="save.php" method='post'>
        <label for="nim">Masukan Nim</label>
        <input type="text" name="nim" id="nim"> <br>
        <label for="nama">Masukan Nama</label>
        <input type="text" name="nama" id="nama"> <br>
        Masukan Gender
        <input type="radio" id="laki" name="gender" value="Laki">
        <label for="laki"> Laki-Laki</label>
        <input type="radio" id="wanita" name="gender" value="Wanita">
        <label for="wanita"> Wanita</label> <br>

        <label for="status"> Masukan Status</label>
        <select name="status" id="status">
            <option disabled selected>-Pilih-</option>
            <option value="Belum Nikah">Belum Nikah</option>
            <option value="Menikah">Nikah</option>
        </select><br>
        <label for="telp">Nomor Telpon</label>
        <input type="text" name="telp" id="telp"> <br>
        <label for="alamat"> Masukan Alamat</label>
        <textarea id="alamat" name="alamat"></textarea> <br>
        <button type="submit"> save</button>
    </form>
</body>

</html>