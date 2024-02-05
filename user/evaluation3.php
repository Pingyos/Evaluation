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
                                                <form id="formevaluation3" method="post">
                                                    <h5 class="card-title text-primary">ส่วนที่ 3 ข้อมูลพฤติกรรมการดำเนินชีวิต</h5>
                                                    <?php
                                                    if (isset($_GET['data_form1']) && isset($_GET['data_form2'])) {
                                                        $encodedData1 = $_GET['data_form1'];
                                                        $encodedData2 = $_GET['data_form2'];
                                                        $jsonData1 = urldecode($encodedData1);
                                                        $jsonData2 = urldecode($encodedData2);
                                                        $data1 = json_decode($jsonData1, true);
                                                        $data2 = json_decode($jsonData2, true);
                                                        $form1Data = $data1['data'];
                                                        $form1Scores = $data1['scores'];
                                                        $form2Data = $data2['data'];
                                                        $form2Scores = $data2['scores'];
                                                        echo "Data from Form 1:\n";
                                                        print_r($form1Data);
                                                        echo "Scores from Form 1: $form1Scores\n";
                                                        echo "Data from Form 2:\n";
                                                        print_r($form2Data);
                                                        echo "Scores from Form 2: $form2Scores\n";
                                                    }
                                                    ?>




                                                    <hr>
                                                    <h5 class="card-title text-primary">ท่านรับประทานอาหารครบ 3 มื้อ</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="1" />
                                                                <label class="form-check-label" for="B3">เป็นประจำ/ปฏิบัติทุกวัน</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="2" />
                                                                <label class="form-check-label" for="B3">บ่อยครั้ง/5-6 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="3" />
                                                                <label class="form-check-label" for="B3">บางครั้ง/3-4 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="4" />
                                                                <label class="form-check-label" for="B3">นานๆครั้ง/1-2 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="5" />
                                                                <label class="form-check-label" for="B3">ไม่เคยเลย</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ท่านชอบเติมเครื่องปรุงรสชาติอาหารให้มีรสหวานเสมอ เช่น น้ำตาล ผงชูรส ก้อนปรุงรส ซอส</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="5" />
                                                                <label class="form-check-label" for="B3"> เป็นประจำ/ปฏิบัติทุกวัน</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="4" />
                                                                <label class="form-check-label" for="B3">บ่อยครั้ง/5-6 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="3" />
                                                                <label class="form-check-label" for="B3">บางครั้ง/3-4 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="2" />
                                                                <label class="form-check-label" for="B3">นานๆครั้ง/1-2 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="1" />
                                                                <label class="form-check-label" for="B3">ไม่เคยเลย</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ท่านรับประทานอาหารว่างระหว่างมื้อนอกเหนือจากอาหารมื้อหลัก 3 มื้อต่อวัน</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="5" />
                                                                <label class="form-check-label" for="B3"> เป็นประจำ/ปฏิบัติทุกวัน</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="4" />
                                                                <label class="form-check-label" for="B3">บ่อยครั้ง/5-6 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="3" />
                                                                <label class="form-check-label" for="B3">บางครั้ง/3-4 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="2" />
                                                                <label class="form-check-label" for="B3">นานๆครั้ง/1-2 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="1" />
                                                                <label class="form-check-label" for="B3">ไม่เคยเลย</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ท่านรับประทานขัดสี ข้าวเหนียว ขนมปังสีขาว</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="5" />
                                                                <label class="form-check-label" for="B3"> เป็นประจำ/ปฏิบัติทุกวัน</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="4" />
                                                                <label class="form-check-label" for="B3">บ่อยครั้ง/5-6 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="3" />
                                                                <label class="form-check-label" for="B3">บางครั้ง/3-4 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="2" />
                                                                <label class="form-check-label" for="B3">นานๆครั้ง/1-2 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="1" />
                                                                <label class="form-check-label" for="B3">ไม่เคยเลย</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ท่านรับประทานเส้นก๋วยเตี๋ยว ได้แก่ เส้นเล็ก เส้นใหญ่ บะหมี่เส้นเหลือง</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="5" />
                                                                <label class="form-check-label" for="B3"> เป็นประจำ/ปฏิบัติทุกวัน</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="4" />
                                                                <label class="form-check-label" for="B3">บ่อยครั้ง/5-6 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="3" />
                                                                <label class="form-check-label" for="B3">บางครั้ง/3-4 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="2" />
                                                                <label class="form-check-label" for="B3">นานๆครั้ง/1-2 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="1" />
                                                                <label class="form-check-label" for="B3">ไม่เคยเลย</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ท่านรับประทานผลไม้อย่างไม่จำกัดปริมาณ</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="5" />
                                                                <label class="form-check-label" for="B3"> เป็นประจำ/ปฏิบัติทุกวัน</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="4" />
                                                                <label class="form-check-label" for="B3">บ่อยครั้ง/5-6 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="3" />
                                                                <label class="form-check-label" for="B3">บางครั้ง/3-4 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="2" />
                                                                <label class="form-check-label" for="B3">นานๆครั้ง/1-2 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="1" />
                                                                <label class="form-check-label" for="B3">ไม่เคยเลย</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ท่านรับประทานอาหารมัน อาหารทอด แกงกะทิ</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="5" />
                                                                <label class="form-check-label" for="B3"> เป็นประจำ/ปฏิบัติทุกวัน</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="4" />
                                                                <label class="form-check-label" for="B3">บ่อยครั้ง/5-6 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="3" />
                                                                <label class="form-check-label" for="B3">บางครั้ง/3-4 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="2" />
                                                                <label class="form-check-label" for="B3">นานๆครั้ง/1-2 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="1" />
                                                                <label class="form-check-label" for="B3">ไม่เคยเลย</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <h5 class="card-title text-primary">ท่านดื่มเครื่องดื่มประเภท น้ำหวาน น้ำชา กาแฟ น้ำอัดลม ที่รสชาติหวาน</h5>
                                                    <div class="row col-lg-12 col-md-6 col-12">
                                                        <div class="col-md">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="5" />
                                                                <label class="form-check-label" for="B3"> เป็นประจำ/ปฏิบัติทุกวัน</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="4" />
                                                                <label class="form-check-label" for="B3">บ่อยครั้ง/5-6 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="3" />
                                                                <label class="form-check-label" for="B3">บางครั้ง/3-4 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="2" />
                                                                <label class="form-check-label" for="B3">นานๆครั้ง/1-2 วัน/สัปดาห์</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="B3" id="B3" value="1" />
                                                                <label class="form-check-label" for="B3">ไม่เคยเลย</label>
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