$(document).ready(function() {

	$('#flash-message').delay(500).fadeIn('normal', function() {
	     $(this).delay(2500).fadeOut();
	});


  $(".del").click(function(){
    if (!confirm("Are you sure you want to cancel the order?")){
      return false;
    }
  });

});
