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
        include_once 'predlozak/post4.php';     
        ?>
        <table>
        <?php
        $n=0;
        $c=[];
        $c=array_merge($_POST['$A']);
         for($i=0;$i<4;$i++){
          echo '<tr>';
         for($j=0;$j<4;$j++){
              echo '<td>' . $c[$n];
              echo '</td>';
              $n++;
         }
          echo '</tr>';
      }
        ?>
        </table>
        </br>
        <table>
        <?php
        $m=0;
        $q=[];
        $q=array_merge($_POST['B']);
         for($i=0;$i<4;$i++){
          echo '<tr>';
         for($j=0;$j<4;$j++){
              echo '<td>' . $q[$m];
              echo '</td>';
              $m++;
         }
          echo '</tr>';
      }
        ?>
        </table>
        <?php
        $k=[];
        for($i=0;$i<16;$i++){
          $k[$i]=$q[$i]+$c[$i];
        }
        ?>
        </br>
         <table>
        <?php
        $br=0;
         for($i=0;$i<4;$i++){
          echo '<tr>';
         for($j=0;$j<4;$j++){
              echo '<td>' . $k[$br];
              echo '</td>';
              $br++;
         }
          echo '</tr>';
      }
        ?>
        </table>
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
