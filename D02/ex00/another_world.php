#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$str[1] = str_replace('\t','', $str[1]);
		$ret = array_filter(explode(' ', $str));
		$ret = array_values($ret);
		return $ret;
	}

	if ($argc < 2)
		exit();
	$strtab = ft_split($argv[1]);
	foreach($strtab as $key=>$str)
	{
		if ($key != 0)
			echo " ";
		echo $str;
	}
	echo "\n";
?>