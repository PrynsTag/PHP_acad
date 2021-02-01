<?php
    function multTable($n) {
        echo "<table border=\"1\">";
        $count = 0;
        for ($x=0; $x <= $n; $x++) {
            echo "<tr>";

            for ($y=0; $y <= $n; $y++) {
                if ($count%2 == 0 && $x%2 == 0) {
                    echo "<td bgcolor=yellow>".$x*$y."</td>";
                }
                else if ($count%2 == 1) {
                    echo "<td bgcolor=red>".$x*$y."</td>";
                }
                else {
                    echo "<td bgcolor=yellow>".$x*$y."</td>";
                }
                $count+=1;
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    multTable(10)
 ?>
