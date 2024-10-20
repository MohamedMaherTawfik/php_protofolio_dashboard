<?php include('db_connection.php'); ?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM `partners` WHERE `id` = $id";
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

if(isset($_POST['update_partners'])){
    
    $partner_file_name = $_FILES['image']['name'];
    $partner_tempname= $_FILES['image']['tmp_name'];
    $partner_folder = "images/".$partner_file_name;
    move_uploaded_file($partner_tempname,$partner_folder);

    $query = "UPDATE `partners` SET `image` = '$partner_file_name' WHERE `id` = $id";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Error".mysqli_error($connection));
    }
    else{
        header("location:show_all_partners.php?update_msg=Data updated successfully");
    }
    }

?>


    <form action="update_partners.php?id=<?php echo $row['id'] ?>" method="POST" enctype="multipart/form-data">

            <div style="padding: 15px">
                <label for="image">image</label>
                <input type="file" name="image" placeholder="image" style="color: black;" value="<?php echo $row['image'] ?>">
            </div>

            <div style="padding: 15px">
                <input type="submit" class="btn btn-success" name="update_partners" style="color: black;" value="UPDATE">
            </div>

    </form>