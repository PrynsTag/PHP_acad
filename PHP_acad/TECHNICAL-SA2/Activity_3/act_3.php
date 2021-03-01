<?php
    function cube($value)
    {
        return $value ** 3;
    }

    function prism($a, $b, $c)
    {
        return $a * $b * $c;
    }

    function cylinder($r, $h)
    {
        return pi() * ($r ** 2) * $h;
    }

    function pyramid($b, $h)
    {
        return (1/3) * $b * $h;
    }

    function sphere($r)
    {
        return (4/3) * M_PI * ($r ** 3);
    }

    $myFormula = array(
        array("a = 5", "a<sup>3</sup>", cube(5)),
        array("a = 5, b = 2, c = 3", "a * b * c", prism(5, 2, 3)),
        array("r = 5, h = 2", "pi r<sup>2</sup> h", cylinder(5, 2)),
        array("b = 5, h = 4", "(1/3) b h", pyramid(5, 4)),
        array("r = 5", "(4/3) pi r<sup>3</sup>", sphere(5)),
    );
