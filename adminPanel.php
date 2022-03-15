<?php include 'header.php' ?>
<?php require_once 'Controller/bdd.php'?>
<?php require_once 'Controller/questionAccess.php'?>
<?php redirect_if_not_admin();?>
<html>
    <body>
        <div class='p-2'>
            <form action="adminPanel.php" method="post">
                <input type="submit" name="Quizz1" value="GO" />
            </form>
        </div>
    </body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Quizz1'])){
        $conn = connectionSQL();
        $validated = getQuestions($conn, 1);

        if ($validated == true) {
            echo 'Import des questions réussi';
        }
    }
?>

<?php include 'footer.php' ?>
