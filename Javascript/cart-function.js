var toReceiveContainer =document.getElementById('to-receive-container');
var shoppingCartContainer =document.getElementById('shopping-cart-container');
var shoppingCartNav =document.getElementById('shopping-cart-nav');
var toReceiveNav =document.getElementById('to-receive-nav');

function showShoppingCart(){
    toReceiveContainer.style.display = 'none';
    shoppingCartContainer.style.display = 'block';
    shoppingCartNav.style.textDecoration = 'underline';
    toReceiveNav.style.textDecoration = 'none';
}


function showToReceive(){
    toReceiveContainer.style.display = 'block';
    shoppingCartContainer.style.display = 'none';
    toReceiveNav.style.textDecoration = 'underline';
    shoppingCartNav.style.textDecoration = 'none';
}

function checkout(){
    window.open("../server/receive-payment.php");
}
