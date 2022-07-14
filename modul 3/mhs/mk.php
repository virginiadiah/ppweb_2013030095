<?php 
include 'conn.php';
include 'nav.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>mata kuliah</title>
</head>

<body>
    <button> <a href="mk_add.php"> tambah data</a></button>
    <?php 
$sql="SELECT * FROM mk";
$res= $conn -> query($sql);
echo "<table border='1px' width='75%'>";
echo "<thead>
<th>no</th>
<th>kode mata kuliah</th>
<th>nama mata kuliah</th>
<th>edit</th>
</thead>
<tbody>";

$i=0;
while($rows = $res->fetch_array(MYSQLI_BOTH)){
    $i++;
    echo "<tr>
    <td>".$i."</td>
    <td>".$rows['kode']."</td>
    <td>".$rows['nama']."</td>
    <td><a href='mk_edit.php?kode=" . $rows['kode'] . "'>EDIT</a> | <a href='mk_proc.php?kode="
     . $rows['kode'] . "'>HAPUS</a></td>
    </tr>";
  
}
echo "</tbody>
</table>";
?>
</body>

</html>