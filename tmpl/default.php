<?php
	defined('_JEXEC') or die;
	
	function generateJavaScriptForGoogleAnalytics($accountCode) 
	{
		$javascript = "";
		
        $javascript .= "\t".'var _gaq = _gaq || [];'."\n";
        $javascript .= "\t".'_gaq.push([\'_setAccount\', \''.$accountCode.'\']);'."\n";
        $javascript .= "\t".'_gaq.push([\'_trackPageview\']);'."\n\n";
        $javascript .= "\t".'(function() {'."\n";
		$javascript .= "\t".'var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;'."\n";
		$javascript .= "\t".'ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';'."\n";
		$javascript .= "\t".'var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);'."\n";
        $javascript .= "\t".'})();'."\n";
		
        return $javascript;
	}
	
	function generateJavaScriptForUniversalAnalytics($accountCode, $propertName)
	{
		$javascript = "\n";

		$javascript .= "\t\t"."  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){"."\n";
		$javascript .= "\t\t"."  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),"."\n";
		$javascript .= "\t\t"."  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)"."\n";
		$javascript .= "\t\t"."   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');"."\n";
		$javascript .= "\t\t".""."\n";
		$javascript .= "\t\t"."ga('create', '".$accountCode."', 'auto');"."\n";
		$javascript .= "\t\t"."ga('send', 'pageview');"."\n";
		$javascript .= "\t".""."\n";
		
		return $javascript;
	}
	
	$doc =& JFactory::getDocument();
	
	$scriptsDecl = "";
	if($analyticsMode == '1')
	{
		$scriptsDecl = generateJavaScriptForUniversalAnalytics($trackingCode, $propertyName);
	}else{
		$scriptsDecl = generateJavaScriptForGoogleAnalytics($trackingCode);
	}
	
	$doc->addScriptDeclaration($scriptsDecl);
?>
