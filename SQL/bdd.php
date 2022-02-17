<?php

function connectionSQL(){
    $hostName = "localhost";
    $BDDname = "kouiz";
    $usernameBDD = "root";
    $passwordBDD = "";
    // Create connection
    try {
        $conn = new PDO("mysql:host=$hostName;dbname=$BDDname", $usernameBDD, $passwordBDD);
        return $conn;
    }
    catch(PDOException $exp) {
        echo 'Impossible de se connecter à la base de données';
        return null;
    }
}

// a refacto
/*function deconnectionSQL($conn){
    mysqli_close($conn);
}
*/
?>