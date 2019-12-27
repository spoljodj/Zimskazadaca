<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'?>
  </head>
  <body>
<div class="grid-container">
  <?php
  include_once 'Predlozak/izbornik.php'
  ?>
  <div class="grid-x">
    <div class="large-12 small-12 columns">
      <div class="callout" style="min-height: 400px">
        <?php
        include_once 'predlozak/post3.php'
        $x=$_POST['broj1'];
        $y=$_POST['broj2'];
        for($i=0;$i<$x;$i++){
            
        }
        ?>
      </div>
    </div>
  </div>
  <?php include_once 'predlozak/podnozje.php'?>
</div>
<?php
require_once 'Predlozak/skripte.php';
 ?>
  </body>
</html>
