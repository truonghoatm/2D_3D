<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 25/01/2019
 * Time: 14:40
 */

class Point2D
{
    public $x;
    public $y;

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        $arr[] = $this->x;
        $arr[] = $this->y;
        return json_encode($arr);

    }

    public function __toString()
    {
        return $this->getXY();
    }
}


