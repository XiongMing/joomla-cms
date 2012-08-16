<?php
	$app = JFactory::getApplication();
	$doc = JFactory::getDocument();
	
	$title = $app->getCfg('sitename');
	$doc->setTitle($title);
?>