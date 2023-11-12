<?php
require 'functions.php';

// Check if the database has records
$brg = query("SELECT * FROM tokoabc");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Toko Seadanya Olen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid #ddd;
            background-color: #fff;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            background-color: #ffffff;
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            border-radius: 3px;
        }

        a:hover {
            background-color: #555;
        }

        a.add-btn {
            display: block;
            margin: 20px auto;
            text-align: center;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
        }

        a.add-btn:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <h1>Toko Seadanya Olen</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
            <th>Aksi</th>
        </tr>
        <?php if ($brg) : ?>
            <?php $i = 1; foreach ($brg as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row['nama_barang']; ?></td>
                <td><?= $row['kode_barang']; ?></td>
                <td><?= 'Rp ' . number_format($row['harga_barang'], 0, ',', '.') . ',00'; ?></td>
                <td><?= $row['stok_barang'] . ' pcs'; ?></td>
                <td>
                    <a href="ubah.php?no=<?= $row['no']; ?>">Ubah</a>
                    <a href="hapus.php?no=<?= $row['no']; ?>" onclick="confirmDelete(<?= $row['no']; ?>)">Hapus</a>
                </td>
            </tr>
            <?php $i++; endforeach; ?>
        <?php else : ?>
            <!-- If there are no records, show a placeholder row -->
            <tr>
                <td colspan="7">No records found.</td>
            </tr>
        <?php endif; ?>
    </table>

    <!-- Add a link/button to navigate to tambah.php -->
    <a href="tambah.php" class="add-btn">Tambah Barang</a>

    <script>
        function confirmDelete(recordNo) {
            if (confirm("Are you sure you want to delete this record?")) {
                // If the user confirms, redirect to the delete page with the record number
                window.location.href = "hapus.php?no=" + recordNo;
            }
        }
    </script>
</body>
</html>
