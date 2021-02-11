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
for ($i = 1; $i < $randomLength; $i++) {
    if ($i % 77 === 0) {
        $lastNumber = $i;
        array_push($array, $lastNumber . ', ');
    }
}
array_splice($array, count($array) - 1);
foreach ($array as $value) {
    echo $value;
}
echo $lastNumber;
?>

<h2>ND nr.4</h2>

<?php

echo 'Kvadratas 25x25';
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

echo 'Kvadratas 25x25 su raudonom įstrižainėm';
echo '<br><br>';
$length = 25;
for ($i = 0; $i < $length; $i++) {
    for ($j = 0; $j < $length; $j++) {
        if ($j === $i) {
            echo "<span style='display: inline-block; height: 5px; width: 5px; color: red;'>*</span>";
        } else if ($j === ($length - 1 - $i)) {
            echo "<span style='display: inline-block; height: 5px; width: 5px; color: red;'>*</span>";
        } else {
            echo "<span style='display: inline-block; height: 5px; width: 5px;'>*</span>";
        }
    }
    echo '<br>';
}
?>

<h2>ND nr.6</h2>

<?php

echo 'Monetos metimą stabdome iškritus herbui:';
echo '<br>';
do {
    $metimas = rand(0, 1);
    ($metimas === 0) ? print 'H' : print 'S';
    if ($metimas === 0) {
        break;
    }
} while (true);
echo '<br>';
echo 'Monetos metimą stabdome iškritus skaičiui:';
echo '<br>';
do {
    $metimas = rand(0, 1);
    ($metimas === 0) ? print 'H' : print 'S';
    if ($metimas === 1) {
        break;
    }
} while (true);
echo '<br>';
echo 'Monetos metimą stabdome 3 kartus iškritus herbui:';
echo '<br>';
$count = 0;
do {
    $metimas = rand(0, 1);
    ($metimas === 0) ? print 'H' : print 'S';
    if ($metimas === 0) {
        $count++;
    }
    if ($count === 3) {
        break;
    }
} while (true);
echo '<br>';
echo 'Monetos metimą stabdome 3 kartus iš eilės iškritus herbui:';
echo '<br>';
$count = 0;
do {
    $metimas = rand(0, 1);
    ($metimas === 0) ? print 'H' : print 'S';
    if ($metimas === 0) {
        $count++;
    } else {
        $count = 0;
    }
    if ($count === 3) {
        break;
    }
} while (true);
?>

<h2>ND nr.7</h2>

<?php

$petroCount = 0;
$kazioCount = 0;
do {
$petroTaskai = rand(10, 20);
$kazioTaskai = rand(5, 25);
if ($petroTaskai > $kazioTaskai) {
    $laimetojas = 'Petras';
} else if ($petroTaskai < $kazioTaskai) {
    $laimetojas = 'Kazys';
} else {
    $laimetojas = 'Kazys ir Petras surinko po lygiai taškų';
}
echo "Petras taškai: $petroTaskai, Kazio taškai: $kazioTaskai. Partiją laimėjo: ​$laimetojas.";
$petroCount += $petroTaskai;
$kazioCount += $kazioTaskai;
echo '<br>';
} while ($petroCount < 222 || $kazioCount < 222);
$zaidimoLaimetojas = ($petroCount > $kazioCount) ? "Petras surinkęs $petroCount" : "Kazys surinkęs $kazioCount";
echo '<br>';
echo "Žaidimą laimėjo ​$zaidimoLaimetojas.";
?>

<h2>ND nr.8</h2>

<?php



