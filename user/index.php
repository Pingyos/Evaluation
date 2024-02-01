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
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-12 mb-2 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                      <div class="card-body">
                        <form id="formevaluation" method="post">
                          <h5 class="card-title text-primary">ส่วนที่ 1 ข้อมูลทั่วไป</h5>

                          <hr>

                          <h5 class="card-title text-primary">เพศ</h5>
                          <div class="col-mb">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="male" value="ชาย" />
                              <label class="form-check-label" for="male">ชาย</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="female" value="หญิง" />
                              <label class="form-check-label" for="female">หญิง</label>
                            </div>
                          </div>

                          <br>

                          <h5 class="card-title text-primary">อายุ (ปีเต็ม)</h5>
                          <div class="col-md">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="ageOptions" id="age34" value="0-34" />
                              <label class="form-check-label" for="age34">0-34 ปี</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="ageOptions" id="age59" value="34-59" />
                              <label class="form-check-label" for="age59">34-59 ปี</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="ageOptions" id="age60" value="60+" />
                              <label class="form-check-label" for="age60">60 ปีขึ้นไป</label>
                            </div>
                          </div>

                          <br>

                          <h5 class="card-title text-primary">สถานภาพ</h5>
                          <div class="col-md">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="sOptions" id="single" value="โสด" />
                              <label class="form-check-label" for="single">โสด</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="sOptions" id="married" value="สมรส" />
                              <label class="form-check-label" for="married">สมรส</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="sOptions" id="divorce" value="หม้าย/หย่าร้าง/แยกกันอยู่" />
                              <label class="form-check-label" for="divorce">หม้าย/หย่าร้าง/แยกกันอยู่</label>
                            </div>
                          </div>

                          <br>

                          <h5 class="card-title text-primary">ภูมิลำเนา</h5>
                          <div class="col-md">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="domicileOptions" id="domicile1" value="1" />
                              <label class="form-check-label" for="domicile1">ภูมิลำเนา 1</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="domicileOptions" id="domicile2" value="2" />
                              <label class="form-check-label" for="domicile2">ภูมิลำเนา 2</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="domicileOptions" id="domicile3" value="3" />
                              <label class="form-check-label" for="domicile3">ภูมิลำเนา 3</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="domicileOptions" id="domicile4" value="4" />
                              <label class="form-check-label" for="domicile4">ภูมิลำเนา 4</label>
                            </div>
                          </div>

                          <br>

                          <h5 class="card-title text-primary">ระดับการศึกษา</h5>
                          <div class="col-md">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="levelOptions" id="level1" value="1" />
                              <label class="form-check-label" for="level1">ประถมและต่ำกว่า</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="levelOptions" id="level2" value="2" />
                              <label class="form-check-label" for="level2">มัธยมศึกษาตอนต้น</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="levelOptions" id="level3" value="3" />
                              <label class="form-check-label" for="level3">มัธยมศึกษาตอนปลาย</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="levelOptions" id="level4" value="4" />
                              <label class="form-check-label" for="level4">ปริญญาตรี และสูงกว่า</label>
                            </div>
                          </div>

                          <hr>

                          <div class="demo-inline-spacing d-flex justify-content-between">
                            <button type="button" class="btn btn-primary active">ย้อนกลับ</button>
                            <button type="button" id="nextButton" class="btn btn-primary active" style="display: none">ถัดไป</button>
                          </div>
                        </form>
                        <script>
                          // เพิ่มฟังก์ชันเพื่อตรวจสอบการเลือกในแต่ละส่วน
                          function checkSelection() {
                            // ตรวจสอบเพศ
                            var genderSelected = document.querySelector('input[name="gender"]:checked');

                            // ตรวจสอบอายุ
                            var ageSelected = document.querySelector('input[name="ageOptions"]:checked');

                            // ตรวจสอบสถานภาพ
                            var statusSelected = document.querySelector('input[name="sOptions"]:checked');

                            // ตรวจสอบภูมิลำเนา
                            var domicileSelected = document.querySelector('input[name="domicileOptions"]:checked');

                            // ตรวจสอบระดับการศึกษา
                            var educationSelected = document.querySelector('input[name="levelOptions"]:checked');

                            // ตรวจสอบว่าทุกรายการถูกเลือกหรือไม่
                            if (genderSelected && ageSelected && statusSelected && domicileSelected && educationSelected) {
                              // ถ้าทุกรายการถูกเลือก แสดงปุ่มถัดไป
                              document.getElementById('nextButton').style.display = 'inline-block';
                            } else {
                              // ถ้ายังไม่ทุกรายการถูกเลือก ซ่อนปุ่มถัดไป
                              document.getElementById('nextButton').style.display = 'none';
                            }
                          }

                          // เพิ่ม event listener สำหรับ radio buttons ทุกตัว
                          var radioButtons = document.querySelectorAll('input[type="radio"]');
                          radioButtons.forEach(function(radioButton) {
                            radioButton.addEventListener('change', checkSelection);
                          });

                          // เพิ่ม event listener สำหรับปุ่มย้อนกลับ
                          var backButton = document.querySelector('.btn-primary.active');
                          backButton.addEventListener('click', checkSelection);

                          // เรียกใช้ฟังก์ชันเมื่อโหลดหน้าเว็บ
                          document.addEventListener('DOMContentLoaded', checkSelection);
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
        <!-- Content wrapper -->
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