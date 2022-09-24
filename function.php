<?php
function myCalculator($num01, $operation, $num02){
    $sum = 0;
    switch ($operation){
        case "add":
            $sum = $num01 + $num02;
            break;
        case "sub";
            $sum = $num01 - $num02;
            break;
        case "mul";
            $sum = $num01 * $num02;
            break;
        case "div";
           $sum = $num01 / $num02;
            break;
        default:
            $sum = "There was an error!";
    }
    return $sum;
}
    $num01 = $_GET["num01"];
    $operation = $_GET["operation"];
    $num02 = $_GET["num02"];

    echo "Value:" . myCalculator($num01, $operation, $num02);
?>