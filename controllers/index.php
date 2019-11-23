<?php

function chargerClasse($classname)
{
    if (file_exists('../model/'. ucfirst($classname).'.php')) {
        require '../model/'. ucfirst($classname).'.php';
    } elseif (file_exists('../entities/'. ucfirst($classname).'.php')) {
        require '../entities/'. ucfirst($classname).'.php';
    } elseif (file_exists('../traits/'. ucfirst($classname).'.php')) {
        require '../traits/'. ucfirst($classname).'.php';
    } else {
        require '../interface/'. ucfirst($classname).'.php';
    }
}
session_start();
spl_autoload_register('chargerClasse');
$title = 'VPlay - Accueil';
$db = Database::BDD();

$videosManager = new VideosManager($db);
$usersManager = new UsersManager($db);

$videos = $videosManager->getVideos();
print_r($videos);

require "../views/indexVue.php";