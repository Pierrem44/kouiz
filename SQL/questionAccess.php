<?php
function getQuestions($conn, int $quizzCode) {
    if ($quizzCode == 1){

        $response = file_get_contents('https://restcountries.com/v3.1/all');
        //echo (json_encode($response));

        //$response = json_decode($response);
        $jsonArray = json_decode($response, true);
        //$response = json_decode($response);
        //foreach ($response as $row)
        //echo gettype($response);
        foreach ($jsonArray as $row){
            $name = $row["translations"]["fra"]["official"];
            $flag = $row["flags"]["png"];
            echo $name;
            echo "<img src='". $flag ."'>";
        }
        return true;
    }
}
?>