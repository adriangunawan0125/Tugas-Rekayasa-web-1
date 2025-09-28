<?php
$jsonobj = '{"PHP":"Laravel","Dart":"Flutter","Python":"Django","JavaScript":"next.js"}';
$obj = json_decode($jsonobj);

echo $obj->PHP. "<br>" ;
echo $obj->Dart. "<br>";
echo $obj->Python. "<br>";
echo $obj->JavaScript. "<br>";
?>  