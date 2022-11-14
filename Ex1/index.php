<?php
    $files = 11;
    $columnes = 11;
    echo "<table style='border: solid 1px'>";
    for($i=0; $i<$files; $i++){
        echo "<tr>";
        for($j=0; $j<$columnes; $j++){
            if($i==0 && $j>=1){
                $casella = $j;
            }
            else if ($i>=1 && $j==0){
                $casella = chr(65+$i-1);
            }
            else{
                $casella = "";
            }
            echo "<td style='border: solid 1px; width: 20px; text-align: center;'>$casella</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
