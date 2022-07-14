<?php
include 'koneksi.php';

//delete


if (isset($_GET['kode'])) {
    $kode = $_GET['kode'];
    $sql = "DELETE FROM mk
			WHERE kode='$kode'";
    $crud = mysqli_query($conn,$sql);

    if (!$crud){
        header("Location: mk.php?action=gagal");
    }else{
        header("Location: mk.php?action=berhasil");
    }
}

//menambahkan data
if(isset($_POST['proses']) && $_POST['proses'] == "simpan"){
    $kode=$_POST['kode'];
    $nama=$_POST['nama'];
 
    $sql="INSERT INTO mk 
    (kode,nama)
    VALUES ('$kode','$nama')";
    
    $crud= mysqli_query($conn,$sql);
    if (!$crud){
        header("Location: mk.php?action=gagal");
    }else{
        header("Location: mk.php?action=berhasil");
    }

}
//mengedit
if(isset($_POST['proses']) && $_POST['proses'] =="perbarui"){
    $kode = $_POST['kode'];
    $nama =$_POST['nama'];
    $sql=mysqli_query($conn,"UPDATE mk SET nama='$nama' WHERE kode='$kode'");

   
    if (!$sql){
        header("Location: mk.php?action=gagal");
    }else{
        header("Location: mk.php?action=berhasil");
    } 
}


?>