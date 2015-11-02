<?php
	class modAnalyticsHelper
	{
	    /**
	     * Retrieves the stat counter code
	     *
	     * @param array $params An object containing the module parameters
	     * @access public
	     */    
	    public static function getTrackingCode(&$params)
	    {	        
		    $trackingCode = $params->get('trackcode', '');
		    return $trackingCode;
	    }
		
		/**
	     * Retrieves the Universal Analytics property name
	     *
	     * @param array $params An object containing the module parameters
	     * @access public
	     */    
		public static function getUAPropertyName(&$params)
	    {	        
		    $propName = $params->get('propertyname', '');
		    return $propName;
	    }	
		
		/**
	     * Retrieves the analytics mode to use (0 = Classic Google Analytics, 1 = Universal Analytics)
	     *
	     * @param array $params An object containing the module parameters
	     * @access public
	     */    
		public static function getAnalyticsMode(&$params)
	    {	        
		    $analyticsMode = $params->get('mode', '0');
		    return $analyticsMode;
	    }	
	}
?>