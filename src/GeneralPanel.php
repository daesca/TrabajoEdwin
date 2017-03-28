<?php 
namespace src;

class GeneralPanel
{

	public $ipv;
	public $rci;
	public $rl;
	public $ron;
	public $rco;
	public $ci= array();
	public $l= array();
	public $co= array();
	public $u;

	//Este metodo define los valores para cada variable
	public function __construct($number){
		$this->ipv = "IPV".$number;
		$this->rci = "Rci" . $number;
		$this->rl = "Rl" . $number;
		$this->ron = "Ron" . $number;
		$this->rco = "Rco" . $number;
		array_push($this->ci, "Ci" . $number);
		array_push($this->l, "IL" . $number);
		array_push($this->co, "Co" . $number);
		$this->u = "U" . $number;
	}

	public function VoltIn()
	{
		array_push($this->ci, "(".$this->ipv."/".$this->ci[0].")");
		array_push($this->ci, "(".$this->l[0]."/".$this->ci[0].")");
		return $this->ci;
	}

	public function Inductance()
	{

	}

	public function VolOut()
	{
		
	}



}
