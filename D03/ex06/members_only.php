<?php
    if (($_SERVER['PHP_AUTH_USER'] != "zaz") || ($_SERVER['PHP_AUTH_PW'] != "jaimelespetitsponeys")){
        header('HTTP/1.0 401 Unauthorized');
        header('WWW-Authenticate: Basic realm=\'\'Member area\'\'');
        echo "<html><body>That area is accessible for members only</body></html>\n";
    } else {
    	$file = file_get_contents('42.png');
    	echo "<html><body>Hello Zaz<br />\n<img src='data:image/jpeg;base64,".base64_encode($file)."'>\n</body></html>\n";
	}
?>