<?php include('db_connection.php'); ?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM `services` WHERE `id` = $id";
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

if(isset($_POST['update_services'])){

    $services_file_name = $_FILES['image']['name'];
    $services_tempname= $_FILES['image']['tmp_name'];
    $services_folder = "images/".$services_file_name;
    move_uploaded_file($services_tempname,$services_folder);
    
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];

    $query = "UPDATE `services` SET `title` = '$title', `subtitle` = '$subtitle',`icon` = '$services_file_name' WHERE `id` = $id";

    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Error".mysqli_error($connection));
    }
    else{
        header("location:show_all_services.php?update_msg=Data updated successfully");
    }
    }

?>


<form action="update_services.php?id=<?php echo $row['id'] ?>" method="POST" enctype="multipart/form-data">

                <div style="padding: 15px">
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Title" style="color: black;" value="<?php echo $row['title'] ?>">
              </div>

              <div style="padding: 15px">
                <label for="subtitle">subtitle</label>
                <input type="text" name="subtitle" placeholder="subtitle" style="color: black;" value="<?php echo $row['subtitle'] ?>">
              </div>

              <div style="padding: 15px">
                <label for="image">image</label>
                <input type="file" name="image" placeholder="image" style="color: black;" value="<?php echo $row['icon'] ?>">
                </div>

              <div style="padding: 15px">
                <input type="submit" class="btn btn-success" name="update_services" style="color: black;" value="UPDATE">
              </div>

            </form>