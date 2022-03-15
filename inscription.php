<?php include 'header.php' ?>
<html>
    <body>
        <div class="center">
            <div class="col-12 box center mt-5 p-2">
                <h2 class="pt-2 text-bold">
                    Bienvenue dans l'aventure KOUIZ ! :)
                </h2>
                <form method="post">
                    <div class="p-2">
                        <label for="login">Login:</label><br>
                        <input type="text" id="login" name="login"><br>
                    </div>
                    <div class="p-2 pb-4">
                        <label for="mail">Email:</label><br>
                        <input type="text" id="mail" name="mail">
                    </div>
                    <div class="p-2 pb-4">
                        <label for="EULA">J'accepte la <a onclick="showModal('mainModal', 'EULA', 'Pas de règle. Ici le plus intelligent est le roi. Bon après si y\'a un bug faut le dire a Pierrem quoi.')" href="#EULA">EULA</a></label>
                        <input type="checkbox" class="btn btn-secondary p-2" name="EULA">
                    </div>
                    <input type="submit" id="register" value="Inscription" class="btn btn-secondary col-12 p-2" name="register">
                </form>
            </div>
        </div>
    </body>
    <script>
    </script>
</html>

<?php
if (isset($_GET['EULA'])) {
    modal('mainModal', 'EULA', 'Aucune EULA.');
}
if(isset($_POST['register']))
{
    $login = $_POST['login'];
    $mail = $_POST['mail'];

    if (!empty($login) && !empty($mail))
    {
        $conn = connectionSQL();

        if (createUser($conn, $login, $mail))
        {
            modal('mainModal', 'Inscription', 'Félicitations, vous vous êtes inscrit(e) !');
        }
        else
        {
            modal('mainModal', 'Inscription', 'Erreur, le login ou le mail est déja utilisé.');
        }
    }
    else
    {
        modal('mainModal', 'Inscription', 'Erreur, un champ est vide.');
    }
}
?>

<?php include 'footer.php' ?>