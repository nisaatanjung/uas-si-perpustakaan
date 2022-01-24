<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Mahasiswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       <div class="form-group">
                            <label for="nim" class="col-sm-3 control-label">NIM</label>
                            <div class="col-sm-9">
                                <input type="text" name="nim" class="form-control" id="" placeholder="Inputkan NIM">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nm_mhs" class="col-sm-3 control-label">Nama Mahasiswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_mhs" class="form-control" id="" placeholder="Inputkan Nama Mahasiswa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" class="form-control" id="" placeholder="Inputkan Kelas">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prodi" class="col-sm-3 control-label">Prodi</label>
                            <div class="col-sm-9">
                                <input type="text" name="prodi" class="form-control" id="" placeholder="Inputkan Prodi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" class="form-control" id="" placeholder="Inputkan No HP">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-save"></span> Simpan Data Mahasiswa</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=mahasiswa&actions=tampil" class="btn btn-success btn-sm">
                        Kembali Ke Data Mahasiswa
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
    $sql="INSERT INTO tbl_mahasiswa VALUES ('$nim','$nm_mhs','$kelas','$prodi','$no_hp')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Mahasiswa Error");
    if ($query){
        echo "<script>window.location.assign('?page=mahasiswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
