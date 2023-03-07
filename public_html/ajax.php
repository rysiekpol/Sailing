<?php
require_once "../business.php";
$db = get_db();
if (isset($_POST['search'])) {
   $imageFileName = $_POST['search'];
   $query = [ 'imageName' => ['$regex' => "$imageFileName", '$options' => 'i']];
   $imageSearchDatabase = $db->files->find($query);
   foreach($imageSearchDatabase as $file){
   echo "<figure class='galeryFoto'>
					<a href='files/watermark-".$file['fileName']."' target='_blank'>
					<img src='files/mini-".$file['fileName']."' alt=".$file['imageName']."/></a>
					<figcaption>
					".$file['imageName']." <br>
					".$file['authorName']." <br>									
					</figcaption>
				</figure>";
	}
}
?>