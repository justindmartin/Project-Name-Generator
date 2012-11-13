<?php
	require_once('../classes/projectNameGenerator.php');
	$projectNameGenerator = new projectNameGenerator();
	echo 'I know! We\'ll call it "'.$projectNameGenerator->generateProjectName().'"'."\n";
?>
