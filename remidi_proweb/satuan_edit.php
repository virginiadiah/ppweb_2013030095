<?php
include "con_db.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>satuan - Detil</title>
</head>

<body>

    <h2>Detil Data satuan</h2>

    <br>
    <?php
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM satuan where id='$id'");
    while ($d = mysqli_fetch_array($sql)) {

    ?>
    <form action="satuan_proc.php" method="post">
        ID<br>
        <input type="text" name="id" value="<?= $d['id'] ?>" readonly><br>
        Nama<br>
        <input type="text" name="nama" value="<?= $d['nama'] ?>"><br>
        <input type="hidden" name="keterangan" value="<?= $d['keterangan'] ?>">
        Aktif<br>
        <input type="text" name="aktif" value="<?= $d['aktif'] ?>"><br>
        <input type="hidden" name="crt" value="<?= $d['crt'] ?>"><br>
        crt_date<br>
        <input type="datetime-local" name="crt_date"
            value="<?php echo date('Y-m-d\TH:i', strtotime($d['crt_date']))?>"><br>

        <input type="hidden" name="upd" value="<?= $d['upd'] ?>"><br>
        upd_date<br>
        <input type="datetime-local" name="upd_date"
            value="<?php echo date('Y-m-d\TH:i', strtotime($d['upd_date']))?>"><br>
        <button type="submit" name="proses" value="perbarui"
            onclick="return confirm('Yakin Memperbarui data ini Data Ini?')">Simpan</button>
    </form>
    <?php
    }
    ?>
</body>

</html>