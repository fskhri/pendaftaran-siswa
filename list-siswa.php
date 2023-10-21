<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <!-- Link to Bootstrap CSS from CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <header class="text-center mt-4">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <!-- Add a logo linking to index.php -->
                    <a href="index.php">
                        <img src="https://smkn1jakarta.sch.id/wp-content/uploads/2016/11/cropped-logo-smkn-1-jakarta-pusat.png" alt="SMK Coding Logo" class="img-fluid" width="150">
                    </a>
                </div>
                <div class="col-8">
                    <h3>Siswa yang sudah mendaftar</h3>
                </div>
            </div>
        </div>
    </header>

    <nav class="text-center">
        <a href="form-daftar.php" class="btn btn-primary">[+] Tambah Baru</a>
    </nav>

    <div class="container mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);
                $count = 1;

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $count . "</td>";
                    echo "<td>" . $siswa['nama'] . "</td>";
                    echo "<td>" . $siswa['alamat'] . "</td>";
                    echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                    echo "<td>" . $siswa['agama'] . "</td>";
                    echo "<td>" . $siswa['sekolah_asal'] . "</td>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id=" . $siswa['id'] . "' class='btn btn-primary btn-sm'>Edit</a> | ";
                    echo "<a href='hapus.php?id=" . $siswa['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <p class="text-center">Total: <?php echo mysqli_num_rows($query) ?></p>

    <!-- Add Bootstrap JavaScript and jQuery from CDNs -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
