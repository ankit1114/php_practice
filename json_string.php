<?php

$str = '{"action": "create","record": {"type": "n$product","fields": {"n$name": "Bread","n$price": 2.11},"namespaces": { "my.demo": "n" }}}';
$array = json_decode($str, true);

echo "<pre>";
print_r($array);

?>
