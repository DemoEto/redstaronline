<?php
    function addNumber($num1, $num2) {
        $total = $num1+$num2;
        return "$total <br>";
    }
    function subtractNumber($num1, $num2) {
        $total = $num1-$num2;
        return "$total <br>";
    }
    function multiplyNumber($num1, $num2) {
        $total = $num1*$num2;
        return "$total <br>";
    }
    function divideNumber($num1, $num2) {
        $total = $num1/$num2;
        return "$total <br>";
    }

    echo addNumber(2,2);
    echo subtractNumber(2,2);
    echo multiplyNumber(2,2);
    echo divideNumber(2,2);
?>