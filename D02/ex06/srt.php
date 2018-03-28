#!/usr/bin/php
<?php
	function ft_is_time($a)
	{
        return preg_match("/^[0-9][0-9]:[0-9][0-9]:[0-9][0-9],[0-9][0-9][0-9] --> [0-9][0-9]:[0-9][0-9]:[0-9][0-9],[0-9][0-9][0-9]$/", $a);
	}
	
	function ft_error()
	{
		echo "Invalid File\n";
		exit();
	}

    if ($argc != 2 || !file_exists($argv[1]))
        exit();
    $read = fopen($argv[1], 'r');
	while ($read && !feof($read))
	{
		$order = fgets($read);
		$time = str_replace("\n", "", fgets($read));
		if (!ft_is_time($time))
			ft_error();
		$array[$time] = str_replace("\n", "", fgets($read));
		$nl = fgets($read);
	}
    ksort($array);
    $index = 1;
    foreach($array as $k=>$v){
		if ($index != 1)
			echo "\n";
		echo $index."\n";
		echo $k."\n";
		echo $v."\n";
		$index++;
	}
?>