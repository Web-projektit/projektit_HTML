<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="lataus.png">
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
<link rel="stylesheet" href="site.css">
<?php if (isset($css)) echo "<link rel='stylesheet' href='$css'>"; ?>
<script defer src="scripts.js"></script>
<title><?= $title ?? 'Sivusto'; ?></title>
</head>
<body>
<?php 
ini_set('default_charset', 'utf-8');
$active = basename($_SERVER['PHP_SELF'], ".php");
?>
<nav>
<a class="brand-logo" href="profiili.php">
<img src="omniavalkea.png" alt="Logo"></a>
<input type="checkbox" id="toggle-btn">
<label for="toggle-btn" class="icon open"><i class="fa fa-bars"></i></label>
<label for="toggle-btn" class="icon close"><i class="fa fa-times"></i></label>
<a class="<?= ($active == 'kuvagalleria') ? 'active':''; ?>" href="kuvagalleria.php">Kuvagalleria</a>
<a class="<?= ($active == 'profiili') ? 'active':''; ?>" href="profiili.php">Profiili</a>
<a class="<?= ($active == 'rekisteroitymislomake') ? 'active':''; ?>" href="rekisteroitymislomake.php">Rekisteröityminen</a>
<a class="<?= ($active == 'verkkosivu') ? 'active':''; ?>" href="verkkosivu.php">Verkkosivu</a>
<a class="<?= ($active == 'vieritys') ? 'active':''; ?>" href="vieritys.php">Vieritys</a>

</nav>
