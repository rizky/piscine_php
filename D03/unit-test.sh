curl 'http://localhost/ex01/phpinfo.php'

curl 'http://localhost/ex02/print_get.php?login=montinet'
curl 'http://localhost/ex02/print_get.php?gdb=pied2biche&barry=barreamine'

curl -c cook.txt 'http://localhost/ex03/cookie_crisp.php?action=set&name=plat&value=choucroute'
curl -b cook.txt 'http://localhost/ex03/cookie_crisp.php?action=get&name=plat'

curl -c cook.txt 'http://localhost/ex03/cookie_crisp.php?action=del&name=plat'
curl -b cook.txt 'http://localhost/ex03/cookie_crisp.php?action=get&name=plat'

curl 'http://localhost/ex04/raw_text.php'

curl --head 'http://localhost/ex05/read_img.php'

curl --user root:root 'http://localhost/ex06/members_only.php'