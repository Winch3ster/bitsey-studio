<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/sign-up.css">
    <link rel="stylesheet" media="screen and (max-width: 650px)" href="../CSS/sign-up-smallscreen.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Bitsey Sign In</title>
</head>
<body>
    <?php
    include_once("./database-connection.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

    $checkUserExistDatabase = "SELECT * FROM `customer_details` WHERE email='$email' AND user_password='$password'";
    $result = $conn->query($checkUserExistDatabase);

    if($result->num_rows > 0){

        //query for the user_id from the database
        $userId = $conn->query("SELECT user_id, email FROM `customer_details` WHERE email='$email' AND user_password='$password'");

        //Read the returned result and save it in a variable called $user
        $user;
        $userEmail;
        while($row = $userId->fetch_assoc()) {
            $user= $row["user_id"];
            $userEmail = $row["email"];
        }
        
        session_start();//start a session and set user_id to the acquired user id.
        $_SESSION["user_id"] = $user;
        $_SESSION["user_email"] = $userEmail;

   
        header("Location: ../signed-in-user-views/store-user-signed-in.php");
        exit();
    } else {
        echo "
        <div id='modal-box-container' class='modal-box-container' style='Display: block;'>
            <h2 style='color: rgb(245, 15, 15);'>Incorrect password or email</h2>
            <p>Please make sure your details are correct before proceeding.</p>
            <div class='btn-container'>
                <div id='backToSignIn' class='btn danger'>Back</div>
            </div>
        </div>
        ";
    }

    ?>
</body>
<script>
    var backToSignIn = document.getElementById('backToSignIn');
    
    backToSignIn.addEventListener('click', ()=>{
        console.log("Back btn pressed");
        window.open("./sign-in-page.php", "_self");
    })

</script>



</html>