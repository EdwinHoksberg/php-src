--TEST--
Test getimagesize() function : variation - For shockwave-flash format
--SKIPIF--
<?php
	if (!defined("IMAGETYPE_SWC") || !extension_loaded('zlib')) {
		die("skip zlib extension is not available");
	}
?>
--FILE--
<?php
/* Prototype  : array getimagesize(string imagefile [, array info])
 * Description: Get the size of an image as 4-element array 
 * Source code: ext/standard/image.c
 */

echo "*** Testing getimagesize() : variation ***\n";

var_dump( getimagesize(dirname(__FILE__)."/test13pix.swf", $info) );
var_dump( $info );
?>
===DONE===
--EXPECTF--
*** Testing getimagesize() : variation ***
array(5) {
  ["width"]=>
  int(550)
  ["height"]=>
  int(400)
  ["type"]=>
  int(13)
  ["text"]=>
  string(24) "width="550" height="400""
  ["mime"]=>
  string(29) "application/x-shockwave-flash"
}
array(0) {
}
===DONE===
