<?php
        error_reporting(0);

    Class City{
        private $identification; 
        private $city;

        /// CONSTRUCTOR FUNCTION
        Public Function __construct($identificationc, $c){
            $this->identification = $identificationc;
            $this->city = $c;
        }
        

        /**
         * Get the value of identification
         */ 
        public function getIdentification()
        {
                return $this->identification;
        }

        /**
         * Set the value of identification
         *
         * @return  self
         */ 
        public function setIdentification($identification)
        {
                $this->identification = $identification;

                return $this;
        }

        /**
         * Get the value of city
         */ 
        public function getCity()
        {
                return $this->city;
        }

        /**
         * Set the value of city
         *
         * @return  self
         */ 
        public function setCity($city)
        {
                $this->city = $city;

                return $this;
        }
    }




?>