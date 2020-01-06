<?php
/**
 * Site (snow) - controler.php
 * User: Gwenael.WEST
 * Date: 16.12.2019
 */

 /**  Function to redirect the user to the home page (depending the action received by the index)*/
function home(){
    $_GET['action']="home";
    require "view/home.php";
}

/**
 *   Function to redirect the user to the login page
 */
function login(){
    $_GET['action']="login";
    require "view/login.php";
}

?>