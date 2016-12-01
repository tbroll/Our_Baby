window.onload = init;

function init(){
	var dburl = "getApp.php"
	
	//applicant click
	$(".studapp").click(function(){
		var del = $("#delete");
		var id = $(this).prop("id");
		var row = $("#" + id);
		// if edit is off
		if(del.prop("hidden") == true){ 
		var insert = $("#" + id + " .moreinfo");
		if (insert.prop("class") == "moreinfo close"){ //if closed
			insert.prop("class", "moreinfo open");
			$.post(dburl, {"id" : id})
				.done(function( data ) {
				insert.html(data);
			});
		}else { //else open
			insert.prop("class", "moreinfo close");
			insert.html("");
		} 
		} else { //else edit is on
			//change background color of specific student
		}
	});
	
	//edit click
	$("#edit").click(function(){
		var del = $("#delete");
		var check = $(".check");
		if (del.prop("hidden") == false){ //if edit is off
			
			del.prop("hidden", true);
		} else { //else edit is on
			//change something visible
			//add checkboxes?
			del.prop("hidden", false);
		}
	});
	
	//handle delete click
	
};