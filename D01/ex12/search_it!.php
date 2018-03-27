#!/usr/bin/php
<?php
    if ($argc < 3) {
        exit();
    }
    $search = $argv[1];
	unset($argv[0], $argv[1]);
	$data = array();
    foreach ($argv as $v){
        $tmp = explode(":", $v);
        $data[$tmp[0]]  = $tmp[1] ;
	}
	if (array_key_exists($search, $data))
		echo $data[$search]."\n";
?>