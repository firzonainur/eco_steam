<!DOCTYPE html>
<html lang="en">
  <head>
   <?php require 'partials/_head.php'; ?>
  </head>
  <body data-topbar="colored">
    <div class="layout-wrapper">
      <?php require 'partials/_navbar.php'; ?>
      <div>
        <!-- partial:partials/_sidebar.html -->
        <?php require 'partials/_sidebar.php';  ?>
        <!-- partial -->
        <div>
            <?php require 'partials/_content.php';  ?>

            <?php require 'partials/_rightbar.php';  ?>
            <?php require 'partials/_footer.php';  ?>

        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <?php require 'partials/_javascripts.php';  ?>
  </body>
</html>