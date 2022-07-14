<?php 
include 'koneksi.php'
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
$id = $_GET['id'];
$sql =mysqli_query($conn,"SELECT * FROM ta WHERE id='$id'");
while($a=mysqli_fetch_array($sql)){
?>
<form action="ta_proc.php" method="post">
    id:
    <input type="text" name="id" value="<?= $a['id']?>">
    <br>nama:
    <input type="text" name="nama" value="<?= $a['nama']?>">
    <button type="submit" name="proses" value="perbarui">SIMPAN</button>
</form>

<?php }?>
</body>

</html>