<?php
        class Shape{
            public $name;
            function __construct($name){
                $this->name = $name;
            }
            function show(){
                echo "hình tên là: ".$this->name;
            }
        }
        /**
         * summary
         */
        class Rectangle extends Shape
        {
            public $width;
            public $height;
            public function __construct($name,$width,$height){
                parent::__construct($name);
                $this->width=$width;
                $this->height=$height;
            }
            public function calculateArea(){
                return $this->width*$this->height;
            }
            public function calulatePerimeter(){
                return ($this->width+$this->height)*2;
            }
            function show(){
                echo "hình tên là: ".$this->name;
            }
        }
        /**
         * 
         */
        class Square extends Rectangle{
        	public $width;
        	function __construct($name,$width){
        		parent::__construct($name,$width);
        	}
        	function area(){
        		return pow($this->width,2);
        	}
        	function perimeter(){
        		return $this->width*4;
        	}
        	function show(){
                echo "hình tên là: ".$this->name;
            }
        }
        $hinhVuong =new Square("vuông",5);
        $hinhVuong->show();
     ?>