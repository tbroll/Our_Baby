window.onload = init;

function init(){
	$("#submit_butt").click(function(){
		
	event.preventDefault();
	
	var user=$("#username").prop("value");
	var pass=$("#password").prop("value");
	
	alert(" " + user + " " + pass);
	
	$.ajax({
    type: "POST",
    url: 'dblogin.php',
    dataType: 'text',
    data: {functionname: 'login', arguments: [user, pass]},
    success: function (bool) {
					window.location.replace("admin.php");
            }
	});
	
});
}