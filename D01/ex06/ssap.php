#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$ret = array_filter(explode(' ', $str));
		return $ret;
	}

	unset($argv[0]);
	$strtab = array();
    foreach($argv as $v)
		$strtab = array_merge($strtab, ft_split($v));
	sort($strtab);
	foreach($strtab as $str)
		echo $str."\n";
?>