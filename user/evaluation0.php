<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php
include('user_cont/head.php');
?>

<body class="theme_turquoise">
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
                                                <form id="formevaluation0" method="post">
                                                    <h5 class="card-title text-primary">ส่วนที่ ข้อมูลส่วนบุคคล</h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <h5 class="card-title text-primary">ชื่อ-สกุล</h5>
                                                            <div class="mb-3">
                                                                <input type="text" class="form-control" name="fullname" id="fullname" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <h5 class="card-title text-primary">เบอร์โทรศัพท์</h5>
                                                            <div class="mb-3">
                                                                <input type="text" class="form-control" name="tel" id="tel" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <h5 class="card-title text-primary">ที่อยู่</h5>
                                                            <div class="mb-3">
                                                                <input type="text" class="form-control" name="address" id="address" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <?php
                                                            include('user_cont/connect.php');
                                                            $sql_province = "SELECT * FROM th_province ORDER BY CONVERT(name_th USING tis620) ASC";
                                                            $stmt = $conn->query($sql_province);
                                                            $provinces = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                            ?>
                                                            <h5 class="card-title text-primary">จังหวัด</h5>
                                                            <div class="mb-3">
                                                                <select class="form-select" id="province_id" name="province_id" required>
                                                                    <option value="">เลือกจังหวัด</option>
                                                                    <?php foreach ($provinces as $province) { ?>
                                                                        <option value="<?php echo $province['province_id'] ?>">
                                                                            <?php echo $province['name_th']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <h5 class="card-title text-primary">อำเภอ</h5>
                                                            <div class="mb-3">
                                                                <select class="form-select" id="district_id" name="district_id" required>
                                                                    <option value="">เลือกอำเภอ</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <h5 class="card-title text-primary">ตำบล</h5>
                                                            <div class="mb-3">
                                                                <select class="form-select" id="subdistrict_id" name="subdistrict_id" required>
                                                                    <option value="">เลือกตำบล</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <div class="demo-inline-spacing d-flex justify-content-between">
                                                        <div></div>
                                                        <button type="submit" class="btn btn-primary active" id="nextBtn" disabled>ถัดไป</button>
                                                    </div>
                                                    <hr>
                                                    <center>
                                                        <div class="button-container">
                                                            <a type="button" class="btn btn-primary" href="index.php">
                                                                <i class='bx bx-home'></i> กลับหน้าหลัก</a>
                                                        </div>
                                                    </center>
                                                </form>
                                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                                <script>
                                                    document.addEventListener("DOMContentLoaded", function() {
                                                        // Function to check if all fields are filled
                                                        function checkForm() {
                                                            var fullname = document.getElementById("fullname")
                                                                .value;
                                                            var tel = document.getElementById("tel").value;
                                                            var address = document.getElementById("address").value;
                                                            var province_id = document.getElementById("province_id")
                                                                .value;
                                                            var district_id = document.getElementById("district_id")
                                                                .value;
                                                            var subdistrict_id = document.getElementById(
                                                                "subdistrict_id").value;

                                                            if (fullname !== "" && tel !== "" && address !== "" &&
                                                                province_id !== "" && district_id !== "" &&
                                                                subdistrict_id !== "") {
                                                                document.getElementById("nextBtn").disabled = false;
                                                            } else {
                                                                document.getElementById("nextBtn").disabled = true;
                                                            }
                                                        }
                                                        document.getElementById("fullname").addEventListener(
                                                            "input", checkForm);
                                                        document.getElementById("tel").addEventListener("input",
                                                            checkForm);
                                                        document.getElementById("address").addEventListener("input",
                                                            checkForm);
                                                        document.getElementById("province_id").addEventListener(
                                                            "change", checkForm);
                                                        document.getElementById("district_id").addEventListener(
                                                            "change", checkForm);
                                                        document.getElementById("subdistrict_id").addEventListener(
                                                            "change", checkForm);
                                                    });
                                                </script>
                                                <script>
                                                    document.addEventListener("DOMContentLoaded", function() {
                                                        document.querySelector('.btn-primary').addEventListener(
                                                            'click',
                                                            function(event) {
                                                                event
                                                                    .preventDefault(); // Prevent default form submission
                                                                Swal.fire({
                                                                    title: "โปรดอ่าน",
                                                                    text: "เมื่อคุณกด ยืนยัน ระบบจะทำการเก็บข้อมูลส่วนบุคคลคุณในระบบ",
                                                                    icon: "warning",
                                                                    showCancelButton: true,
                                                                    confirmButtonColor: "#3085d6",
                                                                    cancelButtonColor: "#d33",
                                                                    confirmButtonText: "ยืนยัน",
                                                                    cancelButtonText: "ยกเลิก"
                                                                }).then((result) => {
                                                                    if (result.isConfirmed) {
                                                                        document.getElementById(
                                                                                "formevaluation0")
                                                                            .submit();
                                                                        <?php
                                                                        include('user_cont/connect.php');
                                                                        $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
                                                                        $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
                                                                        $address = isset($_POST['address']) ? $_POST['address'] : '';
                                                                        $province_id = isset($_POST['province_id']) ? $_POST['province_id'] : '';
                                                                        $district_id = isset($_POST['district_id']) ? $_POST['district_id'] : '';
                                                                        $subdistrict_id = isset($_POST['subdistrict_id']) ? $_POST['subdistrict_id'] : '';
                                                                        $checkProvinceQuery = "SELECT name_th FROM th_province WHERE province_id = :province_id";
                                                                        $stmt_check_province = $conn->prepare($checkProvinceQuery);
                                                                        $stmt_check_province->bindParam(':province_id', $province_id);
                                                                        $stmt_check_province->execute();
                                                                        $province_name = $stmt_check_province->fetchColumn();
                                                                        if ($province_name) {
                                                                            $checkDistrictQuery = "SELECT name_th FROM th_district WHERE district_id = :district_id";
                                                                            $stmt_check_district = $conn->prepare($checkDistrictQuery);
                                                                            $stmt_check_district->bindParam(':district_id', $district_id);
                                                                            $stmt_check_district->execute();
                                                                            $district_name = $stmt_check_district->fetchColumn();
                                                                            if ($district_name) {
                                                                                $checkSubdistrictQuery = "SELECT name_th FROM th_subdistrict WHERE subdistrict_id = :subdistrict_id";
                                                                                $stmt_check_subdistrict = $conn->prepare($checkSubdistrictQuery);
                                                                                $stmt_check_subdistrict->bindParam(':subdistrict_id', $subdistrict_id);
                                                                                $stmt_check_subdistrict->execute();
                                                                                $subdistrict_name = $stmt_check_subdistrict->fetchColumn();
                                                                                if ($subdistrict_name) {
                                                                                    $insertQuery = "INSERT INTO form_0 (fullname, tel, address, province_name, district_name, subdistrict_name) 
                                                                                    VALUES (:fullname, :tel, :address, :province_name, :district_name, :subdistrict_name)";
                                                                                    $stmt_insert = $conn->prepare($insertQuery);
                                                                                    $stmt_insert->bindParam(':fullname', $fullname);
                                                                                    $stmt_insert->bindParam(':tel', $tel);
                                                                                    $stmt_insert->bindParam(':address', $address);
                                                                                    $stmt_insert->bindParam(':province_name', $province_name);
                                                                                    $stmt_insert->bindParam(':district_name', $district_name);
                                                                                    $stmt_insert->bindParam(':subdistrict_name', $subdistrict_name);
                                                                                    try {
                                                                                        $stmt->execute();
                                                                                        $form_0_id = $conn->lastInsertId();
                                                                                        echo '<script>window.location.href = "evaluation1.php?form_0_id=' . $form_0_id . '";
                                                                                        </script>';
                                                                                        exit();
                                                                                    } catch (PDOException $e) {
                                                                                        echo "console.error('Error: " . $e->getMessage() . "');";
                                                                                    }
                                                                                } else {
                                                                                    echo "console.error('Error: Invalid district_id.');";
                                                                                }
                                                                            } else {
                                                                                echo "console.error('Error: Invalid province_id.');";
                                                                            }
                                                                        }
                                                                        ?>
                                                                    }
                                                                });
                                                            });
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

    <script defer src="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.8.6/dist/cookieconsent.js"></script>
    <script defer src="cc-init.js"></script>
    <script src="scriptprovince.js" charset="utf-8"></script>
</body>

</html>