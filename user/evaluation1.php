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
                                                <form id="formevaluation1" method="post">
                                                    <h5 class="card-title text-primary">ส่วนที่ 1 ข้อมูลทั่วไป</h5>
                                                    <hr>
                                                    <h5 class="card-title text-primary">เพศ</h5>
                                                    <div class="row col-lg-12 col-md-6 col-6">
                                                        <div class="col-mb">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="sex" id="A1" value="หญิง" />
                                                                <label class="form-check-label" for="A1">หญิง</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="sex" id="A2" value="ชาย" />
                                                                <label class="form-check-label" for="A2">ชาย</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">อายุ (ปีเต็ม)</h5>
                                                    <div class="row col-lg-12 col-md-6 col-6">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="age" id="A3" value="0-34 ปี" />
                                                                <label class="form-check-label" for="A3">0-34 ปี</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="age" id="A4" value="34-59 ปี" />
                                                                <label class="form-check-label" for="A4">34-59 ปี</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="age" id="A5" value="60 ปีขึ้นไป" />
                                                                <label class="form-check-label" for="A5">60 ปีขึ้นไป</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">สถานภาพ</h5>
                                                    <div class="row col-lg-12 col-md-6 col-6">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="status" id="A6" value="โสด" />
                                                                <label class="form-check-label" for="A6">โสด</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="status" id="A7" value="สมรส" />
                                                                <label class="form-check-label" for="A7">สมรส</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="status" id="A8" value="หม้าย/หย่าร้าง/แยกกันอยู่" />
                                                                <label class="form-check-label" for="A8">หม้าย/หย่าร้าง/แยกกันอยู่</label>
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
                                                                    echo '<option value="' . $row["province_name"] . '">' . $row["province_name"] . '</option>';
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
                                                                <label class="form-check-label" for="A13">ประถมและต่ำกว่า</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="study" id="A14" value="มัธยมศึกษาตอนต้น" />
                                                                <label class="form-check-label" for="A14">มัธยมศึกษาตอนต้น</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="study" id="A15" value="มัธยมศึกษาตอนปลาย" />
                                                                <label class="form-check-label" for="A15">มัธยมศึกษาตอนปลาย</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="study" id="A16" value="ปริญญาตรีและสูงกว่า" />
                                                                <label class="form-check-label" for="A16">ปริญญาตรีและสูงกว่า</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="demo-inline-spacing d-flex justify-content-between">
                                                        <div></div>
                                                        <button type="submit" id="nextButton" class="btn btn-primary active" style="display: none">ถัดไป</button>
                                                    </div>
                                                    <hr>
                                                    <center>
                                                        <div class="button-container">
                                                            <a type="button" class="btn btn-primary" href="index.php"> <i class='bx bx-home'></i> กลับหน้าหลัก</a>
                                                        </div>
                                                    </center>
                                                </form>
                                                <?php
                                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                                    include('user_cont/connect.php');

                                                    $sex = isset($_POST['sex']) ? $_POST['sex'] : '';
                                                    $age = isset($_POST['age']) ? $_POST['age'] : '';
                                                    $status = isset($_POST['status']) ? $_POST['status'] : '';
                                                    $province = isset($_POST['province']) ? $_POST['province'] : '';
                                                    $study = isset($_POST['study']) ? $_POST['study'] : '';
                                                    $provinceScore = 0;

                                                    if (!empty($province)) {
                                                        $provinceQuery = "SELECT province_scores FROM province WHERE province_name = :province";
                                                        $stmtProvince = $conn->prepare($provinceQuery);
                                                        $stmtProvince->bindParam(':province', $province);
                                                        $stmtProvince->execute();
                                                        $resultProvince = $stmtProvince->fetch(PDO::FETCH_ASSOC);
                                                        $provinceScore = $resultProvince['province_scores'];
                                                    }

                                                    $scoreMapping = array(
                                                        'sex' => array(
                                                            'หญิง' => 2,
                                                            'ชาย' => 1,
                                                        ),
                                                        'age' => array(
                                                            '0-34 ปี' => 1,
                                                            '34-59 ปี' => 2,
                                                            '60 ปีขึ้นไป' => 1,
                                                        ),
                                                        'status' => array(
                                                            'โสด' => 2,
                                                            'สมรส' => 1,
                                                            'หม้าย/หย่าร้าง/แยกกันอยู่' => 2,
                                                        ),
                                                        'study' => array(
                                                            'ประถมและต่ำกว่า' => 2,
                                                            'มัธยมศึกษาตอนต้น' => 2,
                                                            'มัธยมศึกษาตอนปลาย' => 1,
                                                            'ปริญญาตรีและสูงกว่า' => 1,
                                                        ),
                                                    );

                                                    $sexScore = isset($_POST['sex']) ? ($scoreMapping['sex'][$_POST['sex']] ?? 0) : 0;
                                                    $ageScore = isset($_POST['age']) ? ($scoreMapping['age'][$_POST['age']] ?? 0) : 0;
                                                    $statusScore = isset($_POST['status']) ? ($scoreMapping['status'][$status] ?? 0) : 0;
                                                    $studyScore = isset($_POST['study']) ? ($scoreMapping['study'][$study] ?? 0) : 0;

                                                    $totalScore = $sexScore + $ageScore + $statusScore + $studyScore + $provinceScore;

                                                    // echo "คะแนน sexScore: $sexScore<br>";
                                                    // echo "คะแนน ageScore: $ageScore<br>";
                                                    // echo "คะแนน statusScore: $statusScore<br>";
                                                    // echo "คะแนน studyScore: $studyScore<br>";
                                                    // echo "<hr>";
                                                    // echo "POST sex: $sex<br>";
                                                    // echo "POST age: $age<br>";
                                                    // echo "POST status: $status<br>";
                                                    // echo "POST study: $study<br>";

                                                    // echo "คะแนนรวมทั้งหมด: $totalScore";

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
                                                        $form_1_id = $conn->lastInsertId();
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

                                                        var selectedProvinceCountElement = document.getElementById('selectedProvinceCount');
                                                        if (selectedProvinceCountElement) {
                                                            selectedProvinceCountElement.innerText = selectedProvinces;
                                                        }
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