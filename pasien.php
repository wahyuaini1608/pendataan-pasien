<?php 
include 'koneksi.php';
?>
 <center>
 <h1>Data Pasien</h1>
 <h4> <a href=index.php>Ke Halaman Utama</a></h4>
<form action="pasien.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
	<?php
include("koneksi.php");?>

<html>
    <head>
</head>
<body>
<Body background="bg.jpg"> 
    <table border="1">
        <tr>
            <th>Id Pasien</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No. Telp</th>
            <th>Agama</th>
            <th>Tanggal Masuk</th>
            <th>Gejala</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>No Kamar</th>
</tr>

<?php
include("koneksi.php");

if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql="SELECT * FROM tb_pasien WHERE nama LIKE '%".$cari."%'";
    $query = mysqli_query($koneksi, $sql); 
    			
}else{
    $sql='SELECT * FROM tb_pasien';
    $query = mysqli_query($koneksi, $sql);  	
}



while($pasien=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$pasien['id']."</td>";
    echo "<td>".$pasien['nama']."</td>";
    echo "<td>".$pasien['alamat']."</td>";
    echo "<td>".$pasien['jk']."</td>";
    echo "<td>".$pasien['no_telp']."</td>";
    echo "<td>".$pasien['agama']."</td>";
    echo "<td>".$pasien['tanggal_masuk']."</td>";
    echo "<td>".$pasien['gejala']."</td>";
    echo "<td>".$pasien['tempat_lahir']."</td>";
    echo "<td>".$pasien['tanggal_lahir']."</td>";
    echo "<td>".$pasien['no_kamar']."</td>";
    echo "<td>";
    echo "<a href='edit-data.php?id=".$pasien['id']."'>Edit</a> |";
    echo "<a href='hapus-data.php?id=".$pasien['id']."'>Hapus</a> |";
    echo "</td>";
    echo "</tr>";
 }
 ?>
 </table>
</center>
</body>
</html>

