<?php
	include_once('rest/Property.php');
	$propertyObject = new Property();

	foreach ($propertyObject as $key => $value) {
		echo $key.''.$value;
	}

	include_once('bootstrap/template.html');
?>
