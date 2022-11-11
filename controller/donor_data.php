<?php
    include '../model/Donor.php';

    if ( isset($_POST['firstname'], $_POST['lastname'], $_POST['bloodtype'], $_POST['cni'], $_POST['city'], $_POST['phone']) ){
        $cni = $_POST['cni'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $bloodtype = $_POST['bloodtype'];
        $city = $_POST['city'];
        

        if (!empty($cni) && !empty($firstname) && !empty($lastname) && !empty($phone) && !empty($bloodtype) && !empty($city) ){

            $donor = new Donor($cni, $firstname, $lastname, $phone, $bloodtype, $city);

        

            if ($donor->checkdonor()){
                header('location: ../index.php?message=exist');
            }else{
                if($donor->adddonor()){
                    header('location: ../index.php?message=added');
                }else{
                    header('location: ../index.php?message=fialed');
                }
            
            }


        }else{
            header('location: ../index.php');
        }
    }else{
        header('location: ../index.php');
    }





?>