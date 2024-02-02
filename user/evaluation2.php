<?php
$selectedValue = isset($_POST['selectedValue']) ? $_POST['selectedValue'] : '';
$totalScore = isset($_POST['totalScore']) ? $_POST['totalScore'] : '';

?>
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
                                                    <p>Selected Value: <?php echo htmlspecialchars($selectedValue); ?></p>
                                                    <p>Total Score: <?php echo htmlspecialchars($totalScore); ?></p>
                                                    <hr>
                                                    <h5 class="card-title text-primary">ส่วนสูง (เซนติเมตร)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-mb">
                                                            <div class="form-check form-check-inline">
                                                                <input type="text" class="form-control" id="B1" aria-describedby="defaultFormControlHelp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">น้ำหนัก (กิโลกรัม)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input type="text" class="form-control" id="B2" aria-describedby="defaultFormControlHelp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ดัชนีมวลกาย</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <span id="bmiDisplay"></span>
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="น้อยกว่า 18.5" />
                                                                <label class="form-check-label" for="B3">น้อยกว่า 18.5</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B4" value="18.5-24.9" />
                                                                <label class="form-check-label" for="B4">18.5-24.9</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B5" value="25-29.9" />
                                                                <label class="form-check-label" for="B5">25-29.9</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B6" value="มากกว่า 30" />
                                                                <label class="form-check-label" for="B6">มากกว่า 30</label>
                                                            </div>
                                                        </div>
                                                    </div>

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

                                                                // ให้วนลูปผ่าน bmiRadioInputs เพื่อตรวจสอบว่า BMI อยู่ในช่วงใด
                                                                bmiRadioInputs.forEach(({
                                                                    input,
                                                                    range
                                                                }) => {
                                                                    input.checked = bmi >= range.min && bmi <= range.max;
                                                                });
                                                            }
                                                        });
                                                    </script>


                                                    <br>
                                                    <h5 class="card-title text-primary">ระดับความดันโลหิตตัวบน (mmHg)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B4" id="B7" value="น้อยกว่า 120 mmHg" />
                                                                <label class="form-check-label" for="B4">น้อยกว่า 120 mmHg</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B4" id="B8" value="121-139 mmHg" />
                                                                <label class="form-check-label" for="B4">121-139 mmHg</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B4" id="B9" value="140-159mmHg" />
                                                                <label class="form-check-label" for="B4">140-159mmHg</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B4" id="B10" value="มากกว่าหรือเท่ากับ 160 mmHg" />
                                                                <label class="form-check-label" for="B4">มากกว่าหรือเท่ากับ 160 mmHg</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ระดับความดันโลหิตตัวล่าง (mmHg)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B5" id="B11" value="น้อยกว่า 80 mmHg" />
                                                                <label class="form-check-label" for="B5">น้อยกว่า 80 mmHg</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B5" id="B12" value="สมรส" />
                                                                <label class="form-check-label" for="B5">80-89 mmHg</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B5" id="B13" value="หม้าย/หย่าร้าง/แยกกันอยู่" />
                                                                <label class="form-check-label" for="B5">มากกว่าหรือเท่ากับ 90 mmHg</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">รอบเอว วัดผ่านสะดือ (เซนติเมตร)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B6" id="B14" value="" />
                                                                <label class="form-check-label" for="B6">น้อยกว่า 80 mmHg</label>
                                                            </div>
                                                        </div>
                                                        <h5 class="card-title text-primary">ระดับไขมัน HDL ในเลือด (mg/dL)</h5>
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B7" id="B15" value="น้อยกว่า 35 mg/dL" />
                                                                <label class="form-check-label" for="B7">น้อยกว่า 35 mg/dL</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B7" id="B16" value="มากกว่า 35 mg/dL" />
                                                                <label class="form-check-label" for="B7">มากกว่า 35 mg/dL</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ระดับไขมันไตรกลีเซอไรด์ในเลือด (mg/dL)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B8" id="B17" value="น้อยกว่า 250 mg/dL" />
                                                                <label class="form-check-label" for="B8">น้อยกว่า 250 mg/dL</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B8" id="B18" value="มากกว่า 250 mg/dL" />
                                                                <label class="form-check-label" for="B8">มากกว่า 250 mg/dL</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ระดับน้ำตาลในเลือดหลังอดอาหาร 6-8 ชั่วโมง</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B9" id="B19" value="น้อยกว่า 100 mg%" />
                                                                <label class="form-check-label" for="B9">น้อยกว่า 100 mg%</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B9" id="B20" value="100 ถึง 125 mg%" />
                                                                <label class="form-check-label" for="B9">100 ถึง 125 mg%</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B9" id="B21" value="มากกว่า 126 mg%" />
                                                                <label class="form-check-label" for="B9">มากกว่า 126 mg%</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">มีประวัติเป็นเบาหวานขณะตั้งครรภ์ /คลอดบุตรมีน้ำหนักเกิน 4 กิโลกรัม (สำหรับเพศหญิงเท่านั้น)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B10" id="B22" value="ไม่มี" />
                                                                <label class="form-check-label" for="B10">ไม่มี</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B10" id="B23" value="มี" />
                                                                <label class="form-check-label" for="B10">มี</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">มีประวัติเป็นโรคความดันโลหิตสูง หรือ ถุงน้ำรังไข่หลายใบหรือ โรคหัวใจและหลอดเลือดหรือ โรคอ้วนรุนแรง หรือ มีภาวะไขมันพอกตับ หรือไม่ </h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B11" id="B24" value="ไม่มี" />
                                                                <label class="form-check-label" for="B11">ไม่มี</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B11" id="B25" value="มี" />
                                                                <label class="form-check-label" for="B11">มี</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="demo-inline-spacing d-flex justify-content-between">
                                                        <button type="button" class="btn btn-primary active">ย้อนกลับ</button>
                                                        <button type="button" id="nextButton" class="btn btn-primary active" style="display: none">ถัดไป</button>
                                                    </div>
                                                </form>
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