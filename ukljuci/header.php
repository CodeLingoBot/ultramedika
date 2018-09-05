<?php 
	$naslov = $naslov ? $naslov : "Ultramedika | specijalistička ordinacija";	
?>
<!doctype html>
<html lang="sr">
<head>
	<meta charset="UTF-8">
	<title><?php echo $naslov; ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/dizajn.css">
	
	<?php
	$trenutna_strana = $_SERVER["REQUEST_URI"];
	$trenutna_strana = preg_replace('/\.php$/', '', $trenutna_strana);
	$trenutna_strana = str_replace("/", "", $trenutna_strana);
	?>
	
</head>
<body>
	
	<header>
	
		<div class="logo-drzac ne-selektuj">
			
			<h1 class="logo"><span class="ultra">ultra</span><span class="medika">medika</span></h1>	
			<div class="podlogo-gore">specijalistička ordinacija</div>
			
		</div>

		<div class="meni">
		
			<div class="meni-pojedinacno <?php if($trenutna_strana=="index" or $trenutna_strana=="") echo "trenutna_strana"; ?>"><a href="index.php">Home</a></div>
			<div class="meni-pojedinacno <?php if($trenutna_strana=="ordinacija") echo "trenutna_strana"; ?>"><a href="ordinacija.php">Ordinacija</a></div>
            <div class="meni-pojedinacno <?php if($trenutna_strana=="oprema") echo "trenutna_strana"; ?>"><a href="oprema.php">Oprema</a></div>
			<div class="meni-pojedinacno <?php if($trenutna_strana=="pregledi") echo "trenutna_strana"; ?>"><a href="pregledi.php">Ultrazvučni pregledi</a></div>
			<div class="meni-pojedinacno <?php if($trenutna_strana=="radovi") echo "trenutna_strana"; ?>"><a href="radovi.php">Stručni radovi</a></div>
			
            <div class="meni-pojedinacno <?php if($trenutna_strana=="galerija") echo "trenutna_strana"; ?>"><a href="galerija.php">Galerija</a></div> 
            <div class="meni-pojedinacno <?php if($trenutna_strana=="kontakt") echo "trenutna_strana"; ?>"><a href=           
            "kontakt.php">Kontakt</a></div>

			<span></span>
			
		</div>
	
	</header>
	
	<div class="glavnina">
