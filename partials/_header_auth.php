<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Todo pour l'organisation de vos projets">
    <meta name="author" content="Yitzak DEKPEMOU - DEVAfrika">
    <link rel="icon" href="assets/media/icon.png">

    <title>
        <?=
        isset($title)
            ? $title . ' - ' . WEBSITE_NAME
            : WEBSITE_NAME . ', Make It Easy!';
        ?>
    </title>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/dafstyle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/dropdown.systeme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dashboard.style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/board.style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/allboards.style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/profile.style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/newboard.style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/settings.style.css" />
</head>
<body>
<div class="wrap" id="wrap">
<?php include("partials/_nav.php"); ?>
<?php include("partials/_flash.php"); ?>
