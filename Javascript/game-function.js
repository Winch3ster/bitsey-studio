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
    window.open('./store.html',"_self")
);


function addItemToCart(){
    window.open('../server/sign-in-page.php', "_self")
}

//Open dialog message to prompt user tjhat item is added to cart
function openDialog(){
    var dialogBox = document.getElementById('modal-box-section');

    dialogBox.style.display = 'block';
}

function closeDialog(){
    var dialogBox = document.getElementById('modal-box-section');

    dialogBox.style.display = 'none';
    window.open('../signed-in-user-views/store-user-signed-in.php',"_self");
}
function sendJSON(){
    var gameName = document.getElementById('game-name');
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




