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
		</style>
	</noscript>
	
</head>

<body>
	<header>

		<h1 id="title">
			<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="45px" viewBox="0 0 24 24" width="45px" fill="#fff"><g><rect fill="none" height="24" width="24" /><path d="M17,15l1.55,1.55c-0.96,1.69-3.33,3.04-5.55,3.37V11h3V9h-3V7.82C14.16,7.4,15,6.3,15,5c0-1.65-1.35-3-3-3S9,3.35,9,5 c0,1.3,0.84,2.4,2,2.82V9H8v2h3v8.92c-2.22-0.33-4.59-1.68-5.55-3.37L7,15l-4-3v3c0,3.88,4.92,7,9,7s9-3.12,9-7v-3L17,15z M12,4 c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S11.45,4,12,4z" /></g></svg><span class="toptitle">sail</span>ing<span class="toptitle">.</span>com
			<span id="zegarek" style="font-size: 22px; font-weight: 700;">00:00:00</span>
		</h1>
		<?php 
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1){
				echo '<div style=" text-align:center;margin-bottom: 20px;"><span style="font-size:26px;padding:0;">Witaj </span><span style="font-size:26px;padding:0;color:#e07a5f">'.$_SESSION['account_id'].'</span></div>';
				echo '<form action="wylogowanie" method="post" enctype="multipart/form-data" style="text-align:center"><input type="submit" value="Wyloguj się" name="login" style="font-size:26px;margin-bottom: 20px; border-radius: 15px;padding:4px 10px 4px 10px"></form>';
			}else{
			 echo '<form action="logowanie-i-rejestracja" method="post" enctype="multipart/form-data" style="text-align:center"><input type="submit" value="Logowanie" name="login" style="font-size:26px;margin-bottom: 20px; border-radius: 15px;padding:4px 10px 4px 10px"></form>';
			}
		?>
		

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
		
			<section>
				
				<div class="main-page">
				
					<header>
					<h2>Witaj przyszły żeglarzu!</h2>
					<p>Zastanawiasz się jak refować żagle w konkretnych warunkach? Chciałbyś poznać nowe przyśpiewki żeglarskie, którymi porwiesz tłum? A może próbujesz poznać nowe węzły? Jeżeli tak, to trafiłeś w odpowiednie miejsce. Zapewniam cię, że wiedza którą tu przyswoisz, przyda Ci się na długie morskie lata. Ahoj! </p>
					
					</header>
					
					<div class="starting-image">
						<figure>
							<a href="img/vis-chorwacja.jpg" target="_blank"><img src="img/vis-chorwacja2.jpg" alt="Wyspa Vis - Chorwacja"></a>
							<figcaption>Wyspa Vis - Chorwacja</figcaption>
						</figure>
					</div>
					
					<div id="history">
					
						<h1>Krótka historia żeglarstwa, bo każdy żeglarz swoją historię musi znać!</h1>
						
							<p>Żeglarstwo zaczęto wyodrębniać jako zjawisko od ok. XVII w. Początkowo w <strong class="colors">Holandii i Anglii.</strong>
							W 1718 roku w Rosji powstaje Flotylla Newska uważana za pierwszy klub żeglarski.
							Od 22 sierpnia 1851 rozgrywana jest najstarsza impreza sportowa - Regaty o Puchar Ameryki.
							Żeglarstwo od 1900 roku jest dyscypliną olimpijską (II Letnie Igrzyska Olimpijskie Paryż 1900).
							W Paryżu w październiku 1907 r. powstaje Międzynarodowa Unia Jachtingu Regatowego (<strong class="colors">IYRU</strong> – International Yacht Racing Union) obecnie Międzynarodowa Federacja Żeglarska (<strong class="colors">ISAF</strong> - International Sailing Federation).
							od 1917 roku datuje się działalność polskiego żeglarstwa we Władywostoku i Harbinie dający podwaliny do powstania żeglarstwa harcerskiego i żeglarstwa w wolnej Polsce po 1918 roku. Od 1917 roku harcerskie żeglarstwo realizowali Antoni Gregorkiewicz i Eustachy Czuma, skupiając młodzież w "Pierwszej Polskiej Drużynie Harcerskiej" im. Tadeusza Kościuszki. Inny wymiar harcerskiej działalności żeglarskiej nadał w 1918 roku Józef Jakóbkiewicz, realizując tam skautowe szkolenie o charakterze morskim.</p>
							
							<p>Większość młodzieży stanowiły polskie sieroty Dalekiego Wschodu. Dr psychologii J. Jakóbkiewicz, realizując misję ratowania polskich sierot na Dalekim Wschodzie, wprowadził idee<strong class="colors"> skautingu wodnego</strong> w resocjalizacji dzieci. Skuteczność przygotowania młodzieży do życia była bardzo owocna. Z braku sprzętu żeglarskiego tymczasem położono nacisk na naukę pływania i wiosłowania. Od listopada 1918 r. pod jego kierunkiem pracują żeglarskie drużyny harcerskie na Dalekim Wschodzie w Harbinie i Władywostoku, przekształcone kolejno w Żeglarski Hufiec Syberyjski. Sprzęt pływający był pożyczony od kolonii japońskiej. Łodzie były dziesięciowiosłowe a jedna z nich - <strong class="colors"> FALA</strong>, jako jedyna miała lugrowy żagiel - szkolenia prowadzono od kwietnia do listopada w niedzielnych wyprawach po Zatoce Złoty Róg. W wakacje młodzież uczestniczyła w obozach zlokalizowanych na Wyspie Rosyjska. Animatorami obozów byli dr Jakóbkiewicz i drużynowy Gregorkiewicz. Były to pierwsze polskie obozy żeglarskie. Dzieci Żeglarskiego Hufca Syberyjskiego via Japonia i Stany Zjednoczone zostają szczęśliwie przetransportowane do wolnej Polski. Generał Mariusz Zaruski, który od 1894 roku był zesłańcem carskim do Archangielska jest kolejnym filarem żeglarstwa, w tym żeglarstwa harcerskiego. W Archangielsku ukończył Szkołę Morską z tytułem Szturmana Żeglugi Wielkiej. W rejsie na żaglowcu „Derżawa” przebył Ocean Arktyczny do Norwegii; pływał po morzach arktycznych jako kapitan na statku „Nadieżda”.</p>
							
							<div class="leftR"><a href="img/obrazekR2.jpg" target="_blank"><img src="img/obrazekR.jpg" alt="port"></a></div>
							<div class="leftT"><p>Druh harcmistrz Witold Bublewski (1904-2007) do końca swojego życia związany był z harcerskim żeglarstwem. Od czasów pobytu w Carycynie (Stalingrad, aktualnie Wołgograd), gdzie mieszkał i uczył się w gimnazjum a w 1917r wstąpił do tajnego skautingu - zastępu polskich chłopców pod wodzą Jerzego Naumana uprawiających żeglowanie i <strong class="colors">„burłaczenie”</strong>, aż do 2007r. był aktywnym propagatorem harcerstwa żeglarskiego. W latach 1924 – 1928 członkowie Hufca Syberyjskiego organizują obozy żeglarskie na Helu pod kierownictwem A. Gregorkiewicza. W 1929 roku Państwowy Urząd Wychowania Fizycznego i Przysposobienia Wojskowego zorganizował z udziałem harcerzy pierwszy kurs żeglarski w Jastarni. Generalnym instruktorem był gen. Mariusz Zaruski a harcmistrz Witold Bublewski opiekował się młodzieżą harcerską, która stanowiła ok. <strong class="colors">80% stanu kursantów.</strong> Obaj stanowili siłę twórczą dla działalności harcerskiego żeglarstwa i żeglarstwa w Polsce. W 1934 roku hm W. Bublewski i porŻP Jan Kuczyński sprowadzili do Polski żaglowiec dla harcerzy. Zbudowany w Szwecji drewniany żaglowiec "Petrea" został zakupiony przez ZHP w 1934 roku w Danii i pod tymczasowym imieniem "Harcerz" został sprowadzony do budowanego portu w Gdyni w czerwcu. Zakupiony w całości ze składek społecznych, wyremontowany i przerobiony systemem gospodarczym (m.in. przez cieśli góralskich, harcerzy i studentów) na statek szkolny. Przygotowany przez por.J.Kuczyńskiego i W. Bublewskiego, na wniosek generała M. Zaruskiego, pod zmienionym imieniem <strong class="colors">„Zawisza Czarny”</strong> wypłynął 29 czerwca 1935 r. w pierwszy rejs do Kopenhagi, Londynu, Antwerpii i Amsterdamu. W odwiedzanych portach „Zawisza Czarny” był ambasadorem Polski - budził podziw, uznanie a w Londynie - i zazdrość brytyjskich skautów.</p></div>
							<div style="clear:both;"></div>
															
							<p>Komendantem żaglowca aż do wybuchu II wojny światowej był gen. Mariusz Zaruski. "Zawisza Czarny" był wówczas największym skautowym żaglowcem. Program morskiego wychowania młodzieży propagowany i rozwijany przez W. Bublewskiego w całym kraju był bardzo skuteczny - w 1937 roku podczas ogólnopolskiej konferencji w Komisariacie Rządu w Gdyni, w sprawie rozwoju programu, zdecydowano o zakupie kolejnych 10 jednostek i budowie <strong class="colors">„Domu Żeglarza”</strong>, przy nowym Basenie Jachtowym w Gdyni. W czasie wojny, "Zawisza Czarny" do 1943 r. używany przez hitlerowców jako "Schwarzer Husar", został przez nich w końcu porzucony i niszczał. Po odnalezieniu po wojnie, sprowadzony do Gdyni według ówczesnych władz nie nadawał się do remontu. Pod nadzorem komunistycznej Służby Bezpieczeństwa w 1949 r. został odholowany i zatopiony na wodach Zatoki Puckiej. Po II wojnie światowej i reaktywowaniu harcerstwa po 1956 roku dh Witold Bublewski był twórcą kolejnego "Zawisza Czarny" oraz harcerskiej flotylli „Czerwoniaków” - jachtów przebudowanych z szalup ratunkowych m/s Batory. Następcą pierwszego żaglowca został również "Zawisza Czarny" - stalowy, trzymasztowy szkuner z ożaglowaniem typu <strong class="colors">Va Marie.</strong> Pod bukszprytem znajduje się galion - rzeźba przedstawiająca głowę rycerza z Garbowa - Zawiszy Czarnego. Jednostkę zbudowano na bazie kadłuba statku rybackiego (lugotrawlera) Cietrzew, zwodowanego w 1952 r. Stoczni Północnej w Gdańsku. Statek został przekazany ZHP przez Ministerstwo Żeglugi i przebudowany na żaglowiec. Po dwóch kapitalnych remontach szkuner w dalszym ciągu służy harcerskim żeglarzom.</p>
											
					</div>
					
					<table>
						<thead><tr><td colspan="5" >Klasyfikacja żeglarstwa</td></tr></thead>
						<tr><th>Miejsce</th><td colspan="2">woda</td><td colspan="2">lód</td></tr>
						<tr><th>Akwen</th><td colspan="2">śródlądowy</td><td colspan="2">morski</td></tr>
						<tr><th>Rodzaj</th><td colspan="2">regatowe</td><td colspan="2">turystyczne</td></tr>
						<tr><th>Sprzęt</th><td>łódź</td><td>deska</td><td>bojer</td><td>żaglowóz</td></tr>
					</table>
				
				</div>
				
				
			</section>
				
		</article>	
	</main>
	
	<footer>
		Wszelkie prawa zastrzeżone &copy; 2021 - Hej żegluj że żeglarzu!
	</footer>
	
	
</body>
</html>