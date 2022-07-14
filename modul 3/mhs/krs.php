<?php
include 'koneksi.php';
include 'nav.php'
?>
<!DOCTYPE html>
<html>

<head>
    <title>Krs</title>
</head>

<body>

    <a href="krs.php">LIHAT</a> | <a href="krs_add.php">TAMBAH</a>
    <table width='100%' border='1'>
        <thead>
            <tr>
                <th width='2%'>No.</th>
                <th width='5%'>Act</th>
                <th width='5%'>ID</th>
                <th width='15%'>mhs_npm</th>
                <th width='5%'>mk_kode</th>
                <th width='5%'>sem</th>
                <th width='5%'>ta_id</th>
                <th width='5%'>nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php
    $sql = "SELECT * FROM krs";
    $res = $conn->query($sql);
if($res->num_rows > 0){
$i = 0;
while($dat = $res->fetch_assoc()){
 $i++;
 echo "<tr align='center'>
 <td>$i</td>
 <td><a href='krs_detail.php?id=".$dat['id']."'>Edit</a></td>
  <td><a href='krs_detail.php?id=".$dat['id']."'>Hapus</a></td>
 <td>".$dat["id"]."</td>
 <td>".$dat["mhs_npm"]."</td>
 <td>".$dat["mk_kode"]."</td>
 <td>".$dat["sem"]."</td>
 <td>".$dat["ta_id"]."</td>
 <td>".$dat["nilai"]."</td>
 </tr>";
}
}
?>
        </tbody>
    </table>
</body>

</html>