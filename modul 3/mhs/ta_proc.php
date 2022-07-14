<?php 
include 'koneksi.php';

//menambahkan data
if(isset($_POST['proses']) &&($_POST['proses'])=="simpan"){
    $id =$_POST['id'];
    $nama=$_POST['nama'];

    $sql="INSERT INTO ta 
    (id,nama)
    VALUES ('$id','$nama')";

    $crud=mysqli_query($conn,$sql);

    if(!$crud){
        header("location:ta.php?action=gagal");
    }
    else{
        header("location:ta.php?action=berhasil");
    }
    }

//menghapus
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="DELETE FROM ta WHERE id='$id'";
    $crud=mysqli_query($conn,$sql);
    if(!$crud){
        header("location:ta.php?action=gagal");
    }
    else{
        header("location:ta.php?action=berhasil");
    }
}

//mengedit
if(isset($_POST['proses']) && $_POST['proses']=='perbarui'){
    $id =$_POST['id'];
    $nama=$_POST['nama'];

    $sql=mysqli_query($conn,"UPDATE ta SET nama='$nama' WHERE id='$id'");

    if(!$sql){
        header("location:ta.php?action=gagal");
    }
    else{
        header("location:ta.php?action=berhasil");
    }
} 


?>