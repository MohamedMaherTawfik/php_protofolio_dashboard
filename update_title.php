<?php include('db_connection.php'); ?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM `header` WHERE `id` = $id";
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

if(isset($_POST['update_title'])){
    
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];

    $query = "UPDATE `header` SET `title` = '$title', `subtitle` = '$subtitle', `description` = '$description' WHERE `id` = $id";

    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Error".mysqli_error($connection));
    }
    else{
        header("location:show_all_headers.php?update_msg=Data updated successfully");
    }
    }

?>


<form action="update_title.php?id=<?php echo $row['id'] ?>" method="POST" enctype="multipart/form-data">

              <div style="padding: 15px">
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Title" style="color: black;" value="<?php echo $row['title'] ?>">
              </div>

              <div style="padding: 15px">
                <label for="subtitle">subtitle</label>
                <input type="text" name="subtitle" placeholder="subtitle" style="color: black;" value="<?php echo $row['subtitle'] ?>">
              </div>

              <div style="padding: 15px">
                <label for="description">description</label>
                <input type="text" name="description" placeholder="description" style="color: black;" value="<?php echo $row['description'] ?>">
              </div>

              

              <div style="padding: 15px">
                <input type="submit" class="btn btn-success" name="update_title" style="color: black;" value="UPDATE">
              </div>

              

            </form>