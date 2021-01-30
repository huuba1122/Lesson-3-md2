<?php
include "class_phuong_trinh.php";

//$a = 1;
//$b = 3;
//$c = 1;

//$pt1 = new phuongTrinh($a,$b,$c);
$pt1 = new phuongTrinh();
$pt1->seta(1);
$pt1->setb(3);
$pt1->setc(1);
echo $pt1->geta();
echo "<br>";
echo $pt1->getb();
echo "<br>";
echo $pt1->getc();
echo "<br>";
echo $pt1->getDiscriminant();
echo "<br>";
echo $pt1->root();
