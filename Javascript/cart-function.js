var purchaseHistoryContainer =document.getElementById('purchase-history-container');
var shoppingCartContainer =document.getElementById('shopping-cart-container');
var shoppingCartNav =document.getElementById('shopping-cart-nav');
var historyNav =document.getElementById('history-nav');

function showShoppingCart(){
    purchaseHistoryContainer.style.display = 'none';
    shoppingCartContainer.style.display = 'block';
    shoppingCartNav.style.textDecoration = 'underline';
    historyNav.style.textDecoration = 'none';
}


function showPurchaseHistory(){
    purchaseHistoryContainer.style.display = 'block';
    shoppingCartContainer.style.display = 'none';
    historyNav.style.textDecoration = 'underline';
    shoppingCartNav.style.textDecoration = 'none';
}

function checkout(){
    var cartList = document.getElementById('cart-list');

    if (cartList.querySelector('.cart-game-block') !== null){
        window.open("../server/receive-payment.php", "_self");
    } else {
        //display error
        alert("Error: Cannot checkout. Your cart has no item! T^T");
    }


}
