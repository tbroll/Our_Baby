window.onload = init;

function init(){
	$("#submit_butt").click(function(){
		
	event.preventDefault();
	
	var user=$("#username").prop("value");
	var pass=$("#password").prop("value");
	
	$.post("dblogin.php", {"user" : user, "pass" : pass})
		.done(function( data ) {
			if (data == " "){
				alert("incorrect credentials");
				window.location.replace("adminlogin.php");
			}else{
				window.location.replace("admin.php");
			}
	});

});
}
