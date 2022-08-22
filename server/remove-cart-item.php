<?php
    include_once("./database-connection.php");

    $removeItemJson = file_get_contents('php://input');

    $decoded_json = json_decode($removeItemJson, true); //decode the received json file
    $gameName = $decoded_json['gameName'];
    $platform = $decoded_json['platform'];

    $removeItemQuery = " DELETE FROM cart WHERE game_name='$gameName' AND platform='$platform' ";

    if ($conn->query($removeItemQuery) === TRUE) {
        echo "The game is deleted successfully";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }

?>