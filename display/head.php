<!DOCTYPE html>
<html lang="fr">
<!-- En tête dans lequel figurent mon nom, mon logo et le menu de navigation -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexandre Nicaise</title>
    <link rel="stylesheet" href="./assets/css/elementsCommuns.css">
    <link rel="stylesheet" href="./assets/css/menu.css">
    <link rel="stylesheet" href="./assets/css/description.css">
    <script src="http://localhost/MyPersonalWebsite/assets/js/jquery-3.6.0.min.js"></script>
</head>
<header>
    <img src="./assets/img/Logo-webdesign.png" alt="Mon logo" id="logo">
    <div class="identite">
        <h1 id="monNom">Alexandre Nicaise</h1>
        <h2 id="monSlogan">Tel que vous le voyez</h2>
    </div>
    <?php
    require_once './display/nav.php';
    ?> 

</header>