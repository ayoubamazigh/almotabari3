<?php
        error_reporting(0);

    Class Blood_Type{
        private $identification; 
        private $blood_type;

        // THE CONSTRUCTOR FUNCTION 
        Public Function __construct($identificationc, $blood_typec){
            $this->identification = $identificationc;
            $this->blood_type = $blood_typec;
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
         * Get the value of blood_type
         */ 
        public function getBlood_type()
        {
                return $this->blood_type;
        }

        /**
         * Set the value of blood_type
         *
         * @return  self
         */ 
        public function setBlood_type($blood_type)
        {
                $this->blood_type = $blood_type;
                return $this;
        }
        
    }
?>