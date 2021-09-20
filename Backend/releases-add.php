<?php

    include_once "releases.php";
    include_once "functions.php";

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $albumName = sanitizeInput($_POST["albumName"]);
        $albumImg = sanitizeInput($_POST["albumImg"]);
        $albumCover = sanitizeInput($_POST["albumCover"]);
        $albumAutor = sanitizeInput($_POST["albumAutor"]);
        $albumTracks = sanitizeInput($_POST["albumTracks"]);
        $albumDescription = sanitizeInput($_POST["albumDescription"]);

        $randID = $_releases->generateRandomCatalougeID();

        while($_releases->CheckIfSameID($randID))
        {
            $randID = $_releases->generateRandomCatalougeID();
        }

        $catalogueID =  sanitizeInput($randID);

        $_releases->insertAlbum($catalogueID, $albumName, $albumImg, $albumCover, $albumAutor, $albumTracks, $albumDescription);
        header("Location: ../dashboard-releases.php");
    }

