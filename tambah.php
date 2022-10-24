<!DOCTYPE html>
<html lang="en">
    <center>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Pasien Baru</title>
</head>

<body>
<Body background="bg.jpg"> 
    <h3>Form Pendaftaran Pasien Baru</h3>
        <form action="proses-daftar-pasien.php" method="POST">
            <form>
                <fieldset>
    <p>
        <label for="nama"> Nama Lengkap : </label>
        <input type="text" name="nama" />
    </p>
    <p>
        <label for="alamat"> Alamat : </label>
        <textarea name="alamat" row="5"></textarea>
    </p>
    <p>
        <label for="jk"> Jenis Kelamin : </label>
        <label><input type="radio" name="jk" value="laki-laki" />Laki-Laki </label>
        <label><input type="radio" name="jk" value="perempuan" />Perempuan </label>
    </p>
    <p>
        <label for="no_telp"> No Telepon : </label>
        <input type="number" name="no_telp" />
    </p>
    <p>
        <label for="agama"> Agama : </label>
        <select name="agama">
        <option value="islam">Islam</option>
        <option value="kristen">Kristen </option>
        <option value="katolik">Katolik </option>
        <option value="buddha">Buddha </option>
        <option value="hindu">Hindu </option>
        <option value="konghucu">konghucu</option>
        </select> 
    </p>
    <p>
        <label for="tanggal_masuk"> Tanggal Masuk : </label>
        <input type="date" name="tanggal_masuk" />
    </p>
    <p>
        <label for="gejala"> Gejala : </label>
        <input type="text" name="gejala" />
    </p>
    <p>
        <label for="tempat_lahir"> Tempat Lahir : </label>
        <label><input type="text" name="tempat_lahir" />
    </p>
    <p>
        <label for="tanggal_lahir"> Tanggal Lahir : </label>
        <input type="date" name="tanggal_lahir" />
    <p>
       <label for="no_kamar"> No Kamar : </label>
       <input type="number" name="no_kamar" />
    </p>
    <p>
       <input type="submit" value="Tambah Pasien" name="tambah"/>
    </p>
</fieldset>
</form>
</body>

</html>