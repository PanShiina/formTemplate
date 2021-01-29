<?php
echo '<pre>';
var_dump($_POST);
var_dump($_FILES);
echo '</pre>';


require 'library/function.php';

// error

if(empty($_POST) == false) {

    echo '<img src="https://s2.qwant.com/thumbr/0x380/7/4/b593b8243611979a9988d26c6560094242ccbad3281f9eda60364cbbc3c4b2/warning-stamp-2.png?u=http%3A%2F%2Fwww.onlygfx.com%2Fwp-content%2Fuploads%2F2017%2F12%2Fwarning-stamp-2.png&q=0&b=1&p=0&a=1" alt="" width="200">';
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
    if ($_POST['Password'] !== '' && $_POST['Password2'] == ''){
        echo '<p>Veuillez entrez un mot de passe de comfirmtion';
    }
    if ($_POST['Password'] !== '' &&  $_POST['Password2'] !== ''){
        if($_POST['Password'] !== $_POST['Password2']){
            echo '<p>Veuillez entrer  un mot de passe identique';
        }
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