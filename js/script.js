<<<<<<< HEAD
/*Q and A*/
$(document).ready(function(){
  demo_clickAction();
});

function demo_clickAction(){
  $('#tab_headline li').click(function() {
    $('#tab_content li').hide();
    $('#tab_headline li').removeClass('current');
    $(this).addClass('current');
    index = $("#tab_headline li").index(this) + 1;
	$('#tab_content li:nth-child('+index+')').removeClass('current');
	$('#tab_content li:nth-child('+index+')').fadeIn();
	$('#tab_content li:nth-child('+index+')').addClass('current');
  });
}


/* 業務内容シングルページ　Demo purposes only */
  $("figure").mouseleave(
    function() {
      $(this).removeClass("hover");
    }
  );
=======

//$(function(){
//
//  setInterval(function(){
//   if($('.image1').hasClass('opa')){
//     $('.image2').addClass('opa');
//     $('.image1').removeClass('opa');
//   } else if ($('.image2').hasClass('opa')){
//     $('.image3').addClass('opa');
//     $('.image2').removeClass('opa');
//   } else if ($('.image3').hasClass('opa')){
//     $('.image4').addClass('opa');
//     $('.image3').removeClass('opa');
//   } else if ($('.image4').hasClass('opa')){
//     $('.image1').addClass('opa');
//     $('.image4').removeClass('opa');
//   }
// },3000);
//
//	$(window).on('load resize', function(){
//    // navbarの高さを取得する
//    var height = $('.navbar').height();
//    // bodyのpaddingにnavbarの高さを設定する
//    $('body').css('padding-top',height); 
//});
//});
//
>>>>>>> origin/yoshikawa
