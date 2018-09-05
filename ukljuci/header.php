<?php
$naslov = $naslov ? $naslov : "Ultramedika | specijalistička ordinacija";
$trenutna_strana = $_SERVER["REQUEST_URI"];
$trenutna_strana = preg_replace('/\.php$/', '', $trenutna_strana);
$trenutna_strana = str_replace("/", "", $trenutna_strana);
?>
<!doctype html>
<html lang="sr">
<head>
  <meta charset="UTF-8">
  <title><?php echo $naslov; ?></title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/dizajn.css">
</head>
<body>

  <header>
    <div class="logo-drzac ne-selektuj">
      <h1 class="logo"><a href="index.php"><span class="ultra">ultra</span><span class="medika">medika</span></a></h1>
      <div class="podlogo-gore">specijalistička ordinacija</div>
    </div>

    <nav class="meni">
      <a class="meni-pojedinacno <?php if ($trenutna_strana == "index" or $trenutna_strana == "") {
    echo "trenutna_strana";}?>" href="index.php">Naslovna</a>
      <a class="meni-pojedinacno <?php if ($trenutna_strana == "ordinacija") {
    echo "trenutna_strana";}?>" href="ordinacija.php">O ordinaciji</a>
      <a class="meni-pojedinacno <?php if ($trenutna_strana == "oprema") {
    echo "trenutna_strana";}?>" href="oprema.php">Oprema</a>
      <a class="meni-pojedinacno <?php if ($trenutna_strana == "pregledi") {
    echo "trenutna_strana";}?>" href="pregledi.php">Ultrazvučni pregledi</a>
      <a class="meni-pojedinacno <?php if ($trenutna_strana == "radovi") {
    echo "trenutna_strana";}?>" href="radovi.php">Stručni radovi</a>
      <a class="meni-pojedinacno <?php if ($trenutna_strana == "galerija") {
    echo "trenutna_strana";}?>" href="galerija.php">Galerija</a>
      <a class="meni-pojedinacno <?php if ($trenutna_strana == "kontakt") {
    echo "trenutna_strana";}?>" href="kontakt.php">Kontakt</a>
    </nav>
  </header>

  <div class="glavnina">
