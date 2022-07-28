<?php

$student = array(
    "1"=>array("name"=>"manik","class"=>10, "shift"=>array("morning","day"),"dep"=>"abc"),
    "2"=>array("name"=>"rasel","class"=>8,"dep"=>"xyz"),
    "3"=>array("name"=>"rakib","class"=>9,"dep"=>"uuu"),
);

echo $student["1"]["shift"][1];

