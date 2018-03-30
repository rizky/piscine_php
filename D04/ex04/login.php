<?php
    require_once('auth.php');
    session_start();
	if ($_GET['login'] && $_GET['passwd'] && auth($_GET['login'], $_GET['passwd']))
	{
        $_SESSION['loggued_on_user'] = $_GET['login'];
		echo `
        <!DOCTYPE html>
        <html>
			<head>
				<meta charset="UTF-8">
				<title>Chat</title>
			</head>
			<body>
				<iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
				<iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>
			</body>
        </html>
       `;
	}
	else
	{
        $_SESSION['loggued_on_user'] = "";
        echo "ERROR\n";
	}
?>