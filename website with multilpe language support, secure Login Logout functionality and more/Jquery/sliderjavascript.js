sliderInt = 1 ;
sliderNext = 2;

$(document).ready(function(){
  $("#slides > img#1").fadein(300);
 startSlider(); 


});

function startSlider(){
count = $("#slides >img").size();

loop = setInterval(function(){
if(sliderNext > count){
sliderNext = 1;
sliderint = 1;

}
  $("#slides > img").fadeOut(300);
  $("#slides > img" + sliderNext).fadein(300);
sliderint = sliderNext;
sliderNext = sliderNext;



},3000)



}  