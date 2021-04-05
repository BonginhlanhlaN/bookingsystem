<?php

    namespace App\CustomPhp;

    use App\CustomPhp\Month;

    class ViewableMonth extends Month{

        private $startDay;
        private $year;

        public function __construct($monthName , $monthNumber , $lastDay , $startDay = null , $year){

            parent::__construct($monthName , $monthNumber , $lastDay);
            
            $this->startDay = $startDay;
            $this->year = $year;

        }

        public function getStartDay(){
            return $this->startDay;
        }

        public function getYear(){
            return $this->year;
        }

        public  function isLeapyear(){

            $leapyearInt =  date("L", mktime(0, 0, 0, 1 , 1 , $this->year));

            if($leapyearInt == 1 && $this->monthName == "Feb"){
                $this->lastDay + 1;
            }
            /*
            if($year%4 == 0 && $year%100 != 0) {
                return true;
            } elseif($year%400 == 0) {
                return true;                         
            } else {
                return false;
            }
            */

        }

    }

?>