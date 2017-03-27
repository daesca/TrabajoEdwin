<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Programa de edwin</title>
	<link rel="stylesheet" href="css/ed-grid.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="ed-container">
		<div class="ed-item base-100">
		<form action="">	
			<label for="numberpanels">Ingrese la cantidad de paneles</label>
			<input type="text" name="numberpanels" id="numberpanels">
			<button id="calculate">Calcular</button>
		</form>
		</div>	
	</div>
	<div class="ed-container" id="ecuaciones">
		<h3>Ecuaciones</h3>
		<h4>Voltaje de Entrada</h4>
		<ul id="voltin">
			
		</ul>
		<h4>Inductancia</h4>
		<ul id="inductance">
			
		</ul>
		<h4>Voltaje de Salida</h4>
		<ul id="voltout">
			
		</ul>
	</div>
	<div class="ed-container" id="matrices">
		<div class="ed-item base-100 web-50">
			<table id="x">
				<thead id="xheaders">
				</thead>
				<tbody id="xbody">
					
				</tbody>
			</table>			
		</div>
		<div class="ed-item base-100 web-50">
			<table id="r">
				<thead id="rheaders">
				</thead>
				<tbody id="rbody">
					
				</tbody>
			</table>			
		</div>
		<table id="b">
			<thead id="bheaders">
				<th>
					
				</th>
			</thead>
		</table>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/functions.js"></script>
	<script src="js/scripts.js"></script>	
</body>
</html>