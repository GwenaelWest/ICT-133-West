<?php
/**
 * Site (snow) - controler.php
 * User: Gwenael.WEST
 * Date: 16.12.2019
 */
session_start();
require "model/model.php";
 /**  Function to redirect the user to the home page (depending the action received by the index)*/
function home(){
    $_GET['action']="home";
    require "view/home.php";
}

/**
 *   Function to redirect the user to the login page
 */
function login()
{
    $_GET['action'] = "login";
    $user= @$_POST["user"];
    $mdp = @$_POST["mdp"];

    if (checklogin($user,$mdp)) {
        $_SESSION["user"] = $user;
        require "view/home.php";
    }
    else {
        require "view/login.php";
    }
}

function register(){
    $_GET['action']="register";
    
    $write="model/snows.json";         /* chemin du fichier json */

    $data=array(                            /* tableau enregistrant les données du user et du password*/
        $username=@$_POST["username"],
        $password=@$_POST["password"],
    );

    $encode=json_encode($data);                         /* encode les données en format json */

    file_put_contents($write,$encode);                   /* écris le contenu dans le fichier json.*/
    
    require "view/register.php"; 
}

?>
