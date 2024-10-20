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
    $goal_folder = "images/".$goal_file_name;

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
    $service_folder = "images/".$service_file_name;

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

if(isset($_POST['add_client'])){
    $client_file_name = $_FILES['image']['name'];
    $client_tempname= $_FILES['image']['tmp_name'];
    $client_folder = "images/".$client_file_name;

    $query="INSERT INTO `clients` (`image`) VALUES ('$client_file_name')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Error".mysqli_error($connection));
    }
    else{
        move_uploaded_file($client_tempname,$client_folder);
        header('location: clients.php?insert_msg=Data added successfully');
    }
}

if(isset($_POST['add_work'])){
    $work_file_name = $_FILES['image']['name'];
    $work_tempname= $_FILES['image']['tmp_name'];
    $work_folder = "images/".$work_file_name;

    $query="INSERT INTO `latest work` (`image`) VALUES ('$work_file_name')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Error".mysqli_error($connection));
    }
    else{
        move_uploaded_file($work_tempname,$work_folder);
        header('location: latest_work.php?insert_msg=Data added successfully');
    }
}

if(isset($_POST['add_partner'])){
    $partner_file_name = $_FILES['image']['name'];
    $partner_tempname= $_FILES['image']['tmp_name'];
    $partner_folder = "images/".$partner_file_name;

    $query="INSERT INTO `partners` (`image`) VALUES ('$partner_file_name')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Error".mysqli_error($connection));
    }
    else{
        move_uploaded_file($partner_tempname,$partner_folder);
        header('location: partners.php?insert_msg=Data added successfully');
    }
}


?>