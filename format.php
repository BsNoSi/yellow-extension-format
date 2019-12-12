<?php
// format extension for YELLOW, https://github.com/bsnosi/yellow-extension-format
// Copyright ©2018-now Norbert Simon, https://nosi.de for
// YELLOW Copyright ©2013-now Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.
// requires YELLOW 0.8.4 or higher

class YellowFormat {
    const VERSION = "1.3";
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
			list($class, $style, $id) = $this->yellow->toolbox->getTextArgs($text);
		   if(strlen($text)==0){
			  $output = '<b>[format class style id]</b>';
		   }
			else {
				if($class == "end" || $class == "/")
				{
					$output = "</div>";
				}
				else {
					$output = '<div';
					$output .= ($id<>"") ? ' id="' . $id . '"' : "";
					$output .= ($class<>"") ? ' class="'.$class.'"' : "";
					$output .= ($style<>"") ? ' style="' . $style . '"' : "";
					$output .= '>';
					}
				}
			}
		return $output;
		}
	}
?>
