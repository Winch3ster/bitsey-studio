<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/receive-payment.css">
    <link rel="stylesheet" href="../CSS/webpage.css">
    <link rel="stylesheet" media="screen and (max-width: 650px)" href="../CSS/webpage-smallscreen.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitsey Official Store</title>
</head>
<body>
<?php

    //Due to time and knowledge constraint I could not implement further data manipulation on the purchased item(s)
    //Hence, once user click on purchase the his/her cart will be emptied
    include_once("./database-connection.php");


    session_start();
    $user = $_SESSION["user_id"];

    //copy rows in cart into purchased_items table
    $copyAndInsertQuery = "INSERT INTO purchased_items (game_name, img_link, platform, quantity, price, user_id) SELECT game_name, img_link, platform, quantity, price, user_id FROM cart WHERE user_id='$user'";
    
    if ($conn->query($copyAndInsertQuery) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $copyAndInsertQuery . "<br>" . $conn->error  ;
    }


    //Delete item(s) from cart table
    $deleteQuery = " DELETE FROM cart WHERE user_id='$user'";
    if ($conn->query($deleteQuery) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $deleteQuery . "<br>" . $conn->error ;
    }

?>

<div class="receive-payment-container">
    <div class="modal-box-content-container">
        <div class="icon-container"><img src="../Images/Store-images/check.png" alt=""></div>
        <div class="wording-container">Thank you for your purchase! We will ship out your order soon.</div>
        <br>
        <div class="done-btn-conatiner"><button class="primary-btn-style" onclick="backToStore()">Store</button></div>
    </div>
</div>
</body>

<script>



    function backToStore(){
        window.open("../signed-in-user-views/store-user-signed-in.php", "_self");
    }
</script>
</html>
