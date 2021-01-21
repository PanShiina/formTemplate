<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Formulaire</h1>
        <form method="get" action="stockage.php" enctype="multipart/form-data">
            <div>
                <label for="a1">Prénom :</label>
                <input id="a1" type="text">
            </div>
            <div>
                <label for="a2">Nom :</label>
                <input id="a2" type="text">
            </div>
            <div>
                <label for="a3">mot de passe :</label>
                <input id="a3" type="password">
            </div>
            <div>
                <label for="a4">confirmation :</label>
                <input id="a4" type="password">
            </div>
            <div>
                Civilité :
                <input id="a5_1" type="radio" name="civ" value="1"><label for="a5_1">homme</label>
                <input id="a5_2" type="radio" name="civ" value="1"><label for="a5_2">femme</label>
            </div>
            <div>
                <label for="a6">Ville :</label>
                <select name="select" id="a6">
                    <option value="Paris">Paris</option>
                    <option value="Rennes">Rennes</option>
                    <option value="Marseille">Marseille</option>
                </select>
            </div>
            <div>
                Sport (optionnel) :
                <input id="a7_1" type="checkbox" name="sport[]"><label for="a7_1">Foot</label>
                <input id="a7_2" type="checkbox" name="sport[]"><label for="a7_2">Foot</label>
                <input id="a7_3" type="checkbox" name="sport[]"><label for="a7_3">Tennis</label>
                <input id="a7_4" type="checkbox" name="sport[]"><label for="a7_4">Basket</label>
                <input id="a7_5" type="checkbox" name="sport[]"><label for="a7_5">Boxe</label>
            </div>
            <div>
                <label for="a8">Photo :</label>
                <input type="file" name="photo">
            </div>
            <div>
                <label for="a9">Description :</label><br/>
                <textarea name="textarea" id="a9" cols="30" rows="10"></textarea>
            </div>
            <div>
                envoyer <input type="submit" value="Envoyer">
            </div>
        </form>
    </header>


</body>

</html>

