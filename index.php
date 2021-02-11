<h2>ND nr.1</h2>

<?php
echo 'a) 400 žvaigždučių telpa ekrane:';
echo '<br>';
echo '<br>';
$numberOfStars = 400;
for ($i = 0; $i < $numberOfStars; $i++) {
    echo "<div style='display: inline-block; float: left;'>*</div>";
}
echo '<br><br><br>';
echo 'b) Po 50 žvaigždučių eilutėje:';
echo '<br><br>';
$numberOfStarsInOneLine = 50;
for ($i = 0; $i < $numberOfStars / $numberOfStarsInOneLine; $i++) {
    for ($j = 0; $j < $numberOfStarsInOneLine; $j++) {
        echo "<div style='display: inline-block; float: left;'>*</div>";
    }
    echo '<br>';
}
?>

<h2>ND nr.2</h2>

<?php
$count = 0;
for ($i = 0; $i < 300; $i++) {
    $number = rand(0, 300);
    ($number > 150) ? $count++ : '';
    ($number <= 275) ? print "<div style='display: inline-block; float: left; width: 45px;'>$number</div>" : print "<div style='display: inline-block; float: left; width: 45px; color: red;'>$number</div>";
}
echo '<br><br><br><br><br><br><br><br><br><br><br><br>';
echo 'Didesnių už "150" skaičių yra: ' . $count;
?>

<h2>ND nr.3</h2>

<?php

$randomLength = rand(3000, 4000);
$array = [];
for ($i=1; $i < $randomLength; $i++) { 
    if ($i % 77 === 0) {
        $lastNumber = $i;
        array_push($array, $lastNumber . ', ');
    }
}
array_splice($array, count($array)-1);
foreach ($array as $value) {
    echo $value;
}
echo $lastNumber;
?>

<h2>ND nr.4</h2>

<?php

echo 'Kvadratas';
echo '<br><br>';
$length = 25;
for ($i = 0; $i < $length; $i++) {
    for ($j = 0; $j < $length; $j++) {
        echo "<span style='display: inline-block; height: 5px; width: 5px;'>*</span>";                
    }
    echo '<br>';
}
?>

<h2>ND nr.5</h2>

<?php





