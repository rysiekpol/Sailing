<?php

require_once '../business.php';
require_once '../controller_utils.php';

$db = get_db();

if (!isset ($_GET['page']) ) {  
	$page = 1;  
} else {  
	$page = $_GET['page'];  
}  

$maxImages = 2;
$skip  = ($page - 1) * $maxImages;
$maxResults = $db->files->count();
$numberOfPages = ceil($maxResults/$maxImages);

$opts = [
	'skip' => ($page - 1) * $maxImages,
	'limit' => $maxImages
];
$files = $db->files->find([], $opts);
$sessionFiles = &get_images();

foreach ($files as $file) {
        echo "<figure class='galeryFoto'>
					<a href='files/watermark-".$file['fileName']."' target='_blank'>
					<img src='files/mini-".$file['fileName']."' alt='".$file['imageName']."'/></a>
					<figcaption>
					".$file['imageName']." <br>
					".$file['authorName']." <br>
					 <form action='saving' method='post' enctype='multipart/form-data'>";
					 if(isset($sessionFiles[$file['fileName']])){
						echo "<input type='checkbox' name='checkboxName[]' value=".$file['fileName']." checked>";
					 }else{
						echo "<input type='checkbox' name='checkboxName[]' value=".$file['fileName'].">";
					 }
					echo "Zapisz</input>					
					</figcaption>
				</figure>";
        }
echo "<br><input type='submit' name='sumbit' value='Zapisz wybrane' </input></form>";
echo '<br>';

for($page=1;$page<=$numberOfPages;$page++) {
	$_GET['page']=$page;
	echo '<a class="paging" href = "galeria-zdjec?page=' . $page . '">' . $page . '</a>';
}
?>
