<?php


    Class Region{
        private $identification; 
        private $region;

        
        
        Public Function __construct($identificationc, $reg){
            $this->identification = $identificationc;
            $this->region = $reg;
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
         * Get the value of region
         */ 
        public function getRegion()
        {
                return $this->region;
        }

        /**
         * Set the value of region
         *
         * @return  self
         */ 
        public function setRegion($region)
        {
                $this->region = $region;

                return $this;
        }
    }




?>