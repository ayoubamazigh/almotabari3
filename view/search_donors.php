<?php
    // error_reporting(0);
    // adding php class files we need :)
    include  "../assest/scripts/php/connection.php"; // connection to database file
    include  "../model/Blood_Type.php"; // blood type class file
    include  "../model/City.php"; // city class file
    include  "../model/Region.php"; // region class file

    // creating a connection instence
    $cn = new Connection();


    // loading blood types from the database

    $donor_checker = 0;
    $blood_type_array = null;
    $counter = 0; 

    $query = "SELECT * FROM blood_type;";
            
    $result = mysqli_query($cn->getConnection(), $query);

     while ($row = mysqli_fetch_array($result)){
        $Bloodtype = new Blood_type($row[0],$row[1]);
        $blood_type_array[$counter] = $Bloodtype;
        $counter++;
    }
    
    
    //loading citys from the database

    $city_array = null;
    $counter = 0;
    $query = "SELECT * FROM city ORDER BY City;";
            
    $result = mysqli_query($cn->getConnection(), $query);
            
    while ($row = mysqli_fetch_array($result)){
        $city = new City($row[0],$row[1]);
        $city_array[$counter] = $city;
        $counter++;
    }


    // loading regions from the database

    $region_array = null;
    $counter = 0;
    $query = "SELECT * FROM region ORDER BY region;";
            
    $result = mysqli_query($cn->getConnection(), $query);
            
    while ($row = mysqli_fetch_array($result)){
        $rigion = new Region($row[0],$row[1]);
        $region_array[$counter] = $rigion;
        $counter++;
    }

    // query variable
    $query = "select First_Name, Phone_Number, Blood_Type.Blood_type, City.City FROM Donor, Blood_type, City WHERE Donor.Blood_Type = Blood_Type.identification and Donor.City = City.identification ";

    // add to query if city is set
    if (isset( $_POST['city']) ){

        $city = $_POST['city'];

        if( !empty($city)){
            $query .= " and donor.City = $city";
        }

    }

    
    // add to query if region is set 
    if (isset( $_POST['region'] )){
        
        $region = $_POST['region'];

        if( !empty($region)){

            $query .= " and city.region = $region ";
        }

    }


    // add to query if blood type is set -----> IMPORTANT
    if (isset($_POST['bloodtype'] )){

        $bloodtype = $_POST['bloodtype'];
        
        if(!empty($bloodtype)){
            $query .= " and donor.blood_type = $bloodtype";
            $donor_checker = 1;
            

            $result = mysqli_query($cn->getConnection(), $query);
        }
    }

    $html = <<<html
    
        <!DOCTYPE HTML>
        <html lang="ar">

        <head>
            <title>Almotabari3.com | البحت عن متبرع</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width initial-scale=1.0" />
            <link rel='icon' href='../assest/_images/logo-donation.png'>
            <link rel='stylesheet' href='../assest/css/search_door.css' type='text/css'>
        </head>

        <body>

            <!--START NAVIGATION-->
            <nav class='navigation' id="navigationx">
                <div onclick="nav_colaps()" class="ham">
                    <div class="slice"></div>
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
                        <a class="nav-title" href="../index.html#opinions">حول المنصة</a>
                    </li>
                    <li>
                        <a class="nav-title" href="../index.html#map">مراكز التبرع</a>
                    </li>
                    <li>
                        <a class="nav-title" href="../index.html#steps"> عملية التبرع </a>
                    </li>
                    <li>
                        <a class="nav-title" href="../index.html#need">شروط التبرع</a>
                    </li>
                    <li>
                        <a class="nav-title" href="../index.html#good"> فوائد التبرع</a>
                    </li>
                    <li>
                        <a class="nav-title" href="../index.html">الرئيسية</a>
                    </li>
                    <div id="close-nax-x" onclick="nav_colaps()" class="close-nav">X</div>
                </ul>
                <div class='navigation-logo small-title'>
                    منصة المتبرع
                    <image id="darkmodeimage2" class="logoimage" src='../assest/_images/logo-donation.png'></image>
                </div>
            </nav>
            <!--END NAVIGATION-->

            <!--SEARCH FORM-->
            <form class="search-form hovering-popup-noscal" action="#" method="POST">
                <div class="body-title big-title">
                    البحت عن متبرع
                </div>
                <div class="register-description">
                    يمكنكم البحت بإستخدام الفصيلة  الدموية أو الجهة أو المدينة 
                </div>
                <div class="register-container">
                    <div class="register-row">

                        <div class="rigister-col rl">
                            <div class="regular-text">
                                : الجهة
                            </div>
                            <select name='region'>
                                <option value="" disabled selected hidden>المرجو إختيار جهتكم</option>
    html;

    foreach ( $region_array as $region) {

        $r_id =  $region->getIdentification();
        $r_name =  $region->getRegion();

        $html .= "<option value='$r_id'>$r_name</option>";
    }

    $html .= <<<html
                            </select>
                        </div>
                        <div class="rigister-col rl">
                            <div class="regular-text">
                                :المدينة
                            </div>
                            <select name='city'>
                                <option value="" disabled selected hidden>المرجو إختيار مدينتكم</option>

    html;

    foreach ($city_array as $cityo ) {

        $city_c = $cityo->getCity();
        $city_id = $cityo->getIdentification();
        $html .= "<option value='$city_id' >$city_c</option>";

    }

    $html .= <<<html

                            </select>
                        </div>
                        <div class="rigister-col rl">
                            <div class="regular-text">
                                فصيلة الدم
                            </div>
                            <select name='bloodtype' required>
                                <option value="" disabled selected hidden>المرجو إختيار فصيلة دم</option>
    html;          

    foreach ($blood_type_array as $blood_type) {

        $b_id = $blood_type->getIdentification();
        $b_name = $blood_type->getBlood_type() . " فصيلة الدم ";

        $html .= "<option value='$b_id'>$b_name</option>";
    }
                        
    $html .= <<<html
                            </select>
                        </div>
                    </div>
                </div>

                <div class="submit-wraper">
                    <input type="submit" value='بحت عن متبرع' class="submit-form btn-primary">
                </div>
            </form>

            <!-- DATA FROM THE DATABASE--->
    html;

    $seter = 0;
    $data = <<<html
            <div class="show-data" >
                <table class="hovering-popup-noscal">
                    <tr>
                        <td class="small-title show-title" > الهاتف</td>
                        <td class="small-title show-title" > المدينة </td>  
                        <td class="small-title show-title" > الإسم </td>
                    </tr>
    html;

    while ($row = mysqli_fetch_array($result)){
        $seter++;
        $data .= <<<html
                <tr>
                    <td class="regular-text">$row[1]</td>
                    <td class="regular-text">$row[3]</td>
                    <td class="regular-text">$row[0]</td>  
                </tr>
        html;
    }

    $data .= <<<html
                </table>
            </div>
    html;

    if($donor_checker == 1){
        if ($seter == 0){
            $html .= "<script>alert('نأسف! لاكن لا يوجد أي متبرع بالموصفات التي أدخلتم ')</script>";
        }else{
            $html .= $data;
        }
    }

    $html .= <<<html

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

            <!--ADDING JAVASCRIPT FILES-->
            <script src="../assest/scripts/javascript/dark-mode.js"></script>
            <script src="../assest/scripts/javascript/nav_colaps.js"></script>

        </body>

        </html>

    html;

    echo $html;

?>