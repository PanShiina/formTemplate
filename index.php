<?php
echo '<pre>';
var_dump($_POST);
var_dump($_FILES);
echo '</pre>';


require 'library/function.php';

// error

require 'library/errorDisplay.php';
    
//tableau au cas où XD
// $tab['prenom'] = $_POST['prenom'];
// $tab['nom'] = $_POST['Nom'];
// $tab['eMail'] = $_POST['eMail'];
// $tab['password'] = $_POST['Password'];
// $tab['password2'] = $_POST['Password2'];
// $tab['Civ'] = $_POST['Civ'];
// $tab['activitee'] = $_POST['activitee'];







require 'views/view-page.php';


// if (isset($_POST) && $_POST['prenom'] == true) {
    
// }