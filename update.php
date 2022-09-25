<?php
include "koneksi.php";
$id=$_GET['updateid'];
$sql="select * from `tbl_siswa` where id=$id";
$result=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_assoc($result);
    $nama=$row['nama'];
    $nis=$row['nis'];
    $nomor=$row['nomor'];
    $alamat=$row['alamat'];

if(isset($_POST['submit'])){
$nama=$_POST['nama'];
$nis=$_POST['nis'];
$nomor=$_POST['nomor'];
$alamat=$_POST['alamat'];

$sql="update `tbl_siswa` set id=$id,nama='$nama',nis='$nis',nomor='$nomor',alamat='$alamat' where id=$id";
$result=mysqli_query($koneksi,$sql);
if($result){
    echo "Data Berhasil Di Update";
    //header('location:display.php');
}else{
    die(mysqli_error($koneksi));
}
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>Update</title>
  </head>
  <body>
<div class="container my-5">
<form method="POST">
  <div class="form-group">
    <label>Nama Siswa :</label>
    <input type="text" class="form-control" placeholder="Masukan Nama Anda. . ." name="nama" autocomplete="off"
    Value=<?php echo $nama;?>>
  </div>
  <div class="form-group">
    <label>NIS :</label>
    <input type="text" class="form-control" placeholder="Masukan Nis Anda. . ." name="nis" autocomplete="off"
    Value=<?php echo $nis;?>>
  </div>
  <div class="form-group">
    <label>Nomor Handphone :</label>
    <input type="varchar" class="form-control" placeholder="Masukan Nomor Handphone Anda. . ." name="nomor" autocomplete="off"
    Value=<?php echo $nomor;?>>
  </div>
  <div class="form-group">
    <label>Alamat :</label>
    <div class="col-75">
    <input type="text" class="form-control" placeholder="Masukan Alamat Anda. . ." name="alamat"  style="height:150px" autocomplete="off"
    Value=<?php echo $alamat;?>>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
  </body>
</html>