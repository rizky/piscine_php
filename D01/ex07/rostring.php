#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$ret = array_filter(explode(' ', $str));
		return $ret;
	}

	if ($argc < 2)
		return ;
	$strtab = ft_split($argv[1]);
	array_push($strtab, $strtab[0]);
	unset($strtab[0]);
	foreach($strtab as $key=>$str)
	{
		if ($key != 1)
			echo " ";
		echo $str;
	}
	echo "\n";
?>