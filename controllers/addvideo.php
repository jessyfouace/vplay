<?php

function chargerClasse($classname)
{
    if (file_exists('../model/' . ucfirst($classname) . '.php')) {
    	require '../model/' . ucfirst($classname) . '.php';
    } elseif (file_exists('../entities/' . ucfirst($classname) . '.php')) {
    	require '../entities/' . ucfirst($classname) . '.php';
    } elseif (file_exists('../traits/' . ucfirst($classname) . '.php')) {
    	require '../traits/' . ucfirst($classname) . '.php';
    } else {
    	require '../interface/' . ucfirst($classname) . '.php';
    }
}
session_start();
spl_autoload_register('chargerClasse');
$title = "VPlay - Ajouter une vidéo";
$db = Database::BDD();

$usersManager = new UsersManager($db);
$videosManager = new VideosManager($db);
$imageManager = new ImagesInfoManager($db);
$videosInfoManager = new VideosInfoManager($db);

if (!empty($_POST["title"]) && !empty($_POST["desc"]) && !empty($_POST["category-select"]) && !empty($_FILES['file2']['name']) && !empty($_FILES['file1']['name'])) {
    $codeVideo = bin2hex(openssl_random_pseudo_bytes(6));
    $video = new Videos([
                'name' => $_POST['title'],
                'videoDesc' => $_POST['desc'],
                'date' => date('d/m/Y'),
                'category' => '1',
                'creator' => 1,
                'videoCode' => $codeVideo
            ]);
    $lastId = $videosManager->addVideo($video);


    mkdir("../assets/imageAndVideo/" . $codeVideo, 0777, true);
    $fileName = str_replace(' ', '', $_FILES["file2"]["name"]);
    $target_dir = '../assets/imageAndVideo/' . $codeVideo . '/';
    $target_file = $target_dir . basename(str_replace(' ', '', $_FILES["file2"]["name"]));
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $addImage = new AddImages([
        'target_dir' => $target_dir,
        'target_file' => $target_file,
        'uploadOk' => $uploadOk,
        'imageFileType' => $imageFileType,
        'tmpname' => $_FILES["file2"]["tmp_name"],
        'fileName' => $fileName
    ]);
    $message = $addImage->checkImage($addImage);
    if ($addImage->getUploadOk() == 1) {
        $uploadOk = $addImage->getUploadOk();
        $tableOkImage[] = str_replace(' ', '', $_FILES["file2"]["name"]);
    } else {
        $uploadOk = $addImage->getUploadOk();
        $finish = $addImage->getError();
    }
    $countTable = count($tableOkImage);
    if ($countTable >= 1 and $uploadOk = 1) {
        $image = new ImagesInfo([
            'link' => $target_file,
            'alt' => 'Désolé aucun titre n\'as étais ajouter à cette image',
            'videoId' => $lastId
        ]);

        $idImage = $imageManager->addImages($image);
        $idImage = (int) $idImage;
    }


    $fileName = str_replace(' ', '', $_FILES["file1"]["name"]);
    $target_dir = '../assets/imageAndVideo/' . $codeVideo . '/';
    $target_file = $target_dir . basename(str_replace(' ', '', $_FILES["file1"]["name"]));
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $addVideo = new AddVideos([
        'target_dir' => $target_dir,
        'target_file' => $target_file,
        'uploadOk' => $uploadOk,
        'imageFileType' => $imageFileType,
        'tmpname' => $_FILES["file1"]["tmp_name"],
        'fileName' => $fileName
    ]);
    $message = $addVideo->checkVideo($addVideo);
    if ($addVideo->getUploadOk() == 1) {
        $uploadOk = $addVideo->getUploadOk();
        $tableOkVideo[] = str_replace(' ', '', $_FILES["file1"]["name"]);
    } else {
        $uploadOk = $addVideo->getUploadOk();
        $finish = $addVideo->getError();
    }
    $countTable = count($tableOkVideo);
    if ($countTable >= 1 and $uploadOk = 1) {
        $video = new VideosInfo([
            'linkVideo' => $target_file,
            'altVideo' => 'Désolé aucun titre n\'as étais ajouter à cette image',
            'videoId' => $lastId
        ]);

        $idVideo = $videosInfoManager->addVideos($video);
    }

    header('Refresh: 2; http://localhost/youtube/youtube/ajouter-une-video');


}

require '../views/addVideoVue.php';