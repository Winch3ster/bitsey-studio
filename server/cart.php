
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | Bitsey Store</title>

    <link rel="stylesheet" href="../CSS/webpage.css">
    <link rel="stylesheet" media="screen and (max-width: 650px)" href="../CSS/webpage-smallscreen.css">
    <link rel="stylesheet" href="../CSS/cart.css">

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body>
    <header class="header header-webpage-smallscreen">
        <div class="company-logo"><a href="Index.html"><img src="../Images/Bitsey2.png" alt="">BITSEY</a></div>
        
        <div id='navigation-container' class="navigation-container">
            <div class="close-btn"><img  onclick='closeNavigationMenu()'id='close-btn'src="../Images/icons8-close-50.png" alt=""></div>

            <div class="navigation-block-webpage"><a href="../signed-in-user-views/store-user-signed-in.php">Games</a></div>
            <div class="navigation-block-webpage"><a href="../signed-in-user-views/store-user-signed-in.php #sales-section">Deals</a></div>
            <div class="navigation-block-webpage last-item"><a href="../signed-in-user-views/contact-us-user.php">Support</a></div>
        </div>
        
        <div class="cart-container"><img src="./Images/Store-images/user.png" alt=""></div>
        <div class="cart-container"> <a href=""><img src="../Images/shopping-cart (1).png" alt=""></a></div>
        <div class="drop-down">
            <img id="drop-down" src="../Images/dropdownmenu.png" alt="">
        </div>
    </header>

    <div class="purchase-info-container">
        <div class="purchase-info-navigation">
            <p id="shopping-cart-nav" onclick="showShoppingCart()">Shopping Cart</p>
        </div>

        <div id="shopping-cart-container">
            <li class="cart-list">

            <?php
                include_once("./database-connection.php");
                session_start();

                $user = $_SESSION["user_id"];
                $getData = "SELECT game_name, img_link, platform, quantity, price FROM cart WHERE user_id='$user'";
                $result = $conn->query($getData);
                $totalPrice = 0;
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <div id="'.$row["game_name"].$row["platform"].'" class="cart-game-block">
                                <div class="cart-game-img-container"><img src="'.$row["img_link"].' " alt=""></div>
                                <div class="cart-block-content">
                                    <div class="cart-game-description">
                                        <p>'. $row["game_name"].'</p>';

                                        //Decide which label to render in the cart for each label (ps4, ps5 or pc) different design will be used
                                        if ($row["platform"] == "ps4") {
                                            echo '<div class="label ps-4">PS4</div>';
                                        } elseif ($row["platform"] == "ps5") {
                                            echo '<div class="label ps-5">PS5</div>';
                                        } else{
                                            echo '<div class="label pc">PC</div>';
                                        }


                            echo            '<p class="quantity">Quantity: <span>'. $row["quantity"] . '</span></p>
                                    </div>
                                    <div class="cart-game-price">
                                        <p>Price: <span class="game-price">'. $row["price"]*$row["quantity"]. '</span></p>
                                    </div>
                                    <button id="btn" class="remove-btn" onclick="removeSelectedGame('. "'". $row["game_name"]. "'" . "," . "'". $row["platform"]. "'" .')"> remove </button>
                                </div>        
                            </div>   
                        ';

                        $totalPrice = $totalPrice + ($row["price"]*$row["quantity"]);
                    }
                } else {
                    echo "Your cart is empty. Visit our store to get your favorite now!";
                }

                $conn->close();
            ?>
            </li>

            
            <br>
            <div class="check-out-container">
                <p>Subtotal: RM <span id="subtotal"> <?php echo $totalPrice ?></span></p>
                <button id="checkout-btn" class="primary-btn-style" onclick="checkout()">Checkout</button>
            </div>
        </div>

    </div>


    <footer id="footer">
        <div class="footer-container">
            <div class="footer-company-logo"><img src="../Images/Bitsey2.png" alt=""><b>BITSEY</b></div>
            <div class="footer-content">
                <div class="footer-links-container">
                    <ul class="column1">
                        <li><a href="../store.html">Store</a></li>
                        <li><a href="">Contact us</a></li>
                        <li><a href="https://www.google.com/maps/place/Kuala+Lumpur,+Federal+Territory+of+Kuala+Lumpur">Location</a></li>
                    </ul>
                    <ul class="column2">
                        <li><a href="../About-us.html">About us</a></li>
                        <li><a href="../join-us.html">Career</a></li>
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

<script src="../Javascript/cart-function.js"></script>
<script>

    function removeSelectedGame( gameName, platform){
        let item = document.getElementById(`${gameName}${platform}`);
        item.remove();
        
        //Need game name and platform to know which game to be removed from database table
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "./remove-cart-item.php");
        
        xhr.onreadystatechange = function() { if (xhr.readyState === 4 && xhr.status === 200) { console.log(xhr.responseText); } }
        var data = JSON.stringify({ "gameName": gameName, "platform": platform });
        xhr.setRequestHeader("Content-type", "application/json") // or "text/plain"
        xhr.send(data); 
        updateSubtotal();
    }

    function updateSubtotal(){
        var prices = document.querySelectorAll('.game-price');
        var subtotalSpan = document.getElementById('subtotal');
        var subtotal =0;
        for (i =0; i<prices.length; i++){
            subtotal += parseFloat(prices[i].innerHTML);
        }

        subtotalSpan.innerText = subtotal.toFixed(2);
        console.log("Subtotal now: " +subtotal);
    }

</script>


</html>



















