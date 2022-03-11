<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact / Alexandre Nicaise</title>
    <link rel="stylesheet" href="css/ElmtsCommuns.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <header>
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
        <div class="main">
            <h1>Mes coordonnées</h1>
            <h2>Vous pouvez cliquer ou toucher les éléments ci-dessous.</h2>
            <p>Mon compte LinkedIn : <a href="https://www.linkedin.com/in/alexandre-nicaise/" class="coordonnées">https://www.linkedin.com/in/alexandre-nicaise/</a></p>
            <form action="" method="post">
                <label for="nom">Votre nom : </label><input type="text" name="nom" id="nom" maxlength="20" placeholder="Inscrivez votre nom ici" spellcheck="false" required />
                <label for="prenom">Votre prénom : </label><input type="text" name="prenom" id="prenom" maxlength="20" placeholder="Inscrivez votre prénom ici" spellcheck="false" required /><br />
                <label for="email">Votre email : </label><input type="email" name="email" id="email" placeholder="Inscrivez votre email ici" spellcheck="false" required /><br />
                <label for="sujet">Sujet du message :</label><input type="text" name="sujet" id="sujet" maxlength="50" placeholder="Inscrivez ici le sujet" required /><br />
                <label for="message">Votre message :</label><textarea name="message" id="message" cols="50" rows="15" required ></textarea>
                <input type="submit" value="Envoyer" name="validation">
            </form>
        </div>
    </main>
    <footer class="contactFooter">
        <div class="footer">
            <p>Vous souhaitez consulter mon CV ? Téléchargez le ici : </p>
            <a href="Alexandre-Nicaise.pdf" download="CV.pdf">Mon CV</a>
            <!-- Attention, download n'est pas reconnu par tous les navigateurs -->
        </div>
    </footer>
    <script src="js/menu.js"></script>
</body>

</html>