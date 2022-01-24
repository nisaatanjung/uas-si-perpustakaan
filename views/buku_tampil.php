<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Buku</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th>Kode Buku</th><th>Judul</th><th>Penulis</th><th>Penerbit</th><th>Keterangan</th><th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_buku";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['kode_buku'] ?></td>
									<td><?= $data['judul'] ?></td>
									<td><?= $data['penulis'] ?></td>
									<td><?= $data['penerbit'] ?></td>
                                    <td><?= $data['keterangan'] ?></td>
                                    <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                                    <td><div class="btn-group">
                                        <a href="?page=buku&actions=detail&kode_buku=<?= $data['kode_buku'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"> Detail</span>
                                        </a>
                                        <a href="?page=buku&actions=edit&kode_buku=<?= $data['kode_buku'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"> Edit</span>
                                        </a>
                                        <a href="?page=buku&actions=delete&kode_buku=<?= $data['kode_buku'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"> Hapus</span>
                                        </a></div>
                                    </td>
                                    <?php } ?>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr><?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                                <td colspan="7">
                                    <a href="?page=buku&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data Buku

                                    </a>
                                </td>
                                <?php } ?>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

