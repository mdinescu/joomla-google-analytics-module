<?php
	defined('_JEXEC') or die; // no direct access allowed
 
	require_once dirname(__FILE__).'/helper.php'; // get helper files
 
	$trackingCode = modAnalyticsHelper::getTrackingCode($params);
	$propertyName = modAnalyticsHelper::getUAPropertyName($params);
	$analyticsMode = modAnalyticsHelper::getAnalyticsMode($params);
	
	require JModuleHelper::getLayoutPath('mod_analytics');
?>