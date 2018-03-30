curl -v -c cook.txt 'http://localhost/ex00/index.php'
curl -v -b cook.txt 'http://localhost/ex00/index.php?login=sb&passwd=beeone&submit=OK'
curl -v -b cook.txt 'http://localhost/ex00/index.php'
curl -v 'http://localhost/ex00/index.php'


curl -d login=toto1 -d passwd=titi1 -d submit=OK 'http://localhost/ex01/create.php'