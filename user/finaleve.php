<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php
include('user_cont/head.php');
?>

<body>
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
        <div class="layout-container">
            <div class="layout-page">
                <?php
                include('user_cont/nav.php');
                ?>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-12 mb-2 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-12">
                                            <div class="card-body">
                                                <div class="col-md mb-5">
                                                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                                                            <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
                                                            <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="d-block w-100" src="../assets/img/elements/1.png" alt="First slide" />

                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="../assets/img/elements/2.png" alt="Second slide" />

                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="../assets/img/elements/3.png" alt="Third slide" />

                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="visually-hidden">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="visually-hidden">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php
                                                include('user_cont/connect.php');
                                                $form_4_id = isset($_GET['form_4_id']) ? $_GET['form_4_id'] : 0;
                                                if (!empty($form_4_id)) {
                                                    $query = "SELECT * FROM form_4 WHERE form_4_id = :form_4_id";
                                                    $stmt = $conn->prepare($query);
                                                    $stmt->bindParam(':form_4_id', $form_4_id);
                                                    $stmt->execute();
                                                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                                                    if ($result) {
                                                        $sex = $result['sex'];
                                                        $age = $result['age'];
                                                        $status = $result['status'];
                                                        $province = $result['province'];
                                                        $study = $result['study'];
                                                        $height = $result['height'];
                                                        $weight = $result['weight'];
                                                        $bmi = $result['bmi'];
                                                        $pressureup = $result['pressureup'];
                                                        $pressuredown = $result['pressuredown'];
                                                        $waistline = $result['waistline'];
                                                        $fat = $result['fat'];
                                                        $fatblood = $result['fatblood'];
                                                        $bloodlevel = $result['bloodlevel'];
                                                        $pregnant = $result['pregnant'];
                                                        $ovary = $result['ovary'];
                                                        $section1 = $result['section1'];
                                                        $section2 = $result['section2'];
                                                        $section3 = $result['section3'];
                                                        $section4 = $result['section4'];
                                                        $section5 = $result['section5'];
                                                        $section6 = $result['section6'];
                                                        $section7 = $result['section7'];
                                                        $section8 = $result['section8'];
                                                        $section9 = $result['section9'];
                                                        $section10 = $result['section10'];
                                                        $section11 = $result['section11'];
                                                        $section12 = $result['section12'];
                                                        $section13 = $result['section13'];
                                                        $section14 = $result['section14'];
                                                        $section15 = $result['section15'];
                                                        $section16 = $result['section16'];
                                                        $section17 = $result['section17'];
                                                        $score_form1 = $result['score_form1'];
                                                        $score_form2 = $result['score_form2'];
                                                        $score_form3 = $result['score_form3'];
                                                        $score_form4 = $result['score_form4'];
                                                        $finishscore = $result['finishscore'];
                                                        $finishscore_TH = $result['finishscore_TH'];

                                                ?>
                                                        <!-- <h5> ส่วนที่ 1 : <?php echo $score_form1; ?> คะแนน</h5>
                                                        <h5> ส่วนที่ 2 : <?php echo $score_form2; ?> คะแนน</h5>
                                                        <h5> ส่วนที่ 3 : <?php echo $score_form3; ?> คะแนน</h5>
                                                        <h5> ส่วนที่ 4 : <?php echo $score_form4; ?> คะแนน</h5>
                                                        <h5> รวม : <?php echo $finishscore; ?> คะแนน</h5> -->
                                                        <!-- <p><strong>Sex:</strong> <?php echo $sex; ?></p>
                                                        <p><strong>Age:</strong> <?php echo $age; ?></p>
                                                        <p><strong>Status:</strong> <?php echo $status; ?></p>
                                                        <p><strong>Province:</strong> <?php echo $province; ?></p>
                                                        <p><strong>Study:</strong> <?php echo $study; ?></p>
                                                        <p><strong>Height:</strong> <?php echo $height; ?></p>
                                                        <p><strong>Weight:</strong> <?php echo $weight; ?></p>
                                                        <p><strong>BMI:</strong> <?php echo $bmi; ?></p>
                                                        <p><strong>Pressure Up:</strong> <?php echo $pressureup; ?></p>
                                                        <p><strong>Pressure Down:</strong> <?php echo $pressuredown; ?></p>
                                                        <p><strong>Waistline:</strong> <?php echo $waistline; ?></p>
                                                        <p><strong>Fat:</strong> <?php echo $fat; ?></p>
                                                        <p><strong>Fat Blood:</strong> <?php echo $fatblood; ?></p>
                                                        <p><strong>Blood Level:</strong> <?php echo $bloodlevel; ?></p>
                                                        <p><strong>Pregnant:</strong> <?php echo $pregnant; ?></p>
                                                        <p><strong>Ovary:</strong> <?php echo $ovary; ?></p>
                                                        <p><strong>Section 1:</strong> <?php echo $section1; ?></p>
                                                        <p><strong>Section 2:</strong> <?php echo $section2; ?></p>
                                                        <p><strong>Section 3:</strong> <?php echo $section3; ?></p>
                                                        <p><strong>Section 4:</strong> <?php echo $section4; ?></p>
                                                        <p><strong>Section 5:</strong> <?php echo $section5; ?></p>
                                                        <p><strong>Section 6:</strong> <?php echo $section6; ?></p>
                                                        <p><strong>Section 7:</strong> <?php echo $section7; ?></p>
                                                        <p><strong>Section 8:</strong> <?php echo $section8; ?></p>
                                                        <p><strong>Section 9:</strong> <?php echo $section9; ?></p>
                                                        <p><strong>Section 10:</strong> <?php echo $section10; ?></p>
                                                        <p><strong>Section 11:</strong> <?php echo $section11; ?></p>
                                                        <p><strong>Section 12:</strong> <?php echo $section12; ?></p>
                                                        <p><strong>Section 13:</strong> <?php echo $section13; ?></p>
                                                        <p><strong>Section 14:</strong> <?php echo $section14; ?></p>
                                                        <p><strong>Section 15:</strong> <?php echo $section15; ?></p>
                                                        <p><strong>Section 16:</strong> <?php echo $section16; ?></p>
                                                        <p><strong>Section 17:</strong> <?php echo $section17; ?></p>
                                                        <p><strong>Score All:</strong> <?php echo $finishscore; ?></p> -->
                                                <?php
                                                    } else {
                                                        echo "ไม่พบข้อมูลสำหรับ form_3_id: $form_3_id";
                                                    }
                                                } else {
                                                    echo "ไม่ได้รับ form_3_id จาก URL";
                                                }
                                                ?>
                                                <div class="col-md-12 col-xl-12 mb-5">
                                                    <?php
                                                    if ($finishscore_TH == 'เสี่ยงต่ำต่อการเป็นโรคเบาหวาน') {
                                                        echo '<div class="card bg-info text-white">
                                                            <div class="card-body text-center">
                                                                <h5 class="card-title text-white">ระดับคะแนนของคุณคือ ' . $finishscore . ' คะแนน</h5>
                                                            </div>
                                                        </div>';
                                                    } elseif ($finishscore_TH == 'เสี่ยงสูงต่อการเป็นโรคเบาหวาน') {
                                                        echo '<div class="card bg-warning text-white">
                                                            <div class="card-body text-center">
                                                                <h5 class="card-title text-white">' . $finishscore_TH . '</h5>
                                                            </div>
                                                        </div>';
                                                    }
                                                    ?>

                                                </div>
                                                <h3 class="card-title text-center mb-4"><u>ผลการทดสอบ</u></h3>
                                                <h5 class="card-title text-center mb-4">
                                                    <b><?php echo $finishscore_TH; ?></b>
                                                </h5>
                                                <h5 class="card-title text-center mb-4"><u>ข้อแนะนำในการดูแล</u></h5>
                                                <?php
                                                if ($finishscore_TH == 'เสี่ยงต่ำต่อการเป็นโรคเบาหวาน') {
                                                    echo '<p class="card-title text-center mb-4">ท่านมีความเสี่ยงต่อการป่วยด้วยโรคเบาหวานชนิดที่ 2 ในระดับปานกลาง 
                                                    ท่านควรควบคุมการบริโภคอาหาร และการออกกำลังกายอย่างเคร่งครัด โดยเลือกอาหารที่มีคุณค่าทางโภชนาการและแคลอรี่ต่ำ เลือกรับประทานอาหารกลุ่มคาร์โบไฮเดรตชนิดอาหารพร่องแป้ง (Low Carb Diet) ได้แก่ ข้าวไม่ขัดสี ขนมปังโฮลวีต ธัญพืช เลือกรับประทานผักประเภทใบแทนประเภทหัว เลือกรับประทานผลไม้ที่มีรสชาติหวานน้อย รวมทั้งหลีกเลี่ยงการรับประทานอาหารมื้อหนักที่ต้องรับประทานมาก ๆ 
                                                    </p>';
                                                } elseif ($finishscore_TH == 'เสี่ยงสูงต่อการเป็นโรคเบาหวาน') {
                                                    echo '<p class="card-title text-center mb-4">ท่านมีพฤติกรรมออกกำลังกายที่ควรปรับปรุง โดยควรออกกำลังกายด้วยกิจกรรมที่เหมาะสมกับสภาพร่างกาย วันละประมาณ 20 - 30 นาที หรือสามารถเพิ่มได้ถึงครั้งละ 60 นาที และควรออกกำลังกายอย่างน้อย 3 วันต่อสัปดาห์ ด้วยการเดิน วิ่ง เต้นแอโรบิก ปั่นจักรยาน ว่ายน้ำ ร่วมทั้งการปรับกิจกรรมในชีวิตประจำวันให้เป็นการออกกำลังกาย เช่น การทำงานบ้านด้วยตัวเอง ลดการใช้สิ่งอำนวยความสะดวกลง เดินให้มากขึ้นเป็นต้น 	</p>';
                                                }
                                                ?>
                                                <hr>
                                                <center>
                                                    <div class="button-container">
                                                        <a type="button" class="btn btn-primary" href="index.php"> <i class='bx bx-home'> </i>กลับหน้าหลัก</a>
                                                        <a type="button" class="btn btn-primary" href="evaluation1.php"><i class='bx bx-spreadsheet'></i> ประเมินอีกรอบ</a>
                                                    </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>
                <?php
                include('user_cont/footer.php');
                ?>
            </div>
        </div>
    </div>


    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>