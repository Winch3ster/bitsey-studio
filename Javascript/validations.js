//Cannot add button in form, hence an alternative is to use div and attach event listeners to replicate a button
/*By default html any button added into the form will be an submit button even if specific onclick function is given */

var showAddressContainer = document.getElementById('showAddressContainer');
var showPersonalContainer = document.getElementById('showPersonalContainer');
var showPaymentContainer = document.getElementById('showPaymentContainer');
var backToAddressContainer = document.getElementById('backToAddressContainer');
var submitBtn = document.getElementById('submit-btn');
var backToPaymentContainer = document.getElementById('backToPaymentContainer');


var personalInformation =document.getElementById('personal-information-container');
var addressInformation = document.getElementById('address-information');
var paymentInformation = document.getElementById('payment-information');
var conformationContainer = document.getElementById('modal-box-container');



//Buttons
showAddressContainer.addEventListener('click', ()=>{
    if (nameValidations() === true && emailValidations() === true && contactValidations() === true && passwordValidations()=== true){
        //Show next page of the sign-up form 
        personalInformation.style.display = 'none';
        addressInformation.style.display = 'block';
        paymentInformation.style.display = 'none';
    } else{
        return false;
    }
});


// Navigate back to address page 
backToAddressContainer.addEventListener('click', ()=>{

    personalInformation.style.display = 'none';
    addressInformation.style.display = 'block';
    paymentInformation.style.display = 'none';
});

showPersonalContainer.addEventListener('click', ()=>{
    personalInformation.style.display = 'block';
    addressInformation.style.display = 'none';
    paymentInformation.style.display = 'none';
});

showPaymentContainer.addEventListener('click', ()=>{
    if (addressValidations() === true && postcodeValidations() === true){
        paymentInformation.style.display = 'block';
        personalInformation.style.display = 'none';
        addressInformation.style.display = 'none';
     
    } else{

        return false;
    }

});

submitBtn.addEventListener('click', ()=>{

    //If all the data is valid, show confirmation container
    if(cardHolderValidation() === true && cardNumberValidation() === true && expireDateValidation() == true && cvValidation() === true ){
        conformationContainer.style.display = 'block';
        document.getElementById('sign-up-form-container').style.opacity = '0.5'; //Reduce the opacity of background 

    } else{
        return false;
    }

});

function submitForm(){
    //Taken from https://stackoverflow.com/questions/7020659/submit-form-using-a-button-outside-the-form-tag
    $("#signUpForm").submit();
}


backToPaymentContainer.addEventListener('click', ()=>{
    conformationContainer.style.display = 'none';
    document.getElementById('sign-up-form-container').style.opacity = '1';
})





//validations code
function nameValidations(){
    var name = document.forms["signUpForm"]["name"].value;
    var englishChar = /^[A-Za-z/\s/g]+$/; //regular expression for all characters only

    // If name follows the regular expression, field is not empty and name has more than 5 characters the return true
    if (name.match(englishChar) && name != "" && name.length >= 5 ) {
        return true;
    }else{
        console.log("running name validation");
        alert("Make sure your name contains no number or symbol and length of more than 5!");
        return false;
    }
}

function contactValidations(){
    var contact = document.forms["signUpForm"]["contact"].value;
    var numbersAndSymbol = /^[-+]?[0-9]+$/;//regular expression for numbers and symbols only

    if (contact.match(numbersAndSymbol) && contact != "") {
        return true;
    }else{
        console.log("running contact validation");
        alert("Enter a valid phone number: Eg. +0112655555");
        return false;
    }
}

function emailValidations(){
    var email = document.forms["signUpForm"]["email"].value;
    var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; //regular expression for email which requires @ symbol in the input.

    if (email.match(emailformat) && email != "") {
        return true;
    }else{
        console.log("running email validation");
        alert("Error: enter a valid email");
        return false;
    }

}

function passwordValidations(){
    var password = document.forms["signUpForm"]["password"].value;

    //If password field is not empty or more than 5 characters
    if (password != "" && password.length >= 5) {
        return true;
    }else{
        alert("Error: Do not leave the password field empty or make sure your password is more than 5 characters.");
        return false;
    }

}

function postcodeValidations(){
    var postcode = document.forms["signUpForm"]["postcode"].value;
    var allNumbers = /^[0-9]+$/; //Regular expressions for all numbers only
    if (postcode.match(allNumbers) && postcode >= 10) {
        return true;
    }else{
        alert("Error: Enter a valid postcode!");
        return false;
    }
}

//only check if the field is empty
function addressValidations(){
    var addressL1 = document.forms["signUpForm"]["line1"].value;
    var addressL2 = document.forms["signUpForm"]["line2"].value;
    var city = document.forms["signUpForm"]["city"].value;
    var state = document.forms["signUpForm"]["state"].value;
    var country = document.forms["signUpForm"]["country"].value;

    if (addressL1.length <=2){
        alert("Error: enter a valid address at Line 1.");
        return false;
    }
    if (addressL2.length <=2){
        alert("Error: enter a valid address at Line 2.");
        return false;
    }

    if(addressL1.length <=5 || allChar(city) === false || allChar(state) === false || allChar(country) === false){
    } else {
        return true;
    }
}
function allChar(text){
    var englishChar = /^[A-Za-z/\s/g]+$/;

    if (text.match(englishChar) && text != "") {
        return true;
    }else{
        console.log("running allcahr validation");
        alert(`Make sure your city, state and country field only contains alphabetical letters`);
        return false;
    }
}

function cardHolderValidation(){
    var name = document.forms["signUpForm"]["cardHolderName"].value;
    var englishChar = /^[A-Za-z/\s/g]+$/;

    if (name.match(englishChar) && name != "" && name.length >= 5 ) {
        return true;
    }else{
        console.log("running name validation");
        alert("Make sure your name contains no number or symbol and length of more than 5!");
        return false;
    }
}

function cardNumberValidation(){
    var cardNumber = document.forms["signUpForm"]["cardNumber"].value;
    var allNumbers = /^[0-9]+$/;
    //Length of the card number must be 16 digits as the standard for all card number
    if (cardNumber.match(allNumbers) && cardNumber.length === 16) {
        return true;
    }else{
        alert("Error: Enter only number for card number field");
        return false;
    }
}

function expireDateValidation(){
    var expireDate = document.forms["signUpForm"]["expireDate"].value;
    var format = /^[0-9/]+$/;
    if (expireDate.match(format) && expireDate.length === 7) {
        return true;
    }else{
        alert("Error: Make sure the expire date is in the right format.");
        return false;
    }
}

function cvValidation(){
    var cvv = document.forms["signUpForm"]["cvv"].value;
    var allNumbers = /^[0-9]+$/;

    //All credit card's cvv must contains exactly 3 numbers
    if (cvv.match(allNumbers) && cvv.length === 3) {
        return true;
    }else{
        alert("Error: Check your CVV");
        return false;
    }
}
