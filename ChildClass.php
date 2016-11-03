<?php
	class ChildClass extends ParentClass {

        public $class = 'Paladin';
        public $HP = '10';
        public $ATK = '2';
        public $DEF = '1';

        public function __construct($name, $gender, $level, $class, $HP, $ATK, $DEF){
            $this->name = $name;
            $this->gender = $gender;
            $this->level = $level;
            $this->class = $class;
            $this->HP = $HP;
            $this->ATK = $ATK;
            $this->DEF = $DEF;
        }

        public function __toString(){
            $who = "Name:" . $this->getName() . "<br>Class:". $this->getClass()."(".$this->getGender().")";
            $info = "Level:" . $this->getLevel() . "";
            $stats = "HP:" . $this->getHP() . "<br>ATK:". $this->getATK()."<br>DEF:". $this->getDEF();
            return $who . "<br>" . $info."<br>". $stats;
        }

        public function getClass(){
            return $this->class;
        }

        public function getHP(){
            return $this->HP;
        }


        public function getATK(){
            return $this->ATK;
        }

        public function getDEF(){
            return $this->DEF;
        }
        public function setClass($class){
            $this->class = $class;
        }

        public function setHP($HP){
            $this->HP = $HP;
        }


        public function setATK($ATK){
            $this->ATK = $ATK;
        }

        public function setDEF($DEF){
            $this->DEF = $DEF;
        }
	}
