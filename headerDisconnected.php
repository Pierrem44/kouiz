<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand neon-light" href="index.php">Kouiz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle neon-very-light" style="color: white;" href="#" id="dropdown04" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Connexion</a>
                    <ul class="dropdown-menu bg-black" style="background-color: grey;" aria-labelledby="dropdown04">
                        <div class="pt-3 px-3 border border-5 bg-warning">
                            <form method="post">
                                <div class="p-2">
                                    <label for="login">Login:</label><br>
                                    <input type="text" id="login" name="login"><br>
                                </div>
                                <div class="p-2 pb-4">
                                    <label for="mail">Email:</label><br>
                                    <input type="text" id="mail" name="mail">
                                </div>
                                <input type="submit" id="connexion" class="btn btn-secondary col-12 p-2" name="connexion">
                                <a class="pt-1" style="text-align:right" href="inscription.php">Pas encore de compte ?</a>
                            </form>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>