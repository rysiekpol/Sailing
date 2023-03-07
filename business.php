<?php


use MongoDB\BSON\ObjectID;
require '../vendor/autoload.php';

function get_db()
{
    $mongo = new MongoDB\Client( 
        "mongodb://localhost:27017/mo34043_sailing", 
        [ 
            'username' => 'mo34043_sailing', 
        'password' => 'B99iSX%zg3Zogc', 
    ]); 
    $db = $mongo->mo34043_sailing;

    return $db;
}

function get_image($filename)
{
    $db = get_db();
    return $db->files->findOne(['fileName' => $filename]);
}

function delete_image($filename)
{
    $db = get_db();
    $db->products->deleteOne(['fileName' => $filename]);
}

function clearDbState() {
    $db = get_db();

    $db->users->deleteMany(['login' => ['$regex' => '']]);
}

function verifyRegistrationForm($postArr) {
    $hash = password_hash($postArr['password'],PASSWORD_DEFAULT);
    $account = [
        'login' => $postArr['login'],
        'email' => $postArr['email'],
        'password' => $hash,
        'repeatPassword' => $hash,
    ];
    
     $db = get_db();

     $current = getAccount($postArr['login']);
     
     if($postArr['password']!=$postArr['repeatPassword']){
          return 1;
     }

     if($current === NULL){ 
         $db->users->insertOne($account);
         return 0;
     } else{
        return 2;
     }

}

function verifyLoginForm($postArr) {
    $login = $postArr['login'];
    $password = $postArr['password'];

    $db = get_db();

    $user = $db->users->findOne(['login' => $login]);

    if($user !== null && password_verify($password, $user['password'])){
        $_SESSION["logged_in"] = 1;
        $_SESSION["account_id"] = $login;
        return 0;
    }else{
        return 1;
    }
}

function getAccount($login) {
     $db = get_db();
    return $db->users->findOne(['login' => $login]);
}
