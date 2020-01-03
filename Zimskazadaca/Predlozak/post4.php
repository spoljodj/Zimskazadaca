<?php
 echo '<form action="" method="POST">';
for($i=0;$i<16;$i++){
    echo' <label for="broj">Upišite '. ($i+1) . '. broj prve matrice:</label>
    <input type="number" name="$A[]" id="0">';
    }
    for($j=0;$j<16;$j++){
        echo' <label for="broj">Upišite '. ($j+1) . '. broj druge matrice:</label>
        <input type="number" name="B[]" id="0">';
        }
   echo '<input type="submit" value="Postavi" >';
?>