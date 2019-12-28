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
      <form action="" method="POST">
      <label for="broj">Upišite prvi broj:</label>
      <input type="number" name="0" id="number"> </br>
      <label for="broj">Upišite drugi broj:</label>
      <input type="number" name="1" id="number"> </br>
      <input type="submit" value="Postavi">
        <?php
        $x=$_POST['0'];
        $y=$_POST['1'];
        $m=$x>$y ? $y : $x;
        $v=$x<$y ? $y : $x;
        echo 'Prim brojevi između ' . $m . ' i ' . $v . ' su: ';
       for($i=$m;$i<$v;$i++){
         for($j=2;$j<$v;$j++){
           if($i%$j==0){
           break;
           }
          }
           if($i==$j){
             echo $i . ', ';
           }
       }
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
