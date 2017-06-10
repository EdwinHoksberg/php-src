--TEST--
Test getimagesize() function : basic functionality
--FILE--
<?php
/* Prototype  : array getimagesize(string imagefile [, array info])
 * Description: Get the size of an image as 4-element array 
 * Source code: ext/standard/image.c
 */

$imagetype_filenames = array(
      // GIF file
      "GIF image file" => "200x100.gif",

      //JPEG file
      "JPEG image file" => "200x100.jpg",

      //PNG file
      "PNG image file" => "200x100.png",
    
      //SWF file
      "SWF image file" => "200x100.swf",
      
      //BMP file
      "BMP image file" => "200x100.bmp",
      
      //TIFF intel byte order
      "TIFF intel byte order image file" => "200x100.tif",

      //JPC file
      "JPC image file" => "test1pix.jpc",

      //JP2 file
      "JP2 image file" => "test1pix.jp2",

      //IFF file
      "IFF image file" => "test4pix.iff"
);

echo "*** Testing getimagesize() : basic functionality ***\n";

// loop through each element of the array for imagetype
foreach($imagetype_filenames as $key => $filename) {
      echo "\n-- $key ($filename) --\n";
      var_dump( getimagesize(dirname(__FILE__)."/$filename", $info) );
      var_dump( $info );
};
?>
===DONE===
--EXPECTF--
*** Testing getimagesize() : basic functionality ***

-- GIF image file (200x100.gif) --
array(7) {
  ["width"]=>
  int(200)
  ["height"]=>
  int(100)
  ["type"]=>
  int(1)
  ["text"]=>
  string(24) "width="200" height="100""
  ["bits"]=>
  int(8)
  ["channels"]=>
  int(3)
  ["mime"]=>
  string(9) "image/gif"
}
array(0) {
}

-- JPEG image file (200x100.jpg) --
array(7) {
  ["width"]=>
  int(200)
  ["height"]=>
  int(100)
  ["type"]=>
  int(2)
  ["text"]=>
  string(24) "width="200" height="100""
  ["bits"]=>
  int(8)
  ["channels"]=>
  int(3)
  ["mime"]=>
  string(10) "image/jpeg"
}
array(1) {
  ["APP0"]=>
  string(%d)%s
}

-- PNG image file (200x100.png) --
array(6) {
  ["width"]=>
  int(200)
  ["height"]=>
  int(100)
  ["type"]=>
  int(3)
  ["text"]=>
  string(24) "width="200" height="100""
  ["bits"]=>
  int(8)
  ["mime"]=>
  string(9) "image/png"
}
array(0) {
}

-- SWF image file (200x100.swf) --
array(5) {
  ["width"]=>
  int(200)
  ["height"]=>
  int(100)
  ["type"]=>
  int(4)
  ["text"]=>
  string(24) "width="200" height="100""
  ["mime"]=>
  string(29) "application/x-shockwave-flash"
}
array(0) {
}

-- BMP image file (200x100.bmp) --
array(6) {
  ["width"]=>
  int(200)
  ["height"]=>
  int(100)
  ["type"]=>
  int(6)
  ["text"]=>
  string(24) "width="200" height="100""
  ["bits"]=>
  int(24)
  ["mime"]=>
  string(14) "image/x-ms-bmp"
}
array(0) {
}

-- TIFF intel byte order image file (200x100.tif) --
array(5) {
  ["width"]=>
  int(200)
  ["height"]=>
  int(100)
  ["type"]=>
  int(7)
  ["text"]=>
  string(24) "width="200" height="100""
  ["mime"]=>
  string(10) "image/tiff"
}
array(0) {
}

-- JPC image file (test1pix.jpc) --
array(7) {
  ["width"]=>
  int(1)
  ["height"]=>
  int(1)
  ["type"]=>
  int(9)
  ["text"]=>
  string(20) "width="1" height="1""
  ["bits"]=>
  int(8)
  ["channels"]=>
  int(3)
  ["mime"]=>
  string(24) "application/octet-stream"
}
array(0) {
}

-- JP2 image file (test1pix.jp2) --
array(7) {
  ["width"]=>
  int(1)
  ["height"]=>
  int(1)
  ["type"]=>
  int(10)
  ["text"]=>
  string(20) "width="1" height="1""
  ["bits"]=>
  int(8)
  ["channels"]=>
  int(3)
  ["mime"]=>
  string(9) "image/jp2"
}
array(0) {
}

-- IFF image file (test4pix.iff) --
array(6) {
  ["width"]=>
  int(4)
  ["height"]=>
  int(1)
  ["type"]=>
  int(14)
  ["text"]=>
  string(20) "width="4" height="1""
  ["bits"]=>
  int(4)
  ["mime"]=>
  string(9) "image/iff"
}
array(0) {
}
===DONE===
