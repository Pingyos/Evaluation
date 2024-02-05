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
                                                <form id="formevaluation2" method="post">
                                                    <h5 class="card-title text-primary">ส่วนที่ 2 ข้อมูลสุขภาพ</h5>
                                                    <hr>
                                                    <h5 class="card-title text-primary">ส่วนสูง (เซนติเมตร)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-mb">
                                                            <div class="form-check form-check-inline">
                                                                <input type="text" class="form-control" name="height" id="B1" aria-describedby="defaultFormControlHelp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">น้ำหนัก (กิโลกรัม)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input type="text" class="form-control" name="weight" id="B2" aria-describedby="defaultFormControlHelp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ดัชนีมวลกาย</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <span id="bmiDisplay"></span>
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="bmi" id="B3" value="น้อยกว่า 18.5" />
                                                                <label class="form-check-label" for="B3">น้อยกว่า 18.5</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="bmi" id="B4" value="18.5-24.9" />
                                                                <label class="form-check-label" for="B3">18.5-24.9</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="bmi" id="B5" value="25-29.9" />
                                                                <label class="form-check-label" for="B3">25-29.9</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="bmi" id="B6" value="มากกว่า 30" />
                                                                <label class="form-check-label" for="B3">มากกว่า 30</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ระดับความดันโลหิตตัวบน (mmHg)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="pressureup" id="B7" value="น้อยกว่า 120 mmHg" />
                                                                <label class="form-check-label" for="pressureup">น้อยกว่า 120 mmHg</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="pressureup" id="B8" value="121-139 mmHg" />
                                                                <label class="form-check-label" for="pressureup">121-139 mmHg</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="pressureup" id="B9" value="140-159mmHg" />
                                                                <label class="form-check-label" for="pressureup">140-159mmHg</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="pressureup" id="B10" value="มากกว่าหรือเท่ากับ 160 mmHg" />
                                                                <label class="form-check-label" for="pressureup">มากกว่าหรือเท่ากับ 160 mmHg</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ระดับความดันโลหิตตัวล่าง (mmHg)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="pressuredown" id="B11" value="น้อยกว่า 80 mmHg" />
                                                                <label class="form-check-label" for="pressuredown">น้อยกว่า 80 mmHg</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="pressuredown" id="B12" value="สมรส" />
                                                                <label class="form-check-label" for="pressuredown">80-89 mmHg</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="pressuredown" id="B13" value="หม้าย/หย่าร้าง/แยกกันอยู่" />
                                                                <label class="form-check-label" for="pressuredown">มากกว่าหรือเท่ากับ 90 mmHg</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">รอบเอว วัดผ่านสะดือ (เซนติเมตร)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="waistline" id="B14" value="น้อยกว่า 80 mmHg" />
                                                                <label class="form-check-label" for="waistline">น้อยกว่า 80 mmHg</label>
                                                            </div>
                                                        </div>
                                                        <h5 class="card-title text-primary">ระดับไขมัน HDL ในเลือด (mg/dL)</h5>
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="fat" id="B15" value="น้อยกว่า 35 mg/dL" />
                                                                <label class="form-check-label" for="fat">น้อยกว่า 35 mg/dL</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="fat" id="B16" value="มากกว่า 35 mg/dL" />
                                                                <label class="form-check-label" for="fat">มากกว่า 35 mg/dL</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ระดับไขมันไตรกลีเซอไรด์ในเลือด (mg/dL)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="fatblood" id="B17" value="น้อยกว่า 250 mg/dL" />
                                                                <label class="form-check-label" for="fatblood">น้อยกว่า 250 mg/dL</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="fatblood" id="B18" value="มากกว่า 250 mg/dL" />
                                                                <label class="form-check-label" for="fatblood">มากกว่า 250 mg/dL</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ระดับน้ำตาลในเลือดหลังอดอาหาร 6-8 ชั่วโมง</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="bloodlevel" id="B19" value="น้อยกว่า 100 mg%" />
                                                                <label class="form-check-label" for="bloodlevel">น้อยกว่า 100 mg%</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="bloodlevel" id="B20" value="100 ถึง 125 mg%" />
                                                                <label class="form-check-label" for="bloodlevel">100 ถึง 125 mg%</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="bloodlevel" id="B21" value="มากกว่า 126 mg%" />
                                                                <label class="form-check-label" for="bloodlevel">มากกว่า 126 mg%</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">มีประวัติเป็นเบาหวานขณะตั้งครรภ์ /คลอดบุตรมีน้ำหนักเกิน 4 กิโลกรัม (สำหรับเพศหญิงเท่านั้น)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="pregnant" id="B22" value="ไม่มี" />
                                                                <label class="form-check-label" for="pregnant">ไม่มี</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="pregnant" id="B23" value="มี" />
                                                                <label class="form-check-label" for="pregnant">มี</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">มีประวัติเป็นโรคความดันโลหิตสูง หรือ ถุงน้ำรังไข่หลายใบหรือ โรคหัวใจและหลอดเลือดหรือ โรคอ้วนรุนแรง หรือ มีภาวะไขมันพอกตับ หรือไม่ </h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="ovary" id="B24" value="ไม่มี" />
                                                                <label class="form-check-label" for="ovary">ไม่มี</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="ovary" id="B25" value="มี" />
                                                                <label class="form-check-label" for="ovary">มี</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="demo-inline-spacing d-flex justify-content-between">
                                                        <button type="button" class="btn btn-primary active">ย้อนกลับ</button>
                                                        <button type="submit" id="nextButton" class="btn btn-primary active" style="display: none">ถัดไป</button>
                                                    </div>
                                                </form>
                                                <?php
                                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                                    include('user_cont/connect.php');

                                                    $height = isset($_POST['height']) ? $_POST['height'] : '';
                                                    $weight = isset($_POST['weight']) ? $_POST['weight'] : '';
                                                    $bmi = isset($_POST['bmi']) ? $_POST['bmi'] : '';
                                                    $pressureup = isset($_POST['pressureup']) ? $_POST['pressureup'] : '';
                                                    $pressuredown = isset($_POST['pressuredown']) ? $_POST['pressuredown'] : '';
                                                    $waistline = isset($_POST['waistline']) ? $_POST['waistline'] : '';
                                                    $fat = isset($_POST['fat']) ? $_POST['fat'] : '';
                                                    $fatblood = isset($_POST['fatblood']) ? $_POST['fatblood'] : '';
                                                    $bloodlevel = isset($_POST['bloodlevel']) ? $_POST['bloodlevel'] : '';
                                                    $pregnant = isset($_POST['pregnant']) ? $_POST['pregnant'] : '';
                                                    $ovary = isset($_POST['ovary']) ? $_POST['ovary'] : '';

                                                    echo "ID ของ BMI ที่เลือก: $bmi<br>";
                                                    echo "ID ของ Pressure Up ที่เลือก: $pressureup<br>";
                                                    echo "ID ของ Pressure Down ที่เลือก: $pressuredown<br>";
                                                    echo "ID ของ Waistline ที่เลือก: $waistline<br>";
                                                    echo "ID ของ Fat ที่เลือก: $fat<br>";
                                                    echo "ID ของ Fat Blood ที่เลือก: $fatblood<br>";
                                                    echo "ID ของ Blood Level ที่เลือก: $bloodlevel<br>";
                                                    echo "ID ของ Pregnant ที่เลือก: $pregnant<br>";
                                                    echo "ID ของ Ovary ที่เลือก: $ovary<br>";

                                                    // ... (โค้ดที่เหลือ)


                                                    $bmiScore = ($_POST['bmi'] === 'B3') ? 2 : (($_POST['bmi'] === 'B4') ? 1 : (($_POST['bmi'] === 'B5') ? 3 : 4));
                                                    $pressureupScore = ($_POST['pressureup'] === 'B7') ? 1 : (($_POST['pressureup'] === 'B8') ? 2 : (($_POST['pressureup'] === 'B9') ? 3 : 4));
                                                    $pressuredownScore = ($_POST['pressuredown'] === 'B11') ? 1 : (($_POST['pressuredown'] === 'B12') ? 2 : 3);
                                                    $waistlineScore = ($_POST['waistline'] === 'B14') ? 2 : 1;
                                                    $fatScore = ($_POST['fat'] === 'B15') ? 2 : 1;
                                                    $fatbloodScore = ($_POST['fatblood'] === 'B17') ? 1 : 2;
                                                    $bloodlevelScore = ($_POST['bloodlevel'] === 'B19') ? 0 : (($_POST['bloodlevel'] === 'B20') ? 1 : 4);
                                                    $pregnantScore = ($_POST['pregnant'] === 'B22') ? 0 : 2;
                                                    $ovaryScore = ($_POST['ovary'] === 'B24') ? 0 : 1;

                                                    // แสดงผลคะแนนแต่ละตัวเลือก
                                                    echo "คะแนน BMI: $bmiScore<br>";
                                                    echo "คะแนน Pressure Up: $pressureupScore<br>";
                                                    echo "คะแนน Pressure Down: $pressuredownScore<br>";
                                                    echo "คะแนน Waistline: $waistlineScore<br>";
                                                    echo "คะแนน Fat: $fatScore<br>";
                                                    echo "คะแนน Fat Blood: $fatbloodScore<br>";
                                                    echo "คะแนน Blood Level: $bloodlevelScore<br>";
                                                    echo "คะแนน Pregnant: $pregnantScore<br>";
                                                    echo "คะแนน Ovary: $ovaryScore<br>";

                                                    // คำนวณและแสดงผลคะแนนรวม
                                                    $totalScore = $bmiScore + $pressureupScore + $pressuredownScore + $waistlineScore + $fatScore + $fatbloodScore + $bloodlevelScore + $pregnantScore + $ovaryScore;
                                                    echo "คะแนนรวมทั้งหมด: $totalScore";

                                                    // เตรียมและ execute คำสั่ง SQL
                                                    $insertQuery = "INSERT INTO form_2 (total_score, height, weight, bmi, pressureup, pressuredown, waistline, fat, fatblood, bloodlevel, pregnant, ovary) 
                                                    VALUES (:totalScore, :height, :weight, :bmi, :pressureup, :pressuredown, :waistline, :fat, :fatblood, :bloodlevel, :pregnant, :ovary)";
                                                    $stmt = $conn->prepare($insertQuery);
                                                    $stmt->bindParam(':totalScore', $totalScore);
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

                                                    // try {
                                                    //     $stmt->execute();
                                                    //     $form_2_id = $conn->lastInsertId();
                                                    //     echo '<script>window.location.href = "evaluation3.php?form_2_id=' . $form_2_id . '";</script>';
                                                    // } catch (PDOException $e) {
                                                    //     echo "Error: " . $e->getMessage();
                                                    // }
                                                }
                                                ?>
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                        const heightInput = document.getElementById('B1');
                                                        const weightInput = document.getElementById('B2');
                                                        const bmiDisplay = document.getElementById('bmiDisplay');

                                                        const bmiRadioInputs = [{
                                                                input: document.getElementById('B3'),
                                                                range: {
                                                                    min: 0,
                                                                    max: 18.5
                                                                }
                                                            },
                                                            {
                                                                input: document.getElementById('B4'),
                                                                range: {
                                                                    min: 18.55,
                                                                    max: 24.9
                                                                }
                                                            },
                                                            {
                                                                input: document.getElementById('B5'),
                                                                range: {
                                                                    min: 25,
                                                                    max: 29.9
                                                                }
                                                            },
                                                            {
                                                                input: document.getElementById('B6'),
                                                                range: {
                                                                    min: 30,
                                                                    max: Infinity
                                                                }
                                                            }
                                                        ];

                                                        heightInput.addEventListener('input', updateBMI);
                                                        weightInput.addEventListener('input', updateBMI);

                                                        function updateBMI() {
                                                            const heightInCM = parseFloat(heightInput.value);
                                                            const weight = parseFloat(weightInput.value);
                                                            const heightInM = heightInCM / 100;
                                                            const heightSquared = Math.pow(heightInM, 2);

                                                            if (!isNaN(heightInM) && !isNaN(weight) && heightInM > 0 && weight > 0) {
                                                                const bmi = calculateBMI(heightSquared, weight);
                                                                updateFormBasedOnBMI(bmi);
                                                            }
                                                        }

                                                        function calculateBMI(heightSquared, weight) {
                                                            return weight / heightSquared;
                                                        }

                                                        function updateFormBasedOnBMI(bmi) {
                                                            if (bmiDisplay) {
                                                                bmiDisplay.textContent = `BMI: ${bmi.toFixed(2)}`;
                                                            }
                                                            bmiRadioInputs.forEach(({
                                                                input,
                                                                range
                                                            }) => {
                                                                input.checked = bmi >= range.min && bmi <= range.max;
                                                            });
                                                        }
                                                    });
                                                </script>
                                                <script>
                                                    function checkSelection() {
                                                        var selectedProvinces = document.querySelectorAll('input[type="radio"]:checked').length;
                                                        var selectedOptions = document.querySelectorAll('select, input[type="radio"]:checked').length;

                                                        if (selectedOptions === 9) {
                                                            document.getElementById('nextButton').style.display = 'block';
                                                        } else {
                                                            document.getElementById('nextButton').style.display = 'none';
                                                        }
                                                    }

                                                    var formElements = document.querySelectorAll('#formevaluation2 select, #formevaluation2 input[type="radio"]');
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