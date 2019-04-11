<html>
    <head>
    </head>
    <body>
        <h1>Inscrption</h1>
        <form action="index.php?uc=utilisateur&action=sinscrire" method="POST">
            <table>
                <tr>
                    <td>Adresse mail</td>
                    <td><input type="email" name="adresse_mail" required></td>
                </tr>
                <tr>
                    <td>Mot de passe</td>
                    <td><input type="password" name="mdp" required></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="Nom" required></td>
                </tr>
                <tr>
                    <td>Prenom</td>
                    <td><input type="text" name="Prenom" required></td>
                </tr>
                <tr>
                    <td>Rue</td>
                    <td><input type="text" name="Rue" required></td>
                </tr>
                <tr>
                    <td>Code postal</td>
                    <td><input type="number" name="CP" required></td>
                </tr>
                <tr>
                    <td>Ville</td>
                    <td><input type="text" name="Ville" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="S'inscrire" required></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>