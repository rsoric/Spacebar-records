<?php 

    include_once "releases.php";
    include_once "functions.php";

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $albumID = sanitizeInput($_POST["albumID"]);
        $albumName = sanitizeInput($_POST["albumName"]);
        $albumImg = sanitizeInput($_POST["albumImg"]);
        $albumCover = sanitizeInput($_POST["albumCover"]);
        $albumAutor = sanitizeInput($_POST["albumAutor"]);
        $albumTracks = sanitizeInput($_POST["albumTracks"]);
        $albumDescription = sanitizeInput($_POST["albumDescription"]);

        if(isset($_POST['delete']))
        {
            $_releases->deleteAlbum($albumID);
            header("Location: ../dashboard-releases.php");
        }
        elseif(isset($_POST['update']))
        {
            $_releases->updateAlbum($albumID, $albumName, $albumImg, $albumCover, $albumAutor, $albumTracks, $albumDescription);
            header("Location: ../dashboard-releases.php");
        }
    }