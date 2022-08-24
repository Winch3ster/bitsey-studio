var purchaseHistoryContainer =document.getElementById('purchase-history-container');
var shoppingCartContainer =document.getElementById('shopping-cart-container');
var shoppingCartNav =document.getElementById('shopping-cart-nav');
var historyNav =document.getElementById('history-nav');


function showShoppingCart(){
    //Hide purchase history container and show cart container
    purchaseHistoryContainer.style.display = 'none';
    shoppingCartContainer.style.display = 'block';

    //underline shopping cart navigation link
    shoppingCartNav.style.textDecoration = 'underline';
    historyNav.style.textDecoration = 'none';
}


function showPurchaseHistory(){
    //Hide cart conatiner container and show purchase history container
    purchaseHistoryContainer.style.display = 'block';
    shoppingCartContainer.style.display = 'none';

    //underline purchase history navigation link
    historyNav.style.textDecoration = 'underline';
    shoppingCartNav.style.textDecoration = 'none';
}

function checkout(){
    var cartList = document.getElementById('cart-list');

    //If there are items (or element) within the li tag of the class list, then run receive-payment.php
    if (cartList.querySelector('.cart-game-block') !== null){
        window.open("../server/receive-payment.php", "_self");
    } else {
        //display error. Users cannot checkout without item in cart
        alert("Error: Cannot checkout. Your cart has no item! T^T");
    }


}
