<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="https://smkn1jakarta.sch.id/wp-content/uploads/2016/11/cropped-logo-smkn-1-jakarta-pusat.png" alt="Logo SMK Coding" width="150" class="d-inline-block align-top">
            </a>
        </nav>
    </header>

    <div class="container mt-4">
        <h3 class="text-center">Formulir Pendaftaran Siswa Baru</h3>
    </div>

    <form action="proses-pendaftaran.php" method="POST" class="container mt-4">
        <fieldset>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama lengkap">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" name="alamat"></textarea>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="laki-laki" id="laki-laki">
                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="perempuan" id="perempuan">
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>

            <div class="form-group">
                <label for="agama">Agama:</label>
                <select class="form-control" name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </div>

            <div class="form-group">
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" class="form-control" name="sekolah_asal" placeholder="Nama sekolah">
            </div>

            <button type="submit" class="btn btn-primary mt-2" name="daftar">Daftar</button>

        </fieldset>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
