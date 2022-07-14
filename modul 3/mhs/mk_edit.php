<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mata kuliah edit</title>
</head>
</body>
<?php 
$kode = $_GET['kode'];
$sql = mysqli_query($conn,"SELECT * FROM mk WHERE kode ='$kode'");
while($a = mysqli_fetch_array($sql)){
?>
<form action="mk_proc.php" method="post">
    <br>
    kode :
    <input type="text" name="kode" value="<?= $a['kode']?>">
    <br>
    nama :
    <input type="text" name="nama" value="<?= $a['nama']?>">
    <button type="submit" name="proses" value="perbarui">simpan</button>
</form>
<?php }?>
</body>

</html>