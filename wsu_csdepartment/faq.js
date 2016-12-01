$(document).ready(function() {
  $('.answer').hide();

  $('.main h2').click(function() {
    $(this).next('.answer').slideToggle(300);
  });

});