<?php

require_once '../business.php';
require_once '../controller_utils.php';

$db = get_db();  

$files = &get_images();

foreach ($files as $file) {
        echo "<figure class='galeryFoto'>
					<a href='files/watermark-".$file['fileName']."' target='_blank'>
					<img src='files/mini-".$file['fileName']."' alt=".$file['imageName']."/></a>
					<figcaption>
					".$file['imageName']." <br>
					".$file['authorName']." <br>
					 <form action='delete' method='post' enctype='multipart/form-data'>
					<input type='checkbox' name='checkboxName[]' value=".$file['fileName'].">Wykasuj</input>					
					</figcaption>
				</figure>";
        }
echo "<br><input type='submit' name='sumbit' value='Wykasuj wybrane' </input></form>";
echo '<br>';
?>
