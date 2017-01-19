$(document).ready(function() {
  $('.answer').hide();

  $('.main h3').click(function() {
    $(this).next('.answer').slideToggle(300);
	$('.glyphicon glyphicon-triangle-bottom').toggleClass('.glyphicon glyphicon-triangle-right');
  });
  
  $('.container h4').click(function() {
    $(this).next('.answer').slideToggle(300);
  });

});