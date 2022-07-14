<?php 
include "koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM krs WHERE id='$id'";
$res = $conn->query($sql);
$row = $res->fetch_array(MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>KRs</title>
</head>

<body>
    <a href="krs.php">LIHAT</a> | <a href="krs_add.php">TAMBAH</a>
    <br>
    <form action="krs_proc.php" method="post">
        ID<br>
        <input type="text" name="id" value="<?php echo $row['id']?>">
        <br>
        mhs_npm<br>
        <select name="mhs_npm">
            <?php 
			$sql = "SELECT * FROM mhs";
			$res = $conn->query($sql);
			while($mhs = $res->fetch_array(MYSQLI_BOTH)){
				if($mhs['npm']==$row['mhs_npm'])
					$select = 'selected="selected"';
				else
					$select = '';
				echo "<option value='".$mhs['id']."' $select>".$mhs['npm']." - ".$mhs['nama']."</option>";
			}
		?>
        </select><br>
        mk_kode<br>
        <select name="mk_kode">
            <?php 
			$sql = "SELECT * FROM mk";
			$res = $conn->query($sql);
			while($mk = $res->fetch_array(MYSQLI_BOTH)){
				if($mk['kode']==$row['mk_kode'])
					$select = 'selected="selected"';
				else
					$select = '';
				echo "<option value='".$mk['id']."' $select>".$mk['kode']." - ".$mk['nama']."</option>";
			}
		?>
        </select><br>
        
		<br>
        <input type="text" name="sem" value="<?= $row['sem']?>"><br>
        ta_id<br>
        <select name="ta_id">
            <?php 
			$sql = "SELECT * FROM ta";
			$res = $conn->query($sql);
			while($ta = $res->fetch_array(MYSQLI_BOTH)){
				if($ta['id']==$row['ta_id'])
					$select = 'selected="selected"';
				else
					$select = '';
				echo "<option value='".$ta['id']."' $select>".$ta['id']." - ".$ta['nama']."</option>";
			}
		?>
        </select><br>
        nilai<br>
        <input type="text" name="nilai" value="<?= $row['nilai']?>"><br>

        <input type="submit" name="krs_edit" value="PERBAHARUI">
        <input type="submit" name="krs_delete" value="HAPUS" onclick="return confirm('Yakin Menghapus Data Ini?')">
    </form>
</body>

</html>