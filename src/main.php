<?php 
namespace src;

use GeneralPanel;

$option = $_GET["option"];
$panels = $_GET["numpanels"];
$objects = [];
$results = [];

for ($i=0; $i < $panels ; $i++) { 
	$variable = "Panel".$i+1;
	$objects[$i] = $$variable = new GerenalPanel;
}
json_encode($objects);
header("Content-type: application/json");
header("Access-Control-Allow-Origin: *");
echo print_r($objects);

