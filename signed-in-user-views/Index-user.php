<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/index.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" media="screen and (max-width: 650px)" href="../CSS/index-smallScreen.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitsey Studio | Official site</title>

    <style ></style>
</head>
<body>
    <div class="disclaimer">
        <div class="Bitsey">Bitsey Studio | Where virtual worlds thrive &copy;</div>
    </div>
    <header class="header-container">
        <div class="company-logo"><a href="./Index-user.php"><img src="../Images/Bitsey2.png" alt="">BITSEY</a></div>

        <!--Navigation menu code starts-->
        <div id='navigation-container' class="navigation-container">
            <div class="close-btn"><img  onclick='closeNavigationMenu()'id='close-btn'src="../Images/icons8-close-50.png" alt=""></div>
            <div class="navigation-block">
                <div class="navigation-block-content"><a href="./About-us-user.php" >ABOUT</a></div>
                <div class="focus-bar"></div>
            </div>
            <div class="navigation-block">
                <div class="navigation-block-content"><a href="./store-user-signed-in.php">STORE</a></div>
                <div class="focus-bar"></div>
            </div>
            <div class="navigation-block">
                <div class="navigation-block-content"><a href="./join-us-user.php">JOIN US</a></div>
                <div class="focus-bar"></div>
            </div>
            <div class="navigation-block">
                <div class="navigation-block-content"><a href="./contact-us-user.php">SUPPORT</a></div>
                <div class="focus-bar"></div>
            </div>
        </div>
        <!--Navigation menu code ends-->
        <div class="drop-down">
            <img id="dorp-down" src="../Images/dropdownmenu.png" alt="">
        </div>

    </header>



    <!--Advertisement slideshow starts-->
    <div class="advertisement-container">



        <!--style="width:100%; height: 700px;"-->
        <!-- Game photos-->
        <div class="img fade-in">
            <img src="../Images/MW2.jpg">
        </div>

        <div class="img fade-in">
            <img src="../Images/BF2042.jpg">
        </div>

        <div class="img fade-in">
            <img src="../Images/kirby.jpg">
        </div>

        <!-- Next and last advertisement buttons -->
        <a class="last-btn" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next-btn" onclick="plusSlides(1)">&#10095;</a>

        <div class="dot-container" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

    </div>


    <!--Advertisement slideshow ends-->




    <div class="explore-more-games-section">
        <div class="explore-more-games-title">Your virtual journey starts here</div>

        <!--Games selection-->
        <div class="explore-more-games-selection">

            <div class="game-container display-when-shrinked">
                <div class="game-pic-container"><img src="../Images/codmw2.jpg" alt=""></div>
                <div class="game-name-container">
                    <p>Call of Duty Modern Warfare</p>
                    <h3>RM 248.0</h3>
                </div>
            </div>

            <div class="game-container display-when-shrinked">
                <div class="game-pic-container"><img src="../Images/bf2042game.jpeg" alt=""></div>
                <div class="game-name-container">
                        <p>Battlefield 2042</p>
                        <h3>RM 199.0</h3>
                </div>
            </div>

            <div class="game-container">
                <div class="game-pic-container"><img src="../Images/watchdog2.jpg" alt=""></div>
                <div class="game-name-container">
                    <p>Watch Dogs 2</p>
                    <h3>RM 189.0</h3>
                </div>
            </div>

            <div class="game-container">
                <div class="game-pic-container"><img src="../Images/rd2.jpg" alt=""></div>
                <div class="game-name-container">
                    <p>Red Dead Redemption 2</p>
                    <h3>RM 219.0 </h3>
                </div>
            </div>
        </div>

        <!-- View more games-->
        <div class="view-more-games-container">
            <button class="visit-store-btn" onclick="location.href ='./store-user-signed-in.php'">VISIT STORE</button>
        </div>
    </div>
    <br>

    <!-- Join us section-->
    <div class="join-us-section">
        <div class="join-us-upper-container">
            <div class="join-us-title"><h1 >REALMS WHERE THE IMAGINATION OF OUR FOREFATHERS ARE BROUGHT TO LIFE</h1></div>
            <p class="join-us-description">At Bitsey, we all share the passion to create breath-taking games. 
                We develop games that can seemingly bring us to another dimension where human's imagination thrives.
            </p>
        </div>


        <div class="join-us-lower-container">

            <div class="content-block">
                <div class="join-us-image"><img src="../Images/about us.png" alt=""></div>
                <div class="content-block-description">
                    <p>Most of us are just like you, astonished by video games. We are here to create an alternate world where 
                        everything is made possible by human's imagination.</p>
                    <button id="enquire-btn" onclick="location.href ='./About-us-user.php'"><b>ABOUT US</b></button>
                </div>
            </div>

            <div class="content-block">
                <div class="join-us-image"><img src="../Images/game-dev.jpg" alt=""></div>
                <div class="join-us-lower-description">
                    <p>If you share the passion of game development, you are the one we are looking for.
                     We are always on the lookout for passionate game developers. Together we push the boundries of gaming to another level.</p>
                     <button id="enquire-btn" onclick="location.href ='./join-us-user.php'"><b>JOIN US</b></button>
                </div>
            </div>
        </div>

    </div>
    <!--Build with us section-->
    <div class="Build-with-us-container">
        <div class="build-with-us-content">
            <div id="build-with-us-title"><h1>BUILD WITH US</h1></div>
            <div class="build-with-us-title-bar"></div>
            <div class="build-with-us-description"><h3>At Bitsey, all games are developed using popular game engines and graphics software.</h3></div>
            <div class="build-with-us-logo-container">
                <div class="game-engine-logo"><img src="../Images/unity logo.jpg" alt=""></div>
                <div class="game-engine-logo"><img src="../Images/unreal.png" alt=""></div>
                <div class="game-engine-logo"><img src="../Images/blender.jpg" alt=""></div>
                <div class="game-engine-logo"><img src="../Images/forstbitenew.jfif" alt=""></div>
            </div>
        </div>
    </div>


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

<script src="../Javascript/index.js"></script>

</html>