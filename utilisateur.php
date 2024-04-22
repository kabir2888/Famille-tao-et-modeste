<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Utilisateur</title>
    <link rel="stylesheet" href="utilisateur.css">
</head>
<body style="background-image: url(image/nounou3.jpg);">
    <div class="container">
        <h1>Utilisateur</h1>
        <form action="utilisateur.php" method="post">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe :</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required>
            </div>
            <div class="form-group">
                <label for="numero_telephone">Numéro de téléphone :</label>
                <input type="tel" id="numero_telephone" name="numero_telephone" required>
            </div>
            <div class="form-group">
                <label for="Rôle">Role :</label>
                <select id="Rôle" name="Rôle" required>
                    <option value="">Sélectionnez un rôle</option>
                    <option value="parent">Parent</option>
                    <option value="nounou">Nounou</option>
                </select>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
    </div>
</body>
</html>