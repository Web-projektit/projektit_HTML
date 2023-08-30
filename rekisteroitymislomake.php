<!DOCTYPE html>
<html>
<head>
<?php include "header.php"; ?>
<title>Nettikaupan rekisteröitymislomake</title>
</head>
<body>
  <?php include "navbar.php"; ?>      
  <div class="container">
  <h1>Nettikaupan rekisteröitymislomake</h1>

  <form method="post">
    
    <!-- Yhteystiedot -->
    <fieldset>
      <legend>Yhteystiedot</legend>
      <label for="name">Nimi:</label>
      <input type="text" id="name" name="name" placeholder="Etunimi Sukunimi" minlength="2" required value=""><br><br>

      <label for="address">Katuosoite:</label>
      <input type="text" id="address" name="address"><br><br>

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
    <label>Mistä osastoista olet kiinnostunut?</label><br>
    <input type="checkbox" id="fashion" name="interest" value="Muoti">
    <label for="fashion">Muoti</label><br>
    
    <input type="checkbox" id="sports" name="interest" value="Urheilu">
    <label for="sports">Urheilu</label><br>

    <input type="checkbox" id="decor" name="interest" value="Sisustaminen">
    <label for="decor">Sisustaminen</label><br>

    <input type="checkbox" id="games" name="interest" value="Pelit">
    <label for="games">Pelit</label><br>

    <input type="checkbox" id="movies" name="interest" value="Elokuvat">
    <label for="movies">Elokuvat</label><br><br>

    <!-- Maksutapa -->
    <label for="payment">Maksutapa:</label>
    <select id="payment" name="payment">
      <option value="sampo">Sampo</option>
      <option value="nordea">Nordea</option>
      <option value="osuuspankki">Osuuspankki</option>
      <option value="aktia">Aktia</option>
    </select><br><br>

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
    <input type="submit" value="Lähetä">
  </form>
</div>
<?php include "footer.html"; ?>
</body>
</html>
