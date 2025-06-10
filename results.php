<?php

$counter = 0;
$number = "";
$minNumb = $_POST['minNumb'];
$maxNumb = $_POST['maxNumb'];

while ($counter <= $maxNumb) {
    if ($counter >= $minNumb) {
        $number .= $counter . "<br>";
    }
    $counter++;
}
// Display the result
echo $number;
?>