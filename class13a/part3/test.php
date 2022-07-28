<?php


$rrr = isset($_GET["rollnumber"]) ?$_GET["rollnumber"] : NULL;

$result = array("123"=> "GPA 5","222"=>"GPA 4","444"=>"GPA 3.5");



if(isset($_GET["sub"])){
    $test =  isset($result[$rrr]) ? $result[$rrr] : "Invalid Number";
}


?>


<h1>
<?php if(isset($test)){
    echo $test;
}?></h1>