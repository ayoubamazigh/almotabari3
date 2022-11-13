<?php

    include  "../assest/scripts/php/connection.php";
    include  "../model/Blood_Type.php";
    include  "../model/City.php";
    include  "../model/Region.php";

    $cn = new Connection();
    
    $blood_type_array = null;
    $counter = 0;
    $query = "SELECT * FROM blood_type;";
            
    $result = mysqli_query($cn->getConnection(), $query);
            
    while ($row = mysqli_fetch_array($result)){
        $Bloodtype = new Blood_type($row[0],$row[1]);
        $blood_type_array[$counter] = $Bloodtype;
        $counter++;
    }



    $city_array = null;
    $counter = 0;
    $query = "SELECT * FROM city ORDER BY City;";
            
    $result = mysqli_query($cn->getConnection(), $query);
            

    while ($row = mysqli_fetch_array($result)){
        $city = new City($row[0],$row[1]);
        $city_array[$counter] = $city;
        $counter++;
    }


    $region_array = null;
    $counter = 0;
    $query = "SELECT * FROM region ORDER BY region;";
            
    $result = mysqli_query($cn->getConnection(), $query);
            

    while ($row = mysqli_fetch_array($result)){
        $rigion = new Region($row[0],$row[1]);
        $region_array[$counter] = $rigion;
        $counter++;
    }


    if (isset($_POST['bloodtype'] , $_POST['city'], $_POST['region'] )){

        $bloodtype = $_POST['bloodtype'];
        $city = $_POST['city'];
        $region = $_POST['region'];

        if(!empty($bloodtype) && !empty($city) && !empty($region)){

            $query = "select First_Name, Phone_Number, Blood_Type.Blood_type, City.City FROM Donor, Blood_type, City WHERE Donor.Blood_Type = Blood_Type.identification and Donor.City = City.identification and donor.blood_type =$bloodtype and donor.city = $city and city.region = $region ;";

            $result = mysqli_query($cn->getConnection(), $query);

        }
    }

?>



