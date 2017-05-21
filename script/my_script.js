$("#submit").click( function() {
 
	if( $("#username").val() == "" || $("#pass").val() == "" )
	  $("#ack").html("Please enter username and password.");
	else
	  $.post( $("#myForm").attr("action"),
	         $("#myForm :input").serializeArray(),
			 function(info) {
 
			   $("#ack").empty();
			   $("#ack").html(info);
				clear();
			 });
 
	$("#myForm").submit( function() {
	   return false;	
	});
});
 
function clear() {
 
	$("#myForm :input").each( function() {
	      $(this).val("");
	});
 
}