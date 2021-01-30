<?php
//chen class rectang
include "class_rectang.php";
// khai bao chieu rong chieu dai cho hinh chu nhat
$width = 10;
$height = 20;
// tao mot doi tuong tu class rectang
$rectangle = new Rectangle($width, $height);
// hien thi chieu dai chieu rong
echo "width: ".$rectangle->width;
echo "height: ".$rectangle->height;
echo "<br>";

//set lai kich thuoc
$width = 20;
$height = 30;
$rectangle = new Rectangle($width, $height);
echo "width: ".$rectangle->width;
echo "<br>";
echo "height: ".$rectangle->height;
echo "<br>";
//hien thi dien tich
echo "Area: " . $rectangle->getArea();
echo "<br>";
//hien thi chu vi
echo "Area: " . $rectangle->getPerimeter();
echo "<br>";
// display
echo $rectangle->display();
