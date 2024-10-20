<?php include('db_connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    label{
      display: inline-block;
      width: 200px;
    }
    </style>
    <!-- Required meta tags -->
    <?php include('css.php') ?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php include('sidebar.php') ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php include('navbar.php') ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="padding-top: 90%">
        <div class="container" align="center">
        <form action="insert_data.php" method="POST" enctype="multipart/form-data">

              <div style="padding: 15px">
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Title" style="color: black;">
              </div>

              <div style="padding: 15px">
                <label for="subtitle">subtitle</label>
                <input type="text" name="subtitle" placeholder="subtitle" style="color: black;">
              </div>

              <div style="padding: 15px">
                <label for="description">description</label>
                <input type="text" name="description" placeholder="description" style="color: black;">
              </div>
              

              <div style="padding: 15px">
                <input type="submit" class="btn btn-success" name="add_title" style="color: black;">
                <br>
                <br>
                <button class="btn btn-primary"><a href="show_all_headers.php" style="color: white">Show</a></button>
              </div>

            </form>
          </div>
        </div>
        <!-- main-panel ends -->
      </div>

      <!-- page-body-wrapper ends -->
    </div>

   
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include('script.php') ?>
  </body>
</html>
