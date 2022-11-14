<?php
    $submari = [[6,6],[6,7]];
    $files = 11;
    $columnes = 11;
    echo "<table style='border: solid 1px'>";
    for($i=0; $i<$files; $i++){
        echo "<tr>";
        for($j=0; $j<$columnes; $j++){
            $flag=true;
            for($k = 0; $k < count($submari); $k++){
                if ($submari[$k][0] == $i && $submari[$k][1] == $j){
                    $flag = false;
                    $casella = "S";
                }
            }
            if($i==0 && $j>=1){
                $casella = $j;
            }
            else if ($i>=1 && $j==0){
                $casella = chr(65+$i-1);
            }
            else if($flag){
                $casella = "";
            }
            echo "<td style='border: solid 1px; width: 20px; text-align: center;'>$casella</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>