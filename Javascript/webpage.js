var smallNavigationMenuIsDisplaying = false; //check if small-screen navigation menu is displaying


var dropDownMenu = document.getElementById('drop-down');
let nav = document.getElementById('navigation-container');


//display appriopriate navigation menu when screen is resized
window.addEventListener('resize', ()=>{
    let windowSize = window.innerWidth;
    console.log(windowSize);


    if(windowSize <= 650){
        //display small screen navigation


        //if not displaying, the set it to none just on case someone open it but resize the window back to wide then small again
        if(smallNavigationMenuIsDisplaying === false){ 
            nav.style.display = 'none';
        }
        //If small navigation menu is initially opened, the display it with small css when user resize the windows size to small again
        if(smallNavigationMenuIsDisplaying === true){
            nav.style.display = 'block';
        }

    } else{
        //display wide screen navigation
        nav.style.display = 'flex';
        console.log('large screen')
    }
})

dropDownMenu.addEventListener('click', ()=>{
    nav.style.display = 'block';
    smallNavigationMenuIsDisplaying = true;
})


function closeNavigationMenu(){
    nav.style.display = 'none';
    smallNavigationMenuIsDisplaying = false;
}



var userIcon = document.getElementById('user-icon');
var signOutContainer = document.getElementById('sign-out-container');
userIcon.addEventListener('mouseover', ()=>{
    signOutContainer.style.display ='flex';
})

signOutContainer.addEventListener('mouseover', ()=>{
    signOutContainer.style.display ='flex';
})
signOutContainer.addEventListener('mouseout', ()=>{
    signOutContainer.style.display ='none';
})
