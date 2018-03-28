ex00
./another_world.php "This    sentence   contains spaces and      some      tabulations"
This sentence contains spaces and some tabulations
./another_world.php "  This arg   is     used  " "but not this   one"
This arg is used

ex01
./one_more_time.php "Mardi 12 Novembre 2013 12:02:21"
1384254141
./one_more_time.php "Mercreday 1stJuily 99"
Wrong Format
./one_more_time.php

ex02
cat > page.html
./loupe.php page.html > new_page.html
<html><head><title>Nice page</title></head>
<body>Hello World <a href=http://cyan.com title="A LINK">THIS IS A LINK</a>
<br /><a href=http://www.riven.com> AND THIS TOO <img src=wrong.image title="AND ALSO THIS"></a>
</body></html>

ex03
./who.php
who

ex04
./photos.php "http://www.42.fr"

ex05
./denial.php data.csv pseudo
Enter your command: echo $name['miawallace']."\n";
Naline
Enter your command: ^D
./denial.php data.csv
./denial.php invalid_file login
./denial.php data.csv invalid_header_key

ex06
