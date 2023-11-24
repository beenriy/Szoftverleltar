<?php

class Ajax_Controller
{
	public $baseName = 'ajax';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		$beleptetModel = new Ajax_Model;  //az oszt�lyhoz tartoz� modell
		
		$retData = $beleptetModel->get_data($vars);
		
		
		$view = new View_Loader($this->baseName.'_main');
		
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>