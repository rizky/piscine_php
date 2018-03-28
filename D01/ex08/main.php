#!/usr/bin/php
<?php
	include("ft_is_sort.php");
	$tab = array("!/@#;^", "42", "Hello World", "hi", "zZzZzZz");
	if (ft_is_sort($tab))
		echo "The array is sorted\n";
	else
		echo "The array is not sorted\n";
	$tab[] = "What are we doing now ?";
	if (ft_is_sort($tab))
		echo "The array is sorted\n";
	else
		echo "The array is not sorted\n";
	$tab = array("zZzZzZz", "hi", "Hello World", "42", "!/@#;^");
	if (ft_is_sort($tab))
		echo "The array is sorted\n";
	else
		echo "The array is not sorted\n";
	$tab = array();
	if (ft_is_sort($tab))
		echo "The array is sorted\n";
	else
		echo "The array is not sorted\n";
?>