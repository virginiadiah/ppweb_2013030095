<?php 
include 'koneksi.php';
include 'nav.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>tahun ajaran</title>
</head>

<body>
    <br> <button><a href="ta_add.php">TAMBAH DATA</a></button><br><br>
    <?php 
    $sql ="SELECT * FROM ta";
    $res = $conn -> query($sql);

    echo "<table border='1px' width='75%'";
    echo "<thead>
    <th>no.</th>
    <th>id</th>
    <th>nama</th>
    <th>aksi</th>
    </thead>
    <tbody>";
    $i=0;
    while($rows = $res->fetch_array(MYSQLI_BOTH)){
$i++;
echo"<tr>
<td>".$i."</td>
<td>".$rows['id']."</td>
<td>".$rows['nama']."</td>
<td><a href='ta_edit.php?id=" . $rows['id'] . "'>EDIT</a> | <a href='ta_proc.php?id="
     . $rows['id'] . "'>HAPUS</a></td>
</tr>
";
    }
echo"</tbody>
</table>";
    ?>
</body>

</html>