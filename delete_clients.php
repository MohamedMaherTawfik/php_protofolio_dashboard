<?php include('db_connection.php');
$id = $_GET['id'];
$query = "DELETE FROM `clients` WHERE id = $id";
$result = mysqli_query($connection,$query);

if(!$result){
    die("Error".mysqli_error($connection));
}
else{
    header("location:show_all_clients.php?delete_msg=Data deleted successfully");
}

?>