<?php
    function factorial($n) {
        $result = 1;
        for ($i=$n; $i >= 1; $i--) {
            $result*=$i;
        }
        return $result;
    };

    // For Display Purposes
    echo "<pre>";
    echo "        function factorial(\$n) {
            \$result = 1;
            for (\$i=\$n; \$i >= 1; \$i--) {
                \$result*=\$i;
        }
        return \$result;
    };\n";

    echo "\nFinal Output:\n\n";
    echo "echo factorial(6) = ";
    echo factorial(6);
