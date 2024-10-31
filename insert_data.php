<?php
include('db_connection.php');
$header_name = $_GET['header'];
if(isset($_POST[$header_name])) {

    $columns = [];
    $values = [];

    // Loop through the $_POST array to dynamically gather column names and values
    foreach ($_POST as $key => $value) {
        if ($key != $header_name) { // Skip the submit button or any other unrelated fields
            // Add the column name
            $columns[] = "`$key`";
            // Add the corresponding value, using mysqli_real_escape_string to prevent SQL injection
            $values[] = "'" . mysqli_real_escape_string($connection, $value) . "'";
        }
    }

    if (isset($_FILES['image'])) {
        $file_name = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder = "images/" . $file_name;

        // Add image column and value
        $columns[] = "`image`";
        $values[] = "'" . mysqli_real_escape_string($connection, $file_name) . "'";
    }

    $columns_string = implode(", ", $columns);
    $values_string = implode(", ", $values);

    $query = "INSERT INTO `$header_name` ($columns_string) VALUES ($values_string)";
    $result = mysqli_query($connection,$query);
    if($result) {
        move_uploaded_file($tempname, $folder);
        header('location: form.php?insert_msg=Data added successfully');
    }
    else{
        die("Error".mysqli_error($connection));
    }
}

?>