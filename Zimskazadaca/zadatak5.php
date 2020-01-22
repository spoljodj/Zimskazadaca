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
      <div class="tabla">
<div class="input-text"> INPUT </div>
    <div class="input">
    
        <form action="" method="POST">
            <div class="txt1">Broj redaka</div>
        <input type="number" class="unos" name="redci" value="<?php echo $redci; ?>">
            <div class="txt1">Broj stupaca</div>
        <input type="number" class="unos" name="stupci" value="<?php echo $stupci; ?>">
        <br>
        <input type="submit" class="klik" value="KREIRAJ TABLICU">
        </form>
    </div>

    <div class="output-text"> OUTPUT </div>     
</div>


<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
            $redci=$_POST['redci'];
            $stupci=$_POST['stupci'];

            $maksred=$redci-1;
            $maksstup=$stupci-1;
            $ispis=1;
            $matrica=[];
            $minstup=0;
            $minred=0;
            while ($ispis <= $redci*$stupci) 
            {
                for($j=$maksred; $j >= $minred; $j--)
                {
                    $matrica[$j][$maksstup] = $ispis++;
                }
                    $maksstup--;
                    if ($ispis > $redci*$stupci) break;

                for ($i=$maksstup; $i >= $minstup ;$i--) 
                { 
                    $matrica[$minred][$i] = $ispis++;
                }
                    $minred++;
                    if ($ispis > $redci*$stupci) break;

                for ($j=$minred; $j <= $maksred; $j++) 
                { 
                    $matrica[$j][$minstup] = $ispis++;
                }
                    $minstup++;
                    if ($ispis > $redci*$stupci) break;
                for ($i=$minstup; $i <= $maksstup; $i++) 
                { 
                    $matrica[$maksred][$i] = $ispis++;
                }
                    $maksred--;   
                    if ($ispis > $redci*$stupci) break;
            }

?>
<table class="tab">
<?php 
        for($i=0;$i<$redci;)
        {
          echo '<tr>';
            for ($j=0; $j < $stupci;) 
            { 
              echo '<td>'. $matrica[$i][$j] .'</td>';
              $j++;
            }
            echo '</tr>';
            $i++;
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
