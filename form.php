<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php include('css.php') ?>
    <title>Dashboard Home</title>
  </head>
  <body>
    <b class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php include('sidebar.php') ?>
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        <?php include('navbar.php') ?>
        <!-- partial -->
        <?php
// Get the header name from the URL parameter
if (isset($_GET['header'])) {
    $header_name = $_GET['header'];
    
    $query="show columns from $header_name";
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($result)){
        // echo $row['Field'];
        echo "<br>";
        ?>
        <style>
            label{
                display: inline-block;
                width: 70px;
                text-align: left;
            }
        </style>
          <div class="container" align="center">
            <form action="insert_data.php?header=<?php echo $header_name; ?>" method="POST" enctype="multipart/form-data">
                <label for="<?php echo $row['Field']; ?>"><?php echo $row['Field']; ?></label>
                <?php

                if($row['Field'] == 'id'){
                    continue;
                }
                else if($row['Field'] == 'image'){
                    ?>
                    <input type="file" name="image" id="image">
                    <?php
                }else{
                ?>
                <input type="text" name="<?php echo $row['Field']; ?>" id="<?php echo $row['Field']; ?>">
                <br>
                <?php
                }
                }
                ?>
                <br>
                <br>
                <input type="submit" value="<?php echo "Add $header_name"; ?>" name="<?php echo $header_name; ?>">
                
            </form>
           
          </div>
          <button style="height: 30px; width: 180px;"><a href="show_all.php?header=<?php echo $header_name; ?>">Show All <?php echo $header_name; ?></a></button>
            
        <?php
        
    }
?>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include('script.php') ?>
  </body>
</html>