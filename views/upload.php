<!DOCTYPE HTML>
<html lang="pl-PL">
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
    <link rel="shortcut icon" href="img/sailing.png" />

    <noscript>
        <style>
            #zegarek {
                display: none;
            }

            .menu {
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

<h3 style="text-align:center;color:#e07a5f">Formularz Zgłoszeniowy</h3>

<form action="../upload_fn.php" method="post" enctype="multipart/form-data" id="formGalery">
  Wybierz zdjęcie:
  <input type="file" name="fileToUploadName" id="fileToUploadId" required> <br>
  Znak wodny:
  <input type="text" name="watermarkValue" id="watermarkValueId" required> <br>
  Imię:
<?php
  if(isset($_SESSION['logged_in'])){
    echo '<input type="text" name="authorName" id="authorNameId" required value='.$_SESSION['account_id'].'> <br>';
  }else{
    echo '<input type="text" name="authorName" id="authorNameId" required> <br>';
  }
?>
  Tytuł zdjęcia:
  <input type="text" name="imageName" id="imageNameId" required maxlength="20"> <br>
  <input type="submit" value="Wrzucam!" name="submit">
</form>

<?php
    if(isset($_GET['resultcode'])) {
        $resultCode = $_GET['resultcode'];
        switch ($resultCode) {
            case 0:
                echo " <p style=color:green;text-align:center;font-size:26px;>Zdjęcie wrzucone!</p>";
            break;
            case 1:
                 echo " <p style=color:red;text-align:center;font-size:26px;>Za duży plik!</p>";
            break;
            case 2:
                 echo " <p style=color:red;text-align:center;font-size:26px;>Zły typ pliku!</p>";
            break;
            case 3:
                 echo " <p style=color:red;text-align:center;font-size:26px;>Zdjęcie już istnieje!</p>";
            break;
            case 4:
                 echo " <p style=color:red;text-align:center;font-size:26px;>Nie udało się wrzucić zdjęcia: Problem u klienta!</p>";
            break;
             case 5:
                 echo " <p style=color:red;text-align:center;font-size:26px;>Nie udało się wrzucić zdjęcia: Problem od strony serwera!</p>";
            break;
             case 6:
                 echo " <p style=color:red;text-align:center;font-size:26px;>Ty hakerze, nie próbuj mi tu wrzucać takich rzeczy wrr!</p>";
            break;
    }
}    
?>

    <footer>
        Wszelkie prawa zastrzeżone &copy; 2021 - Hej żegluj że żeglarzu!
    </footer>

</body>
</html>