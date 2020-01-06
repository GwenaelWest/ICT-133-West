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

    <h2>Anthropocène</h2>
    <p>on l'appelait ainsi car .</p>

    <form action="/action_page.php">
        <fieldset>
            <legend>Personal information:</legend>
            Name<br>
            <input type="text" name="firstname" value="Kob'ander" required>
            <br>
            Password<br>
            <input type="password" name="lastname" required>
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


