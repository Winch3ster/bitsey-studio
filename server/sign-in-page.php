<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/sign-up.css">
    <link rel="stylesheet" media="screen and (max-width: 650px)" href="../CSS/sign-up-smallscreen.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Bitsey Studio</title>
</head>
<body>
    <div id="sign-up-form-container" class="sign-up-form-container center">
        <div class="title">
            <div style="width: 85%; margin:auto;">
                <h1>Bitsey Account <br> Sign In</h1>
                <p>Sign in now and enjoy exclusive deal at our online store</p>
            </div>
        </div>
        <div style="width: 85%; margin:auto; padding-top: 5%; padding-bottom: 5%;">
            <form id="signInForm" name="signInForm" action="./user-sign-in.php" method="post">

                <!--Personal information form-->
                <div id="personal-information-container">
                    <h2>Sign In</h2>
                    <label for="email">Email</label><br>
                    <input type="text" name="email" class="text-box"><br>
                    <label for="password">Password</label><br>
                    <input type="text" name="password" class="text-box"><br>

                    <button type="submit" class="btn">Sign In</button>
                </div>
            </form>
            <br>
            <div class="navigate"><a href="../sign-up-page.html">New user? Sign up to Bitsey now!</a></div>
        </div>
    </div>
    
</body>