<?php 
$title = 'Autot';
//$css = 'kuvagalleria.css';
include "header.php";
include "db.php";

$query = "SELECT * FROM auto";
$tulokset = $yhteys->query($query);
if ($tulokset->num_rows > 0) {
   while($rivi = $tulokset->fetch_assoc()) {
    echo "Rekisterinumero: $rivi[rekisterinro], merkki: $rivi[merkki], väri: $rivi[vari]<br>";
    }
  } 
else {
  echo "Ei tuloksia";
  }


$merkki = "Toyota";  
$merkki = $yhteys->real_escape_string(strip_tags($merkki));
$query = "INSERT INTO auto (rekisterinro, merkki, vari) VALUES ('CES-267', '$merkki', 'sininen')";
try {
    $yhteys->query($query); 
    if ($yhteys->affected_rows > 0){
        echo "<p class='alert alert-success'>Auto lisätty.</p>";
        }
    else {
        echo "<p class='alert alert-danger'>Autoa ei lisätty.</p>";
        }
  } 
catch (Exception $e) {
    echo "<p class='alert alert-danger'>Ohjelman suoritus päättyi virheeseen.</p>";
    debuggeri("Virhe $yhteys->errno: " . $e->getMessage());
    }
?>
<div class="container"> 

</div>
<?php include "footer.html"; ?>