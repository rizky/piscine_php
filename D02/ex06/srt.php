#!/usr/bin/php
<?php
    function ft_is_time($a) {
        return preg_match("/^[0-9][0-9]:[0-9][0-9]:[0-9][0-9],[0-9][0-9][0-9] --> [0-9][0-9]:[0-9][0-9]:[0-9][0-9],[0-9][0-9][0-9]$/", $a);
    }

    if ($argc != 2 || !file_exists($argv[1]))
        exit();
    $read = fopen($argv[1], 'r');
	while ($read && !feof($read))
	{
		$order = fgets($read);
		echo $order;
		$time = fgets($read);
		echo $time;
		if (!ft_is_time($time))
		{
			echo "Invalid File\n";
			exit();
		}
		$array[$time] = fgets($read);
		echo $time;
	}

    ksort($array);
    $index = 0;
    foreach($array as $k=>$v){
		echo $index."\n";
		echo $k."\n";
		echo $v."\n";
		$index++;
	}
?>