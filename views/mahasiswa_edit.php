<?php
$nim=$_GET['nim'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa WHERE nim ='$nim'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Mahasiswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                      <div class="form-group">
                            <label for="nim" class="col-sm-3 control-label">NIM</label>
                            <div class="col-sm-9">
                                <input type="text" name="nim" value="<?=$data['nim']?>"class="form-control" id="" placeholder="NIM">
                            </div>
                        </div>
                      <div class="form-group">
                            <label for="nm_mhs" class="col-sm-3 control-label">Judul</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_mhs" value="<?=$data['nm_mhs']?>"class="form-control" id="" placeholder="Nama Mahasiswa">
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" value="<?=$data['kelas']?>"class="form-control" id="" placeholder="Kelas">
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="prodi" class="col-sm-3 control-label">Prodi</label>
                            <div class="col-sm-9">
                                <input type="text" name="prodi" value="<?=$data['prodi']?>"class="form-control" id="" placeholder="Prodi">
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">NO HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>"class="form-control" id="" placeholder="No HP">
                            </div>
                        </div>
                    
                    <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-edit"></span> Update Data Mahasiswa</button>
                            </div>
                        </div>
                        </form>
                </div>
                <div class="panel-footer">
                    <a href="?page=buku&actions=tampil" class="btn btn-success btn-sm">
                        Kembali Ke Data Buku
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nim=$_POST['nim'];
    $nm_mhs=$_POST['nm_mhs'];
	$kelas=$_POST['kelas'];
    $prodi=$_POST['prodi'];
	$no_hp=$_POST['no_hp'];
    
    //buat sql
    $sql="UPDATE tbl_mahasiswa SET nim='$nim',nm_mhs='$nm_mhs',kelas='$kelas',prodi='$prodi',no_hp='$no_hp' WHERE nim ='$nim'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=mahasiswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



