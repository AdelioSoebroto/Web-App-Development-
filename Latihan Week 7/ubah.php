<?php
require 'functions.php';

$no = $_GET["no"];
$brg = query("SELECT * FROM tokoabc WHERE no = $no")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('Data successfully updated!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data update failed!');
            document.location.href = 'index.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Let's Update If You Want</title>
    <!-- Add inline CSS for a neat and attractive appearance -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, button {
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
        }

        button {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Let's Update If You Want</h1>
    <form action="" method="post">
        <input type="hidden" name="no" value="<?= $brg["no"]; ?>">
        <ul>
            <li>
                <label for="kode_barang">Product Code:</label>
                <input type="text" name="kode_barang" id="kode_barang" required value="<?= $brg["kode_barang"]; ?>">
            </li>
            <li>
                <label for="nama_barang">Product Name:</label>
                <input type="text" name="nama_barang" id="nama_barang" required value="<?= $brg["nama_barang"]; ?>">
            </li>
            <li>
                <label for="harga_barang">Product Price:</label>
                <input type="text" name="harga_barang" id="harga_barang" required value="<?= $brg["harga_barang"]; ?>">
            </li>
            <li>
                <label for="stok_barang">Product Stock:</label>
                <input type="text" name="stok_barang" id="stok_barang" required value="<?= $brg["stok_barang"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Update Data</button>
            </li>
        </ul>
    </form>
</body>
</html>
