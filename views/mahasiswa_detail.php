<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Mahasiswa</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_mahasiswa WHERE nim ='" . $_GET ['nim'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">NIM</td> <td><?= $data['nim'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Mahasiswa</td> <td><?= $data['nm_mhs'] ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td> <td><?= $data['kelas'] ?></td>
                        </tr>
						<tr>
                            <td>Prodi</td> <td><?= $data['prodi'] ?></td>
                        </tr>
                        <tr>
                            <td>No HP</td> <td><?= $data['no_hp'] ?></td>
                        </tr>
                        
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=mahasiswa&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Mahasiswa </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

