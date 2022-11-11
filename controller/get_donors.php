<?php

    include "../assest/scripts/php/connection.php";

    if (isset($_POST['bloodtype'], $_POST['city'])){
        $bloodtype = $_POST['bloodtype'];
        $city = $_POST['city'];
        if(!empty($bloodtype) && !empty($city)){

            $connection = new Connection();
            $query = "select First_Name, Phone_Number, Blood_Type.Blood_type, City.City FROM Donor, Blood_type, City WHERE Donor.Blood_Type = Blood_Type.identification and Donor.City = City.identification and donor.blood_type =$bloodtype and donor.city = $city;";

            $result = mysqli_query($connection->getConnection(), $query);
            while ($row = mysqli_fetch_array($result)){
                echo "name: $row[0] | phone: $row[1] | blood type: $row[2] | city: $row[3]";
            }

        }else{
            header('location: ../index.php');
        }
    }else{
        header('location: ../index.php');
    }

?>

