<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Data Siswa Terdaftar</title>
</head>
<body>
    <div class="container">
    <button class="btn btn-primary my-5">
    <a href="user.php" class="text-light">Tambah Peserta</a>
    </button>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">NIS</th>
      <th scope="col">Nomor Handphone</th>
      <th scope="col">alamat</th>
      <th scope="col">Ubah</th>
    </tr>
  </thead>
  <tbody>
<?php

$sql="select * from `tbl_siswa`";
$result=mysqli_query($koneksi,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id_siswa'];
        $nama=$row['nama'];
        $nis=$row['nis'];
        $nomor=$row['nomor'];
        $alamat=$row['alamat'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$nama.'</td>
        <td>'.$nis.'</td>
        <td>'.$nomor.'</td>
        <td>'.$alamat.'</td>
        <td>
        <button class="btn btn-primary" <a href="update.php ?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-primary" <a href="delete.php ?deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>
      </tr>';
    }
    
}
?>
   
  </tbody>
</table>

    </div>
</body>
</html>