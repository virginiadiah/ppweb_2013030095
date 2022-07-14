<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data mata kuliah</title>
</head>
</body>
<form action="mk_proc.php" method="POST">
    kode:
    <input type="text" name="kode">
    <br>nama:
    <input type="text" name="nama">
    <br>
    <input type="submit" name="proses" value="simpan"></input>
</form>

</html>