<?php

function createUser($conn, string $login, string $mail){
    $sql = "SELECT id FROM player WHERE login = '$login' OR email = '$mail'";
    $results = $conn->query($sql);

    $number = 0;

    foreach ($results as $row){
        $number = $row['id'];
    }

    // User already exist
    if ($number > 0)
        return false;
    else{
        $sql = "INSERT INTO Player (login, email, isAdmin) VALUES ('$login', '$mail', False)";
        $results = $conn->query($sql);
        return true;
    }
}

function connect($conn, string $login, string $mail){

    $connected = false;
    $sql = "SELECT id, login, email, isAdmin FROM player WHERE login = '$login' AND email = '$mail'";
    $results = $conn->query($sql);

    $player = null;

    foreach ($results as $row){
        $connected = true;
        $player = new Player($row['id'], $row['login'], $row['email'], $row['isAdmin']);
    }

    if ($connected == true){
        $_SESSION['player'] = serialize($player);
        return true;
    }

    return false;
}

function disconnect()
{
    session_unset();
}
?>