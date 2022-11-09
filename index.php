<?php
    include  "assest/scripts/php/connection.php";
    include  "model/Blood_Type.php";
    include  "model/City.php";

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
            
    print_r($result);

    while ($row = mysqli_fetch_array($result)){
        $city = new City($row[0],$row[1]);
        $city_array[$counter] = $city;
        $counter++;
    }

    



?>

<!DOCTYPE HTML>
<html lang='ar'>

<head>
    <title>Almotabari3.com</title>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width initial-scale=1000px" />
    <link rel='icon' href='assest/_images/logo-donation.png'>
    <link rel='stylesheet' href='assest/css/index-style.css' type='text/css'>
</head>

<body>

    
    <div id="preload" class="preloader-gif">
        <div class="big">
        </div>
        <div class="small">

        </div>
    </div>

  

    <div class="container">
        <div class="section first-section">
            <nav class='navigation' id="navigationx">
                <div class="darkmode" onclick="darkmode();">
                    <image id="darkmodeimage" src="assest/_images/darkmode.png"></image>
                </div>
                <ul class="nav-elements">
                    <li>
                        <a href="#opinions">حول المنصة</a>
                    </li>
                    <li>
                        <a href="#map">مراكز التبرع</a>
                    </li>
                    <li>
                        <a href="#steps"> عملية التبرع </a>
                    </li>
                    <li>
                        <a href="#need">شروط التبرع</a>
                    </li>
                    <li>
                        <a href="#good"> فوائد التبرع</a>
                    </li>
                    <li>
                        <a href="#">الرئيسية</a>
                    </li>

                </ul>

                <div class='navigation-logo'>
                    منصة المتبرع
                    <image id="darkmodeimage2" class="logoimage" src='assest/_images/logo-donation.png'></image>
                </div>
            </nav>
            <div class="flex">
                <div class="body-image">
                    <image id="darkmodeimage1" src="assest/_images/body-image.png"></image>
                </div>
                <div class="body-description">
                    منصة المتبرع
                    <p class="body-p">الموقع عبارة عن منصة رقمية وطنية تهذف أساسا الى تسهيل و تسريع عملية التعار بين
                        المحتاج و المتبرع , بالإضافة الى نشر و التشجيع على تقافة التبرع بالم و التعريف بمراكز تحاقن الدم
                        القريبة...إلخ </p>

                    <a href="#" class='btn-find'> البحت عن متبرع </a>
                    <a href="#register-poping" class='btn-give'> التسجيل كمتبرع </a>

                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="aliceblue" fill-opacity="1"
                    d="M0,96L80,133.3C160,171,320,245,480,240C640,235,800,149,960,133.3C1120,117,1280,171,1360,197.3L1440,224L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
                </path>
            </svg>
        </div>

        <div id="good" class="section second-section">
            <div class="good">
                <div class="good-title">
                    ماهي فوائد التبرع بالدم؟
                </div>
                <div class="good-container">
                    <div class="good-element">
                        <div class="good-image">
                            <img src="assest/_images/5.png">
                        </div>
                        <div class="good-element-title">
                            الأجر و التواب
                        </div>
                        <div class="good-element-description">
                            االتبرع بالدم, يساهم في إنقاذ حياة شخص, قال تعالى (وَمَنْ أَحْيَاهَا فَكَأَنَّمَا أَحْيَا
                            النَّاسَ جَمِيعاً)
                        </div>
                    </div>

                    <div class="good-element">
                        <div class="good-image">
                            <img src="assest/_images/2.png">
                        </div>
                        <div class="good-element-title">
                            الأسبقية إحتياج الدم
                        </div>
                        <div class="good-element-description">
                            يتمتع المتبرعون بصفة دورية على الأسبقية للحصول على على الدم في حالة الإحتياج
                        </div>
                    </div>
                    <div class="good-element">
                        <div class="good-image">
                            <img src="assest/_images/1.png">
                        </div>
                        <div class="good-element-title">
                            تحاليل حيوية مجانية
                        </div>
                        <div class="good-element-description">
                            يمثل التبرع بالدم فرصة للاطمئنان الدوري بخصوص الإصابة ببعض الأمراض الخطيرة التي تنتقل بالدم
                            مثل فيروسات الإيدز والفيروسات الكبدية بي وسي، ومرض الزهري .. الخ
                        </div>
                    </div>

                </div>



                <div class="good-container">

                    <div class="good-element">
                        <div class="good-image">
                            <img src="assest/_images/6.png">
                        </div>
                        <div class="good-element-title">
                            تقليل حدوث جلطات القلب
                        </div>
                        <div class="good-element-description">
                            أظهرت إحدى الدراسات أن التبرع بالدم لمرة واحدة في العام على الأقل، يقلل فرص الإصابة بجلطات
                            القلب
                        </div>
                    </div>
                    <div class="good-element">
                        <div class="good-image">
                            <img src="assest/_images/3.png">
                        </div>
                        <div class="good-element-title">
                            تقليل الإصابة بالعديد من السرطانات
                        </div>
                        <div class="good-element-description">
                            أظهرت نتائج إحدى الدراسات منذ 10 سنوات، انخفاض معدلات الإصابة ببعض السرطانات الهامة لدى من
                            يقومون بالتبرع الدوري بالدم
                        </div>
                    </div>
                    <div class="good-element">
                        <div class="good-image">
                            <img src="assest/_images/4.png">
                        </div>
                        <div class="good-element-title">
                            الحفاظ على سلامة الكبد
                        </div>
                        <div class="good-element-description">
                            يساهم التبرع الدوري بالدم في الحفاظ على الكبد من خلال الحفاظ على معدلات الحديد الطبيعية
                        </div>
                    </div>

                </div>


            </div>
        </div>


        <div id="need" class="section tirth-section">
            <div class="need-title">
                ماهي شروط التبرع بالدم؟
            </div>
            <div class="need-image">
                <img src="assest/_images/peakblood.png">
            </div>
            <p>
                يمكن لجميع الأشخاص التبرع بالدم في حال تمتعهم بصحة جيدة. وهناك بعض المتطلبات الأساسية التي لا بد من
                الوفاء بها للتبرع بالدم
            </p>

            <ul class="need-ul">
                <li class="need-li">يبلغ وزن المتبرع 50 كيلوغراماً على الأقل -</li>
                <li class="need-li">يتراوح عمر المتبرع بين 18 و65 سنة -</li>
                <li class="need-li">يجب على المتبرع التمتع بصحة جيدة عندما يتبرع بالدم -</li>
                <li class="need-li"> أن لا تزيد درجة الحرارة عن 37 درجة مئوية -</li>
                <li class="need-li">أن تكون نسبة الهيموجلوبين للرجال من 14- 17 جم، وللنساء من 12-14 جم -</li>
                <li class="need-li">أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق -</li>
                <li class="need-li"> أن يكون النبض بين 50-100 في الدقيقة -</li>
            </ul>
            <svg class="tri-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="white" fill-opacity="1"
                    d="M0,224L60,240C120,256,240,288,360,298.7C480,309,600,299,720,277.3C840,256,960,224,1080,218.7C1200,213,1320,235,1380,245.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                </path>
            </svg>

        </div>

        <div id="steps" class="section fith-section">
            <div class="go-title">
                مراحل عملية التبرع بالدم
            </div>

            <div class="donation-steps">
                <div class="donation-step">
                    <p class="right">
                        قبل عملية التبرع بالدم
                        <br />
                        يجب ان يحصل المتبرع على قسط كاف من النوم ليلة التبرع بالإضافة االى تناول وجبة صحية قبل التبرع, و
                        تأكد من شرب كميات لابأس بها من الماء
                    </p>
                </div>
                <div class="donation-step">
                    <p class="left">
                        ملء سجل طبي سري
                        <br />
                        يُطلب منك ملء سجل طبي سري, ويتضمن أسئلة عن صحة المتبرع, وستخضع أيضًا لفحص بدني سريع. وهو فحص
                        يتضمن التحقق من ضغط دمك ونبضك ودرجة حرارتك
                    </p>
                </div>
                <div class="donation-step">
                    <p class="right">
                        عملية التبرع بالدم
                        <br />
                        وتُدخل إبرة جديدة معقمة في أحد أوردة ذراعك. يتم سحب الدم في البداية في أنابيب لاختباره. وبعد هذا
                        الإجراء، يُترك الدم لملء الكيس البالغ سعته نصف لتر تقريبًا
                    </p>
                </div>
                <div class="donation-step">
                    <p class="left">
                        بعد عملية التبرع باللدم
                        <br />
                        بعد التبرع بالدم، ستجلس في وحدة للملاحظة حيث يمكنك الاسترخاء وتناول وجبة خفيفة. وبعد مرور 15
                        دقيقة، يمكنك المغادرة,احرص على شرب الكثير من السوائل.
                    </p>
                </div>

                <div class="count">
                    <div class="counter">
                        <div class="number ic-1 "></div>
                        <div class="separator"></div>
                        <div class="number ic-2"></div>
                        <div class="separator"></div>
                        <div class="number ic-3"></div>
                        <div class="separator"></div>
                        <div class="number ic-4"></div>
                    </div>
                </div>

            </div>


        </div>

        <div id="map" class="section fourt-section ">

            <div class="map-title">
                خريطة مراكز للتبرع بالدم القريبة
            </div>
            <div class="maps">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13760.999753652028!2d-9.571887286637919!3d30.429015899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b6674285cab5%3A0xb135f19851cd5ea0!2sCentre%20R%C3%A9gional%20de%20Transfusion%20Sanguine%20-%20Agadir!5e0!3m2!1sar!2sma!4v1667036851302!5m2!1sar!2sma"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="maps-des">
                    <div class="close-image">
                        <img src="assest/_images/close-time-image.png">
                    </div>
                    <div class="close-title">
                        توقيت و ساعات العمل
                    </div>
                    <div class="close-time-wraper">
                        <div class="close-regular">
                            من الإثنين الى الجمعة
                        </div>
                        <div class="close-regular-time">
                            من الساعة 9 صباحا الى 17:30 مساء
                        </div>
                    </div>

                    <div class="close-separator"></div>

                    <div class="close-time-wraper">
                        <div class="close-regular">
                            الجمعة و السبت
                        </div>
                        <div class="close-regular-time">
                            من الساعة 9 صباحا الى 14:30 مساء
                        </div>
                    </div>

                    <div class="close-separator"></div>

                    <div class="close-time-wraper">
                        <div class="close-regular">
                            خلال شهر رمضان
                        </div>
                        <div class="close-regular-time">
                            من الساعة 9 صباحا الى 16:30 مساء
                        </div>
                    </div>
                </div>


            </div>



        </div>

        <div id="opinions" class="section about-section">
            <div class="opinion-title-up">
                أراء مستخدمي منصة المتبرع
            </div>
            <div class="opinions">
                <div class="opinion">
                    <div class="opinion-image">
                        <img src="assest/_images/3.png">
                    </div>
                    <div class="opinion-name">
                        AYOUB AMAZIGH
                    </div>
                    <div class="opinion-stars">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                    </div>
                    <div class="opinion-opinion">
                        تجربتي في استخدام الموقع رائعة, تمكنت بفضله من إيجاد متبرع بسرعة ففائقة, حقا يمتل إضافة رائعة،
                        شككرا للمطوري
                    </div>
                </div>
                <div class="opinion">
                    <div class="opinion-image">
                        <img src="assest/_images/3.png">
                    </div>
                    <div class="opinion-name">
                        AYOUB AMAZIGH
                    </div>
                    <div class="opinion-stars">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                    </div>
                    <div class="opinion-opinion">
                        تجربتي في استخدام الموقع رائعة, تمكنت بفضله من إيجاد متبرع بسرعة ففائقة, حقا يمتل إضافة رائعة،
                        شككرا للمطوري
                    </div>
                </div>
                <div class="opinion">
                    <div class="opinion-image">
                        <img src="assest/_images/3.png">
                    </div>
                    <div class="opinion-name">
                        AYOUB AMAZIGH
                    </div>
                    <div class="opinion-stars">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                    </div>
                    <div class="opinion-opinion">
                        تجربتي في استخدام الموقع رائعة, تمكنت بفضله من إيجاد متبرع بسرعة ففائقة, حقا يمتل إضافة رائعة،
                        شككرا للمطوري
                    </div>
                </div>
                <div class="opinion">
                    <div class="opinion-image">
                        <img src="assest/_images/3.png">
                    </div>
                    <div class="opinion-name">
                        AYOUB AMAZIGH
                    </div>
                    <div class="opinion-stars">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                        <img src="assest/_images/star.png" alt="">
                    </div>
                    <div class="opinion-opinion">
                        تجربتي في استخدام الموقع رائعة, تمكنت بفضله من إيجاد متبرع بسرعة ففائقة, حقا يمتل إضافة رائعة،
                        شككرا للمطوري
                    </div>
                </div>

            </div>



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
                        <button class="r">التسجيل كمتبرع</button>
                        <button class="g">البحت عن متبرع </button>
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


        </div>



    </div>

    <div id="register-poping" class="register-flow">
        <form class="register-form" id="donor-register" action="model/Donor.php" method="post">

            <a href="#" class="register-form-close">X</a>
            <div class="register-title">
                التسجيل كمتبرع
            </div>
            <div class="register-description">

            </div>

            <div class="register-container">
                <div class="register-row">
                    <div class="rigister-col rl">
                        <div>
                            :الإسم العائلي
                        </div>
                        <input type="text" placeholder="المرجو إدخال الإسم العائلي"> 
                    </div>
                    <div class="rigister-col rr">
                        <div>
                            :الإسم الأول
                        </div>
                        <input type="text" placeholder="المرجو إدخال الإسم الأول" >
                    </div>
    
                </div>
                <div class="register-row">
                    <div class="rigister-col rl">
                        <div>
                            فصيلة الدم 
                        </div>
                        <select>
                            <option></option>
                            <?php

                                foreach ($blood_type_array as $blood_type) {
                                    $b_id = $blood_type->getIdentification();
                                    $b_name = $blood_type->getBlood_type() . " فصيلة الدم ";
                                    echo "<option value='$b_id'>$b_name</option>";

                                }
                            
                            ?>                      


                        </select> 
                    </div>
                    <div class="rigister-col rr">
                        <div>
                            :رقم البطاقة الوطنية للتعريف
                        </div>
                        <input type="text" placeholder="اللمرجو توفير رقم بطاقتكم الوطنية">
                    </div>
    
                </div>
                <div class="register-row">
                    <div class="rigister-col rl">
                        <div>
                            الإيمايل
                        </div>
                        <input type="text" placeholder="المرجو توفير الإمايل الخاص بك"> 
                    </div>
                    <div class="rigister-col rr">
                        <div>
                            :رقم الهاتف
                        </div>
                        <input type="text" placeholder="المرجو توفير رقم هاتف شغال">
                    </div>
    
                </div>
                <div class="register-row">
                    <div class="rigister-col rl">
                        <div>
                            :المدينة
                        </div>
                        <select>
                            
                            <option></option>
                            <?php

                                foreach ($city_array as $cityo ) {
                                    $city_c = $cityo->getCity();
                                    echo "<option>$city_c</option>";

                                }

                            /*
                                foreach ($city_array as $city) {
                                    $c_id = $city->getIdentification();
                                    $c_name = $city->getCity()();
                                    echo "<option value='$c_id' >$c_name</option>";

                                }
                                
                                */
                            ?>
                            
                        </select>  
                    </div>
                    <div class="rigister-col rr">
                        <div>
                            :تاريخ الإزدياد
                        </div>
                        <input type="date" placeholder="المرجو توفير رقم هاتف شغال">
                    </div>
    
                </div>
            </div>
            <div class="submit-wraper">
                <input type="submit" class="submit-form">
            </div>
                

            </div>


        </form>

    </div>



    <div onclick="gototop()" id="backtotop" class="back-to-top">
        <img src="assest/_images/back-to-top.png ">
    </div>
    
    <script src="assest/scripts/javascript/preloader.js"></script>
    <script src="assest/scripts/javascript/dark-mode.js"></script>
    <script src="assest/scripts/javascript/back-to-top.js"></script>
  
</body>

</html>