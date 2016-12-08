window.onload = init;

function init(){
	var dburl = "getApp.php"
	
	//close click
	$(".top").click(function(){
		var del = $("#delete");
		var par = $(this).parent();
		var id = par.prop("id");
		var ep = $("#"+ id+" .easyprint");
		var row = $("#" + id);
		var loc = $("#" + id + " .moreinfo");
		// if edit is off
		if(del.prop("hidden") == true){ 
		var insert = $("#" + id + " .insert");
		if (loc.prop("class") == "moreinfo open"){ //if open
			loc.prop("class", "moreinfo close");
			insert.html("");
			ep.prop("hidden", true);
			ep.prop("class", "easyprint");
		} else{ //closed
			loc.prop("class", "moreinfo open");
			$.post(dburl, {"id" : id})
				.done(function( data ) {
				insert.html(data);
				ep.prop("hidden", false);
				ep.prop("class", "easyprint print btn");
			});
		}
		} else { //else edit is on
			//change background color of specific student?
		}
	});
	
	//edit click
	$("#edit").click(function(){
		var del = $("#delete");
		var check = $(".check");
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
	$("#delete").click(function(){
		var check = $(".check");
		var url = "delete.php";
		var insert = $("#deletenotify");
		check.each(function(index){
			if($(this).prop("checked")){
				var par = $(this).parent().parent();
				var id = par.prop("id");
				$.post(url, {"id" : id})
				.done(function( data ) {
				insert.append(data);
			});
			}
		});
	});
	
	
};