//Json game list
var gameToRender = localStorage.getItem("gameInvoked");

var gameName = document.getElementById('game-name');
var gameNameSmallScreen = document.getElementById('game-name-smallscreen');
var tabName = document.getElementById('page-title');
var availableQuantity = document.getElementById('quantity-left');
var gameDescription = document.getElementById('game-description');
var gameImage = document.getElementById('game-image');
var errorMessage = document.getElementById('error-message');
var price = document.getElementById('price');
var pageTitle = document.getElementById('page-title');
console.log("game mapper running");
fetch("../gameList.json")
.then(response => {
    return response.json();
})
.then(jsondata => {
    var gameList = jsondata;
    gameName.innerText = gameList[gameToRender].gameName;   
    gameNameSmallScreen.innerText = gameList[gameToRender].gameName;
    tabName.innerText = gameList[gameToRender].gameName;
    availableQuantity.innerText = gameList[gameToRender].availableQuantity;
    gameDescription.innerText = gameList[gameToRender].description;

    var relativePicUrl = "../"+gameList[gameToRender].pictureUrl;
    gameImage.src = relativePicUrl;
    price.innerText = gameList[gameToRender].price;
    pageTitle.innerText = gameList[gameToRender].gameName;
    localStorage.setItem("quantity", gameList[gameToRender].availableQuantity);
    console.log("game mapper running");
});



