<?php

    class Point2D
    {
        public $x;
        public $y;

        public function Point2D($x,$y)
        {
            $this-> x = $x;
            $this-> y = $y;
        }

        public function getX(){
            return $this-> x;
        }

        public function setX($x){
            return $this-> x = $x;
        }

        public function getY(){
            return $this-> y;
        }

        public function setY($y){
            return $this-> y = $y;
        }

        public function setXY(){
            return array($this->x, $this->y);
        }

        public function getXY(){
            return array($this->x, $this->y);
        }

        public function toString(){
            echo "<h2>Point2D</h2>". "<br>". "Tọa độ Point2D :". "x:" .$this->x. "," ."y" .$this->y . "<br>";        
        }
    }

    class Point3D extends Point2D
    {
        private $z;
        public function Point3D($x,$y,$z)
        {
            parent::Point2D($x,$y);
            $this->z= $z;
        }

        public function getZ(){
            return $this->z;
        }
        public function setZ($z){
            return $this->z=$z;
        }

        public function getXYZ(){
            return array($this->x, $this->y, $this->z);
        }
        public function toString(){
            echo "<h2>Point3D</h2>". "<br>". "Tọa độ Point3D :". "x: ". $this->x. ","."y: " .$this->y. "z: ".$this->z;
        }
    }

    $myPoint2D = new Point2D(2,3);
    $myPoint2D->toString();

    $myPoint3D = new Point3D(24,23,19);
    $myPoint3D->toString();
?>