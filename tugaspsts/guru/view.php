<div class="row mt-5">
    <div class="row-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Guru</div>
                <div class="col-4">
                    <a href="?m=guru&s=add" class="btn btn-large btn-primary float-end">Tambah</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Foto</th>
                            <th>Nomor Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('config.php');
                        $sql = "SELECT * FROM guru";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while ($r = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                        <td>' . $no . '</td>
                                        <td>' . $r['nip'] . '</td>
                                        <td>' . $r['name'] . '</td>
                                        <td>' . $r['pob'] . '</td>
                                        <td>' . $r['dob'] . '</td>
                                        <td>' . $r['foto'] . '</td>
                                        <td>' . $r['phone'] . '</td>
                                        <td>
                                            <a href="?m=guru&s=edit&id=' . $r['id'] . '" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="?m=guru&s=delete&id=' . $r['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data guru ini?\')">Hapus</a>
                                        </td>
                                    </tr>';
                                $no++;
                            }
                        } else {
                            echo "<tr>
                                    <td colspan='8' align='center'>Data Kosong</td>
                                     </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
