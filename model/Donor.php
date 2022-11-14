<?php
    
    error_reporting(0);

    // ADDING NEEDED FILES
    include '../assest/scripts/php/connection.php'; /// connection to the database file

    Class Donor{
        private $identification;
        private $fist_name;
        private $last_name;
        private $phone;
        private $Blood_type;
        private $city;
        private $cn_donor;

        //constructor
        public Function __construct($identificationc, $fist_namec,  $last_namec, $phonec, $Blood_typec,$city){
            $this -> identification = $identificationc;
            $this -> fist_name = $fist_namec;
            $this -> last_name = $last_namec;
            $this -> phone = $phonec;
            $this -> Blood_type = $Blood_typec;
            $this -> city = $city;
            $cn = new Connection();

            $this -> cn_donor = $cn-> getConnection();


        }


        // fonction for checking if the donor alredy exists 
        public function checkdonor(){

                $id = $this->getIdentification();
        
                $query = "select count(*) from DONOR where Identification = '$id';";
                $result = mysqli_query($this->cn_donor, $query);
                $num =  mysqli_fetch_array($result);

                if ($num[0] == 1){
                        return true;
                }else{
                        return false;
                }
        }


        // function to add a donor to the databases
        public function adddonor(){

                $id = $this->getIdentification();
                $fn = $this->getFist_name();
                $ln = $this->getLast_name();
                $pn = $this->getPhone();
                $bl = $this->getBlood_type();
                $ct = $this->getCity();

                $query = "INSERT INTO DONOR VALUES ('$id','$fn','$ln','$pn',$bl,$ct)";

                $result = mysqli_query($this->cn_donor, $query);

                if ($result == 1){
                        return true;
                }else{
                        return false;
                }
 
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