<?php
    class phuongTrinh{
        public $a;
        public $b;
        public $c;
//        public $delta;
//        public function __construct($a, $b, $c){
//            $this->a = $a;
//            $this->b = $b;
//            $this->c = $c;
//        }
        public function seta($x){
            $this->a = $x;
        }
        public function setb($y){
            $this->b = $y;
        }
        public function setc($z){
            $this->c = $z;
        }
        public function geta(){
           return $this->a;
        }
        public function getb(){
            return $this->b;
        }
        public function getc(){
            return $this->c;
        }

        public function getDiscriminant(){
//            return ($this->b**2 - 4*$this->a*$this->c);
            return ($this->getb() **2 - 4*$this->geta()*$this->getc());
        }
        public function getRoot1($del){
                return (-$this->b + pow($del,0.5))/(2*$this->a);
        }
        public function getRoot2($del){
                return (-$this->b - pow($del,0.5))/(2*$this->a);
        }
        public function root(){
            $delta = $this->getDiscriminant();
            if($delta>0){
                return "<br> phuong trinh co nghiem x1 = ".$this->getRoot1($delta)." va x2 = ".$this->getRoot2($delta);
            }elseif ($delta==0){
                return "<br> phuong trinh co nghiem kep x1 = x2 = ".$this->getRoot1($delta);
            }else{
                return "<br> phuong trinh vo nghiem";
            }
        }
    }