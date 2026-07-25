<!DOCTYPE html>
<html>

<head>

    <title>Tambah Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card p-4">

            <h2 class="mb-4">Tambah Produk</h2>

            <form action="proses_tambah.php" method="post">

                <div class="mb-3">

                    <label>Nama Produk</label>

                    <input type="text" name="nama_produk" class="form-control">

                </div>

                <div class="mb-3">

                    <label>Harga</label>

                    <input type="number" name="harga" class="form-control">

                </div>

                <div class="mb-3">

                    <label>Stok</label>

                    <input type="number" name="stok" class="form-control">

                </div>

                <button type="submit" class="btn btn-success">
                    Simpan
                </button>

                <a href="index.php" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</body>

</html>