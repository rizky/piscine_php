<?php
	function ft_is_sort($tab)
	{
		$i = 0;
		$min = 0;
		$plus = 0;
		if (count($tab) == 0)
			return (-1);
		while ($i < count($tab) - 1)
		{
			if ($tab[$i] < $tab[$i + 1])
				$min = $min + 1;
			else
				$plus = $plus + 1;
			$i++;
		}
		if ($min == 0)
			return (1);
		else if ($plus == 0)
			return (1);
		else
			return (0);
	}
?>