
var i = 0;
var images = [];
var time = 3000;

images[0] = 'images/mali.jpg';
images[1] = 'background2.jpg';
images[2] = 'background3.jpg';

function changeImg(){
  document.slide.src = images[1];

  if(i < images.length -1){
     i++;
  }else{
    i=0;

  }

  setTimeout("changeImg()", time);
}
  
window.onload = changeImg;
