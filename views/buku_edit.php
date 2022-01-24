<?php
$kode_buku=$_GET['kode_buku'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_buku WHERE kode_buku ='$kode_buku'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                      <div class="form-group">
                            <label for="kode_buku" class="col-sm-3 control-label">Kode Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_buku" value="<?=$data['kode_buku']?>"class="form-control" id="" placeholder="Kode Buku">
                            </div>
                        </div>
                      <div class="form-group">
                            <label for="judul" class="col-sm-3 control-label">Judul</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul" value="<?=$data['judul']?>"class="form-control" id="" placeholder="Judul">
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="penulis" class="col-sm-3 control-label">Penulis</label>
                            <div class="col-sm-9">
                                <input type="text" name="penulis" value="<?=$data['penulis']?>"class="form-control" id="" placeholder="Penulis">
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="penerbit" class="col-sm-3 control-label">Penerbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerbit" value="<?=$data['penerbit']?>"class="form-control" id="" placeholder="Penerbit">
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>"class="form-control" id="" placeholder="Keterangan">
                            </div>
                        </div>
                    
                    <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-edit"></span> Update Data Buku</button>
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
    $kode_buku=$_POST['kode_buku'];
    $judul=$_POST['judul'];
	$penulis=$_POST['penulis'];
    $penerbit=$_POST['penerbit'];
	$keterangan=$_POST['keterangan'];
    
    //buat sql
    $sql="UPDATE tbl_buku SET kode_buku='$kode_buku',judul='$judul',penulis='$penulis',penerbit='$penerbit',keterangan='$keterangan' WHERE kode_buku ='$kode_buku'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=buku&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



