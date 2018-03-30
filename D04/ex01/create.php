<?php
    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK") {
		if (!file_exists('./private'))
		{
            mkdir("./private");
        }
		if (!file_exists('./private/passwd'))
		{
            file_put_contents('./private/passwd', null);
        }
        $account = unserialize(file_get_contents('./private/passwd'));
		if ($account)
		{
            $exist = 0;
			foreach ($account as $k => $v)
			{
                if ($v['login'] === $_POST['login'])
                    $exist = 1;
            }
        }
		if ($exist)
		{
            echo "ERROR\n";
		}
		else
		{
            $new['login'] = $_POST['login'];
            $new['passwd'] = hash('whirlpool', $_POST['passwd']);
            $account[] = $new;
            file_put_contents('./private/passwd', serialize($account));
            echo "OK\n";
        }
	}
	else
	{
        echo "ERROR\n";
    }
?>