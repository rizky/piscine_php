curl -v -c cook.txt 'http://localhost/ex00/index.php'
curl -v -b cook.txt 'http://localhost/ex00/index.php?login=sb&passwd=beeone&submit=OK'
curl -v -b cook.txt 'http://localhost/ex00/index.php'
curl -v 'http://localhost/ex00/index.php'


curl -d login=toto1 -d passwd=titi1 -d submit=OK 'http://localhost/ex01/create.php'
curl -d login=toto2 -d passwd= -d submit=OK 'http://localhost/ex01/create.php'

curl -d login=x -d passwd=21 -d submit=OK 'http://localhost/ex01/create.php'
curl -d login=x -d oldpw=21 -d newpw=42 -d submit=OK 'http://localhost/ex02/modif.php'
curl -d login=x -d oldpw=21 -d newpw=42 -d submit=OK 'http://localhost/ex02/modif.php'
curl -d login=x -d oldpw=42 -d newpw=21 -d submit=OK 'http://localhost/ex02/modif.php'


curl -d login=toto -d passwd=titi -d submit=OK 'http://localhost/ex01/create.php'
curl -c cook.txt 'http://localhost/ex03/login.php?login=toto&passwd=titi'
curl -b cook.txt 'http://localhost/ex03/whoami.php'
curl -b cook.txt 'http://localhost/ex03/logout.php'
curl -b cook.txt 'http://localhost/ex03/whoami.php'