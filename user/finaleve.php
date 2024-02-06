<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php
include('user_cont/head.php');
?>

<body>
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
        <div class="layout-container">
            <div class="layout-page">
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-12 mb-2 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-12">
                                            <div class="card-body">
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

                                                ?>
                                                        <h5> ส่วนที่ 1 : <?php echo $score_form1; ?> คะแนน</h5>
                                                        <h5> ส่วนที่ 2 : <?php echo $score_form2; ?> คะแนน</h5>
                                                        <h5> ส่วนที่ 3 : <?php echo $score_form3; ?> คะแนน</h5>
                                                        <h5> ส่วนที่ 4 : <?php echo $score_form4; ?> คะแนน</h5>
                                                        <h5> รวม : <?php echo $finishscore; ?> คะแนน</h5>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>
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