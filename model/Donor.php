<?php
    
    Class Donor{
        private $identification;
        private $fist_name;
        private $last_name;
        private $Date_birth;
        private $phone;
        private $Email;
        private $Blood_type;
        private $city;

        public Function __construct($identificationc, $fist_namec,  $last_namec, $Date_birthc, $phonec, $Emailc,$Blood_typec,$city){
            $this -> identification = $identificationc;
            $this -> first_name = $identificationc;
            $this -> last_name = $identificationc;
            $this -> date_birth = $identificationc;
            $this -> phone = $identificationc;
            $this -> email = $identificationc;
            $this -> Blood_type = $identificationc;
            $this -> city = $identificationc;
        }


        // Geters

        public function getIdentification()
        {
                return $this->identification;
        }

        public function getFist_name()
        {
                return $this->fist_name;
        }

        public function getLast_name()
        {
                return $this->last_name;
        }

        public function getDate_birth()
        {
                return $this->Date_birth;
        }

        public function getPhone()
        {
                return $this->phone;
        }

        public function getBlood_type()
        {
                return $this->Blood_type;
        }

        public function getCity()
        {
                return $this->city;
        }

        public function getEmail()
        {
                return $this->Email;
        }

        public function setIdentification($identification)
        {
                $this->identification = $identification;

                return $this;
        }


        // Seters

        public function setFist_name($fist_name)
        {
                $this->fist_name = $fist_name;

                return $this;
        }

        public function setLast_name($last_name)
        {
                $this->last_name = $last_name;

                return $this;
        }

        public function setDate_birth($Date_birth)
        {
                $this->Date_birth = $Date_birth;

                return $this;
        }

        public function setPhone($phone)
        {
                $this->phone = $phone;

                return $this;
        }
 
        public function setEmail($Email)
        {
                $this->Email = $Email;

                return $this;
        }

        public function setBlood_type($Blood_type)
        {
                $this->Blood_type = $Blood_type;

                return $this;
        }

        public function setCity($city)
        {
                $this->city = $city;

                return $this;
        }
    }










?>