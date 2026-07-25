<?php

include 'koneksi.php';

$id_produk = $_GET['id_produk'];

$sql = "SELECT * FROM produk WHERE id_produk = $id_produk";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>

<head>

    <title>Edit Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card p-4">

            <h2 class="mb-4">Edit Produk</h2>

            <form action="proses_edit.php" method="post">

                <input type="hidden" name="id_produk"
                    value="<?php echo $row['id_produk']; ?>">

                <div class="mb-3">

                    <label class="form-label">Nama Produk</label>

                    <input type="text"
                        name="nama_produk"
                        class="form-control"
                        value="<?php echo $row['nama_produk']; ?>"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Harga</label>

                    <input type="number"
                        name="harga"
                        class="form-control"
                        value="<?php echo $row['harga']; ?>"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Stok</label>

                    <input type="number"
                        name="stok"
                        class="form-control"
                        value="<?php echo $row['stok']; ?>"
                        required>

                </div>

                <button type="submit" class="btn btn-warning">
                    Update
                </button>

                <a href="index.php" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</body>

</html>