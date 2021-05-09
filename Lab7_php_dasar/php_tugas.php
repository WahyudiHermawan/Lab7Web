<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
<h2>Tugas PHP</h2>
<form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <label>Tanggal lahir: </label>
    <input type="date" name="tgl_lahir">
    <label>Pekerjaan: </label>
    <input type="text" name="pekerjaan">
    <input type="submit" value="Kirim">
</form>
<?php
$today = new DateTime("today");
$lahir = new DateTime($_POST['tgl_lahir']);
$umur = $today->diff($lahir)->y;

echo "Hasil Output : <br>";
echo 'Nama ' . $_POST['nama'] . "<br>";
echo 'Tanggal Lahir ' . $_POST['tgl_lahir']. "<br>";
echo 'Pekerjaan ' . $_POST['pekerjaan'] . "<br>";
echo 'Umur ' . $umur . ' Tahun';
?>
</body>
</html>