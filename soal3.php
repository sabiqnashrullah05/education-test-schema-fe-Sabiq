<?php
echo "Output 1";
echo "<br>";
$star = 10;
for ($a = $star; $a > 0; $a--) {
    for ($b = $star; $b >= $a; $b--) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
echo "Output 2";
echo "<br>";
$star = 10;
for ($a = $star; $a > 0; $a--) {
    for ($i = 1; $i <= $a; $i++) {
        echo " &nbsp";
    }
    for ($a1 = $star; $a1 >= $a; $a1--) {
        echo "*";
    }
    echo "<br>";
}
