<?php

include_once "users.php";
include_once "functions.php";


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $userEmail = sanitizeInput($_POST['userEmail']);
    $userPassword = md5(sanitizeInput($_POST['userPassword']));
    $users = $_users->getDBdata();

    while ($user = $users->fetch())
    {
        if($user['userEmail'] == $userEmail && $user['userPassword'] == $userPassword && $user['userType']==2) 
        {
            setcookie("Admin", $userEmail, time()+600, '/');
            header("Location: ../dashboard.php");
        }
        else 
        {
            header("Location:../admin.php?error=wrongcredentials"); 
        }
    }
}

