<?php
/**
 * Site (snow) - model.php
 * User: Gwenael.WEST
 * Date: 13.01.2020
 */

function checklogin($userlogin, $mdplogin)
{
    if ( $userlogin == 'user' && $mdplogin == 1234) {
        return true;
    } else {
        return false;
    }
}






