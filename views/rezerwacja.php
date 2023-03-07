<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>sailing.com</title>
	<meta name="description" content="Żagle, houseboaty, węzły czyli wszystko co powinieneś wiedzieć zanim zaczniesz żeglować." />
	<meta name="keywords" content="żeglowanie, węzły, węzeł, skala beauforta, wiatr, ratowniczy" />
	<link rel="stylesheet" href="static/style.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
	<script src="scripts/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="scripts/jquery-ui.min.css">
	<script src="scripts/external/jquery/jquery.js"></script>
	<script src="scripts/jquery-ui.min.js"></script>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
	<script src="scripts/main.js"></script>
	<link rel="shortcut icon" href="img/sailing.png"/>
	<noscript>
		<style>
			#zegarek{
				display:none;
			}
			.menu{
						display: none;
					}
			#dataPrzyjazdu{
							display:none;
						}
			#dataZdania{
							display:none;
						}
			#resetuje{
							display:none;
						}
			#resetChecker{
							display:none;
						}
			#wyslij{
							display:none;
			}
		</style>
	</noscript>

</head>

<body>
	<header>
	
	<script>
		$(function () {
				$("#dataPrzyjazdu").datepicker({
					showButtonPanel: true
				});

				$("#dataZdania").datepicker({
					showButtonPanel: true
				});

				$("#komentarz").tooltip();

				$("#wyslij").dialog({
					modal: true,
					buttons: {
						Rozumiem: function () {
							$(this).dialog("close");
						}
					}
				});	
				$(document).ready(function(){
					   $('#resetChecker').dialog({ autoOpen: false })
					   $("#resetChecker").dialog({
							modal: true,
							buttons: {
								Tak: function () {
									$(this).dialog($("#formularz")[0].reset()).close;
									$(this).dialog("close");
								},
								Nie: function () {
									$(this).dialog("close");
								}
							}
						});	
					   $('#resetuje').click(function(){ 
							$('#resetChecker').dialog('open'); 
					   });
				});
				
		});
	</script>
			
		<h1 id="title"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="45px" viewBox="0 0 24 24" width="45px" fill="#fff"><g><rect fill="none" height="24" width="24"/><path d="M17,15l1.55,1.55c-0.96,1.69-3.33,3.04-5.55,3.37V11h3V9h-3V7.82C14.16,7.4,15,6.3,15,5c0-1.65-1.35-3-3-3S9,3.35,9,5 c0,1.3,0.84,2.4,2,2.82V9H8v2h3v8.92c-2.22-0.33-4.59-1.68-5.55-3.37L7,15l-4-3v3c0,3.88,4.92,7,9,7s9-3.12,9-7v-3L17,15z M12,4 c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S11.45,4,12,4z"/></g></svg><span class="toptitle">sail</span>ing<span class="toptitle">.</span>com <span id="zegarek" style="font-size: 22px; font-weight: 700;">00:00:00</span></h1>
		
		<aside>
			<span class="menu">&equiv;</span>
			
			<nav id="topmenu">
						
				<ol>
					<li><a href="strona-glowna">Strona główna</a></li>
					<li><a href="galeria-zdjec">Galeria</a></li>
					<li><a href="samodzielnik-zeglarza">Węzły</a></li>
					<li><a href="skala-beauforta">Skala Beauforta</a></li>
					<li><a href="szanty-przerozne">Szanty</a></li>
					<li>
						<a href="#">Pozostałe</a>
						<ul>
							<li><a href="rezerwacja-jachtu">Rezerwacja</a></li>
							<li><a href="kontakt-sailing">Kontakt</a></li>
						</ul>
					</li>
				</ol>
			
			</nav>
			<div style="clear:both"></div>
		</aside>
		
	</header>
	
	<main>
	
		<article>
		
			<header>
				<h1>Wynajem Jachtów - <span style="color:white" class="material-icons-outlined">anchor</span>sail<span style="color:white">ing</span>.<span style="color:white">com</span></h1>
			</header>
		
			<form action="reservation.php" id="formularz">

				<div class="formule">

					<fieldset>
						<legend>Wybierz model jachtu</legend>
						<div><label><input type="radio" value="1" name="yacht" checked>Tango Family 780</label></div>
						<div><label><input type="radio" value="2" name="yacht">Maxus 28</label></div>
						<div><label><input type="radio" value="3" name="yacht">Vector 10</label></div>
						<div><label><input type="radio" value="4" name="yacht">Sedna 26</label></div>
						<div><label><input type="radio" value="5" name="yacht">Tango Sport 780</label></div>
					</fieldset>

				</div>

				<div class="formule">

					<fieldset>
						<legend>Wyposażenie jachtu</legend>
						<div><label><input type="checkbox" name="wyposazenie" checked value="1">Toaleta chemiczna</label></div>
						<div><label><input type="checkbox" name="wyposazenie" value="2">Dodatkowy bosak</label></div>
						<div><label><input type="checkbox" name="wyposazenie" value="3">Satelitarne Wi-Fi</label></div>
						<div><label><input type="checkbox" name="wyposazenie" value="4">Dodatkowe cumy</label></div>
						<div><label><input type="checkbox" name="wyposazenie" value="5">Butla z gazem</label></div>
					</fieldset>
				</div>

				<div id="wyslij" title="Uwaga!">
					<p>Na powyższej stronie, wypełnij poprawnie formularz. Upewnij się czy dane kontaktowe które wysyłasz są poprawne.</p>
				</div>

				<div class="formule2">
					<label>Typ silnika</label>
					<select id="silnik" name="silnik">
						<option value="1">Spalinowy</option>
						<option value="2">Elektryczny</option>
					</select>

					<label class="leftmargin">Usługa sprzątania</label>
					<select id="sprzatanie" name="sprzatanie">
						<option value="1">Tak</option>
						<option value="2">Nie</option>
					</select>
				</div>

				<div class="formule2">
					<label> Imię <input type="text" name="imie" placeholder="Jan" required></label>
					<label class="leftmargin"> Nazwisko <input type="text" name="nazwisko" placeholder="Kowalski" required></label>
				</div>

				<div class="formule2">
					<label> E-mail <input type="email" name="email" placeholder="jan@poczta.com" required></label>
					<label class="leftmargin">Numer telefonu <input type="tel" name="telefon" placeholder="555 666 777" required></label>
				</div>

				<div class="formule2">
					<p style="display:inline-block;">Data przyjazdu: <input type="text" id="dataPrzyjazdu"></p>
					<noscript>
						<p style="display:inline-block;"><input type="date" id="dataPrzyjazduNoScript" min="2021-11-15"></p>
					</noscript>
					<p style="display:inline-block;">Data zdania: <input type="text" id="dataZdania"></p>
					<noscript>
						<p style="display:inline-block;"><input type="date" id="dataZdaniaNoScript" min="2021-11-15"></p>
					</noscript>
					<label class="leftmargin">Godzina przyjazdu <input type="time" name="czas" min="12:00" max="20:00" value="15:00"></label>
				</div>

				<div class="formule2">
					<div><label>Masz jakieś uwagi do zamówienia? Daj nam znać tutaj!</label></div>
					<textarea name="komentarz" id="komentarz" rows="4" cols="80" title="Jeżeli masz jakiekolwiek pytania, zapraszamy do zostawienia komentarza."></textarea>
				</div>

				<div class="formule2">
					<input type="submit" value="Zamawiam">
					<input type="button" id="resetuje" value="Wyczyść formularz">		
					<noscript>
						<input type="reset" value="Wyczyść formularz">
					</noscript>					
				</div>
				
				<div id="resetChecker">
					<p>Czy jesteś pewny, że chcesz zresetować formularz?</p>
				</div>
					
			</form>
		
		</article>
	
	</main>
	
	
	<footer>
		Wszelkie prawa zastrzeżone &copy; 2021 - Hej żegluj że żeglarzu!
	</footer>
	
	
</body>
</html>