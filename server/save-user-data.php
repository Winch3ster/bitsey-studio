<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/sign-up.css">
    <link rel="stylesheet" media="screen and (max-width: 650px)" href="../CSS/sign-up-smallscreen.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Bitsey</title>
</head>
<body>
<?php
    include_once("./database-connection.php");

    $fullName = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $contact = $_POST["contact"];

    //adress
    $line1 = $_POST["line1"];
    $line2 = $_POST["line2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $postcode = $_POST["postcode"];
    $country = $_POST["country"];
    $address = $line1 . $line2 . ", " . $city . ", " . $state . ", " . $postcode . ", " . $country ;

    //Payment 
    $cardHolderName = $_POST["cardHolderName"];
    $cardNumber = $_POST["cardNumber"];
    $expireDate = $_POST["expireDate"];
    $cvv = $_POST["cvv"];


    $saveCustomerDetailsQuery = " INSERT INTO customer_details (full_name, contact, email, user_password, customer_address, card_holder_name, card_number, expire_date, cv) VALUES ('$fullName', '$contact', '$email', '$password', '$address', '$cardHolderName', '$cardNumber', '$expireDate', '$cvv' )";


    $checkIfExistQuery = " SELECT * FROM customer_details WHERE email='$email'";

    $result = $conn->query($checkIfExistQuery);


    if ($result->num_rows > 0){
        echo "
        <div id='modal-box-container' class='modal-box-container' style='Display: block;'>
            <h2 style='color: rgb(245, 15, 15);'>Entered email exists in our database</h2>
            <p>Sign in instead.</p>
            <div class='btn-container'>
                <div id='toSignIn' class='btn '>Sign In</div>
            </div>
        </div>
        ";
        
    } else {

        if ($conn->query($saveCustomerDetailsQuery) === TRUE) {
            echo "
                <div id='modal-box-container' class='modal-box-container' style='Display: block;'>
                    <h2 style='rgb(20,118,243);'>Bitsey account created successfully</h2>
                    <p>Sign in to Bitsey Store now!</p>
                    <div class='btn-container'>
                        <div id='toSignIn' class='btn '>Sign In</div>
                    </div>
                </div>
                ";
        } else {
            echo "Error: " . $saveCustomerDetailsQuery . "<br>" . $conn->error;
        }
    }


?>
</body>
<script>
    var toSignInPage = document.getElementById('toSignIn');

    toSignInPage.addEventListener('click', ()=>{
        window.open("./sign-in-page.php", '_self');
    })
</script>


</html>