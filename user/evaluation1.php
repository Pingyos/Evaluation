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
                                                <form id="formevaluation1" method="post">
                                                    <h5 class="card-title text-primary">ส่วนที่ 1 ข้อมูลทั่วไป</h5>
                                                    <hr>
                                                    <h5 class="card-title text-primary">เพศ</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-mb">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A1" id="A1" value="หญิง" />
                                                                <label class="form-check-label" for="A1">หญิง</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A1" id="A2" value="ชาย" />
                                                                <label class="form-check-label" for="A1">ชาย</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">อายุ (ปีเต็ม)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A2" id="A3" value="0-34 ปี" />
                                                                <label class="form-check-label" for="A2">0-34 ปี</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A2" id="A4" value="34-59 ปี" />
                                                                <label class="form-check-label" for="ageA259">34-59 ปี</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A2" id="A5" value="60 ปีขึ้นไป" />
                                                                <label class="form-check-label" for="A2">60 ปีขึ้นไป</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">สถานภาพ</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A3" id="A6" value="โสด" />
                                                                <label class="form-check-label" for="A3">โสด</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A3" id="A7" value="สมรส" />
                                                                <label class="form-check-label" for="A3">สมรส</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A3" id="A8" value="หม้าย/หย่าร้าง/แยกกันอยู่" />
                                                                <label class="form-check-label" for="A3">หม้าย/หย่าร้าง/แยกกันอยู่</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ภูมิลำเนา</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A4" id="A9" value="ภูมิลำเนา 1" />
                                                                <label class="form-check-label" for="A4">ภูมิลำเนา 1</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A4" id="A10" value="ภูมิลำเนา 2" />
                                                                <label class="form-check-label" for="A4">ภูมิลำเนา 2</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A4" id="A11" value="ภูมิลำเนา 3" />
                                                                <label class="form-check-label" for="A4">ภูมิลำเนา 3</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A4" id="A12" value="ภูมิลำเนา 4" />
                                                                <label class="form-check-label" for="A4">ภูมิลำเนา 4</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ระดับการศึกษา</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A5" id="A13" value="ประถมและต่ำกว่า" />
                                                                <label class="form-check-label" for="A5">ประถมและต่ำกว่า</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A5" id="A14" value="มัธยมศึกษาตอนต้น" />
                                                                <label class="form-check-label" for="A5">มัธยมศึกษาตอนต้น</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A5" id="A15" value="มัธยมศึกษาตอนปลาย" />
                                                                <label class="form-check-label" for="A5">มัธยมศึกษาตอนปลาย</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="A5" id="A16" value="ปริญญาตรี และสูงกว่า" />
                                                                <label class="form-check-label" for="A5">ปริญญาตรี และสูงกว่า</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div id="selectedInfo" style="display: none;">
                                                        <h5>ค่าที่เลือก</h5>
                                                        <p id="selectedValue"></p>
                                                        <h5>คะแนนทั้งหมด</h5>
                                                        <p id="totalScore"></p>
                                                    </div>
                                                    <div class="demo-inline-spacing d-flex justify-content-between">
                                                        <button type="button" class="btn btn-primary active">ย้อนกลับ</button>
                                                        <button type="button" id="nextButton" class="btn btn-primary active" style="display: none">ถัดไป</button>
                                                    </div>
                                                </form>
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                        const radioButtons = document.querySelectorAll('input[type=radio]');
                                                        radioButtons.forEach(function(radio) {
                                                            radio.addEventListener('change', calculateScores);
                                                        });
                                                        const nextButton = document.getElementById('nextButton');
                                                        nextButton.addEventListener('click', goToNextSection);
                                                    });

                                                    function calculateScores() {
                                                        const scores = {
                                                            A1: 2,
                                                            A2: 1,
                                                            A3: 1,
                                                            A4: 2,
                                                            A5: 1,
                                                            A6: 2,
                                                            A7: 1,
                                                            A8: 2,
                                                            A9: 1,
                                                            A10: 2,
                                                            A11: 3,
                                                            A12: 4,
                                                            A13: 2,
                                                            A14: 2,
                                                            A15: 1,
                                                            A16: 1
                                                        };
                                                        const totalIds = 5;
                                                        let selectedIds = 0;
                                                        let totalScore = 0;
                                                        let selectedValues = "";
                                                        const selectedOptions = document.querySelectorAll('input[type=radio]:checked');
                                                        selectedOptions.forEach(function(option) {
                                                            const optionId = option.getAttribute('id');
                                                            totalScore += scores[optionId];
                                                            selectedValues += option.value + ", ";
                                                            selectedIds++;
                                                        });
                                                        const selectedInfo = document.getElementById('selectedInfo');
                                                        const selectedValue = document.getElementById('selectedValue');
                                                        const totalScoreElement = document.getElementById('totalScore');
                                                        if (selectedIds === totalIds) {
                                                            selectedInfo.style.display = 'block';
                                                            selectedValue.textContent = selectedValues.slice(0, -2);
                                                            totalScoreElement.textContent = totalScore;
                                                        } else {
                                                            selectedInfo.style.display = 'none';
                                                        }
                                                        const nextButton = document.getElementById('nextButton');
                                                        nextButton.style.display = selectedIds === totalIds && totalScore > 0 ? 'block' : 'none';
                                                    }

                                                    function goToNextSection() {
                                                        const form = document.createElement('form');
                                                        form.method = 'post';
                                                        form.action = 'evaluation2.php';
                                                        const selectedValueInput = document.createElement('input');
                                                        selectedValueInput.type = 'hidden';
                                                        selectedValueInput.name = 'selectedValue';
                                                        selectedValueInput.value = document.getElementById('selectedValue').textContent;
                                                        const totalScoreInput = document.createElement('input');
                                                        totalScoreInput.type = 'hidden';
                                                        totalScoreInput.name = 'totalScore';
                                                        totalScoreInput.value = document.getElementById('totalScore').textContent;
                                                        form.appendChild(selectedValueInput);
                                                        form.appendChild(totalScoreInput);
                                                        document.body.appendChild(form);
                                                        form.submit();
                                                    }
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