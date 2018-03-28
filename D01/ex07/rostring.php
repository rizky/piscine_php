#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$ret = array_filter(explode(' ', $str));
		$ret = array_values($ret);
		return $ret;
	}

	if ($argc < 2)
		return ;
	$strtab = ft_split($argv[1]);
	array_push($strtab, $strtab[0]);
	unset($strtab[0]);
	$strtab = array_values($strtab);
	foreach($strtab as $key=>$str)
	{
		if ($key != 0)
			echo " ";
		echo $str;
	}
	echo "\n";
?>