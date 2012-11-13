<?php
class projectNameGenerator{
	function __Construct(){
		$this->projectNames = array();

		$csvFiles = glob('../data/*.csv');
		foreach($csvFiles as $filename){
			$fh = fopen($filename,'r');
			while(($tempArray = fgetcsv($fh)) !== FALSE){
				foreach($tempArray as $projectName){
					$this->projectNames[count($this->projectNames)] .= $projectName;
				}
			}
			fclose($fh);
		}
	}
	function generateProjectName(){
		return $this->projectNames[mt_rand(0,count($this->projectNames))];
	}
}
?>
