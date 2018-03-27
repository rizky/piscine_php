#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$ret = array_filter(explode(' ', $str));
		$ret = array_values($ret);
		return $ret;
	}
	if ($argc < 2)
	{
        echo "Incorrect Parameters\n";
        exit();
	}
	$argv[1] = str_replace("*", " * ", $argv[1]);
	$argv[1] = str_replace("+", " + ", $argv[1]);
	$argv[1] = str_replace("-", " - ", $argv[1]);
	$argv[1] = str_replace("/", " / ", $argv[1]);
	$argv[1] = str_replace("%", " % ", $argv[1]);
	$strtab = ft_split($argv[1]);
	if (count($strtab) > 3)
	{
		echo "Incorrect Parameters\n";
		exit();
	}
	if (!is_numeric(trim($strtab[0])) || !is_numeric(trim($strtab[2])))
	{
		echo "Syntax Error\n";
		exit();
	}
	$ops = array("*", "+", "-", "/", "%");
	if (!in_array(trim($strtab[1]), $ops))
	{
		echo "Syntax Error\n";
		exit();
	}
    switch (trim($strtab[1])) {
        case ("*") :
            echo trim($strtab[0]) * trim($strtab[2]);
            break;
        case ("+") :
            echo trim($strtab[0]) + trim($strtab[2]);
            break;
        case ("-") :
            echo trim($strtab[0]) - trim($strtab[2]);
            break;
        case ("/") :
            echo trim($strtab[0]) / trim($strtab[2]);
            break;
        case ("%") :
			echo trim($strtab[0]) % trim($strtab[2]);
            break;
    }
    echo "\n";