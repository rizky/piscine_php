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
	$array = array();
	while ($read && !feof($read))
	{
		$order = fgets($read);
		$time = str_replace("\n", "", fgets($read));
		if (!ft_is_time($time))
			ft_error();
		$text = fgets($read);
		$i = 0;
		while ($text && strcmp($text, "\n") != 0)
		{
			if ($i == 0)
				$array[$time] = str_replace("\n", "", $text);
			else
				$array[$time] = $array[$time]."\n".str_replace("\n", "", $text);
			$text = fgets($read);
			$i++;
		}
	}
    ksort($array);
    $index = 1;
    foreach($array as $k=>$v){
		if ($index != 1)
			echo "\n";
		echo $index."\n".$k."\n".$v."\n";
		$index++;
	}
?>