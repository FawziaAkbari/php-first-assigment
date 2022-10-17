</<?php 
// Function multiple
function multi($a) {
    $result = "";
    for($i = 1; $i <= 10; $i++){

        $result = 
            "<div class='numbers'><p>$i". " x " . "$a" . " = " . $a * $i . "</p></div>";

            echo $result;
    }
    
    return $result;
}

multi(4);

//  Function Sum

function sum($x, $y) {
    $sum = "<h4 class='number'>$x". " + " . "$y" . " = " . $x + $y . "</h4>";
    return $sum;
}

echo sum(10,20 );


// Function devision
function devided($x, $y) {
    $sum = "<h4 class='number'>$x". " / " . "$y" . " = " . $x / $y . "</h4>";
    return $sum;
}

echo devided(4,2);

// Function negative

function negate($x, $y) {
    $sum = "<h4 class='number'>$x". " - " . "$y" . " = " . $x - $y . "</h4>";
    return $sum;
}

echo negate(4,2);


?>

<html>
    <head>
        <style>
            /* .numbers {
                text-align: center;
                font-weight: bolder;
                font-size: 30px;
            } */
        </style>
    </head>
</html>
