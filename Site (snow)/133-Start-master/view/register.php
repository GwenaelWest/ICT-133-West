<?php
/**
* Site (snow) - register.php
* User: Gwenael.WEST
* Date: 20.01.2020
*/

ob_start();
$titre = "Rent A Snow - Accueil"
?>

<html>
<body>

<h2>Create Account</h2>
<p></p>


<form method="post" action="index.php?action=login">
    <fieldset>
        <legend>Personal information:</legend>
        Name<br>
        <input type="text" name="user" required>
        <br>
        E-mail<br>
        <input type="email" name="email" required>
        <br>
        Password<br>
        <input type="password" name="mdp" required>
        <br><br>
        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>



