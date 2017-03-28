<?php 

namespace src;

//use GeneralPanel;
require_once("GeneralPanel.php");
$panels = $_GET["numpanels"];
$objects = array();
$ci = array();
$l = array();
$co = array();


for ($i=0;$i<$panels; $i++) { 
	$variable = "Panel".strval($i+1);
	$$variable = new GeneralPanel($i+1);
	$objects[$i] = $$variable;
	$ci[$i] = $objects[$i]->VoltIn();
}
$results = [$ci, $l, $co];

//json_encode($objects);
header("Content-type: application/json");
header("Access-Control-Allow-Origin: *");

echo json_encode($results);;
//echo print_r($objects);

/*
*/