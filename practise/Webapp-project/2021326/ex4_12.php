<?php
    while($i <= 10){
      if ( $i == 5) {
        echo "略過 \$i = $i 
";
        continue;
      }
      echo $i."
";
    }
?>