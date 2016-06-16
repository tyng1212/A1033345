<?php

class PostOffice{
	function mailFiler(){
		$filename="string.txt";
		$fp=fopen($filename,"r");
		$contents=fread($handle,filsize($filename));
		fclose($handle);             
	}

	function mailRegex(){
		$fp=fopen("string.txt","r");
		$standard_D = "/^([A-Za-z]+)$/";
		fscanf($fp, "%s %s", $n, $str);
		fclose($fp);
		echo "$n $str";
	}

	function spiltroad(){

	}
}

?>