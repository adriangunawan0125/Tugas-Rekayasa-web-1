<?php
$jsonobj = '{"PHP":"Laravel","Dart":"Flutter","Python":"Django","JavaScript":"next.js"}';
$arr = json_decode($jsonobj, true);


echo $arr["PHP"];
echo $arr["Dart"];
echo $arr["Python"];
echo $arr["JavaScript"];
?>
