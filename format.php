<?php
// format extension for YELLOW, https://github.com/bsnosi/yellow-extension-format
// Copyright ©2018-now Norbert Simon, https://nosi.de for
// YELLOW Copyright ©2013-now Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowFormat {
  const VERSION = "1.4.1";
	
  public $yellow;

  function onLoad($yellow) {
   $this->yellow = $yellow;
  }

  public function onParseContentShortcut($page, $name, $text, $type) {
   $output = NULL;
   if ($name=="format" && ($type=="block" || $type=="inline")) {
	list($class, $style, $id) = $this->yellow->toolbox->getTextArguments($text);
	if(strlen($text)==0){
		$output = '<b>[format class style id]</b>';
	}
	else {
		if($class == "end" || $class == "/") {
			$output = "</div>";
		}
		else {
			$output = "<div";
			$output .= ($id<>"") ? " id=\"" . $id . "\"" : "";
			$output .= ($class<>"") ? " class=\"".$class."\"" : "\"";
			$output .= ($style<>"") ? " style=\"" . $style . "\"" : "";
			$output .= ">";
		}
	}
   }
   return $output;
  }
}
?>
