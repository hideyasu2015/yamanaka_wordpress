$(function(){

  setInterval(function(){
   if($('.image1').hasClass('opa')){
     $('.image2').addClass('opa');
     $('.image1').removeClass('opa');
   } else if ($('.image2').hasClass('opa')){
     $('.image3').addClass('opa');
     $('.image2').removeClass('opa');
   } else if ($('.image3').hasClass('opa')){
     $('.image1').addClass('opa');
     $('.image3').removeClass('opa');
   }
 },3000);

});
