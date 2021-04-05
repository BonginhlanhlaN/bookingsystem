<?php

    namespace App\CustomPhp;
   
    class Month{

        protected $monthName;
        private $monthNumber;
        protected $lastDay;

        public function __construct($monthName , $monthNumber , $lastDay){
            $this->monthName = $monthName;
            $this->monthNumber = $monthNumber;
            $this->lastDay = $lastDay;
        }

        public function getMonthName(){
            return $this->monthName;
        }

        public function getMonthNumber(){
            return $this->monthNumber;
        }

        public function getLastDay(){
            return $this->lastDay;
        }

    }



?>