

$(document).ready(function () {

 //hamburger menu
   $('.toggle span').click(function () {
       $('ul').toggleClass('active');
   });


});


//photo gallery

var i = 0;
var images = [];
var time = 5000;


images[0] = 'images/trike-1.jpg';
images[1] = 'images/running-3.jpg';
images[2] = 'images/swimming-3.jpg';
images[3] = 'images/running-1.jpg';

function changeImg(){
    document.slide.src = images[i];
    if(i < images.length - 1){
        i++
    } else {
        i = 0;
    }

    setTimeout("changeImg()", time);
}

window.onload = changeImg;




