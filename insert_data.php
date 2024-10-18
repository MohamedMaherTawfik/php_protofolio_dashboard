<?php

include('db_connection.php');
if(isset($_POST['add_title'])){
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];
    $query="INSERT INTO `header` (`title`,`subtitle`,`description`) VALUES ('$title','$subtitle','$description')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Error".mysqli_error($connection));
    }
    else{
        header('location: title.php?insert_msg=Data added successfully');
    }
}

if(isset($_POST['add_about'])){
    $file_name = $_FILES['image']['name'];
    $tempname= $_FILES['image']['tmp_name'];
    $folder = "images/".$file_name;

    $about_title = $_POST['title'];
    $about_subtitle = $_POST['subtitle'];
    $about_description = $_POST['description'];
    $query="INSERT INTO `about` (`title`,`subtitle`,`description`,`image`) VALUES ('$about_title','$about_subtitle','$about_description','$file_name')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Error".mysqli_error($connection));
    }
    else{
        move_uploaded_file($tempname,$folder);
        header('location: about.php?insert_msg=Data added successfully');
    }
}


if(isset($_POST['add_goal'])){
    $goal_file_name = $_FILES['icon']['name'];
    $goal_tempname= $_FILES['icon']['tmp_name'];
    $goal_folder = "images/".$file_name;

    $goal_title = $_POST['title'];
    $goal_subtitle = $_POST['subtitle'];
    $query="INSERT INTO `goals` (`title`,`subtitle`,`icon`) VALUES ('$goal_title','$goal_subtitle','$goal_file_name')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Error".mysqli_error($connection));
    }
    else{
        move_uploaded_file($goal_tempname,$goal_folder);
        header('location: goals.php?insert_msg=Data added successfully');
    }
}

if(isset($_POST['add_service'])){
    $service_file_name = $_FILES['icon']['name'];
    $service_tempname= $_FILES['icon']['tmp_name'];
    $service_folder = "images/".$file_name;

    $service_title = $_POST['title'];
    $service_subtitle = $_POST['subtitle'];
    $query="INSERT INTO `services` (`title`,`subtitle`,`icon`) VALUES ('$service_title','$service_subtitle','$service_file_name')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Error".mysqli_error($connection));
    }
    else{
        move_uploaded_file($service_tempname,$service_folder);
        header('location: services.php?insert_msg=Data added successfully');
    }
}



?>