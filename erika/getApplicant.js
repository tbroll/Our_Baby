window.onload = init;

function init(){
	var dburl = "getApp.php"
	$(".studapp").click(function(){
		var id = $(this).prop("id");
		var row = $("#" + id);
		var insert = $("#" + id + " .moreinfo");
		if (insert.prop("class") == "moreinfo close"){
			insert.prop("class", "moreinfo open");
			$.post(dburl, {"id" : id})
				.done(function( data ) {
				insert.html(data);
			});
		}else {
			insert.prop("class", "moreinfo close");
			insert.html("");
		}
		
		
	});
};