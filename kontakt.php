<?php 
	$naslov = "Kontakt | Ultramedika, specijalistička ordinacija";	
	include_once("ukljuci/header.php"); 
?>

		<div class="sredisnji-deo granicnik">
			<h1>Kontakt</h1>

			<a href="slike/ordinacija4.jpg"><img src="slike/ordinacija4.jpg" class="slika-desno"></a>

			<p><span class="sivo"><strong>VLASNIK ORDINACIJE:</strong></span><br>
			Doc. Dr sci med Tihomir M. Mihailović, specijalista radiologije</p>
			
			<p><span class="sivo"><strong>ADRESA ORDINACIJE:</strong></span><br>
			ULTRAMEDIKA , SPECIJALISTIČKA RADIOLOŠKA ORDINACIJA<br>
			PANTE SREĆKOVIĆA 25; STAN BR.19, 11 000 BEOGRAD, SRBIJA</p>

			<p><span class="sivo"><strong>TELEFONI  ORDINACIJE:</strong></span><br>
			mobilni: 063 8170714<br>
			fiksni: 011 3390848</p>
			<p><span class="sivo"><strong>TELEFON PSIHOLOŠKOG SAVETOVALIŠTA:</strong></span><br />
mobilni: 069 3057770<br />
		  </p>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			
			<div id="mapa-okvir">
				<div id="mapa"></div>
			</div>
			
			<script type="text/javascript">
				function inicirajMapu() {
					var myOptions = {
						zoom: 17,
						mapTypeControl:false,
						center: new google.maps.LatLng(44.808, 20.48),
						mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					map = new google.maps.Map(document.getElementById("mapa"), myOptions);
					marker = new google.maps.Marker({
						map: map,
						title:"Ultramedika",
						position: new google.maps.LatLng(44.807495, 20.498445)
					});
					infowindow = new google.maps.InfoWindow({
						content: "<b>Ultramedika</b><br/>Pante Srećković 25/19<br/> Beograd"
					});
					google.maps.event.addListener(marker, "click", function() {
						infowindow.open(map, marker);
					});
					infowindow.open(map, marker);
				}
				google.maps.event.addDomListener(window, 'load', inicirajMapu);
			</script>

		</div>
				
		<div class="sredisnji-deo granicnik">
			<p><span class="sivo"><strong>SAVETI:</strong></span><p>
			
			<img src="slike/dr-tika.jpg" class="slika-desno">
			
			<p>Pregled  bi trebalo zakazati nakon konsultacije sa ordinacijom da bi se donela ispravna  odluka  koju vrstu pregleda treba uraditi (<span class="sivo">U ORDINACIJI SE RADI PREKO 30 RAZLIČITIH ULTRAZVUČNIH PREGLEDA</span>) </p>
			
			<p>Pri zakaziavanju se morate imformisati , koliko pregled traje (<span class="sivo">NEKI PREGLEDI KAO ŠTO JE TRUDNOĆA TRAJU PO 30-60MIN</span>) i na koji način se izvodi, sa preporukama o eventualnoj pripremi pre ultrazvučnog pregleda. </p>
			
			<p>Zakaziavnjem vašeg termina ordinacija  poštuje, pri čemu u vašem terminu neće biti zakazani drugi pacijenti (<span class="sivo">POŠTUJE SE VAŠA PRIVATNOST</span>)</p>
			
			<p>Potrebno je upoznati se sa cenom pregleda pre nego što se odlučite da zakažete pregled. (<span class="sivo">CENU PREGLEDA ODREDJUJE SLOŽENOST, DUŽINA PREGLEDA KAO I OBIM UPOTREBE ULTRAZVUČNE MAŠINE</span>)</p>
			
			<p>Ordinacija očekuje da ako se pregled otkazuje da se obavesti radi blagovremenog zakazivanja drugih pacijenata. (<span class="sivo">BLAGOVREMENIM OTKAZIVANJEM PREGLEDA POŠTUJETE SAMOG DOKTORA I DRUGE BOLESNE PACIJENTE</span>)</p>
			
			<p> Nakon zvanja telefona potrebno je malo sačekati da bi ste uspostavili kontakt sa ordinacijom. (<span class="sivo">DOKTOR JE OBIČNO ZAUZET PREGLEDOM ILI SVOJIM PROFESIONALNIM USAVRŠAVANJEM</span>).</p>
			
			<p>Ako zovete fiksne telephone veza može biti prebačena na mobilni telefon ali to vas neće dodatno koštati. (<span class="sivo">NA TAJ NAČIN ORDINACIJA VAM JE NA STALNOM RASPOLAGANJU</span>) </p>
			
			<p> Vaše zdravstvene probleme, zbog zauzetosti doktora ne možete rešavati preko telefona, već možete zakazati konsultativni razgovor sa doktorom u vašem terminu. (<span class="sivo">DA BI IMALI KORISTI OD RAZGOVORA SA DOKTOROM MORATE ZAKAZATI VAŠE VREME SA NJIM</span>)</p>
			
			<p>Nakon pregleda odmah će te dobiti izveštaj doktora u pismenoj formi sa kompletnim pregledom na CD i/ili DVD.</p>
			
			<p class="bitno">(NA TAJ NAČIN ĆETE IMATI KOMPLETNU DOKUMENTACIJU DA BI SE ONA MOGLA KORISTITI ZA VASE LEČENJE I ZA EVENTUALNO DRUGO MIŠLJENJE LEKARA.)</p>
		</div>
		
<?php include_once("ukljuci/footer.php"); ?>