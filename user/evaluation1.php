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
                                                                <input class="form-check-input" type="radio" name="sex" id="A1" value="หญิง" />
                                                                <label class="form-check-label" for="sex">หญิง</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="sex" id="A2" value="ชาย" />
                                                                <label class="form-check-label" for="sex">ชาย</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">อายุ (ปีเต็ม)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="age" id="A3" value="0-34 ปี" />
                                                                <label class="form-check-label" for="age">0-34 ปี</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="age" id="A4" value="34-59 ปี" />
                                                                <label class="form-check-label" for="age">34-59 ปี</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="age" id="A5" value="60 ปีขึ้นไป" />
                                                                <label class="form-check-label" for="age">60 ปีขึ้นไป</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">สถานภาพ</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="status" id="A6" value="โสด" />
                                                                <label class="form-check-label" for="status">โสด</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="status" id="A7" value="สมรส" />
                                                                <label class="form-check-label" for="status">สมรส</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="status" id="A8" value="หม้าย/หย่าร้าง/แยกกันอยู่" />
                                                                <label class="form-check-label" for="status">หม้าย/หย่าร้าง/แยกกันอยู่</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ภูมิลำเนา</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <?php
                                                        include('user_cont/connect.php');
                                                        $query = "
                                                            SELECT province_name, province_scores FROM province
                                                            ORDER BY province_name ASC
                                                        ";
                                                        $result = $conn->query($query);
                                                        ?>
                                                        <div class="mb-3">
                                                            <select class="form-select" name="province">
                                                                <option value="">กรุณาเลือกภูมิลำเนา</option>
                                                                <?php
                                                                foreach ($result as $row) {
                                                                    echo '<option value="' . $row["province_name"] . '">' . $row["province_name"] . ' - Scores: ' . $row["province_scores"] . '</option>';
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ระดับการศึกษา</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="study" id="A13" value="ประถมและต่ำกว่า" />
                                                                <label class="form-check-label" for="study">ประถมและต่ำกว่า</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="study" id="A14" value="มัธยมศึกษาตอนต้น" />
                                                                <label class="form-check-label" for="study">มัธยมศึกษาตอนต้น</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="study" id="A15" value="มัธยมศึกษาตอนปลาย" />
                                                                <label class="form-check-label" for="study">มัธยมศึกษาตอนปลาย</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="study" id="A16" value="ปริญญาตรี และสูงกว่า" />
                                                                <label class="form-check-label" for="study">ปริญญาตรี และสูงกว่า</label>
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

                                                    $sex = isset($_POST['sex']) ? $_POST['sex'] : '';
                                                    $age = isset($_POST['age']) ? $_POST['age'] : '';
                                                    $status = isset($_POST['status']) ? $_POST['status'] : '';
                                                    $province = isset($_POST['province']) ? $_POST['province'] : '';
                                                    $study = isset($_POST['study']) ? $_POST['study'] : '';

                                                    // Get province score
                                                    $provinceScore = 0; // Default value if no province is selected
                                                    if (!empty($province)) {
                                                        $provinceQuery = "SELECT province_scores FROM province WHERE province_name = :province";
                                                        $stmtProvince = $conn->prepare($provinceQuery);
                                                        $stmtProvince->bindParam(':province', $province);
                                                        $stmtProvince->execute();
                                                        $resultProvince = $stmtProvince->fetch(PDO::FETCH_ASSOC);
                                                        $provinceScore = $resultProvince['province_scores'];
                                                    }

                                                    // Define scores
                                                    $sexScore = ($_POST['sex'] === 'A1') ? 2 : 1;
                                                    $ageScore = ($_POST['age'] === 'A3') ? 1 : (($_POST['age'] === 'A4') ? 2 : 1);
                                                    $statusScore = ($_POST['status'] === 'A6') ? 2 : (($_POST['status'] === 'A7') ? 1 : 2);
                                                    $studyScore = ($_POST['study'] === 'A13') ? 2 : (($_POST['study'] === 'A14') ? 2 : (($_POST['study'] === 'A15') ? 1 : 1));

                                                    // Calculate total score
                                                    $totalScore = $sexScore + $ageScore + $statusScore + $studyScore + $provinceScore;

                                                    // Insert data into form_1 table
                                                    $insertQuery = "INSERT INTO form_1 (sex, age, status, province, study, province_score, total_score) 
                                                    VALUES (:sex, :age, :status, :province, :study, :provinceScore, :totalScore)";

                                                    $stmt = $conn->prepare($insertQuery);
                                                    $stmt->bindParam(':sex', $sex);
                                                    $stmt->bindParam(':age', $age);
                                                    $stmt->bindParam(':status', $status);
                                                    $stmt->bindParam(':province', $province);
                                                    $stmt->bindParam(':study', $study);
                                                    $stmt->bindParam(':provinceScore', $provinceScore);
                                                    $stmt->bindParam(':totalScore', $totalScore);

                                                    try {
                                                        $stmt->execute();
                                                        $form_1_id = $conn->lastInsertId(); // Get the last inserted ID

                                                        // Redirect to "evaluation2.php" with form_1_id as a query parameter
                                                        echo '<script>window.location.href = "evaluation2.php?form_1_id=' . $form_1_id . '";</script>';
                                                    } catch (PDOException $e) {
                                                        echo "Error: " . $e->getMessage();
                                                    }
                                                }
                                                ?>
                                                <script>
                                                    function checkSelection() {
                                                        var selectedProvinces = document.querySelectorAll('input[type="radio"]:checked').length;
                                                        var selectedOptions = document.querySelectorAll('select, input[type="radio"]:checked').length;

                                                        if (selectedOptions === 5) {
                                                            document.getElementById('nextButton').style.display = 'block';
                                                        } else {
                                                            document.getElementById('nextButton').style.display = 'none';
                                                        }
                                                        document.getElementById('selectedProvinceCount').innerText = selectedProvinces;
                                                    }
                                                    var formElements = document.querySelectorAll('#formevaluation1 select, #formevaluation1 input[type="radio"]');
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