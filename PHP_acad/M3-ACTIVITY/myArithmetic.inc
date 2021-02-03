<?php
    function myArithmetic(int ...$nums) {
        $arrayOfNum = $nums;
        $modifiedArray = array_slice($arrayOfNum, 1);

        // Sum of Array
        $sumOfArray = array_sum($arrayOfNum);

        // Sub of Array
        $subOfArray = $nums[0];
        foreach($modifiedArray as $value) {
            $subOfArray -= $value;
        }

        // Mult of Array
        $multOfArray = $nums[0];
        foreach($modifiedArray as $value) {
            $multOfArray *= $value;
        }

        // Div of Array
        $divOfArray = $nums[0];
        foreach($modifiedArray as $value) {
            $divOfArray /= $value;
        }

        return array($arrayOfNum, $sumOfArray, $subOfArray, $multOfArray, $divOfArray);
    }
 ?>
