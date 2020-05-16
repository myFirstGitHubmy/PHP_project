<?php

function table($row, $col){
    echo "<table>";
    echo "<tbody>";
    for ($i = 0; $i < $row; $i++){
        echo "<tr>";
        for ($j = 0; $j < $col; $j++){
            echo "<td style='border: black solid 1px'>$i$j</td>";
        }
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}

table(50,50);