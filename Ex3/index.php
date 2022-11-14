<?php
    $fragata = [[2,2]];
    $submari = [[6,6],[6,7]];
    $destructor = [[4,3],[5,3],[6,3]];
    $portavions = [[8,6],[8,7],[8,8],[8,9]];
    $files = 11;
    $columnes = 11;
    echo "<table style='border: solid 1px'>";
    for($i=0; $i<$files; $i++){
        echo "<tr>";
        for($j=0; $j<$columnes; $j++){
            $flag=true;
            for($l = 0; $l < count($fragata); $l++){
                if ($fragata[$l][0] == $i && $fragata[$l][1] == $j){
                    $flag = false;
                    $casella = "F";
                    continue;
                }
            }
            for($k = 0; $k < count($submari); $k++){
                if ($submari[$k][0] == $i && $submari[$k][1] == $j){
                    $flag = false;
                    $casella = "S";
                    continue;
                }
            }
            for($m = 0; $m < count($destructor); $m++){
                if ($destructor[$m][0] == $i && $destructor[$m][1] == $j){
                    $flag = false;
                    $casella = "D";
                    continue;
                }
            }
            for($n = 0; $n < count($portavions); $n++){
                if ($portavions[$n][0] == $i && $portavions[$n][1] == $j){
                    $flag = false;
                    $casella = "P";
                    continue;
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