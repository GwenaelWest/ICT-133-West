    <?php
    /**
     * Site (snow) - login.php
     * User: Gwenael.WEST
     * Date: 06.01.2020
     */

    ob_start();
    $titre = "Rent A Snow - Accueil"
    ?>

    <html>
    <body>

    <h2>Connexion</h2>
    <p></p>


    <form method="post" action="index.php?action=login">
        <fieldset>
            <legend>Personal information:</legend>
            Name<br>
            <input type="text" name="user" required>
            <br>
            Password<br>
            <input type="password" name="mdp" required>
            <br><br>
            <input type="submit" value="Submit">
            <a href="index.php?action=register">  Register</a>

        </fieldset>
    </form>

    </body>
    </html>

    <?php
    $content = ob_get_clean();
    require "gabarit.php";
    ?>


