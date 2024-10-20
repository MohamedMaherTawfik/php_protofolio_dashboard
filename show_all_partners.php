<?php include('db_connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $query="SELECT * FROM `partners`";
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($result)){
        ?>
      <div>
        <img src="images/<?php echo $row['image'] ?>" alt="">
        <button class="btn btn-primary"><a href="update_partners.php?id=<?php echo $row['id']; ?>">UPDATE</a></button>
        <button class="btn btn-danger">Delete</button>
        <div>
            <br>
        </div>
      </div>

        <?php
    }
    ?>
</body>
</html>