<?php 
$title = 'Sakila';
$css = 'sakila.css';
$tietokanta = 'sakila';
include "header.php"; 
include "db.php";

$hakuavain = "";
if (isset($_GET['button'])) {
    /* Sivutus */
    $QUERY_STRING = $_SERVER['QUERY_STRING'];
    $sivuosa = strpos($QUERY_STRING, "&page=");
    if ($sivuosa !== false) {
        $hakuparametrit = substr($QUERY_STRING,0,$sivuosa);
        }
    else
        $hakuparametrit = $QUERY_STRING;
    debuggeri("hakuparametrit: $hakuparametrit");    
    $rivilkm = 25;
    $right_disabled = "";
    $left_disabled = "";
    $sivu = isset($_GET['page']) ? $_GET['page'] : 1;
    $title = $_GET['title'];
    $hakuavain = $title;
    $title = $yhteys->real_escape_string(strip_tags($title));
    $offset = ($sivu - 1) * 25;
    $ed_sivu = ($sivu - 1) ?: 1;
    $seur_sivu = $sivu + 1;
    $query = "SELECT COUNT(*) AS rivit FROM film WHERE title LIKE '$title%'";
    $tulokset = $yhteys->query($query); 
    $rivit = $tulokset->fetch_assoc();
    $rivit = $rivit['rivit'];   
    debuggeri("$query,lkm:$rivit");
    $viim_sivu = ceil($rivit / $rivilkm);
    $viim_sivu = $viim_sivu ?: 1;   
    if ($sivu >= $viim_sivu) {
        $sivu = $viim_sivu;
        $offset = ($sivu - 1) * $rivilkm;
        $right_disabled = "a-disabled";
        }      
    if ($sivu == 1) {
        $left_disabled = "a-disabled";
        }          
    
    /* Haku */
    $query = "SELECT * FROM film WHERE title LIKE '$title%' LIMIT $offset, $rivilkm";
    debuggeri($query);
    $tulokset = $yhteys->query($query);
    /*if ($tulokset->num_rows > 0) {
        while($rivi = $tulokset->fetch_assoc()) {
            echo "Elokuvan nimi: $rivi[title], julkaisuvuosi: $rivi[release_year], $rivi[rating], kuvaus: $rivi[description]<br>";
            }
        } 
    else {
        echo "Ei tuloksia";
        }*/
    }
?>
<div class="container"> 
<fieldset>
<legend>Elokuvan haku</legend>
<form action="sakila.php" method="get" class="mb-3 needs-validation" novalidate>
<input type="search" name="title" id="title" class="form-control" 
       placeholder="Elokuvan nimi" value="<?= $hakuavain; ?>" required>
<div class="invalid-feedback">
Kirjoita hakukenttään elokuvan nimi tai sen alkosa.
</div>
</fieldset>
<div class="col-12">
<button type="submit" name="button" value="haku" class="btn btn-primary">Hae elokuva</button>
</div>
</form>


<!DOCTYPE html>
<html>
<head>
    <title>Vuosivalinta</title>
</head>
<body>

<h2>Vuosivalinta</h2>

<form action="sakila.php" method="post" class="mb-3 needs-validation" novalidate>
  <label for="year">Valitse vuosi:</label>
  <select name="year" id="year">
    <option value="">--Valitse vuosi--</option>
    <?php
    $vuosi = date("Y");
    for($i = $vuosi; $i >= 1900; $i--) {
      if ($i == $vuosi) echo "<option value='$i' selected>$i</option>";    
      else echo "<option value='$i'>$i</option>";
    }
    ?>
  </select>
  <input type="submit" value="Lähetä">
</form>

</body>
</html>


<?php
/* Hakutulokset */
if (isset($_GET['button'])) {
    if ($tulokset->num_rows > 0) {
        while($rivi = $tulokset->fetch_assoc()) {
            echo "Elokuvan nimi: $rivi[title], julkaisuvuosi: $rivi[release_year], $rivi[rating], kuvaus: $rivi[description]<br>";
            }
        } 
    else {
        echo "Ei tuloksia";
        }
  ?>
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link <?= $left_disabled; ?>" href="?<?= $hakuparametrit; ?>&page=1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link <?= $left_disabled; ?>" href="?<?= $hakuparametrit.'&page='.$ed_sivu; ?>"><span aria-hidden="true">&#8592;</span></a></li>
    <li class="page-item"><a class="page-link <?= $right_disabled; ?>" href="?<?= $hakuparametrit.'&page='.$seur_sivu; ?>"><span aria-hidden="true">&#8594;</span></a></li>
    <li class="page-item">
      <a class="page-link <?= $right_disabled; ?>" href="?<?= $hakuparametrit.'&page='.$viim_sivu; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
<?php } ?>

</div>
<?php include "footer.html"; ?>