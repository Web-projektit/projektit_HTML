<?php
$title = 'PHP-tehtavia';
//$css = 'kuvagalleria.css';
include "header.php"; 
?>
<div class="container">
<h1>PHP-tehtavia moodle.omnia.fi.php</h1>
<hr>
<ul>
<?php
$kielet = ["PHP", "Java", "Perl", "Javascript"];
foreach ($kielet as $kieli) {
    echo "<li>$kieli</li>";
    }          
?>
</ul>
<hr>
<?php
    $luku1 = 1;
    $luku2 = 0; // Muuta tätä arvoa testataksesi eri skenaarioita

    // Summa
    $summa = $luku1 + $luku2;
    echo "$luku1 + $luku2 = $summa<br>";

    // Erotus
    $erotus = $luku1 - $luku2;
    echo "$luku1 - $luku2 = $erotus<br>";

    // Tulo
    $tulo = $luku1 * $luku2;
    echo "$luku1 * $luku2 = $tulo<br>";

    // Osamäärä try-catch rakenteella
    try {
        if ($luku2 == 0) {
            throw new Exception("Ei määritelty (jaettu nollalla)");
        }
        $osamaara = $luku1 / $luku2;
        echo "$luku1 / $luku2 = $osamaara<br>";
    } catch (Exception $e) {
        echo "$luku1 / $luku2 = " . $e->getMessage() . "<br>";
    }

    // Jäännös
    try {
        if ($luku2 == 0) {
            throw new Exception("Ei määritelty (jaettu nollalla)");
        }
        $jaannos = $luku1 % $luku2;
        echo "$luku1 % $luku2 = $jaannos<br>";
    } catch (Exception $e) {
        echo "$luku1 % $luku2 = " . $e->getMessage() . "<br>";
    }
?>
<hr>
<?php
    $luku = random_int(1, 10);
    echo "Arvottu luku on: $luku<br>";

    if ($luku <= 5) {
        echo "Pieni!";
    } else {
        echo "Suuri!";
    }
?>
<hr>
<?php
    $string = "";
    for ($i = 1; $i <= 10; $i++) {
        $string .= "$i-";
        }
    echo substr($string, 0, -1);
?>

<hr>

<?php
function potenssi($kantaluku, $eksponentti){
    $tulos = 1;
    for ($i = 1; $i <= $eksponentti; $i++) {
        $tulos *= $kantaluku;
        }
    return $tulos;
}

$kantaluku = 2;
$eksponentti = 3;
$n = 1000000;

$time = microtime(true);

for ($i = 0; $i < $n; $i++) {
    $potenssi = potenssi($kantaluku, $eksponentti);
    }
//$potenssi = potenssi($kantaluku, $eksponentti); 
$time = microtime(true) - $time;

echo "$kantaluku ^ $eksponentti = $potenssi, suoritusaika: $time<br>";

function pot($kantaluku, $eksponentti){
return $kantaluku ** $eksponentti;
}

$time = microtime(true);
for ($i = 0; $i < $n; $i++) {
    //$luku = random_int(1, 10);
    $potenssi = pot($kantaluku, $eksponentti);
    }
//$potenssi = pot($kantaluku, $eksponentti);
$time = microtime(true) - $time;

echo "$kantaluku ^ $eksponentti = $potenssi, suoritusaika: $time<br>";  

?>
</div>
<?php include "footer.html"; ?>
