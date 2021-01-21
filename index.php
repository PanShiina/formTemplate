<?php
echo '<pre>';
var_dump($_POST);
var_dump($_FILES);
echo '</pre>';

// fonction retaure 
function restor($a){
    if (isset($_POST[$a])) {
        echo (htmlspecialchars($_POST[$a]));
    }
}
function restorCheck($a){
    if (isset($_POST[$a])){
        echo('checked="checked"');
    }

}

// debug

if(empty($_POST) == false) {
    if ($_POST['prenom'] == ''){
        echo '<p>Veuillez entrer un prénom';
    }
    if ($_POST['Nom'] == ''){
        echo '<p>Veuillez entrer un nom';
    }
    if ($_POST['eMail'] == ''){
        echo '<p>Veuillez entrer votre eMail';
    }
    if ($_POST['Password'] == ''){
        echo '<p>Veuillez entrer votre un mot de passe';
    }
        if ($_POST['Password'] !== $_POST['Password2'] ){
            echo '<p>Veuillez entrer  un mot de passe identique';
        }
    
//tableau au cas où XD
// $tab['prenom'] = $_POST['prenom'];
// $tab['nom'] = $_POST['Nom'];
// $tab['eMail'] = $_POST['eMail'];
// $tab['password'] = $_POST['Password'];
// $tab['password2'] = $_POST['Password2'];
// $tab['Civ'] = $_POST['Civ'];
// $tab['activitee'] = $_POST['activitee'];


    }





require 'views/view-page.php';


// if (isset($_POST) && $_POST['prenom'] == true) {
    
// }