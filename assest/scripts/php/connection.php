<?php

    Class Connection {
        private $db_hostname = 'localhost';
        private $db_username = 'root';
        private $db_password = '';
        private $db_database_name = 'almotabari3';
        private $connection;

        public function __construct(){
            
            $this -> connection = mysqli_connect($this->db_hostname, $this->db_username, $this->db_password);
            if($this->connection){
                $db_connect = mysqli_select_db($this->connection, $this->db_database_name);
                if($db_connect){
                    
                }else{
                    header('location: error_page.html?error_code=1');
                }
            }else{
                header('location: error_page.html?error_code=2');
            }




        }

        public function getConnection()
        {
                return $this->connection;
        }
    }


?>