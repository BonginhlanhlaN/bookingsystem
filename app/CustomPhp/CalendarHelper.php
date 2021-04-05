<?php

    namespace App\CustomPhp;

    use App\CustomPhp\Month;
    use App\CustomPhp\ViewableMonth;

    class CalendarHelper{

        private $currentYear;
        private $currentMonth;
        private $currentMonthDay;
        private $currentWeekDay;
        private $isLeapYear;

        private  $monthsInYear;
        private  $viewableMonths;

        public function __construct(){

            $this->currentYear = date("Y");
            $this->currentMonth = date("n");
            $this->currentMonthDay = date("j");

            $this->monthsInYear = array(new Month("Jan" , "01" , 31) , new Month("Feb" , "02" , 28) , new Month("Mar" , "03" , 31)
            , new Month("Apr" , "04" , 30) , new Month("May" , "05" , 31) , new Month("Jun" , "06" , 30) , new Month("Jul" , "07" , 31)
            , new Month("Aug" ,"08" , 31) , new Month("Sep" , "09" , 30) , new Month("Oct" , "10" , 31) , new Month("Nov" , "11" , 30)
            , new Month("Dec" , "12" , 31));

        }

        public function getTodaysDay(){
            return $this->currentMonthDay;
        }
        
       

        /**
         * This will determine which three months to view
         * from the current month
         */
       
        public function determineViewableMonths(){

            $firstViewableMonth = $this->currentMonth;
            
            for ($i = $firstViewableMonth-1; $i < $firstViewableMonth+2 ; $i++) { 
                
                if($i == 12){
                    //Than January the following year
                    $viewableMonth = new ViewableMonth($this->monthsInYear[0]->getMonthName() , $this->monthsInYear[0]->getMonthNumber() ,  $this->monthsInYear[0]->getLastDay() , date("w", mktime(0, 0, 0, 1 , 1 , ($this->currentYear + 1))) , $this->currentYear + 1);
                    $viewableMonth->isLeapyear();
                    $this->viewableMonths[] = $viewableMonth;
                    
                }else if($i == 13){
                    //Than February the following year

                    $viewableMonth = new ViewableMonth($this->monthsInYear[1]->getMonthName() , $this->monthsInYear[1]->getMonthNumber() ,  $this->monthsInYear[1]->getLastDay() , date("w", mktime(0, 0, 0, 2 , 1 , ($this->currentYear + 1))) , $this->currentYear + 1);
                    $viewableMonth->isLeapyear();
                    $this->viewableMonths[] = $viewableMonth;
                    
                }else{

                    $viewableMonth = new ViewableMonth($this->monthsInYear[$i]->getMonthName() , $this->monthsInYear[$i]->getMonthNumber() ,  $this->monthsInYear[$i]->getLastDay() , date("w", mktime(0, 0, 0, $i+1 , 1 , $this->currentYear)) , $this->currentYear);
                    $viewableMonth->isLeapyear();
                    $this->viewableMonths[] = $viewableMonth;

                }

            }

            return $this->viewableMonths;

        }

    }

?>