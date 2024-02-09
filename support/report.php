<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php
include('support_cont/head.php');
?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php
            include('support_cont/aside.php');
            ?>
            <div class="layout-page">
                <?php
                include('support_cont/nav.php');
                ?>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="col-xl">
                                    <div class="card mb-4">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Basic Layout</h5>
                                        </div>
                                        <div class="card-body">
                                            <form method="post">
                                                <div class="row">
                                                    <div class="row col-lg-6 col-md-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-default-fullname">วันที่เริ่ม</label>
                                                            <input type="date" name="start_date" class="form-control" id="start_date" value="<?php echo isset($_POST['dateCreate']) ? htmlspecialchars($_POST['dateCreate']) : ''; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row col-lg-6 col-md-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-default-company">วันที่สิ้นสุด</label>
                                                            <input type="date" name="end_date" class="form-control" id="end_date" value="<?php echo isset($_POST['dateCreate']) ? htmlspecialchars($_POST['dateCreate']) : ''; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row col-lg-6 col-md-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-default-email">เพศ</label>
                                                            <select class="form-control" name="sex" id="sex">
                                                                <option value="" disabled <?php echo empty($_POST['sex']) ? 'selected' : ''; ?>>แสดงทั้งหมด</option>
                                                                <?php
                                                                require_once 'support_cont/connection.php';
                                                                $sql = "SELECT DISTINCT sex FROM form_4";
                                                                $stmt = $conn->prepare($sql);
                                                                $stmt->execute();
                                                                $checkings = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                                foreach ($checkings as $checking) {
                                                                    $sex = $checking['sex'];
                                                                    echo "<option value='$sex' $selected>$sex</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row col-lg-6 col-md-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-default-email">อายุ</label>
                                                            <select class="form-control" name="age" id="age">
                                                                <option value="" disabled <?php echo empty($_POST['age']) ? 'selected' : ''; ?>>แสดงทั้งหมด</option>
                                                                <?php
                                                                require_once 'support_cont/connection.php';
                                                                $sql = "SELECT DISTINCT age FROM form_4";
                                                                $stmt = $conn->prepare($sql);
                                                                $stmt->execute();
                                                                $checkings = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                                foreach ($checkings as $checking) {
                                                                    $age = $checking['age'];
                                                                    echo "<option value='$age' $selected>$age</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row col-lg-6 col-md-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="basic-default-phone">Phone No</label>
                                                            <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="658 799 8941" />
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Send</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                include('support_cont/footer.php');
                ?>
            </div>
        </div>
    </div>


    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/dashboards-analytics.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>