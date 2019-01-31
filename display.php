<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 25/01/2019
 * Time: 16:11
 */
include_once "Point2D.php";
include_once "Point3D.php";

$point2D = new Point2D();
$point2D->setX(2);
$point2D->setY(3);
echo $point2D."<br/>";

$point3D = new Point3D();
$point3D->setX(2);
$point3D->setY(3);
$point3D->setZ(4);
echo $point3D;