<?php

function getQuestions($conn, int $quizzCode) {

    // For the flag quizz
    if ($quizzCode == 1) {

        $response = file_get_contents('https://restcountries.com/v3.1/all');

        $jsonArray = json_decode($response, true);

        foreach ($jsonArray as $row) {
            $name = $row["translations"]["fra"]["official"];
            $flag = $row["flags"]["png"];
            insertQuestion($quizzCode, $flag, $name);
        }
        return true;
    }
}

function insertQuestion(int $quizzCode, string $question, string $response ) {

    $conn = connectionSQL();

    $sql = "INSERT INTO Question (QuizzId, value, response) VALUES ('$quizzCode', '$question', '$response')";
    $results = $conn->query($sql);
    return true;

}
?>