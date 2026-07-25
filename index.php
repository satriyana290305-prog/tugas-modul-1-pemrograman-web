<!DOCTYPE html>
<html>

<head>
    <title>Data Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">

        <h2 class="text-center mb-4">Daftar Produk Toko Online</h2>

        <a href="tambah.php" class="btn btn-primary mb-3">
            Tambah Produk Baru
        </a>

        <table class="table table-bordered table-striped table-hover">

            <thead class="table-dark">

                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>

                <?php

                include 'koneksi.php';

                $sql = "SELECT * FROM produk";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        echo "<tr>";

                        echo "<td>" . $row['id_produk'] . "</td>";

                        echo "<td>" . $row['nama_produk'] . "</td>";

                        echo "<td>Rp " . number_format($row['harga']) . "</td>";

                        echo "<td>" . $row['stok'] . "</td>";

                        echo "<td>

                        <a href='edit.php?id_produk=" . $row['id_produk'] . "' class='btn btn-warning btn-sm'>
                            Edit
                        </a>

                        <a href='hapus.php?id_produk=" . $row['id_produk'] . "' class='btn btn-danger btn-sm'
                        onclick='return confirm(\"Yakin ingin menghapus?\")'>
                            Hapus
                        </a>

                        </td>";

                        echo "</tr>";
                    }

                } else {

                    echo "<tr>
                            <td colspan='5' class='text-center'>
                                Data tidak ditemukan
                            </td>
                          </tr>";
                }

                ?>

            </tbody>

        </table>

    </div>

</body>

</html>