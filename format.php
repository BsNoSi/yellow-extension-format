<?php
// format extension for YELLOW, https://github.com/bsnosi/yellow-extension-format
// Copyright ©2018-now Norbert Simon, https://nosi.de for
// YELLOW Copyright ©2013-now Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.
// requires YELLOW 0.8.4 or higher

class YellowFormat {
    const VERSION = "1.1";
	const TYPE = "feature";
    public $yellow;         //access to API
    
	
	// Handle initialisation
	function onLoad($yellow) {
		$this->yellow = $yellow;
	}
	
	// Handle page content parsing of custom block
	public function onParseContentShortcut($page, $name, $text, $type) {
	
		$output = NULL;
		
		if ($name=="format" && ($type=="block" || $type=="inline")) {
			list($class, $style) = $this->yellow->toolbox->getTextArgs($text);

		   if(strlen($text)==0){
			  $output = '<b>[format class style]</b>';
		   }
			else {
				if($class == "end" || $class == "/")
				{
					$output = "</div>";
				}
				else {
					if($class == "") {$output ="<div";}
					else {
						$output = "<div class=\"".$class."\"";
					}
					if($style=="/") {
						$output .= "></div>";
					}
					else {
					if($style) {
						$output .= " style=\"".$style."\">";
					}
					else {
						$output .= ">";
					}
				}
			}
		}
		return $output;
		}
	}
}
?>