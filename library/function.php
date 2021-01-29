<?php
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
function restorRadio($a, $value) {
    if(isset($_POST[$a])){
        if($_POST[$a] == $value) {
            echo "checked";
        }
    }
}
