--TEST--
test1() Basic test
--EXTENSIONS--
hpack
--FILE--
<?php
$ret = test1();

var_dump($ret);
?>
--EXPECT--
The extension hpack is loaded and working!
NULL
