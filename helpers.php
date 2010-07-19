<?php

require 'smartypants.php';
require 'yaml/sfYaml.php';

function yaml_decode($raw_yaml_text) {
  return sfYaml::load($raw_yaml_text);
}

function yaml_decode_file($yaml_file_path) {
  return yaml_decode(file_get_contents($yaml_file_path));
}

function array_sort_by_key($array, $key) {
  usort($array, create_function('$a, $b', "return (\$a['$key'] > \$b['$key']) ? 1 : -1;"));
  return $array;
}

function array_reject($array, $expression) {
  $function = create_function('$item', "return $expression;");
  $new_array = array();
  
  foreach($array as $item) {
    if ($function($item) !== false) {
      $new_array[] = $item;
    }
  }
  
  return $new_array;
}

# Word array, like Ruby's %w[]
function w($words) {
  return split(' ', $words);
}

function array_to_object($array) {
	if (!is_array($array)) {
		return $array;
	} else if (count($array) > 0) {
	  foreach ($array as &$item) {
	    $item = array_to_object($item);
	  }
	  
	  return (object) $array;
	} else {
    return false;
  }
}

function milliseconds() {
  return round(1000 * microtime(true));
}

function widont($text) {
  return preg_replace('/([^\s])\s+([^\s]+)\s*$/', '\1&nbsp;\2', $text);
}
