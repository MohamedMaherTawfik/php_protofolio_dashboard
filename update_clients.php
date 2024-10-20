<?php include('db_connection.php'); ?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM `clients` WHERE `id` = $id";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Error".mysqli_error($connection));
    }
    else{
        $row = mysqli_fetch_assoc($result);
    }
}

?>

<?php

if(isset($_POST['update_clients'])){
    
    $client_file_name = $_FILES['image']['name'];
    $client_tempname= $_FILES['image']['tmp_name'];
    $client_folder = "images/".$client_file_name;
    move_uploaded_file($client_tempname,$client_folder);

    $query = "UPDATE `clients` SET `image` = '$client_file_name' WHERE `id` = $id";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Error".mysqli_error($connection));
    }
    else{
        header("location:show_all_clients.php?update_msg=Data updated successfully");
    }
    }

?>


    <form action="update_clients.php?id=<?php echo $row['id'] ?>" method="POST" enctype="multipart/form-data">

            <div style="padding: 15px">
                <label for="image">image</label>
                <input type="file" name="image" placeholder="image" style="color: black;" value="<?php echo $row['image'] ?>">
            </div>

            <div style="padding: 15px">
                <input type="submit" class="btn btn-success" name="update_clients" style="color: black;" value="UPDATE">
            </div>

    </form>