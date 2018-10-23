<?php
spl_autoload_register(function ($class_name) {
    if(mb_substr($class_name, -1) == 'P'){
        include './provider/'.$class_name . '.php';
    } else if(mb_substr($class_name, -1) == 'M'){
        include './model/'.$class_name . '.php';
    } else {
        echo "Impossible de charger la class";
        exit();
    }
});
if(!empty($_POST['text'])){
    $text = htmlspecialchars($_POST['text']);
    MessageP::addMessages($text);
}

$messages = MessageP::getMessages();
require_once 'view/template.php';
