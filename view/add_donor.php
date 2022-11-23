<?php
    error_reporting(0);
    // adding php class files
    include  "../assest/scripts/php/connection.php"; // connection to database file
    include  "../model/Blood_Type.php"; // blood type class file
    include  "../model/City.php"; // city class file

    // checking for get message variable
    if (isset($_GET['message'])){
        $message = $_GET['message'];
        if(!empty($message) ){
            if($message == 'failed'){
                echo "<script>alert('المرجو التحقق من المعطيات و إعادة المحاولة');</script>";
            }else if ($message == 'exist'){
                echo "<script>alert('أنت مسجل مسبقا في قاعدة البيانات');</script>";
            }
        }
    }

    
    $cn = new Connection();


    // loading blood types from the database
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


    $html = <<<html
            <!DOCTYPE HTML>
                <html lang="ar">

                <head>
                    <title>Almotabari3.com</title>
                    <meta charset='utf-8' />
                    <meta name="viewport" content="width=device-width initial-scale=1.0" />
                    <link rel='icon' href='assest/_images/logo-donation.png'>
                    <link rel='stylesheet' href='../assest/css/add-donor-style.css' type='text/css'>
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
                                <a class="nav-title" href="../index.html#">الرئيسية</a>
                            </li>
                            <div id="close-nax-x" onclick="nav_colaps()" class="close-nav">X</div>
                        </ul>
                        <div class='navigation-logo small-title'>
                            منصة المتبرع
                            <image id="darkmodeimage2" class="logoimage" src='../assest/_images/logo-donation.png'></image>
                        </div>
                    </nav>
                    <!--END NAVIGATION-->


                    <!-- REGISTERING FORM  -->

                    <form class="register-form hovering-popup-noscal" action="../controller/donor_data.php" method="post">

                        <div class="register-title big-title">
                            التسجيل كمتبرع
                        </div>
                        <div class="register-description">
                            لن يتم مشاركة المعطيات التي يتم إدخالها هنا مع أي جهة خارجية من غير رقم الإسم الأول و رقم الهاتف و مدينة
                            الإقامة
                        </div>

                        <div class="register-container">
                            <div class="register-row">
                                <div class="rigister-col rl">
                                    <div class="regular-text">
                                        :الإسم العائلي
                                    </div>
                                    <input name='lastname' onkeypress='return !(event.charCode >= 48 && event.charCode <= 57)'
                                        type="text" placeholder="المرجو إدخال الإسم العائلي" MaxLength='14' required>
                                </div>
                                <div class="rigister-col rr">
                                    <div class="regular-text">
                                        :الإسم الأول
                                    </div>
                                    <input name='firstname' onkeypress='return !(event.charCode >= 48 && event.charCode <= 57)'
                                        type="text" placeholder="المرجو إدخال الإسم الأول" MaxLength='14' required>
                                </div>

                            </div>
                            <div class="register-row">
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
                                <div class="rigister-col rr">
                                    <div class="regular-text">
                                        :رقم البطاقة الوطنية للتعريف
                                    </div>
                                    <input name='cni' type="text" placeholder="اللمرجو توفير رقم بطاقتكم الوطنية" MaxLength='10' required>
                                </div>
                            </div>
                            <div class="register-row">
                                <div class="rigister-col rl">
                                    <div class="regular-text">
                                        :المدينة
                                    </div>
                                    <select name='city' required>
                                        <option value="" disabled selected hidden>المرجو إختيار مدينتكم</option>
    html;

    foreach ($city_array as $cityo ) {
        $city_c = $cityo->getCity();
        $city_id = $cityo->getIdentification();
        $html .= "<option value='$city_id' >$city_c</option>";
    }

    $html  .= <<<html
                                    </select>
                                </div>
                                <div class="rigister-col rr">
                                    <div class="regular-text">
                                        :رقم الهاتف
                                    </div>
                                    <input name='phone' onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" placeholder="المرجو توفير رقم هاتف شغال" MaxLength='10' required>
                                </div>
                            </div>
                        </div>
                        <div class="submit-wraper">
                            <input type="submit" value='إضافة متبرع' class="submit-form btn-primary">
                        </div>
                    </form>

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


                    <!-- DONOR ADDED POPUP -->
                    <div id='added-popup' class='added-popup'>
                        <div class='added-popup-inver'>
                            <div class='added-title small-title'>
                                شكرا على الإنضمام
                            </div>
                            <p class="added-desc regular-text">
                                شكرا على تطوعكم على منصة المتبرع، في حالة إحتاج أحدهم الى متبرع سنوفر له رقمكم الهاتف، قصد التواصصل معكم
                            </p>
                            <div class="added-ok-div">
                                <a href="add_donor.php" class="added-ok btn-primary">موافق</a>
                            </div>
                        </div>
                    </div>


                    <!-- ADDING JAVASCRIPT FILES -->
                    <script src="../assest/scripts/javascript/dark-mode.js"></script>
                    <script src="../assest/scripts/javascript/nav_colaps.js"></script>

                </body>

                </html>

    html;

    echo $html;
    
?>