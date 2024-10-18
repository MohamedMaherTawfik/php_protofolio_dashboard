<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php include('css.php') ?>
    <title>Dashboard Home</title>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php include('sidebar.php') ?>
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        <?php include('navbar.php') ?>
        <!-- partial -->
        <?php include('body.php') ?>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include('script.php') ?>
  </body>
</html>