<?php
include 'classes\Pipeline.php';
$multiplyBy3 = function($var) {
    return $var * 3;
};

$add1 = function($var) {
    return $var + 1;
};

$divideBy2 = function($var) {
    return $var / 2;
};

$pip = new Pipeline();
$pipeline = $pip->make($multiplyBy3, $add1, $divideBy2);
$result = $pipeline(3);
echo $result;