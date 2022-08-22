<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitsey Store | Official Store</title>
    <link rel="stylesheet" href="../CSS/webpage.css">
    <link rel="stylesheet" media="screen and (max-width: 650px)" href="../CSS/webpage-smallscreen.css">
    <link rel="stylesheet" href="../CSS/store.css">
    <link rel="stylesheet" media="screen and (max-width: 650px)" href="../CSS/store-smallscreen.css">

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>


</head>
<body>

    <?php
        //save signed in user info
        session_start();

        $user = $_SESSION["user_id"];
        $userEmail = $_SESSION["user_email"];
    ?>

    <header class="header header-webpage-smallscreen">
        <div class="company-logo"><a href="./Index-user.php"><img src="../Images/Bitsey2.png" alt="">BITSEY</a></div>
        
        <div id='navigation-container' class="navigation-container">
            <div class="close-btn"><img  onclick='closeNavigationMenu()'id='close-btn'src="../Images/icons8-close-50.png" alt=""></div>

            <div class="navigation-block-webpage"><a href="#all-games-section">Games</a></div>
            <div class="navigation-block-webpage"><a href="#sales-section">Deals</a></div>
            <div class="navigation-block-webpage last-item"><a href="./contact-us-user.php">Support</a></div>
        
        </div>
        
        <div class="user-container">
            <img id="user-icon" src="../Images/Store-images/user.png" alt="">
            <div id="sign-out-container">
                <div class="sign-out-btn">
                    <button style="margin: auto;" class="primary-btn-style" onclick="window.open('../store.html', '_self')">Sign Off</button>
                </div>
            </div>
        </div>

        <div class="cart-container"> <a href="../server/cart.php"><img src="../Images/shopping-cart (1).png" alt=""></a></div> 
        <div class="drop-down">
            <img id="drop-down" src="../Images/dropdownmenu.png" alt="">
        </div>
    </header>

    <div class="welcome-user-container">Welcome, <span style="color: rgb(3, 139, 165);"> <?php echo $userEmail?> </span>! Enjoy exclusive deals at Bitsey only.</div>

    <!--Bottom navigation bar for small screen only-->
    <div class="bottom-navigation">
        <div class="navigation-container-bottom">
            <div id="sign-in-bottom"class="navigation-bottom-img"><img src="../Images/Store-images/user.png" alt=""></div>
            <p>Sign Off</p>
        </div>
        <div class="navigation-container-bottom">
            <div id="cart-bottom"class="navigation-bottom-img"><img src="../Images/shopping-cart (1).png" alt=""></div>
            <p>Cart</p>
        </div>
    </div>

    <div class="feature-game-store">
       <div class="featured-game-top-container-smallscreen">
            <div class="featured-game-top-container-img-container">
                <div class="gradient smallscreen"></div>
                <h1>Horizon Forbidden West</h1>
                <img src="../Images/Store-images/horizon-forbidden-west.png" alt="">
            </div>
            <div class="featured-game-top-content-container-smallscreen">
                <h1>Horizon Forbidden West</h1>
                <p>
                    Join Aloy as she braves the Forbidden West, a majestic but dangerous frontier that conceals mysterious new threats. 
                    Explore distant lands, fight bigger and more awe-inspiring machines, and
                    encounter astonishing new tribes as you return to the far-future, 
                    post-apocalyptic world of Horizon.
                </p>
                <div class="btn-container">
                    <button class="primary-btn-style" onclick="openGameView(22)">View Game</button>
                    <button class="secondary-btn-style" id="watchTrailerBtn">Watch Trailer</button>
                </div>
            </div>
       </div>

        <div class="featured-game-top-container">
            <div class="gradient"></div>
            <div class="featured-game-top-content-container">
                <h1>Horizon Forbidden West</h1>
                <p>
                    Join Aloy as she braves the Forbidden West, a majestic but dangerous frontier that conceals mysterious new threats. 
                    Explore distant lands, fight bigger and more awe-inspiring machines, a
                    nd encounter astonishing new tribes as you return to the far-future, 
                    post-apocalyptic world of Horizon.
                </p>
                <div class="btn-container">
                    <button class="primary-btn-style" onclick="openGameView(22)">View Game</button>
                    <button class="secondary-btn-style" id="watch-trailer-btn">Watch Trailer</button>
                </div>
            </div>
        </div>     
    </div>

    <div class="horizon-forbbiden-west-banner"><img src="../Images/Store-images/horizon-forbidden-west-banner.png" alt=""></div>

    <div class="horizon-forbidden-west-new-feature">
        <h1>What’s new in Horizon Zero Dawn</h1>
        <br>
        <br>
        <div class="new-feature-content-row">
            <div class="new-feature">
                <img src="../Images/Store-images/horizon-feature-1.jpg" alt="">
                <p>
                    Brave an expansive open world <br>
                    Discover distant lands, new enemies, rich cultures and striking characters.
                </p>
            </div>

            <div class="new-feature">
                <img src="../Images/Store-images/horizon-feature-2.jpg" alt="">
                <p>
                    Unravel startling mysteries <br>
                    Uncover the secret behind Earth's imminent collapse and unlock a hidden chapter in the ancient past... 
                    one that will change Aloy forever.
                </p>
            </div>
        </div>

        <div class="new-feature-content-row">
            <div class="new-feature">
                <img src="../Images/Store-images/horizon-feature-3.jpg" alt="">
                <p>
                    Confront new dangers <br>
                    Engage in strategic battles against enormous machines and mounted human enemies 
                    by using weapons, gear and traps crafted from salvaged parts.
                </p>
            </div>

            <div class="new-feature">
                <img src="../Images/Store-images/horizon-feature-4.jpg" alt="">
                <p>
                    A majestic frontier <br>
                    Explore the lush forests, sunken cities and 
                    towering mountains of a far-future America.
                </p>
            </div>
        </div>
    </div>

    <!--HFW editions promo container starts-->
    <div class="HFW-editions-container"> <!-- HFW short for "horizon forbidden west" -->

        <div class="HFW-edition-header-container">
            <img src="../Images/Store-images/sony-ps4-logo.jpg" alt=""> <!--PS4 logo-->
            <div class="HFW-header-title">
                <p>Available now on PS4 and PS5</p>
                <h2>Explore exclusive PS4 Edition of Horizon Forbidden West</h2>
            </div>
        </div>
        <br>
        <hr style="width: 20%; height: 2px; background-color:white;">
        <br>
        <div class="ps-label-container">
            <div class="ps4-label">PS4</div>
        </div>
        <div class="edition-container">
            <div class="HFW-edition">
                <img src="../Images/Store-images/horizoncollectors.jpg" alt="">
                <div class="content">
                    <h2>Horizon Forbidden West Collector Edition</h2>
                    <p>
                        A must-have collector edition with a physical disc copy for PS4, 
                        which also features exclusive soundtrack ( redeem via voucher), 
                        limited edition statue and more!
                    </p>
                    <p style="color: rgb(3, 139, 165); font-size: 1.5rem;">RM 890.00</p>
                </div>
                <div class="edition-btn-container">
                    <button class="primary-btn-style" onclick="openGameView(23)">View</button>
                </div>
            </div>

            <div class="HFW-edition">
                <img src="../Images/Store-images/horizoncollectors.jpg" alt="">
                <div class="content">
                    <h2>Horizon Forbidden West Special Edition</h2>
                    <p>
                        A gorgeous SteelBook with a physical disc copy for PS4, 
                        which also features the digital soundtrack (via voucher), 
                        as well as a mini art book.
                    </p>
                    <p style="color: rgb(3, 139, 165); font-size: 1.5rem;">RM 309.90</p>
                </div>
                <div class="edition-btn-container">
                    <button class="primary-btn-style" onclick="openGameView(24)">View</button>
                </div>
            </div>
        </div>
    </div>
    <!--HFW editions promo container ends-->

    <div class="hottest-game-container">
        <h1 style="color: rgb(3, 139, 165); margin-left: 5%; font-weight: normal;">Explore our hottest title</h1>
        <div style="background-color: rgb(3, 139, 165); margin-top: -1%; margin-left: 5%; width: 10%; height: 10px;"></div>

        <br>
        <div class="four-column-container">
            <!--When the width of the viewport is small, the four column container will break down to 2 column container-->
            <div class="two-column-container">
                <div class="game-container two-column" onclick="openGameView(0);"><p>View</p><img src="../Images/Store-images/Games/bfv.jpg" alt=""></div>
                <div class="game-container two-column" onclick="openGameView(1)"><p>View</p><img src="../Images/Store-images/Games/lego-star-wars.jpg" alt=""></div>
            </div>
            <div class="two-column-container">
                <div class="game-container two-column" onclick="openGameView(2)"><p>View</p><img src="../Images/Store-images/Games/fifa23.jpg" alt=""></div>
                <div class="game-container two-column" onclick="openGameView(3)"><p>View</p><img src="../Images/Store-images/Games/farcry5.jpg" alt=""></div>
            </div>
        </div>

        <div class="four-column-container">
            <div class="two-column-container">
                <div class="game-container two-column" onclick="openGameView(4)"><p>View</p><img src="../Images/Store-images/Games/ghost-of-tsushima.jpg" alt=""></div>
                <div class="game-container two-column" onclick="openGameView(5)"><p>View</p><img src="../Images/Store-images/Games/rdr2.jpg" alt=""></div>
            </div>
            <div class="two-column-container">
                <div class="game-container two-column" onclick="openGameView(6)"><p>View</p><img src="../Images/Store-images/Games/for-honor.jpg" alt=""></div>
                <div class="game-container two-column" onclick="openGameView(7)"><p>View</p><img src="../Images/Store-images/Games/monster-hunter-world.jpg" alt=""></div>
            </div>
        </div>
  
    </div>

    <hr style="background-color: grey; width: 70%; height: 1px; margin-bottom: 1%; margin-top: 1%;">

    <div id="sales-section">
            <div class="sales-title-container">
                <h1>Exclusive Mid-Year Sales </h1>
                <hr style="width: 15%; height: 4px; background-color: rgb(3, 139, 165);">
                <p>
                    Our annual Mid-Year sales in here! Purchase your favorite and title winning games
                     and save up to 70% now at Bitsey!
                </p>
            </div>

            <br>
            <br>
            <div class="four-column-container">
                <div class="two-column-container">
                    <div class="game-container two-column" onclick="openGameView(8)"><p>View</p><img src="../Images/Store-images/Games/bf1.jpg" alt=""><div class="discount-tag">60% OFF</div></div>
                    <div class="game-container two-column" onclick="openGameView(9)"><p>View</p><img src="../Images/Store-images/Games/fall-guys.jpg" alt=""><div class="discount-tag">60% OFF</div></div>
                </div>
                <div class="two-column-container">
                    <div class="game-container two-column" onclick="openGameView(6)"><p>View</p><img src="../Images/Store-images/Games/for-honor.jpg" alt=""><div class="discount-tag">65% OFF</div></div>
                    <div class="game-container two-column" onclick="openGameView(10)"><p>View</p><img src="../Images/Store-images/Games/resident-evil-biohazard.jpg" alt=""><div class="discount-tag">70% OFF</div></div>
                </div>
            </div>

    </div>

    <br>
    <hr style="background-color: grey; width: 70%; height: 1px; margin-bottom: 1%; margin-top: 1%;">

    <div id="all-games-section">
        <div class="all-games-title">
            <p>DISCOVER YOUR FAVORITE GAME HERE IN OUR  STORE</p>
        </div>
        <div class="four-column-container">
            <!--When the width of the viewport is small, the four column container will break down to 2 column container-->
            <div class="two-column-container">
                <div class="game-container two-column" onclick="openGameView(11)"><p>View</p><img src="../Images/Store-images/Games/cod-ww2.jpg" alt=""></div>
                <div class="game-container two-column" onclick="openGameView(12)"><p>View</p><img src="../Images/Store-images/Games/God-of-war-ragnarok.jpg" alt=""></div>
            </div>
            <div class="two-column-container">
                <div class="game-container two-column" onclick="openGameView(13)"><p>View</p><img src="../Images/Store-images/Games/nba22.jpg" alt=""></div>
                <div class="game-container two-column" onclick="openGameView(14)"><p>View</p><img src="../Images/Store-images/Games/r6-siege.jpg" alt=""></div>
            </div>
        </div>

        <div class="four-column-container">
            <!--When the width of the viewport is small, the four column container will break down to 2 column container-->
            <div class="two-column-container">
                <div class="game-container two-column" onclick="openGameView(1)"><p>View</p><img src="../Images/Store-images/Games/lego-star-wars.jpg" alt=""></div>
                <div class="game-container two-column" onclick="openGameView(15)"><p>View</p><img src="../Images/Store-images/Games/no-man-sky.jpg" alt=""></div>
            </div>
            <div class="two-column-container">
                <div class="game-container two-column" onclick="openGameView(16)"><p>View</p><img src="../Images/Store-images/Games/fifa22.jpg" alt=""></div>
                <div class="game-container two-column" onclick="openGameView(17)"><p>View</p><img src="../Images/Store-images/Games/horizon-zero-dawn.jpg" alt=""></div>
            </div>
        </div>

        <div class="four-column-container">
            <!--When the width of the viewport is small, the four column container will break down to 2 column container-->
            <div class="two-column-container">
                <div class="game-container two-column" onclick="openGameView(18)"><p>View</p><img src="../Images/Store-images/Games/minecraft.jpg" alt=""></div>
                <div class="game-container two-column" onclick="openGameView(19)"><p>View</p><img src="../Images/Store-images/Games/elden-ring.jpg" alt=""></div>
            </div>
            <div class="two-column-container">
                <div class="game-container two-column" onclick="openGameView(20)"><p>View</p><img src="../Images/Store-images/Games/cyberpunk.jpg" alt=""></div>
                <div class="game-container two-column" onclick="openGameView(21)"><p>View</p><img src="../Images/Store-images/Games/bugsnax.jpg" alt=""></div>
            </div>
        </div>

    </div>
    <br>
    <hr style="background-color: rgb(3, 139, 165); height: 2px;">
    <br>
    <div class="why-buy-at-bitsey-section">
        <p>Why buy at Bitsey?</p>
        <br>
        <div class="why-buy-at-bitsey-content-container">
            <div class="content-block">
                <img src="../Images/Store-images/returning.png" alt="">
                <p>7 Days Return Policy</p>
            </div>

            <div class="content-block">
                <img src="../Images/Store-images/fast-delivery.png" alt="">
                <p>Fast Delivery</p>
            </div>

            <div class="content-block">
                <img src="../Images/Store-images/low-price.png" alt="">
                <p>Cheapest In The Market</p>
            </div>
        </div>
    </div>
    <br>
    <hr style="background-color: rgb(3, 139, 165); height: 2px;">
    <br>

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
    <!--Extra space at the bottom (for small creen only) so that the bottom navigation won't block an footer content-->
    <div class="bottom-buffer"></div>
</body>
<script src="../Javascript/webpage.js"></script>
<script>
    var gameInvoked;
    function openGameView(gameId){
        window.open('./game-user.php', "_self");
        gameInvoked = gameId;
        localStorage.setItem("gameInvoked", gameInvoked);
        console.log(gameInvoked);
    }
    var cartBottom =document.getElementById('cart-bottom');
    cartBottom.addEventListener('click', ()=>{
        window.open("../server/cart.php")
    });

    var cartBottom =document.getElementById('sign-in-bottom');
    cartBottom.addEventListener('click', ()=>{
        window.open("../server/sign-in-page.php")
    });

    var watchTrailerBtn = document.getElementById("watch-trailer-btn");
    watchTrailerBtn.addEventListener('click', ()=>{
        window.open("https://www.youtube.com/watch?v=Lq594XmpPBg", "_blank");
    })
</script>
</html>

