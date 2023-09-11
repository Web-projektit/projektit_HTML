<?php 
$title = 'Nettikaupan rekisteröitymislomake';
include "rekisterointi.php";
include "header.php"; 
?> 
<div class="container">
<h1>Nettikaupan rekisteröitymislomake</h1>

<form method="post" class="mb-3 needs-validation" novalidate>

<!-- Yhteystiedot -->
<fieldset>
    <legend>Yhteystiedot</legend>
    <!--<label for="name">Nimi:</label>
    <input type="text" id="name" name="name" placeholder="Etunimi Sukunimi" minlength="2" required value=""><br><br>
    -->
    <div class="col-md-4">
    <label for="name" class="form-label">Nimi</label>
    <input type="text" class="form-control" name="nimi" id="name" placeholder="Etunimi Sukunimi" minlength="2" required>
    <div class="invalid-feedback">
        Kirjoita etunimi ja sukunimi, vähintään 2 merkkiä.
    </div>
    </div>

    <div class="col-md-6">
    <label for="address" class="form-label">Katuosoite</label>
    <input type="text" class="form-control <?= isset($errors['address']) ? 'is-invalid' : ''; ?>" name="katuosoite" 
           name="address" id="address" 
           placeholder="Katuosoite" minlength="2" required
           value="<?= $_POST['address'] ?? ""; ?>">
    <div class="invalid-feedback">
    <?php if (isset($errors['address'])) echo $errors['address']; 
          else echo "Kirjoita katuosoite oikein.";?>
    </div>
 
    </div>

    <label for="zip">Postinumero:</label>
    <input type="number" id="zip" name="zip" minlength="5" maxlength="5"><br><br>

    <label for="city">Postitoimipaikka:</label>
    <input type="text" id="city" name="city"><br><br>

    <label for="phone">Puhelinnumero:</label>
    <input pattern="^[\d]{7,15}$" type="text" id="phone" name="phone" placeholder="358XX1234567" maxlength="15"><br><br>

    <label for="email">Sähköpostiosoite:</label>
    <input pattern="" type="email" id="email" name="email" placeholder="etunimi.sukunimi@yritys.fi" required><br><br>
</fieldset>

<!-- Salasana -->
<fieldset>
<label for="password">Salasana:</label>
<input type="password" id="password" name="password" minlength="12" required><br><br>
</fieldset>

<!-- Kiinnostuksen kohteet -->

<div class="form-check">
  <input class="form-check-input" name="interest[]" type="checkbox" value="muoti" id="fashion">
  <label class="form-check-label" for="sports">Muoti</label>
</div>

<!--<label>Mistä osastoista olet kiinnostunut?</label><br>
<input type="checkbox" id="fashion" name="interest" value="Muoti">
<label for="fashion">Muoti</label><br>-->
<div class="form-check">
  <input class="form-check-input" name="interest[]" type="checkbox" value="urheilu" id="sports">
  <label class="form-check-label" for="sports">Urheilu</label>
</div>

<input type="checkbox" id="decor" name="interest[]" value="Sisustaminen">
<label for="decor">Sisustaminen</label><br>

<input type="checkbox" id="games" name="interest[]" value="Pelit">
<label for="games">Pelit</label><br>

<input type="checkbox" id="movies" name="interest[]" value="Elokuvat">
<label for="movies">Elokuvat</label><br><br>

<!-- Maksutapa -->
<div class="col-md-3">
<label for="payment" class="form-label">Maksutapa:</label>
<select class="form-select" id="payment" name="payment" required>
    <option value=""></option>
    <option value="sampo">Sampo</option>
    <option value="nordea">Nordea</option>
    <option value="osuuspankki">Osuuspankki</option>
    <option value="aktia">Aktia</option>
</select>
<div class="invalid-feedback">
Valitse maksutapa.
</div>
</div>

<!-- Palaute -->
<label for="feedback">Anna palautetta:</label><br>
<textarea id="feedback" name="feedback" rows="4" cols="50"></textarea><br><br>

<!-- Toimitusehdot -->
<label>Olen lukenut ja hyväksyn tuotteiden toimitusehdot:</label><br>
<input type="radio" id="yes" name="terms" value="yes" required>
<label for="yes">Kyllä</label><br>

<input type="radio" id="no" name="terms" value="no" required>
<label for="no">Ei</label><br><br>

<!-- Lähetyspainike -->
<div class="col-12">
<button id="tallenna" class="btn btn-primary" type="submit">Tallenna</button>
</div>
</form>
<!--
<div id="ilmoitukset" class="alert alert-success <?= $display ?? ""; ?>" role="alert">
<?= $message; ?>
</div>
-->

<div  id="ilmoitukset" class="alert alert-success alert-dismissible fade show <?= $display ?? ""; ?>" role="alert">
<p><?= $message; ?></p>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

</div>
<?php include "footer.html"; ?>

