<?php include_once 'tools/session.php'?>
<?php include_once 'tools/cssLoader.php' ?>
<?php require_once 'tools/jsUtilities.php'?>
<?php require_once 'tools/phpUtilities.php'?>
<?php require_once 'objects/objectLoader.php'?>
<?php require_once 'SQL/bdd.php'?>
<?php require_once 'SQL/accountAccess.php'?>

<script type="text/javascript" src="scripts/jquery/jquery.js"></script>
<head>
    <title>Kouiz</title>
</head>
<?php
if (isset($_SESSION['player'])) {

  include 'headerConnected.php';
  
} else {

  include 'headerDisconnected.php';

}

if(isset($_POST['connexion'])) {
    $login = $_POST['login'];
    $mail = $_POST['mail'];

    if (!empty($login) && !empty($mail)) {
        $conn = connectionSQL();

        if (connect($conn, $login, $mail)) {
          header('Location: index.php');
        } else {
          modal('mainModal','Connexion',"Mauvais pseudo ou mail !");
        }

    }
    else
    {
        modal('mainModal','Connexion',"Erreur connexion : Un champ vide !");
    }
}
if(isset($_GET['disconnect'])) {
  disconnect();
  header('Location: index.php');
}
?>

<!-- Modal part -->
<div class="modal" id="mainModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>

<script>
function showModal(modalId, title, message) {
    var modal = new bootstrap.Modal(document.getElementById('mainModal'));
    var modalElement = $('#' + modalId);
    modalElement.find('.modal-title').text(title);
    modalElement.find('.modal-body').text(message);
    modal.show();
}
</script>