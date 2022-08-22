<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="../CSS/webpage.css">
    <link rel="stylesheet" media="screen and (max-width: 650px)" href="../CSS/webpage-smallscreen.css">
    <link rel="stylesheet" href="../CSS/game.css">
    <link rel="stylesheet" media="screen and (max-width: 650px)" href="../CSS/game-small-screen.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title id="page-title"></title>
</head>
<body>
    <!--Header-->
    <header class="header header-webpage-smallscreen">
        <div class="company-logo"><a href="./Index-user.php"><img src="../Images/Bitsey2.png" alt="">BITSEY</a></div>
        
        <div id='navigation-container' class="navigation-container">
            <div class="close-btn"><img  onclick='closeNavigationMenu()'id='close-btn'src="../Images/icons8-close-50.png" alt=""></div>

            <div class="navigation-block-webpage"><a href="store-user-signed-in.php">Games</a></div>
            <div class="navigation-block-webpage"><a href="store-user-signed-in.php #sales-section">Deals</a></div>
            <div class="navigation-block-webpage last-item"><a href="./contact-us-user.php">Support</a></div>
        </div>
        
        <div class="cart-container"><img src="../Images/Store-images/user.png" alt=""></div>
        <div class="cart-container"> <a href="../server/cart.php"><img src="../Images/shopping-cart (1).png" alt=""></a></div>
        <div class="drop-down">
            <img id="drop-down" src="../Images/dropdownmenu.png" alt="">
        </div>
    </header>

    <br>

    <div class="game-view-container">
        <div class="game-back-container">
            <button id="go-back-to-store-btn"><img src="../Images/left.png" alt=""></button>
        </div>

        <!--This code will only run when the viewport's width is less or equal to 650px -->
        <div class="small-screen-title">
            <h1 id="game-name-smallscreen"></h1>
            <div style="width: 40%; height:5px; background-color: rgb(3, 139, 165); margin-top: -2%;"></div>
            <br>
        </div>

        <div class="game-view-content">
            <img id="game-image" src="" alt="">
            <div class="game-view-content-container">
                <h1 id="game-name"></h1>
                <div id="game-name-bar-widescreen" style="width: 20%; height:5px; background-color: rgb(3, 139, 165); margin-top: -2%;"></div>
                <h1 class="price">RM <span id="price"></span></h1>
                <p style="color: rgba(23, 23, 23, 0.7);">*Select your platform here: </p>

                <div class="platform-select-container">
                    <button class="label ps-4" onclick="platformSelect('ps4')">PS4</button>
                    <button class="label ps-5" onclick="platformSelect('ps5')">PS5</button>
                    <button class="label pc" onclick="platformSelect('pc')">PC</button>
                </div>

                <p>Quantity left: <span id="quantity-left"></span></p>

                <div class="quantity-select-container">
                    <button id="quantity-decrement-btn" onclick="decreaseAmount()"> – </button>
                    <span id="quantity-display">1</span>
                    <button id="quantity-increment-btn" onclick="increaseAmount()"> + </button>
                    <p id="error-message"></p>
                </div>
                <br>
                <button id="add-to-cart" class="primary-btn-style" onclick="addItemToCart()"> Add to Cart</button>
            </div>
        </div>

        <!--Pop up box after adding item to cart-->
        <div class="modal-box-section" id="modal-box-section">
            <div class="modal-box-content-container">
                <div class="icon-container"><img src="../Images/Store-images/added-to-cart.gif" alt=""></div>
                <div class="wording-container">Successfully added to cart!</div>
                <br>
                <div class="done-btn-conatiner"><button class="primary-btn-style" onclick="closeDialog()">Done</button></div>
            </div>
        </div>

        <br>
        <div class="game-description-container">
            <h2>Game Description</h2>
            <div style="width: 10%; height:5px; background-color: rgb(3, 139, 165);"></div>
            <p id="game-description">
            </p>
        </div>
    </div>
    <br>
    <br>
    <hr style="background-color: grey; width: 85%; height: 1px; margin-bottom: 1%;">
    <br>
    <!--Footer-->

    <footer id="footer">
        <div class="footer-container">
            <div class="footer-company-logo"><img src="../Images/Bitsey2.png" alt=""><b>BITSEY</b></div>
            <div class="footer-content">
                <div class="footer-links-container">
                    <ul class="column1">
                        <li><a href="./store-user-signed-in.php">Store</a></li>
                        <li><a href="./contact-us-user.php">Contact us</a></li>
                        <li><a href="https://www.google.com/maps/place/Kuala+Lumpur,+Federal+Territory+of+Kuala+Lumpur">Location</a></li>
                    </ul>
                    <ul class="column2">
                        <li><a href="./About-us-user.php">About us</a></li>
                        <li><a href="./join-us-user.php">Career</a></li>
                    </ul>
                </div>
                <div class="footer-follow-us-container">
                    <h3>Follow us</h3>
                    <div class="follow-us-logo-container">
                        <a href="https://www.facebook.com/" target="_blank"><img src="../Images/facebook-app-symbol.png" alt=""></a>
                        <a href="https://www.instagram.com/?hl=en" target="_blank"><img src="../Images/instagram (1).png" alt=""></a>
                        <a href="https://www.youtube.com/" target="_blank"><img src="../Images/youtube.png" alt=""></a>
                        <a href="https://www.twitch.tv/" target="_blank"><img src="../Images/twitch.png" alt=""></a>
                        <a href="https://twitter.com/home?lang=en" target="_blank"><img src="../Images/twitter.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-disclaimer">© 2022 Bitsey Studio Inc. All rights reserved.</div>
    </footer>



</body>

<script src="../Javascript/game-mapper-user.js"></script>
<script src="../Javascript/game-function-user.js"></script>




</html>