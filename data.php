<?php
error_reporting(0);

require 'helpers.php';

$time = milliseconds();

# Load our items
$path = dirname(__FILE__);
$items = yaml_decode_file("$path/items.yml");

# Now sort them, newest to oldest...
$items = array_reverse(array_sort_by_key($items, 'published_at'));

# ...and skip forward-dated items
$items = array_reject($items, '$item[\'published_at\'] <= ' . time());
