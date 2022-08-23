console.log('This is from the game function js');
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
    if ( platformSelected === null || platformSelected === ""){
        alert("Error: Please select a platform to continue.");
    }else{
        var gameName = document.getElementById('game-name').innerText;


        console.log("Added " + gameName + " to your cart");
        console.log("Platform selected: " + platformSelected);
        console.log("Quantity added: " + amountToBuy);

        sendJSON();
        openDialog();
    }
}

function openDialog(){
    var dialogBox = document.getElementById('modal-box-section');

    dialogBox.style.display = 'block';
}

function closeDialog(){
    var dialogBox = document.getElementById('modal-box-section');
    console.log("Closed dialog");
    dialogBox.style.display = 'none';
    window.open('../signed-in-user-views/store-user-signed-in.php',"_self");
}
function sendJSON(){
    var gameName = document.getElementById('game-name').innerText;
    var price = document.getElementById('price').innerText;
    var gameImageLink = document.getElementById('game-image').src;

    console.log(gameImageLink);

    console.log(gameName)
    //escape single quote in the game's name
    if (gameName == "No Man's Sky"){
        console.log('check already');
        gameName = "No Man\\'s Sky";
    }
    if (gameName == "Tom Clancy's Rainbow Six Siege"){
        gameName = "Tom Clancy\\'s Rainbow Six Siege";
    }

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../server/get-json.php");
    
    xhr.onreadystatechange = function() { if (xhr.readyState === 4 && xhr.status === 200) { console.log(xhr.responseText); } }
    var data = JSON.stringify({ "gameName": gameName, "gameImageLink": gameImageLink, "platform": platformSelected, "amountToBuy": amountToBuy, "price": price });
    xhr.setRequestHeader("Content-type", "application/json") // or "text/plain"
    xhr.send(data); 



    // Converting JSON data to string

    console.log("Json payload " + JSON.stringify(data));
    // Sending data with the request
}








function increaseAmount(){
    if (amountToBuy >= localStorage.getItem('quantity')){
        errorMessage.innerText = "*Selected amount exceed available quantity";
    }
    else{
        errorMessage.innerText = "";
        amountToBuy += 1;
        quantityDisplay.innerText = amountToBuy;
    }
}

function decreaseAmount(){
    if (amountToBuy <= 1 ){
        errorMessage.innerText = "*Invalid input quantity";
    } else{
        errorMessage.innerText = "";
        amountToBuy -= 1;
        quantityDisplay.innerText = amountToBuy;
    }
}


function platformSelect(platform){
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




