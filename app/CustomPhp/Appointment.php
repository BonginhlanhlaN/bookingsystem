<?php 

    namespace App\CustomPhp;

    class Appointment{

        private $service;
        private $serviceName;
        private $price;
        private $date;
        private $time;

        public function __construct($service , $serviceName , $price , $date = null , $time = null){

            $this->service = $service;
            $this->serviceName = $serviceName;
            $this->price = $price;
            $this->date = $date;
            $this->time = $time;
            

        }

        public function getService(){
            return $this->service;
        }

        public function getServiceName(){
            return $this->serviceName;
        }
        

        public function getDate(){
            return $this->date;
        }

        public function getTime(){
            return $this->time;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setService($service){
            $this->service = $service;
        }

        public function setServiceName($serviceName){
            $this->serviceName = $serviceName;
        }

        public function setDate($date){
            $this->date = $date;
        }

        public function setTime($time){
            $this->time = $time;
        }

        public function setPrice($price){
            $this->price = $price;
        }
        

    }

?>