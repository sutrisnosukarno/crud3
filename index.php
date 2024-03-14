<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-3">Aplikasi CRUD Pendaftaran Siswa</h2>
        <div class="row">
            <div class="col-md-6">
                <h3>Tambah Siswa</h3>
                <form action="crud.php?action=add" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h3>Daftar Siswa</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include 'crud.php'; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
