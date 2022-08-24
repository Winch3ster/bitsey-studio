<?php
    include_once("./database-connection.php");
    session_start();

    $user = $_SESSION["user_id"];

    //Receive json file from gmae-function.js
    $json = file_get_contents('php://input');


    $decoded_json = json_decode($json, true); //decode the received json file

    //Extracting the information from the json
    //$decoded_json['gameName']; $decoded_json['gameImageLink'];
    $gameName = $decoded_json['gameName'];
    $imgLink = $decoded_json['gameImageLink'];
    $platform = $decoded_json['platform'];
    $amountToBuy = $decoded_json['amountToBuy'];
    $price = $decoded_json['price'];

    //Save it in database
    $insertQuery = " INSERT INTO cart (game_name, img_link, platform, quantity, price, user_id) VALUES ('$gameName', '$imgLink', '$platform', '$amountToBuy', '$price' , '$user') ";

    $checkIfExistQuery = " SELECT * FROM cart WHERE game_name='$gameName' AND platform='$platform'";

    echo $gameName;
    echo $platform;

    $result = $conn->query($checkIfExistQuery);//check if the game (with the same platform) exist in the database


    if ($result->num_rows > 0){
        //If the game already exist in the database, update the quantity instead of creating new record
        $getExistedQuantity = " SELECT quantity FROM cart WHERE game_name='$gameName' AND platform='$platform'";
        $databaseQuantity = $conn->query($getExistedQuantity);

        $newQuantity = $databaseQuantity + $amountToBuy;

        echo $newQuantity;
        $updateQuantityQuery = " UPDATE cart SET quantity='$newQuantity' WHERE game_name='$gameName' AND platform='$platform'";

        $conn->query($updateQuantityQuery);
    } else {

        //If the game(with same platform) does not exist in database, create a new record.
        if ($conn->query($insertQuery) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }
    
    $conn->close();
?>