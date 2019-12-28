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
      <div> 
      <form action="" method="POST">
      <label for="broj">Upišite prvi broj:</label>
      <input type="number" name="0" id="number"> </br>
      <label for="broj">Upišite drugi broj:</label>
      <input type="number" name="1" id="number"> </br>
      <label for="broj">Upišite treći broj:</label>
      <input type="number" name="2" id="number"> </br>
      <label for="broj">Upišite četvrti broj:</label>
      <input type="number" name="3" id="number"></br>
      <label for="broj">Upišite peti broj:</label>
      <input type="number" name="4" id="number"></br>
      <label for="broj">Upišite šesti broj:</label>
      <input type="number" name="5" id="number"></br>
      <label for="broj">Upišite sedmi broj:</label>
      <input type="number" name="6" id="number"></br>
      <label for="broj">Upišite osmi broj:</label>
      <input type="number" name="7" id="number"></br>
      <label for="broj">Upišite deveti broj:</label>
      <input type="number" name="8" id="number"></br>
      <label for="broj">Upišite deseti broj:</label>
      <input type="number" name="9" id="number"></br>
      <label for="broj">Upišite jedanaesti broj:</label>
      <input type="number" name="10" id="number"></br>
      <label for="broj">Upišite dvanaesti broj:</label>
      <input type="number" name="11" id="number"></br>
      <label for="broj">Upišite trinaesti broj:</label>
      <input type="number" name="12" id="number"></br>
      <label for="broj">Upišite četrnaesti broj:</label>
      <input type="number" name="13" id="number"></br>
      <label for="broj">Upišite petnaesti broj:</label>
      <input type="number" name="14" id="number"></br>
      <label for="broj">Upišite šesnaesti broj:</label>
      <input type="number" name="15" id="number"></br>
      <label for="broj">Upišite sedamanaesti broj:</label>
      <input type="number" name="16" id="number"></br>
      <label for="broj">Upišite osamnaesti broj:</label>
      <input type="number" name="17" id="number"></br>
      <label for="broj">Upišite devetnaesti broj:</label>
      <input type="number" name="18" id="number"></br>
      <label for="broj">Upišite dvadeseti broj:</label>
      <input type="number" name="19" id="number"></br>
      <label for="broj">Upišite dvadesetprvi broj:</label>
      <input type="number" name="20" id="number"></br>
      <label for="broj">Upišite dvadestdrugi broj:</label>
      <input type="number" name="21" id="number"></br>
      <label for="broj">Upišite dvadesettreći broj:</label>
      <input type="number" name="22" id="number"></br>
      <label for="broj">Upišite dvadesetčetvrti broj:</label>
      <input type="number" name="23" id="number"></br>
      <input type="submit" value="Postavi" >
      </form>
    
      </div>
        <?php
        $zbroj=0;
        $niz=[];
        for($i=0;$i<24;$i++){
         
          $niz[$i]=$_POST[$i];
          $zbroj=$zbroj+$niz[$i];
        }
        echo '</br>' . 'Najveći broj je:' . max($niz);
        echo '</br>' . 'Najmanji broj je:' . min($niz);
        echo '</br>' . 'Zbroj niza je:' . $zbroj;
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
