<?php
//membuat query untuk hapus data
$sql="DELETE FROM tbl_mahasiswa WHERE nim ='".$_GET['nim']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=mahasiswa&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=mahasiswa&actions=tampil');</scripr>";
}

