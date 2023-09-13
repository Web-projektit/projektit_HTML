<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="lataus.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
<link rel="stylesheet" href="site.css">
<?php if (isset($css)) echo "<link rel='stylesheet' href='$css'>"; ?>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script defer src="scripts.js"></script>
<title><?= $title ?? 'Sivusto'; ?></title>
</head>
<body>
<?php 
ini_set('default_charset', 'utf-8');
error_reporting(E_ALL);
include "debuggeri.php";
register_shutdown_function('debuggeri_shutdown');
$active = basename($_SERVER['PHP_SELF'], ".php");
?>
<nav>
<a class="brand-logo" href="index.php">
<img src="omniamusta_tausta.png" alt="Logo"></a>
<input type="checkbox" id="toggle-btn">
<label for="toggle-btn" class="icon open"><i class="fa fa-bars"></i></label>
<label for="toggle-btn" class="icon close"><i class="fa fa-times"></i></label>
<a class="<?= ($active == 'kuvagalleria') ? 'active':''; ?>" href="kuvagalleria.php">Kuvagalleria</a>
<a class="<?= ($active == 'profiili') ? 'active':''; ?>" href="profiili.php">Profiili</a>
<a class="<?= ($active == 'rekisteroitymislomake') ? 'active':''; ?>" href="rekisteroitymislomake.php">Rekisteröityminen</a>
<a class="<?= ($active == 'verkkosivu') ? 'active':''; ?>" href="verkkosivu.php">Verkkosivu</a>
<a class="<?= ($active == 'vieritys') ? 'active':''; ?>" href="vieritys.php">Vieritys</a>
<a class="<?= ($active == 'PHP-tehtavia') ? 'active':''; ?>" href="PHP-tehtavia.php">PHP-tehtavat</a>
<a class="<?= ($active == 'autot') ? 'active':''; ?>" href="autot.php">Autot</a>
<a class="<?= ($active == 'sakila') ? 'active':''; ?>" href="sakila.php">Sakila</a>
<a class="<?= ($active == 'phpinfo') ? 'active':''; ?>" href="phpinfo.php">phpinfo</a>
</nav>
