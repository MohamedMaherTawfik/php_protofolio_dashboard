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
$query = "DELETE FROM `$headers` WHERE `id` = $id";
$result = mysqli_query($connection,$query);

if(!$result){
    die("Error".mysqli_error($connection));
}
else{
    header("location:show_all.php?delete_msg=Data deleted successfully");
}

?>