
<?php
$teks = "1 1 1 2 2 4 1 1 2 1 2 2 2 8 1 1 3 3 3 3 2 4 1 1 ";
$kata   = explode(" ", $teks);
$hasil  = count($kata);
$data   = array_count_values($kata);
echo "<b>Angka</b> <br> $teks";
echo "<hr>";
echo "Jumlah Total Semua Angka: $hasil buah angka <br/>";
echo "Total data yang paling banyak dengan jumlah 10 angka adalah angka 1 ";

echo "<hr>";

foreach ($data as $x => $x_value) {
    echo $x . " : " . $x_value;
    echo "<br>";
}
echo "<hr>";
?>