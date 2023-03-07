<?php

require_once '../business.php';

$db = get_db();

$db->files->deleteMany(['imageName' => ['$regex' => '']]);

$path = "files/";

$files = array_diff(scandir($path), array('.', '..'));
foreach ($files as $file) {
    unlink($path.$file);
}
?>
