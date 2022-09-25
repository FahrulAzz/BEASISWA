<?php
include 'koneksi.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `tbl_siswa` where id=$id";
    $result=mysqli_query($koneksi,$sql);
    if($result){
        //echo "Berhasil Dihapus";
        header('location:display.php');
    }else{
        die(mysqli_error($koneksi));
    }

}


?>