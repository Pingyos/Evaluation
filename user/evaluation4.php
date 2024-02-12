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
                                                <form id="formevaluation4" method="post">
                                                    <h5 class="card-title text-primary">ส่วนที่ 4 พันธุกรรม</h5>
                                                    <?php
                                                    include('user_cont/connect.php');
                                                    $form_3_id = isset($_GET['form_3_id']) ? $_GET['form_3_id'] : 0;
                                                    if (!empty($form_3_id)) {
                                                        $query = "SELECT * FROM form_3 WHERE form_3_id = :form_3_id";
                                                        $stmt = $conn->prepare($query);
                                                        $stmt->bindParam(':form_3_id', $form_3_id);
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
                                                            $scoreall = $result['scoreall'];
                                                            $score_form1 = $result['score_form1'];
                                                            $score_form2 = $result['score_form2'];
                                                            $score_form3 = $result['score_form3'];
                                                    ?>
                                                    <?php
                                                        } else {
                                                            echo "ไม่พบข้อมูลสำหรับ form_3_id: $form_3_id";
                                                        }
                                                    } else {
                                                        echo "ไม่ได้รับ form_3_id จาก URL";
                                                    }
                                                    ?>
                                                    <hr>
                                                    <h5 class="card-title text-primary">ท่านมีญาติเป็นโรคเบาหวานหรือไม่
                                                    </h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section18" id="D1" value="ไม่มี" />
                                                                <label class="form-check-label" for="D1">ไม่มี</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section18" id="D2" value="มี เป็นญาติสายตรง ได้แก่ พ่อแม่ พี่น้อง หรือลูกของตัวเอง" />
                                                                <label class="form-check-label" for="D2">มี
                                                                    เป็นญาติสายตรง ได้แก่ พ่อแม่ พี่น้อง
                                                                    หรือลูกของตัวเอง</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section18" id="D3" value="มี เครือญาติ ได้แก่ ปู่ ย่า ตา ยาย ลุง ป้า น้า อา" />
                                                                <label class="form-check-label" for="D3">มี เครือญาติ
                                                                    ได้แก่ ปู่ ย่า ตา ยาย ลุง ป้า น้า อา</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <h5 class="card-title text-primary">4.2
                                                        การวินิจฉัยยีนที่มีความเกี่ยวข้องกับการเกิดโรคเบาหวาน</h5>
                                                    <br>
                                                    <h5 class="card-title text-primary">
                                                        การวินิจฉัยยีนที่มีความเกี่ยวข้องกับการเกิดโรคเบาหวาน</h5>
                                                    <h5 class="card-title text-primary">ยีน CDKN2A/2B (rs10811661)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section19" id="D4" value="ลักษณะทางพันธุกรรมที่พบได้ทั่วไป (CC)" />
                                                                <label class="form-check-label" for="D4">ลักษณะทางพันธุกรรมที่พบได้ทั่วไป
                                                                    (CC)</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section19" id="D5" value="ลักษณะทางพันธุกรรมที่มีความแปรผัน Heterozygous (TC)" />
                                                                <label class="form-check-label" for="D5">ลักษณะทางพันธุกรรมที่มีความแปรผัน
                                                                    Heterozygous (TC)</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section19" id="D6" value="ลักษณะทางพันธุกรรมที่มีความแปรผันแบบ homozygous (TT)" />
                                                                <label class="form-check-label" for="D6">ลักษณะทางพันธุกรรมที่มีความแปรผันแบบ
                                                                    homozygous (TT)</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section19" id="D7" value="ไม่มีข้อมูล" />
                                                                <label class="form-check-label" for="D7">ไม่มีข้อมูล</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ยีน TCF7L2 (rs7903146)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section20" id="D8" value="ลักษณะทางพันธุกรรมที่พบได้ทั่วไป (CC)" />
                                                                <label class="form-check-label" for="D8">ลักษณะทางพันธุกรรมที่พบได้ทั่วไป
                                                                    (CC)</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section20" id="D9" value="ลักษณะทางพันธุกรรมที่มีความแปรผัน Heterozygous (TC)" />
                                                                <label class="form-check-label" for="D9">ลักษณะทางพันธุกรรมที่มีความแปรผัน
                                                                    Heterozygous (TC)</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section20" id="D10" value="ลักษณะทางพันธุกรรมที่มีความแปรผันแบบ homozygous (TT)" />
                                                                <label class="form-check-label" for="D10">ลักษณะทางพันธุกรรมที่มีความแปรผันแบบ
                                                                    homozygous (TT)</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section20" id="D11" value="ไม่มีข้อมูล" />
                                                                <label class="form-check-label" for="D11">ไม่มีข้อมูล</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ยีน KCNQ1 (rs2237892)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section21" id="D12" value="ลักษณะทางพันธุกรรมที่พบได้ทั่วไป (CC)" />
                                                                <label class="form-check-label" for="D12">ลักษณะทางพันธุกรรมที่พบได้ทั่วไป
                                                                    (CC)</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section21" id="D13" value="ลักษณะทางพันธุกรรมที่มีความแปรผัน Heterozygous (TC)" />
                                                                <label class="form-check-label" for="D13">ลักษณะทางพันธุกรรมที่มีความแปรผัน
                                                                    Heterozygous (TC)</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section21" id="D14" value="ลักษณะทางพันธุกรรมที่มีความแปรผันแบบ homozygous (TT)" />
                                                                <label class="form-check-label" for="D14">ลักษณะทางพันธุกรรมที่มีความแปรผันแบบ
                                                                    homozygous (TT)</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="section21" id="D15" value="ไม่มีข้อมูล" />
                                                                <label class="form-check-label" for="D15">ไม่มีข้อมูล</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="demo-inline-spacing d-flex justify-content-between">
                                                        <button type="button" class="btn btn-primary active" onclick="window.history.back();">ย้อนกลับ</button>
                                                        <button type="submit" id="nextButton" class="btn btn-primary active" style="display: none">ถัดไป</button>
                                                    </div>
                                                    <hr>
                                                    <center>
                                                        <div class="button-container">
                                                            <a type="button" class="btn btn-primary" href="index.php"><i class='bx bx-home'></i> กลับหน้าหลัก</a>
                                                        </div>
                                                    </center>
                                                </form>
                                                <?php
                                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                                    include('user_cont/connect.php');

                                                    $sex = isset($result['sex']) ? $result['sex'] : '';
                                                    $age = isset($result['age']) ? $result['age'] : '';
                                                    $status = isset($result['status']) ? $result['status'] : '';
                                                    $province = isset($result['province']) ? $result['province'] : '';
                                                    $study = isset($result['study']) ? $result['study'] : '';
                                                    $height = isset($result['height']) ? $result['height'] : '';
                                                    $weight = isset($result['weight']) ? $result['weight'] : '';
                                                    $bmi = isset($result['bmi']) ? $result['bmi'] : '';
                                                    $pressureup = isset($result['pressureup']) ? $result['pressureup'] : '';
                                                    $pressuredown = isset($result['pressuredown']) ? $result['pressuredown'] : '';
                                                    $waistline = isset($result['waistline']) ? $result['waistline'] : '';
                                                    $fat = isset($result['fat']) ? $result['fat'] : '';
                                                    $fatblood = isset($result['fatblood']) ? $result['fatblood'] : '';
                                                    $bloodlevel = isset($result['bloodlevel']) ? $result['bloodlevel'] : '';
                                                    $pregnant = isset($result['pregnant']) ? $result['pregnant'] : '';
                                                    $ovary = isset($result['ovary']) ? $result['ovary'] : '';
                                                    $section1 = isset($result['section1']) ? $result['section1'] : '';
                                                    $section2 = isset($result['section2']) ? $result['section2'] : '';
                                                    $section3 = isset($result['section3']) ? $result['section3'] : '';
                                                    $section4 = isset($result['section4']) ? $result['section4'] : '';
                                                    $section5 = isset($result['section5']) ? $result['section5'] : '';
                                                    $section6 = isset($result['section6']) ? $result['section6'] : '';
                                                    $section7 = isset($result['section7']) ? $result['section7'] : '';
                                                    $section8 = isset($result['section8']) ? $result['section8'] : '';
                                                    $section9 = isset($result['section9']) ? $result['section9'] : '';
                                                    $section10 = isset($result['section10']) ? $result['section10'] : '';
                                                    $section11 = isset($result['section11']) ? $result['section11'] : '';
                                                    $section12 = isset($result['section12']) ? $result['section12'] : '';
                                                    $section13 = isset($result['section13']) ? $result['section13'] : '';
                                                    $section14 = isset($result['section14']) ? $result['section14'] : '';
                                                    $section15 = isset($result['section15']) ? $result['section15'] : '';
                                                    $section16 = isset($result['section16']) ? $result['section16'] : '';
                                                    $section17 = isset($result['section17']) ? $result['section17'] : '';
                                                    $scoreall = isset($result['scoreall']) ? $result['scoreall'] : '';


                                                    $scoreMapping = array(
                                                        'section18' => array(
                                                            'ไม่มี' => 0,
                                                            'มี เป็นญาติสายตรง ได้แก่ พ่อแม่ พี่น้อง หรือลูกของตัวเอง' => 2,
                                                            'มี เครือญาติ ได้แก่ ปู่ ย่า ตา ยาย ลุง ป้า น้า อา' => 2,
                                                        ),
                                                        'section19' => array(
                                                            'ลักษณะทางพันธุกรรมที่พบได้ทั่วไป (CC)' => 1,
                                                            'ลักษณะทางพันธุกรรมที่มีความแปรผัน Heterozygous (TC)' => 2,
                                                            'ลักษณะทางพันธุกรรมที่มีความแปรผันแบบ homozygous (TT)' => 3,
                                                            'ไม่มีข้อมูล' => 0,
                                                        ),
                                                        'section20' => array(
                                                            'ลักษณะทางพันธุกรรมที่พบได้ทั่วไป (CC)' => 1,
                                                            'ลักษณะทางพันธุกรรมที่มีความแปรผัน Heterozygous (TC)' => 2,
                                                            'ลักษณะทางพันธุกรรมที่มีความแปรผันแบบ homozygous (TT)' => 2,
                                                            'ไม่มีข้อมูล' => 0,
                                                        ),
                                                        'section21' => array(
                                                            'ลักษณะทางพันธุกรรมที่พบได้ทั่วไป (CC)' => 1,
                                                            'ลักษณะทางพันธุกรรมที่มีความแปรผัน Heterozygous (TC)' => 2,
                                                            'ลักษณะทางพันธุกรรมที่มีความแปรผันแบบ homozygous (TT)' => 2,
                                                            'ไม่มีข้อมูล' => 0,
                                                        ),
                                                    );
                                                    $section18 = isset($_POST['section18']) ? $_POST['section18'] : '';
                                                    $section19 = isset($_POST['section19']) ? $_POST['section19'] : '';
                                                    $section20 = isset($_POST['section20']) ? $_POST['section20'] : '';
                                                    $section21 = isset($_POST['section21']) ? $_POST['section21'] : '';

                                                    $section18score = isset($_POST['section18']) ? ($scoreMapping['section18'][$_POST['section18']] ?? 0) : 0;
                                                    $section19score = isset($_POST['section19']) ? ($scoreMapping['section19'][$_POST['section19']] ?? 0) : 0;
                                                    $section20score = isset($_POST['section20']) ? ($scoreMapping['section20'][$_POST['section20']] ?? 0) : 0;
                                                    $section21score = isset($_POST['section21']) ? ($scoreMapping['section21'][$_POST['section21']] ?? 0) : 0;

                                                    $totalScore = $section18score + $section19score + $section20score + $section21score;

                                                    if ($totalScore >= 0 && $totalScore <= 3) {
                                                        $score = 1;
                                                    } elseif ($totalScore >= 4 && $totalScore <= 6) {
                                                        $score = 2;
                                                    } elseif ($totalScore >= 7) {
                                                        $score = 3;
                                                    }

                                                    $score_form1 = $score_form1;
                                                    $score_form2 = $score_form2;
                                                    $score_form3 = $score_form3;
                                                    $score_form4 = $score;

                                                    $finishscore = $score + $scoreall;

                                                    $finishscore = $score + $scoreall;
                                                    if ($finishscore >= 19 && $finishscore <= 46) {
                                                        $finishscore_TH = "เสี่ยงต่ำต่อการเป็นโรคเบาหวาน";
                                                    } elseif ($finishscore >= 47 && $finishscore <= 57) {
                                                        $finishscore_TH = "เสี่ยงสูงต่อการเป็นโรคเบาหวาน";
                                                    }


                                                    $insertQuery = "INSERT INTO form_4 (
                                                        finishscore_TH, score_form1, score_form2, score_form3, score_form4, sex, age, status, province, study, height, weight, bmi, pressureup, pressuredown, waistline, fat, fatblood, bloodlevel, pregnant, ovary,
                                                        section1, section2, section3, section4, section5, section6, section7, section8, section9, section10, section11, section12, section13, section14,
                                                        section15, section16, section17, section18, section19, section20, section21, finishscore
                                                    ) VALUES (
                                                        :finishscore_TH, :score_form1, :score_form2, :score_form3, :score_form4, :sex, :age, :status, :province, :study, :height, :weight, :bmi, :pressureup, :pressuredown, :waistline, :fat, :fatblood, :bloodlevel, :pregnant, :ovary,
                                                        :section1, :section2, :section3, :section4, :section5, :section6, :section7, :section8, :section9, :section10, :section11, :section12, :section13, :section14,
                                                        :section15, :section16, :section17, :section18, :section19, :section20, :section21, :finishscore
                                                    )";
                                                    $stmt = $conn->prepare($insertQuery);
                                                    $stmt->bindParam(':finishscore_TH', $finishscore_TH);
                                                    $stmt->bindParam(':score_form4', $score_form4);
                                                    $stmt->bindParam(':score_form3', $score_form3);
                                                    $stmt->bindParam(':score_form2', $score_form2);
                                                    $stmt->bindParam(':score_form1', $score_form1);
                                                    $stmt->bindParam(':sex', $sex);
                                                    $stmt->bindParam(':age', $age);
                                                    $stmt->bindParam(':status', $status);
                                                    $stmt->bindParam(':province', $province);
                                                    $stmt->bindParam(':study', $study);
                                                    $stmt->bindParam(':height', $height);
                                                    $stmt->bindParam(':weight', $weight);
                                                    $stmt->bindParam(':bmi', $bmi);
                                                    $stmt->bindParam(':pressureup', $pressureup);
                                                    $stmt->bindParam(':pressuredown', $pressuredown);
                                                    $stmt->bindParam(':waistline', $waistline);
                                                    $stmt->bindParam(':fat', $fat);
                                                    $stmt->bindParam(':fatblood', $fatblood);
                                                    $stmt->bindParam(':bloodlevel', $bloodlevel);
                                                    $stmt->bindParam(':pregnant', $pregnant);
                                                    $stmt->bindParam(':ovary', $ovary);
                                                    $stmt->bindParam(':section1', $section1);
                                                    $stmt->bindParam(':section2', $section2);
                                                    $stmt->bindParam(':section3', $section3);
                                                    $stmt->bindParam(':section4', $section4);
                                                    $stmt->bindParam(':section5', $section5);
                                                    $stmt->bindParam(':section6', $section6);
                                                    $stmt->bindParam(':section7', $section7);
                                                    $stmt->bindParam(':section8', $section8);
                                                    $stmt->bindParam(':section9', $section9);
                                                    $stmt->bindParam(':section10', $section10);
                                                    $stmt->bindParam(':section11', $section11);
                                                    $stmt->bindParam(':section12', $section12);
                                                    $stmt->bindParam(':section13', $section13);
                                                    $stmt->bindParam(':section14', $section14);
                                                    $stmt->bindParam(':section15', $section15);
                                                    $stmt->bindParam(':section16', $section16);
                                                    $stmt->bindParam(':section17', $section17);
                                                    $stmt->bindParam(':section18', $section18);
                                                    $stmt->bindParam(':section19', $section19);
                                                    $stmt->bindParam(':section20', $section20);
                                                    $stmt->bindParam(':section21', $section21);
                                                    $stmt->bindParam(':finishscore', $finishscore);
                                                    try {
                                                        $stmt->execute();
                                                        $form_4_id = $conn->lastInsertId();
                                                        echo '<script>window.location.href = "finaleve.php?form_4_id=' . $form_4_id . '";</script>';
                                                    } catch (PDOException $e) {
                                                        echo "Error: " . $e->getMessage();
                                                    }
                                                }
                                                ?>
                                                <script>
                                                    function checkSelection() {
                                                        var selectedProvinces = document.querySelectorAll(
                                                            'input[type="radio"]:checked').length;
                                                        var selectedOptions = document.querySelectorAll(
                                                            'select, input[type="radio"]:checked').length;

                                                        if (selectedOptions === 4) {
                                                            document.getElementById('nextButton').style.display = 'block';
                                                        } else {
                                                            document.getElementById('nextButton').style.display = 'none';
                                                        }

                                                        var selectedProvinceCountElement = document.getElementById(
                                                            'selectedProvinceCount');
                                                        if (selectedProvinceCountElement) {
                                                            selectedProvinceCountElement.innerText = selectedProvinces;
                                                        }
                                                    }
                                                    var formElements = document.querySelectorAll(
                                                        '#formevaluation4 select, #formevaluation4 input[type="radio"]');
                                                    formElements.forEach(function(element) {
                                                        element.addEventListener('change', checkSelection);
                                                    });
                                                </script>
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