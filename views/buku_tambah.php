<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       <div class="form-group">
                            <label for="kode_buku" class="col-sm-3 control-label">Kode Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_buku" class="form-control" id="" placeholder="Inputkan Kode Buku">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="judul" class="col-sm-3 control-label">Judul</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul" class="form-control" id="" placeholder="Inputkan Judul">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penulis" class="col-sm-3 control-label">Penulis</label>
                            <div class="col-sm-9">
                                <input type="text" name="penulis" class="form-control" id="" placeholder="Inputkan Penulis">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerbit" class="col-sm-3 control-label">Penerbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerbit" class="form-control" id="" placeholder="Inputkan Penerbit">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" id="" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-save"></span> Simpan Data Buku</button>
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
    $sql="INSERT INTO tbl_buku VALUES ('$kode_buku','$judul','$penulis','$penerbit','$keterangan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Buku Error");
    if ($query){
        echo "<script>window.location.assign('?page=buku&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
