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

curl -d login=user1 -d passwd=pass1 -d submit=OK 'http://localhost/ex04/create.php'
curl -d login=user2 -d passwd=pass2 -d submit=OK 'http://localhost/ex04/create.php'
curl -c user1.txt -d login=user1 -d passwd=pass1 'http://localhost/ex04/login.php'
curl -b user1.txt -d submit=OK -d msg=Bonjours 'http://localhost/ex04/speak.php'
curl -b user1.txt -c user1.txt 'http://localhost/ex04/logout.php'
curl -b user1.txt -d submit=OK -d msg=Bonjours 'http://localhost/ex04/speak.php'
curl -c user2.txt -d login=user2 -d passwd=pass2 'http://localhost/ex04/login.php'
curl -b user2.txt -d submit=OK -d msg=Hello 'http://localhost/ex04/speak.php'