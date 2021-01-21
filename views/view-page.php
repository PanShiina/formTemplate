

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="css/tmp.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <form action="" method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Prénom</label>
            <input type="text" class="form-control" name="prenom" id="" aria-describedby="helpId" placeholder="" value="<?php restor('prenom')?>">
        </div>
        <div class="form-group">
            <label for="">Nom</label>
            <input type="text" class="form-control" name="Nom" id="" aria-describedby="helpId" placeholder="" value="<?php restor('Nom')?>">
        </div>
        <div class="form-group">
            <label for="">eMail</label>
            <input type="email" class="form-control" name="eMail" id="" aria-describedby="emailHelpId" placeholder="" value="<?php restor('eMail')?>">
        </div>
        <div class="form-group">
            <label for="">Mot de passe</label>
            <input type="password" class="form-control" name="Password" id="" placeholder="" value="<?php restor('Password')?>">
        </div>
        <div class="form-group">
            <label for="">Confirmation</label>
            <input type="password" class="form-control" name="Password2" id="" placeholder="" value="<?php restor('Password2')?>">
        </div>
        <div class="form-check">Civilité :
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="Civ" id="" value="homme" >
            Homme
          </label>
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="Civ" id="" value="femme" >
            Femme
          </label>
        </div>
        <div class="form-group">
          <label for="">Votre photo</label>
          <input type="file" class="form-control-file" name="photo" id="" placeholder="" aria-describedby="fileHelpId">
          <small id="fileHelpId" class="form-text text-muted">optionelle</small>
        </div>
        <div class="form-check">
          <label class="form-check-label">Activitées:
            <input type="checkbox" class="form-check-input" name="activitee1" id="" value="Foot" <?php restorCheck("activitee1") ?> >
            Foot
          </label>
          <input type="checkbox" class="form-check-input" name="activitee2" id="" value="Gaming" <?php restorCheck("activitee2") ?>>
            Gaming
          </label>
        </div>
        <button type="submit" class="btn btn-primary">s'inscrire maintenant </button>

    </form>
</body>

</html>