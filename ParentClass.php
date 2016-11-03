<?php
	class ParentClass {
        public $name = 'Brian';
        public $gender = '♂';
        public $level = '1';

        public function __construct($name, $gender, $level){
            $this->name    = $name;
            $this->gender     = $gender;
            $this->level = $level;
        }

        public function __toString(){
            $who = "Name: " . $this->getName() . "<br>Gender: ". $this->getGender();
            $info = "Level: " . $this->getLevel() . "";
            return $who . "<br>" . $info;
        }

        public function getName(){
            return $this->name;
        }
        public function getGender(){
            return $this->gender;
        }
        public function getLevel(){
            return $this->level;
        }

        public function setName($name){
            $this->name = $name;
        }
        public function setGender($gender){
            $this->gender = $gender;
        }
        public function setLevel($level){
            $this->level = $level;
        }
	}
