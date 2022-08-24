//This file performs all the javascript function in game.html or game-user.php files
var goBackToStoreBtn = document.getElementById('go-back-to-store-btn');
var amountToBuy = 1;
var quantityDisplay = document.getElementById('quantity-display');
var platformSelected = "";


//Platform label 
var ps4Label = document.getElementsByClassName('ps-4');
var ps5Label = document.getElementsByClassName('ps-5');
var pcLabel = document.getElementsByClassName('pc');


goBackToStoreBtn.addEventListener('click', ()=>
    window.open('../signed-in-user-views/store-user-signed-in.php',"_self")
);


function addItemToCart(){
    //Restrict users from adding game to cart if they have not selected any platform
    if ( platformSelected === null || platformSelected === ""){
        alert("Error: Please select a platform to continue.");
    }else{
        var gameName = document.getElementById('game-name').innerText;
        sendJSON();
        openDialog();
    }
}

function openDialog(){
    //Shows a dialog to indicate game successfully added to cart
    var dialogBox = document.getElementById('modal-box-section');

    dialogBox.style.display = 'block';
}

function closeDialog(){
    var dialogBox = document.getElementById('modal-box-section');
    dialogBox.style.display = 'none';

    window.open('../signed-in-user-views/store-user-signed-in.php',"_self"); //Navigate back to store
}


function sendJSON(){
    //Get game information from the webpage
    var gameName = document.getElementById('game-name').innerText;
    var price = document.getElementById('price').innerText;
    var gameImageLink = document.getElementById('game-image').src;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../server/get-json.php");
    
    xhr.onreadystatechange = function() { if (xhr.readyState === 4 && xhr.status === 200) { console.log(xhr.responseText); } }
    var data = JSON.stringify({ 'gameName': gameName, 'gameImageLink': gameImageLink, 'platform': platformSelected, 'amountToBuy': amountToBuy, 'price': price });

    xhr.setRequestHeader("Content-type", "application/json") // or "text/plain"
    xhr.send(data); 

}








function increaseAmount(){
    //If the users try to increase the quantity higher than available quantity, prompt error
    if (amountToBuy >= localStorage.getItem('quantity')){
        errorMessage.innerText = "*Selected amount exceed available quantity";
    }
    else{
        errorMessage.innerText = "";
        amountToBuy += 1;
        quantityDisplay.innerText = amountToBuy; //update the number in the selected quantity field
    }
}

function decreaseAmount(){
    //If the users try decrease the quantity to zero or less than 1, prompt error
    if (amountToBuy <= 1 ){
        errorMessage.innerText = "*Invalid input quantity";
    } else{
        errorMessage.innerText = "";
        amountToBuy -= 1;
        quantityDisplay.innerText = amountToBuy;//update the number in the selected quantity field
    }
}


function platformSelect(platform){
    //Set opacity of other label lower than the selected platform label
    platformSelected = platform;
    switch (platform){
        case 'ps4':
            ps4Label[0].style.opacity = '1';
            ps5Label[0].style.opacity = '0.3';
            pcLabel[0].style.opacity = '0.3';
            break;
        case 'ps5':
            ps4Label[0].style.opacity = '0.3';
            ps5Label[0].style.opacity = '1';
            pcLabel[0].style.opacity = '0.3';
            break;
        case 'pc':
            ps4Label[0].style.opacity = '0.3';
            ps5Label[0].style.opacity = '0.3';
            pcLabel[0].style.opacity = '1';
            break;
    }

    console.log(platformSelected);
}




