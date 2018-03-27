#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$ret = array_filter(explode(' ', $str));
		return $ret;
	}

	function is_sort($a, $b)
    {
        $a = strtolower($a);
        $b = strtolower($b);
        $sort = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        $length = strlen($a) < strlen($b) ? strlen($a) : strlen($b);
        for ($i = 0; $i < $length; $i++)
        {
            $aa = $a[$i];
            $bb = $b[$i];
            $ia = array_search($aa, $sort);
            $ib = array_search($bb, $sort);
            $ia = $ia === false ? ord($aa) + 100 : $ia ;
            $ib = $ib === false ? ord($bb) + 100 : $ib ;
            if ($ib < $ia)
                return 1;
            if ($ib > $ia)
                return -1;
        }
        return strlen($a) <= strlen($b) ? -1 : 1;
    }

	unset($argv[0]);
	$strtab = array();
    foreach($argv as $v)
		$strtab = array_merge($strtab, ft_split($v));
	usort($strtab, function($a, $b) {
		return is_sort($a, $b);
	});
	foreach($strtab as $key=>$str)
		echo $str."\n";
?>