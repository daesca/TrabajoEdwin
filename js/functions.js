var url = "http://localhost:8080/TrabajoEdwin/src/main.php";
var rbody = ["VB"];
var xbody = [];
var functions = {
	"bodiesrx" : function(numbpanels){
		
		var cont = 1;
		$("#xheaders").append("<th>Matriz X</th>");
		$("#rbody").append("<td>"+ rbody[0] +"</td>")
		$("#rheaders").append("<th>Matriz R</th>");
		for(var i = 0; i < numbpanels; i++){
			//rbody.push("IPV" + (i+1));
			//console.log(rbody);
			if(cont != 1)
			{
				rbody.push("0");
			}
			rbody.push("IPV" + (i+1));
			rbody.push("0");

			xbody.push("VCI" + (i+1));
			xbody.push("IL" + (i+1));
			xbody.push("VCO" + (i+1));
			cont ++;
			
			
			
		}
		for (var i = 0; i < rbody.length ; i++) {
			if(i != 0){

				$("#rbody").append("<tr><td>" + rbody[i] + "</td></tr>");
			}	
			
			$("#xbody").append("<tr><td>"+ xbody[i] +"</td></tr>");
		}
		console.log(rbody);
		console.log(xbody);		

	},
	"printObjects": function(numpanels){
		$.ajax({
			headers: {"Access-Control-Allow-Origin":"*", 'Content-Type':'application/json'},
			url: url,
			type: "GET",
			data: {numpanels: numpanels}
		}).done(function(response){
			console.log(response);
			$("#voltin").html("");
			for (var i in response[0]) {
				$("#voltin").append("<li>V"+response[0][i][0]+" = "+ response[0][i][1] +" / "+ response[0][i][2] +"</li>");
			}
			/*
			*/
		});
	}
}