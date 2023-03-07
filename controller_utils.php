<?php

function &get_images()
{
    if (!isset($_SESSION['images'])) {
        $_SESSION['images'] = []; //pusty koszyk
    }
    return $_SESSION['images'];
}
