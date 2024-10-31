<?php
include('db_connection.php');

$header_name = $_GET['header'];
if (isset($_POST[$header_name])) {
    $columns = [];
    $values = [];
    $errors = [];

    foreach ($_POST as $key => $value) {
        if ($key != $header_name) {
            if (empty($value)) {
                $errors[] = "$key cannot be empty.";
            } else {
                $columns[] = "`$key`";
                $values[] = "'" . mysqli_real_escape_string($connection, $value) . "'";
            }
        }
    }


    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        $columns_string = implode(", ", $columns);
        $values_string = implode(", ", $values);

        $query = "INSERT INTO `$header_name` ($columns_string) VALUES ($values_string)";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            move_uploaded_file($tempname, $folder);
            header('location: form.php?insert_msg=Data added successfully');
        } else {
            die("Error: " . mysqli_error($connection));
        }
    }
}
?>
