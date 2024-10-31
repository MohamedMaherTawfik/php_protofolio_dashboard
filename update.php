<?php include('db_connection.php'); ?>

<?php
if(isset($_GET['id'])){
    $id_header = $_GET['id'];
    $parts = explode(' ', $id_header);
    $id = $parts[0];
    $headers = $parts[1];
}
?>

<?php 

    $query_data='SELECT * FROM `'.$headers.'` WHERE `id` = '.$id;
    $result_data = mysqli_query($connection,$query_data);
    $data_row = mysqli_fetch_assoc($result_data);
    $query="show columns from `$headers`  ";
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($result)){
        echo '<br>';
        ?>
    <style>
            label{
                display: inline-block;
                width: 70px;
                text-align: left;
            }
        </style>
          <div class="container" align="center">
            <form action="update_data.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <label for="<?php echo $row['Field']; ?>"><?php echo $row['Field']; ?></label>
                <?php
                if($row['Field'] == 'id'){
                    continue;
                }
                else if($row['Field'] == 'image'){
                    ?>
                    <input type="file" name="image" id="image" >
                    <?php
                }else{
                ?>
                <input type="text" name="<?php echo $row['Field']; ?>" id="<?php echo $row['Field']; ?>" value="<?php echo $data_row[''.$row['Field'].'']; ?>">
                <br>
                <?php
                }
                }
                ?>
                <br>
                <br>
                <input type="submit" value="<?php echo "Update $headers" ?>" name="<?php echo $headers?>">
                
            </form>
           
          </div>
        <?php

?>

<?php 
    
    if(isset($_POST[$headers])) {

        $columns = [];
        $values = [];
    
        // Loop through the $_POST array to dynamically gather column names and values
        foreach ($_POST as $key => $value) {
            if ($key != $headers) { // Skip the submit button or any other unrelated fields
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
    
        $query_insert = "UPDATE `$headers` SET `$columns_string` = '$values_string' WHERE `id` = $id ";
        $result_insert = mysqli_query($connection,$query_insert);
        if($result_insert) {
            move_uploaded_file($tempname, $folder);
            header('location:show_all.php?insert_msg=Data Updated successfully');
        }
        else{
            die("Error".mysqli_error($connection));
        }
    }

?>


