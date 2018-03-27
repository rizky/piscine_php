<?php
	function ft_is_sort($tab)
	{
		foreach($tab as $key=>$val)
		{
			if ($key > 0 && $val < $tab[$key - 1])
				return (0);
		}
		return (1);
	}
?>