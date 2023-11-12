<?php
// Establish a database connection
$conn = mysqli_connect("localhost", "root", "", "olen_store");

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/**
 * Execute a SQL query and return the result as an associative array.
 *
 * @param string $query The SQL query to execute
 * @return array|null An array of results or null on failure
 */
function query($query) {
    global $conn;

    $result = $conn->query($query);

    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    $data = [];

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}

/**
 * Insert new data into the 'tokoabc' table.
 *
 * @param array $data An array of data to insert
 * @return bool True on success, false on failure
 */
function tambah($data) {
    global $conn;

    // Retrieve data from the submitted form
    $kode_barang = $data["kode_barang"];
    $nama_barang = $data["nama_barang"];
    $harga_barang = $data["harga_barang"];
    $stok_barang = $data["stok_barang"];

    // Query to insert data into the 'tokoabc' table
    $query = "INSERT INTO tokoabc (kode_barang, nama_barang, harga_barang, stok_barang)
              VALUES ('$kode_barang', '$nama_barang', '$harga_barang', '$stok_barang')";

    return executeQuery($query);
}

/**
 * Delete a record from the 'tokoabc' table by its 'no' value.
 *
 * @param int $no The record number to delete
 * @return int The number of affected rows
 */
function hapus($no) {
    $query = "DELETE FROM tokoabc WHERE no = $no";
    return executeQuery($query);
}

/**
 * Update data in the 'tokoabc' table.
 *
 * @param array $data An array of data to update
 * @return int The number of affected rows
 */
function ubah($data) {
    $no = $data["no"];
    $kode_barang = $data["kode_barang"];
    $nama_barang = $data["nama_barang"];
    $harga_barang = $data["harga_barang"];
    $stok_barang = $data["stok_barang"];

    // Query to update data in the 'tokoabc' table
    $query = "UPDATE tokoabc SET kode_barang = '$kode_barang',
              nama_barang = '$nama_barang',
              harga_barang = '$harga_barang',
              stok_barang = '$stok_barang'
              WHERE no = $no";

    return executeQuery($query);
}

/**
 * Execute a SQL query and return the number of affected rows.
 *
 * @param string $query The SQL query to execute
 * @return int The number of affected rows
 */
function executeQuery($query) {
    global $conn;
    $conn->query($query);
    return $conn->affected_rows;
}
?>
