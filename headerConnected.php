<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand neon-light" href="index.php">Kouiz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsConnected" aria-controls="navbarsConnected" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsConnected">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active neon-very-light" aria-current="page" href="profile.php">
                        <?= unserialize($_SESSION['player'])->login ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?disconnect=true">
                        <i class="fas fa-power-off fa-fw pt-1 neon-very-light" style="color: var(--fa-navy);"></i>
                    </a>
                </li>
                <?php
                    if (unserialize($_SESSION['player'])->isAdmin == 1) {
                        echo '<li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="adminPanel.php">
                                    Panel admin
                                </a>
                              </li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>