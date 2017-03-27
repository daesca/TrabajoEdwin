$("#calculate").on("click", function(e){
	e.preventDefault();
	var numberpanels = $("#numberpanels").val();
	//functions.bodiesrx(numberpanels);
	functions.printObjects(numberpanels);
});