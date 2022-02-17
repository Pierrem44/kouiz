<?php include 'header.php' ?>
<html>
    <body>

    <?php
    if (isset($_SESSION['player'])) {
        
        header('Location: menu.php');

    } else {
    
        echo '
        <div class="fs-1 fw-bold p-4 text-decoration-underline neon-very-light" style="color: white; text-align:center;border:solid;border-width:10px">Testez votre intelligence</div>
        <img src="ressources/images/intelligence.jpg" class="col-4 center">
        ';

    }
    ?>
    </body>
</html>
<script>
</script>
<?php include 'footer.php' ?>
