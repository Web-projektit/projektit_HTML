<?php 
$title = 'Sakila';
//$css = 'kuvagalleria.css';
$tietokanta = 'sakila';
include "header.php"; 
include "db.php";
if (isset($_GET['button'])) {
    $title = $_GET['title'];
    $title = $yhteys->real_escape_string(strip_tags($title));
    $query = "SELECT * FROM film WHERE title LIKE '$title%'";
    $tulokset = $yhteys->query($query);
    /*if ($tulokset->num_rows > 0) {
        while($rivi = $tulokset->fetch_assoc()) {
            echo "Elokuvan nimi: $rivi[title], julkaisuvuosi: $rivi[release_year], $rivi[rating], kuvaus: $rivi[description]<br>";
            }
        } 
    else {
        echo "Ei tuloksia";
        }
    }*/
?>
<div class="container"> 
<fieldset>
<legend>Elokuvan haku</legend>
<form action="sakila.php" method="get" class="mb-3 needs-validation" novalidate>
<input type="text" name="title" id="title" class="form-control" placeholder="Elokuvan nimi" required>
<div class="invalid-feedback">
Kirjoita hakukenttään elokuvan nimi tai sen alkosa.
</div>
</fieldset>
<div class="col-12">
<button type="submit" name="button" value="haku" class="btn btn-primary">Hae elokuva</button>
</div>
</form>
<?php
/* Hakutulokset */
?>

</div>
<?php include "footer.html"; ?>