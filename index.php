<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil / Alexandre Nicaise</title>
    <link rel="stylesheet" href="css/ElmtsCommuns.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <header>
        <!-- En tête dans lequel figurent mon nom, mon logo et mon menu  -->
        <img src="img/Logo-webdesign.png" alt="Mon logo" id="logo">
        <div class="burger-button">
            <span class="burger-top"></span>
            <span class="burger-middle"></span>
            <span class="burger-bottom"></span>
        </div>
        <div class="burger-menu">
            <a href="index.html">Accueil</a>
            <a href="Description.html" class="important">Qui suis-je ?</a>
            <a href="Contact.html">Contact</a>
            <a href="Alexandre-Nicaise.pdf" download="CV.pdf">Mon CV</a>
        </div>
        <nav class="navTablet">
            <a href="index.html">Accueil</a>
            <a href="Description.html" class="important">Qui suis-je ?</a>
            <a href="Contact.html">Contact</a>
        </nav>
        <div class="identite">
            <h1 id="monNom">Alexandre Nicaise</h1>
            <h2 id="monSlogan">Tel que vous le voyez</h2>
        </div>
        <nav class="navLaptop">
            <a href="index.html">Accueil</a>
            <a href="Description.html" class="important">Qui suis-je ?</a>
            <a href="Contact.html">Contact</a>
        </nav>
    </header>
    <main>
        <!-- Corps de la page d'accueil -->
        <div class="image">
            <img src="img/welcome.jpg" alt="Image de bienvenue" id="welcome">
        </div>
        <p class="pMain">Bienvenue dans mon antre cher visiteur ! <br>
            Dans ce site, vous trouverez les éléments que je souhaite partager sur moi-même.</p>
        <p class="pMain2">Vous pouvez faire un tour dans la page "Qui suis-je" qui rentre plus dans les détails <br>
            mais vous pouvez également télécharger mon CV <span class="span1">en bas de page à tout moment.</span> <span class="span2">en appuyant sur le bouton en haut à droite de votre écran.</span></p>
    </main>
    <footer>
        <div class="footer">
            <p>Vous souhaitez consulter mon CV ? Téléchargez le ici : </p>
            <a href="Alexandre-Nicaise.pdf" download="CV.pdf">Mon CV</a>
            <!-- Attention, download n'est pas reconnu par tous les navigateurs -->
        </div>
    </footer>
    <script src="js/menu.js"></script>
</body>

</html>