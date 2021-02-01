<?php
    function fibo($n) {
        $temp = [0, 1];
        for ($i=1; $i < $n; $i++) {
            $temp[] = $temp[$i]+$temp[$i-1];
        }
        return $temp;
    }

    // For Display Purposes
    echo "<pre>";
    echo "    foreach(fibo(20) as \$value) {
        echo \$value.\"\\t\";
    }\n";

    echo "\nFinal Output:\n\n";
    foreach(fibo(20) as $value) {
        echo $value."\t";
    }
 ?>
