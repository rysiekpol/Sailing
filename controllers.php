<?php
require_once 'business.php';
require_once 'controller_utils.php';

function clear() {
     clearDbState();
     return 'logowanie';
}

function logout(&$model) {
        session_destroy();
        header('Location: strona-glowna?logout=true');
        exit;
}

function logowanie(&$model) {
    
    if(isset($_GET['logout'])) {
        $model['logout'] = $_GET['logout'];
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1) {
             $model['account'] = getAccount($_SESSION['account_id']);
            return 'index';
        } else {
            return 'logowanie';
        }
    } else {
        if(isset($_POST['register'])) {
            $regResult = verifyRegistrationForm($_POST);
            $model['regResult'] = $regResult;
            return 'logowanie';
        } else {
            if(verifyLoginForm($_POST)==0) {
                $logResult = 0;
                $model['logResult'] = $logResult;
                $model['account'] = getAccount($_SESSION['account_id']);
                return 'logowanie';
            } else {
                $logResult = 1;
                $model['logResult'] = $logResult;
                return 'logowanie';
            }
        }
    }
}

function isAdmin(){
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1){
        $user = getAccount($_SESSION['account_id']);
        if($user['login']=='admin'){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function saving($model){
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkboxName'])) {
        $checker = $_POST['checkboxName'];
        $imageGalery = &get_images();
        foreach($checker as $r){
            $image = get_image($r);           
            $imageGalery[$r] = ['fileName' => $image['fileName'],'imageName' => $image['imageName'],'authorName' => $image['authorName']];
        }    
        return 'redirect:' . $_SERVER['HTTP_REFERER'];
    }
     return 'redirect:' . $_SERVER['HTTP_REFERER'];
}

function delete($model){
     if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkboxName'])) {
        $checker = $_POST['checkboxName'];
        $imageGalery = &get_images();
        foreach($checker as $r){        
            unset($imageGalery[$r]);
        }    
        return 'zapisane';
    }
    return 'zapisane';
}

function galeria() {
    return 'galeria';
}

function wezly() {
    return 'wezly';
}

function glowna() {
    return 'index';
}

function beaufort() {
    return 'beaufort';
}

function szanty() {
    return 'szanty';
}

function rezerwacja() {
    return 'rezerwacja';
}

function kontakt(){
    return 'kontakt';
}

function upload(){
    return 'upload';
}

function login(){
    return 'logowanie';
}

function saved(){
    return 'zapisane';
}

function deleted(){
    return 'zapisane';
}

function searching(){
    return 'wyszukiwanie';
}