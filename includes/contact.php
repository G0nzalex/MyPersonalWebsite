<main>
    <div class="main">
        <h1>Mes coordonnées</h1>
        <h2>Vous pouvez cliquer ou toucher les éléments ci-dessous.</h2>
        <p>Mon compte LinkedIn : <a href="https://www.linkedin.com/in/alexandre-nicaise/"
                class="coordonnées">https://www.linkedin.com/in/alexandre-nicaise/</a></p>
        <form action="" method="post">
            <label for="nom">Votre nom : </label><input type="text" name="nom" id="nom" maxlength="20"
                placeholder="Inscrivez votre nom ici" spellcheck="false" required />
            <label for="prenom">Votre prénom : </label><input type="text" name="prenom" id="prenom" maxlength="20"
                placeholder="Inscrivez votre prénom ici" spellcheck="false" required /><br />
            <label for="email">Votre email : </label><input type="email" name="email" id="email"
                placeholder="Inscrivez votre email ici" spellcheck="false" required /><br />
            <label for="sujet">Sujet du message :</label><input type="text" name="sujet" id="sujet" maxlength="50"
                placeholder="Inscrivez ici le sujet" required /><br />
            <label for="message">Votre message :</label><textarea name="message" id="message" cols="50" rows="15"
                required></textarea>
            <input type="submit" value="Envoyer" name="validation">
        </form>
    </div>
</main>