<!DOCTYPE HTML>
<html lang="ar" >
    <head>
        <title>Almotabari3.com</title>
        <meta charset="utf-8" >
        <meta name="viewport" content="width=device-width initial-scale=1000px" />
        <link rel='icon' href='../assest/_images/logo-donation.png'>
        <link rel='stylesheet' href='../assest/css/search_door.css' type='text/css'>
    </head>
    <body>

        <!--START NAVIGATION-->
    <nav class='navigation' id="navigationx">
        <div onclick="nav_colaps()" class="ham">
            <div class="slice" ></div>
            <div class="slice"></div>
            <div class="slice"></div>
        </div>
        <ul id="nav_colapsing" class="nav-elements">
            <li>
                <div class="darkmode" onclick="darkmode();">
                    <image id="darkmodeimage" src="../assest/_images/darkmode.png"></image>
                </div>
            </li>
            <li>
                <a class="nav-title" href="#opinions">حول المنصة</a>
            </li>
            <li>
                <a class="nav-title" href="#map">مراكز التبرع</a>
            </li>
            <li>
                <a class="nav-title" href="#steps"> عملية التبرع </a>
            </li>
            <li>
                <a class="nav-title" href="#need">شروط التبرع</a>
            </li>
            <li>
                <a class="nav-title" href="#good"> فوائد التبرع</a>
            </li>
            <li>
                <a class="nav-title" href="#">الرئيسية</a>
            </li>
            <div id="close-nax-x" onclick="nav_colaps()" class="close-nav">X</div>
        </ul>
        <div class='navigation-logo small-title'>
            منصة المتبرع
            <image id="darkmodeimage2" class="logoimage" src='../assest/_images/logo-donation.png'></image>
        </div>
    </nav>
    <!--END NAVIGATION-->
        
    <form class="search-form hovering-popup-noscal" action="#" method="POST"> 
        <div  class="body-title big-title">
            البحت عن متبرع
        </div>
        <div class="register-container">
            <div class="register-row">
                
                <div class="rigister-col rl">
                    <div class="regular-text" >
                       : الجهة
                    </div>
                    <select name='region' required>

                        <option value="" disabled selected hidden>المرجو إختيار جهتكم</option>
                    

                    <?php

                        foreach ( $region_array as $region) {
                            $r_id =  $region->getIdentification();
                            $r_name =  $region->getRegion();
                            echo "<option value='$r_id'>$r_name</option>";
                        }

                    ?>

                       

                    </select>
                    
                </div>

                <div class="rigister-col rl">
                    <div class="regular-text" >
                        :المدينة
                    </div>
                    <select name='city' required>

                        <option value="" disabled selected hidden>المرجو إختيار مدينتكم</option>
                        <?php

                            foreach ($city_array as $cityo ) {
                                $city_c = $cityo->getCity();
                                $city_id = $cityo->getIdentification();
                                echo "<option value='$city_id' >$city_c</option>";

                            }

                        ?>

                    </select>
                    
                </div>
                <div class="rigister-col rl">
                    <div class="regular-text" >
                        فصيلة الدم
                    </div>
                    <select name='bloodtype' required>
                        <option value="" disabled selected hidden>المرجو إختيار فصيلة دم</option>
                        <?php

                            foreach ($blood_type_array as $blood_type) {
                                $b_id = $blood_type->getIdentification();
                                $b_name = $blood_type->getBlood_type() . " فصيلة الدم ";
                                echo "<option value='$b_id'>$b_name</option>";
                            }
                        
                        ?>


                    </select>
                    
                </div>
            </div>
        </div>
        
        <div class="submit-wraper">
            <input type="submit" class="submit-form btn-primary">
        </div>
        
        
        
        
        
        
        
        
        

        


    </form>










   







        
                <?php
                    $body = <<<html
                            <div class="show-data" >
                    
                            <table class="hovering-popup-noscal">
                                <tr>
                                    <td class="small-title show-title" >رقم الهاتف</td>
                                    <td class="small-title show-title" >مدينة الإقامة</td>  
                                    <td class="small-title show-title" >الإسم الأول</td>
                                </tr>
                        html;


                    while ($row = mysqli_fetch_array($result)){
                    $body .= <<<html
                            <td class="regular-text">$row[1]</td>
                            <td class="regular-text">$row[3]</td>
                            <td class="regular-text">$row[0]</td>  

                        html;
                    }

                    $body .= <<<html
                            </table>
                            </div>
                        html;

                    echo $body;
                ?>
                

                
            














        <!--START FOOTER -->
    <div class="footer">
        <div class="footer-separator">
        </div>
        <div class="footer-info">
            <div class="external-links">
                <div class="footer-tiltel-tile">
                    روابط خارجية
                </div>
                <a href="">وزارة الصحة المغربية</a>
                <a href="https://www.who.int/ar">منضمة الصحة العالمية</a>
                <a href="https://www.who.int/ar/campaigns/world-blood-donor-day/2021">اليوم العالمي للمتبرع</a>

            </div>
            <div class="footer-btn">
                <div class="footer-tiltel-tile">
                    إستخدام الموقع
                </div>
                <button class="r btn-primary">التسجيل كمتبرع</button>
                <button class="g btn-secondary">البحت عن متبرع </button>
            </div>
            <div class="footer-title">
                <div class="footer-tiltel-tile">
                    منصة المتبرع
                </div>
                <div class="footer-description">
                    الموقع عبارة عن منصة رقمية وطنية تهذف أساسا الى تسهيل و تسريع عملية التعار بين المحتاج و
                    المتبرع , بالإضافة الى نشر و التشجيع على تقافة التبرع بالم و التعريف بمراكز تحاقن الدم
                    القريبة...إلخ
                </div>
            </div>

        </div>


        <div class="copyright">
            <div class="item1">copyright Almotabari3 2022</div>
        </div>
    </div>
    <!--END FOOTER-->
        <div onclick="gototop()" id="backtotop" class="back-to-top">
            <img src="../assest/_images/back-to-top.png ">
        </div>

        <script src="../assest/scripts/javascript/back-to-top.js" ></script>
        <script src="../assest/scripts/javascript/dark-mode.js" ></script>
        <script src="../assest/scripts/javascript/nav_colaps.js" ></script>
    </body>
</html>