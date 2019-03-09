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
