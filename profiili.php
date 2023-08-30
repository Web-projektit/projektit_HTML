<!DOCTYPE html>
<html lang="fi-FI">
<head>
<?php include "header.php"; ?>
<title>Profiilisivu</title>
  <style>
    
    header {
      background-color: #50b3a2;
      color: white;
      text-align: center;
      padding: 1em;
    }

    .container {
      margin: 20px;
      padding: 20px;
      background-color: #fff;
    }

    .profile-image {
      max-width: 150px;
      margin: 20px 0;
    }

    .info-section {
      margin: 20px 0;
    }

    .info-title {
      font-weight: bold;
    }

    .hobbies-list {
      list-style: none;
      padding: 0;
    }

    .hobbies-list li {
      background-color: #e2e2e2;
      margin: 5px 0;
      padding: 10px;
    }
  </style>
</head>
<body>
  <?php include "navbar.php"; ?>      
  <div class="container">

    <!-- Kuva ja perustiedot -->
    <img src="https://cdn.pixabay.com/photo/2019/07/02/03/10/highland-cattle-4311375_1280.jpg" alt="Profiilikuva" class="profile-image">
    <div class="info-section">
      <div class="info-title">Nimi:</div>
      <div>Matti Meikäläinen</div>
    </div>
    <div class="info-section">
      <div class="info-title">Ammatti:</div>
      <div>Ohjelmistokehittäjä</div>
    </div>

    <!-- Yhteystiedot -->
    <div class="info-section">
      <div class="info-title">Yhteystiedot:</div>
      <div>Email: matti.meikäläinen@example.com</div>
      <div>Puhelin: 040-1234567</div>
    </div>

    <!-- Harrastukset -->
    <div class="info-section">
      <div class="info-title">Harrastukset:</div>
      <ul class="hobbies-list">
        <li>Koodaus</li>
        <li>Valokuvaus</li>
        <li>Matkustelu</li>
        <li>Lukeminen</li>
      </ul>
    </div>

</div>
<?php include "footer.html"; ?>
</body>
</html>
