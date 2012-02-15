/**
* comprobar
*/
var lastid = 0;
function comprobar () {
	  	var result = $.ajax({
   			type: "GET",
   			url: "ultimos.php",
   			data: "lastid="+lastid,
   			async: false,
   			success: function(msg){
   				partes = msg.split("|");

   				if (partes[0]>0) {
   					 lastid = partes[0];
						$("#mensajes").append(partes[1]+"->"+lastid);
					}

   			}
 			});
 			
 			setTimeout("comprobar()",2000);
}