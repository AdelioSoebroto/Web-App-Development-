<?php
// Establish a connection to the MySQL database
$conn = mysqli_connect("localhost", "root", "", "olen_store");

// Check if the submit button is pressed
if (isset($_POST["submit"])) {
    // Retrieve data from form elements
    $kode_barang = $_POST["kode_barang"];
    $nama_barang = $_POST["nama_barang"];
    $harga_barang = $_POST["harga_barang"];
    $stok_barang = $_POST["stok_barang"];

    // Query to insert data into the 'tokoabc' table
    $query = "INSERT INTO tokoabc (kode_barang, nama_barang, harga_barang, stok_barang)
              VALUES ('$kode_barang', '$nama_barang', '$harga_barang', '$stok_barang')";

    // Execute the query
    mysqli_query($conn, $query);
    
    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
            alert('Data successfully added!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Failed to add data!');
            document.location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Yuk Kita Tambah Barang</title>
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

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Tambahin Barang ke Toko Olen</h1>
    <form action="tambah.php" method="post">
        <ul>
            <li>
                <label for="kode_barang">Kode Barang: </label>
                <input type="text" name="kode_barang" id="kode_barang" required>
            </li>
            <li>
                <label for="nama_barang">Nama Barang: </label>
                <input type="text" name="nama_barang" id="nama_barang" required>
            </li>
            <li>
                <label for="harga_barang">Harga Barang (in IDR): </label>
                <input type="number" name="harga_barang" id="harga_barang" required>
            </li>
            <li>
                <label for="stok_barang">Stok Barang: </label>
                <input type="number" name="stok_barang" id="stok_barang" required>
            </li>
        </ul>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
