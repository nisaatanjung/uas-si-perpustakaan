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
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Mahasiswa</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th>NIM</th><th>Nama Mahasiswa</th><th>Kelas</th><th>Prodi</th><th>No HP</th><th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_mahasiswa";
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
									<td><?= $data['nim'] ?></td>
									<td><?= $data['nm_mhs'] ?></td>
									<td><?= $data['kelas'] ?></td>
                                    <td><?= $data['prodi'] ?></td>
                                    <td><?= $data['no_hp'] ?></td>
                                    <td>
                                    <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                                        <a href="?page=mahasiswa&actions=detail&nim=<?= $data['nim'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"> Detail</span>
                                        </a>
                                        <a href="?page=mahasiswa&actions=edit&nim=<?= $data['nim'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"> Edit</span>
                                        </a>
                                        <a href="?page=mahasiswa&actions=delete&nim=<?= $data['nim'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"> Delete</span>
                                        </a>
                                    </td>
                                    <?php } ?>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr><?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                                <td colspan="7">
                                    <a href="?page=mahasiswa&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data Mahasiswa

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
