<?php

$tomb = array("", "treffnegy", "korharom", "pikkketto", "karoasz", "treffot", "kornegy", "pikkharom",
            "karoketto", "treffhat", "korot", "pikknegy", "karoharom", "treffhet", "korhat", "pikkot", "karonegy", "treffnyolc", "korhet",
            "pikkhat", "karoot", "treffkilenc", "kornyolc", "pikkhet", "karohat", "trefftiz",
            "korkilenc", "pikknyolc", "karohet", "treffbubi", "kortiz", "pikkkilenc", "karonyolc",
            "treffdama", "korbubi", "pikktiz", "karokilenc", "treffkiraly", "kordama", "pikkbubi", "karotiz",
            "treffasz", "korkiraly", "pikkdama", "karobubi", "treffketto", "korasz", "pikkkiraly",
            "karodama", "treffharom", "korketto", "pikkasz", "karokiraly");
	

	error_reporting(0);

	foreach($tomb as $key => $value) {
		
		echo "<br>";
		echo $value." ".$i++;
		
	}

	

echo "<p style='color:red'><script>console.log('$value')</script></p>";


?>
<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet">
<head>
	<title></title>
	<style>
		body{
			font-family: 'Noto Sans KR', sans-serif;
		}
	</style>
</head>
<body>
<?php
echo '<table>';
for ($s = 1; $s <= 10; $s++) {
    echo '<tr>';
    for ($o = 1; $o <= 7; $o++) {
        echo "<td>$s. Sor $o. Oszlop</td>";
    }
    echo '</tr>';
}
echo '</table>';
//Tömbök
$tomb = array(); //Üres tömb deklarálása
var_dump($tomb);
echo '<br/>';
$tomb = array(15, TRUE, "Hello", 6/7, rand(1, 10)); //Tömb létrehozása automatikus indexre/kulcsra
var_dump($tomb);
echo '<br/>';
$tomb[] = "Valami"; //Tömb bővítése 1 elemmel automatikus indexre
var_dump($tomb);
echo '<br/>';
$tomb[100] = 'ez a 100. kulcs'; //Tömb bővítése 1 elemmel irányított kulcsra
var_dump($tomb);
echo '<br/>';
$tomb[] = 'új elem!';
var_dump($tomb);
echo '<br/>';

$tomb[400] = 1;
unset($tomb[400]); //Tömb egy adott elemének a törlése
$tomb[] = 'új elem!';
var_dump($tomb);
echo '<br/>';
echo '<br/>';

$tomb2 = []; //ugyanaz mint az array()
//A tömb bővítése asszociatív kulcsra
$tomb2['teljesNev'] = "Fehér Róbert";
$tomb2['jelenlegiDatum'] = Date('Y-m-d H:i:s');
var_dump($tomb2);
echo '<br>';
//Tömb műveletek
$egyesitett = array_merge($tomb, $tomb2);
var_dump($egyesitett);
echo '<br/>';

echo '<br>A tömb értékeinek a maximuma: '. max($egyesitett);
echo '<br>A tömb értékeinek a minimum: '. min($egyesitett);
echo '<br>A tömb elemszáma: '. count($egyesitett);
echo '<hr/>';
/*
    Készítsünk egy 30 elemű tömböt feltöltve 1-100ig véletlen számokkal
    - Irassuk ki a minimumot
    - Irassuk ki a maximumot
    - Adjuk össze a tömb értékeit
 */

$tomb = [];
while (count($tomb) < 30 ) {
    $tomb[] = rand(1, 100);
}

echo '<br>A tömb értékeinek a maximuma: '. max($tomb);
echo '<br>A tömb értékeinek a minimuma: '. min($tomb);
echo '<br>A tömb értékeinek az összege: '. array_sum($tomb);
echo '<br>A tömb értékeinek az átlaga: ' . array_sum($tomb) / count($tomb);

$egyedi = array_unique($tomb);
var_dump($egyedi);

echo '<br/>Az eredeti tömböm: '. implode("-", $tomb);
echo '<br/>Az egyedi tömböm: '. implode("-", $egyedi);
?>
</body>
<script>
	
	
</script>
</html>