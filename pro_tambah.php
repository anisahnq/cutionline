<?php
 include 'koneksi.php';
 ?>
<?php
$id=$_POST['id'];
$nip=$_POST['nip'];
$nama=$_POST['name'];
$jk=$_POST['jenisKelamin'];
$tgl=$_POST['tglLahir'];
$jbt=$_POST['jabatan'];
$stat=$_POST['status'];

$s=mysql_query("INSERT INTO karyawan VALUES('$id','$nip','$nama','$jk','$tgl','$jbt','$stat')") or die(mysql_error());{
 ?>
 <script>
  alert("Data Karyawan Berhasil Disimpan");
  window.location.href='karyawan.php';

 </script>
 <?php
}

 ?>