./hw.php
Hello World

./mlx.php


./oddeven.php
Enter a number: 42
The number 42 is even
Enter a number: 0
The number 0 is even
Enter a number:
'' is not a number
Enter a number: toto
'toto' is not a number
Enter a number: 21
The number 21 is odd
Enter a number: 99cosmos
'99cosmos' is not a number
Enter a number: ^D
$>


./main.php
Array
(
[0] => AAA
[1] => Hello
[2] => World
)

./aff_param.php
./aff_param.php toto ahah foo bar quax
toto
ahah
foo
bar
quax
$>

./epur_str.php
./epur_str.php "Hello,     how do  you   do     ?"
Hello, how do you do ?
./epur_str.php "   Hello World    "
Hello World
$>

./ssap.php
./ssap.php foo bar
bar
foo
./ssap.php foo bar "yo man" "Here is my, two words" Xibul
Here
Xibul
bar
foo
is
man
my,
two
words
yo
$>

./rostring.php
./rostring.php sdfkjsdkl sdkjfskljdf
sdfkjsdkl
./rostring.php "hello world  aaa" fslkdjf
world aaa hello
$>

./main.php
The array is not sorted
$>

./ssap2.php
./ssap2.php toto tutu 4234 "_hop A2l+ XXX" "##" "1948372 AhAhAh"
AhAhAh
A2l+
toto
tutu
XXX
1948372
4234
##
_hop

./do_op.php
Incorrect Parameters
./do_op.php 1 + 3
4
./do_op.php " 1" " +" " 3"
4
./do_op.php " 1" " *" " 3"
3
./do_op.php 42 "% " 3
0

./do_op_2.php
Incorrect Parameters
./do_op_2.php toto
Syntax Error
./do_op_2.php "42*2"
84
./do_op_2.php "  42 / 2 "
21
./do_op_2.php "six6*7sept"
Syntax Error
./do_op_2.php '`rm -rf ~/`;'
Syntax Error

./search_it\!.php
./search_it\!.php toto
./search_it\!.php toto "key1:val1" "key2:val2" "toto:42"
42
./search_it\!.php toto "toto:val1" "key2:val2" "toto:42"
42
./search_it\!.php "toto" "key1:val1" "key2:val2" "0:hop"
./search_it\!.php "0" "key1:val1" "key2:val2" "0:hop"
hop
$>

cat peer_notes_1.csv | ./agent_stats.php
cat peer_notes_1.csv | ./agent_stats.php average
9.8621262458472
cat peer_notes_1.csv | ./agent_stats.php average_user
adam_e:9.0555555555556
bertrand_y:7.9473684210526
bruce_w:9.0434782608696
clark_k:10.464285714286
david_a:8.68
dexter_m:8.9
[.....]
sandra_n:11.181818181818
steve_j:11.5
trevor_r:6.1052631578947
cat peer_notes_1.csv | ./agent_stats.php moulinette_variance
adam_e:3.0555555555556
bertrand_y:-1.0526315789474
bruce_w:-9.9565217391304
clark_k:0.46428571428571
[.....]
steve_j:10.5
trevor_r:-12.894736842105
$>

