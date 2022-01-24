<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Buku</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_buku WHERE kode_buku ='" . $_GET ['kode_buku'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Kode Buku</td> <td><?= $data['kode_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>Judul</td> <td><?= $data['judul'] ?></td>
                        </tr>
                        <tr>
                            <td>Penulis/Laci</td> <td><?= $data['penulis'] ?></td>
                        </tr>
						<tr>
                            <td>Penerbit</td> <td><?= $data['penerbit'] ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                        
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=buku&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Buku </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

