<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'?>
  </head>
  <body>
<div class="grid-container">
  <?php
  include_once 'predlozak/izbornik.php'
  ?>
  <div class="grid-x">
    <div class="large-12 small-12 columns">
      <div class="callout" style="min-height: 400px">
        <?php
        for($i=0;$i<5;$i++){
        echo '<form action="" method="POST">
        <label for="broj">Upišite '. ($i+1) . '. broj prve matrice:</label>
        <input type="number" name="$A[]" id="0">
        ';
        }
       echo '<input type="submit" value="Postavi" >';
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        ?>
      </div>
    </div>
  </div>
  <?php include_once 'predlozak/podnozje.php'?>
</div>
<?php
require_once 'predlozak/skripte.php';
 ?>
  </body>
</html>