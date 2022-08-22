//Cannot add button in form, hence alternative is to use div and attach event listeners to replicate button
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
        personalInformation.style.display = 'none';
        addressInformation.style.display = 'block';
        paymentInformation.style.display = 'none';
        console.log('showAddressContainer');
    } else{
        return false;
    }
});

backToAddressContainer.addEventListener('click', ()=>{

    personalInformation.style.display = 'none';
    addressInformation.style.display = 'block';
    paymentInformation.style.display = 'none';
    console.log('showAddressContainer');
});

showPersonalContainer.addEventListener('click', ()=>{
    personalInformation.style.display = 'block';
    addressInformation.style.display = 'none';
    paymentInformation.style.display = 'none';
    console.log('showPersonalContainer');
});
showPaymentContainer.addEventListener('click', ()=>{

    if (addressValidations() === true && postcodeValidations() === true){
        paymentInformation.style.display = 'block';
        personalInformation.style.display = 'none';
        addressInformation.style.display = 'none';
        console.log('showPaymentContainer');
    } else{
        console.log('no validation occured')
        return false;
    }

});

submitBtn.addEventListener('click', ()=>{
    if(cardHolderValidation() === true && cardNumberValidation() === true && expireDateValidation() == true && cvValidation() === true ){
        conformationContainer.style.display = 'block';
        document.getElementById('sign-up-form-container').style.opacity = '0.5';

        console.log("Done payment make sure all infomation if correct");
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
    var englishChar = /^[A-Za-z/\s/g]+$/;

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
    var numbersAndSymbol = /^[-+]?[0-9]+$/;

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
    var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

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

    console.log(password)
    if (password != "" || password.length >= 5) {
        return true;
    }else{
        alert("Error: Do not leave the password field empty or make sure your password is more than 5 characters.");
        return false;
    }

}

function postcodeValidations(){
    var postcode = document.forms["signUpForm"]["postcode"].value;
    var allNumbers = /^[0-9]+$/;
    if (postcode.match(allNumbers) && postcode >= 10) {
        return true;
    }else{
        alert("Error: Enter a valid postcode!");
        return false;
    }
}

//only check if the field is empty
function addressValidations(){
    console.log("'runnignaddress validation")
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
    if (cvv.match(allNumbers) && cvv.length === 3) {
        return true;
    }else{
        alert("Error: Check your CVV");
        return false;
    }
}


/*
//Cannot add button in form, hence alternative is to use div and attach event listeners to replicate button
    var showAddressContainer = document.getElementById('showAddressContainer');
    var showPersonalContainer = document.getElementById('showPersonalContainer');
    var showPaymentContainer = document.getElementById('showPaymentContainer');
    var backToAddressContainer = document.getElementById('backToAddressContainer');
    


    var personalInformation =document.getElementById('personal-information-container');
    var addressInformation = document.getElementById('address-information');
    var paymentInformation = document.getElementById('payment-information');

    showAddressContainer.addEventListener('click', ()=>{
        personalInformation.style.display = 'none';
        addressInformation.style.display = 'block';
        paymentInformation.style.display = 'none';
        console.log('showAddressContainer');
    });

    backToAddressContainer.addEventListener('click', ()=>{
        personalInformation.style.display = 'none';
        addressInformation.style.display = 'block';
        paymentInformation.style.display = 'none';
        console.log('showAddressContainer');
    });

    showPersonalContainer.addEventListener('click', ()=>{
        personalInformation.style.display = 'block';
        addressInformation.style.display = 'none';
        paymentInformation.style.display = 'none';
        console.log('showPersonalContainer');
    });
    showPaymentContainer.addEventListener('click', ()=>{
        paymentInformation.style.display = 'block';
        personalInformation.style.display = 'none';
        addressInformation.style.display = 'none';
        console.log('showPaymentContainer');
    });







*/