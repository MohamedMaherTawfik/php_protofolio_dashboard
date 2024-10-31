<?php
$header_name=$_GET['header'];
echo $header_name;
include('db_connection.php');
$query="SELECT * FROM `$header_name` ";
$result=mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result)){
    ?>
    <div>
        id:<?php echo $row['id']?>
        <button><a href="update.php?id=<?php echo $row['id'];?> <?php echo $header_name ?>">UPDATE</a></button>
        <button><a href="delete.php?id=<?php echo $row['id'];?> <?php echo $header_name ?>">DELETE</a></button>
        <br>
        <br>
    </div>
    <?php
}
?>