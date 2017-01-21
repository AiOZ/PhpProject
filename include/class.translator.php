<?php
class Translator
{
	private static $word;
	private static $intro = "translator!";


	public function getIntro()
	{	
		return Translator::$intro;		//retourne la variable privée
	}	

}
?>