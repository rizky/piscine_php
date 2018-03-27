#!/usr/bin/php
<?php
    if ($argc < 3) {
        exit();
    }
    $search = $argv[1];
    unset($argv[0], $argv[1]);
    foreach ($argv as $v){
        $tmp = explode(":", $v);
        if ($search === $tmp[0]){
            echo $tmp[1]."\n";
            exit();
        }
    }
?>