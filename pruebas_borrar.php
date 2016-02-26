<?php
	
	//echo($_SERVER['DOCUMENT_ROOT'].'/test_argentina/src/LanguageBatchBo.php');

	include_once  'src/LanguageBatchBo.php';


	$LanguageBatchBo = new Language\LanguageBatchBo;

	var_dump($LanguageBatchBo);


	/*

C:\Users\Fernando\Documents\GitHub\test-candidate>phpunit --bootstrap src/LanguageBatchBo.php test/LanguageBatchBoTest.php

	*/
?>