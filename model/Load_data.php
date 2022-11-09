<?php

    include "../assest/scripts/php/connection.php";
    include "../model/Blood_Type.php";


    Class Load_data{

        public function __construct(){
        }
        
        
        
        public Function load_blood_type(){
            $connection1 = new Connection();
            $blood_type_array = null;
            $counter = 0;
            $query = "SELECT * FROM blood_type;";
            
            $result = mysqli_query($connection1->getConnection(), $query);
            
            while ($row = mysqli_fetch_array($result)){

                $Bloodtype = new Blood_type($row[0],$row[1]);
                $blood_type_array[$counter] = $Bloodtype;
                $counter++;

            }
            return $blood_type_array;
            
        }






    }



?>
