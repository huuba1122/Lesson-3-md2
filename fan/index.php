<?php
include_once "fan.php";
/** tao fan 1*/
$fan1 = new Fan();
$fan1->setSpeed(3);
$fan1->setIsOn(true);
$fan1->setColor("yellow");
$fan1->setRadius(10);
$fan1->toString();

/** khoi tao fan 2*/
$fan2 = new Fan();
$fan2->setSpeed(2);
$fan2->toString();