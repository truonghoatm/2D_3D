<?php
include_once 'Point2D.php';

class Point3D extends Point2D
{
    public $z;

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    public function setXYZ($z)
    {
        $this->z = $z;
    }

    public function getXYZ()
    {
        $arr[] = parent::getX();
        $arr[] = parent::getY();
        $arr[] = $this->z;
        return json_encode($arr);
    }

    public function __toString()
    {
        return $this->getXYZ();
    }
}
