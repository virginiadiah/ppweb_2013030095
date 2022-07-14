 <?php 
include "koneksi.php";
?>
 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <title>KRs</title>
 </head>

 <body>
     <h2>Tambah Data KRs</h2>
     <a href="krs.php">LIHAT</a> | <a href="krs_add.php">TAMBAH</a>
     <br>
     <form action="krs_proc.php" method="post">
         ID<br>
         <input type="text" name="id"><br>
         mhs_npm<br>
         <select name="mhs_npm">
             <?php 
            $sql = "SELECT * FROM mhs";
            $res = $conn->query($sql);
            while($rows = $res->fetch_array(MYSQLI_BOTH)){
                echo "<option value='".$rows['npm']."'>".$rows['npm']." - ".$rows['nama']."</option>";
            }
        ?>
         </select><br>
         mk_kode<br>
         <select name="mk_kode">
             <?php 
            $sql = "SELECT * FROM mk";
            $res = $conn->query($sql);
            while($rows = $res->fetch_array(MYSQLI_BOTH)){
                echo "<option value='".$rows['kode']."'>".$rows['kode']." - ".$rows['nama']."</option>";
            }
        ?>
         </select><br>
         sem<br>
         <input type="text" name="sem"><br>
         ta_id<br>
         <select name="ta_id">
             <?php 
            $sql = "SELECT * FROM ta";
            $res1 = $conn->query($sql);
            while($rows1 = $res1->fetch_array(MYSQLI_BOTH)){
                echo "<option value='".$rows1['id']."'>".$rows1['nama']."</option>";
            }
            
        ?>
         </select><br>
         nilai<br>
         <input type="text" name="nilai"><br>

         <input type="submit" name="krs_add" value="SIMPAN">
     </form>
 </body>

 </html>