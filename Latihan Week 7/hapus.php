<?php
require 'functions.php';

$no = $_GET["no"];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $confirmation = $_POST["confirmation"];

    if ($confirmation == "delete" && hapus($no) > 0) {
        echo "
        <script>
            alert('Data successfully deleted!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Deletion aborted!');
            document.location.href = 'index.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirm Deletion</title>
</head>
<body>
    <!-- JavaScript for the confirmation prompt -->
    <script>
        var userConfirmation = confirm('Are you sure you want to delete this data?');
        
        if (userConfirmation) {
            // If the user confirms, submit the form with 'delete' as the confirmation value
            var form = document.createElement('form');
            form.method = 'post';
            form.action = '';
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'confirmation';
            input.value = 'delete';
            form.appendChild(input);
            document.body.appendChild(form);
            form.submit();
        } else {
            // If the user cancels, redirect to 'index.php'
            window.location.href = 'index.php';
        }
    </script>
</body>
</html>
