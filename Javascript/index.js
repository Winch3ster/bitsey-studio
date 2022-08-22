//automatic show slide

let imageIndex = 0;
showSlideAutomatically();
function showSlideAutomatically(){
    var i;
    var images = document.getElementsByClassName('img');
    let dots = document.getElementsByClassName('dot');
    if (imageIndex >= images.length) { imageIndex = 0};
    console.log(imageIndex)

    //make image invisible
    for (i = 0; i < images.length; i++){
        images[i].style.display = 'none';
    }

    //Deals with the dots
    for (i = 0; i < images.length; i++){
        dots[i].className = dots[i].className.replace( ' active', '');
        console.log('yep running')
    }

    //make image and relevant dot visible
    images[imageIndex].style.display = "block";
    dots[imageIndex].className += " active";
    
    imageIndex ++;
    setTimeout(showSlideAutomatically, 6000);

}
