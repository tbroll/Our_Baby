window.onload = init;

function init(){
	var dburl = "getApp.php"
	
	//applicant click
	$(".studapp").click(function(){
		var del = $("#delete");
		var id = $(this).prop("id");
		var row = $("#" + id);
		var ep = $("#" + id + " .easyprint");
		// if edit is off
		if(del.prop("hidden") == true){ 
		var insert = $("#" + id + " .insert");
		var loc = $("#" + id + " .moreinfo");
		if (loc.prop("class") == "moreinfo close"){ //if closed
			loc.prop("class", "moreinfo open");
			$.post(dburl, {"id" : id})
				.done(function( data ) {
				insert.html(data);
				ep.prop("hidden", false);
				ep.prop("class", "easyprint print btn");
			});
		}
		} else { //else edit is on
			//change background color of specific student
		}
	});
	
	//close click
	$(".top").click(function(){
		var del = $("#delete");
		var par = $(this).parent()
		var id = par.prop("id");
		var row = $("#" + id);
		// if edit is off
		if(del.prop("hidden") == true){ 
		var insert = $("#" + id + " .moreinfo");
		if (insert.prop("class") == "moreinfo open"){ //if open
			insert.prop("class", "moreinfo close");
			insert.html("");
		}
		} else { //else edit is on
			//change background color of specific student?
		}
	});
	
	//edit click
	$("#edit").click(function(){
		var del = $("#delete");
		var check = $("input");
		if (del.prop("hidden") == false){ //if edit is off
			check.each(function(index){$(this).prop("hidden", true);});
			del.prop("hidden", true);
		} else { //else edit is on
			//change something visible
			//add checkboxes?
			check.each(function(index){$(this).prop("hidden", false);});
			del.prop("hidden", false);
		}
	});
	
	//handle delete click
	
	//handle easy print
	$(".easyprint").click(function(){
		window.replace("");
	});
	
	
};