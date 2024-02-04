<form id="formevaluation1" method="post">
    <h5 class="card-title text-primary">ส่วนที่ 1 ข้อมูลทั่วไป</h5>
    <hr>
    <h5 class="card-title text-primary">เพศ</h5>
    <div class="row col-lg-12 col-md-6 col-12">
        <div class="col-mb">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="A1" id="A1" value="ชาย" />
                <label class="form-check-label" for="A1">ชาย</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="A1" id="A2" value="หญิง" />
                <label class="form-check-label" for="A1">หญิง</label>
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
                <input class="form-check-input" type="radio" name="A4" id="A8" value="ภูมิลำเนา 1" />
                <label class="form-check-label" for="A4">ภูมิลำเนา 1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="A4" id="A9" value="ภูมิลำเนา 2" />
                <label class="form-check-label" for="A4">ภูมิลำเนา 2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="A4" id="A10" value="ภูมิลำเนา 3" />
                <label class="form-check-label" for="A4">ภูมิลำเนา 3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="A4" id="A11" value="ภูมิลำเนา 4" />
                <label class="form-check-label" for="A4">ภูมิลำเนา 4</label>
            </div>
        </div>
    </div>
    <br>
    <h5 class="card-title text-primary">ระดับการศึกษา</h5>
    <div class="row col-lg-12 col-md-6 col-12">
        <div class="col-md">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="A5" id="A12" value="ประถมและต่ำกว่า" />
                <label class="form-check-label" for="A5">ประถมและต่ำกว่า</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="A5" id="A13" value="มัธยมศึกษาตอนต้น" />
                <label class="form-check-label" for="A5">มัธยมศึกษาตอนต้น</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="A5" id="A14" value="มัธยมศึกษาตอนปลาย" />
                <label class="form-check-label" for="A5">มัธยมศึกษาตอนปลาย</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="A5" id="A15" value="ปริญญาตรี และสูงกว่า" />
                <label class="form-check-label" for="A5">ปริญญาตรี และสูงกว่า</label>
            </div>
        </div>
    </div>
    <div class="row col-lg-12 col-md-6 col-12">
        <div class="col-md">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> <!-- Include jQuery library -->

<script>
    $(document).ready(function() {
        // Initialize an object to store the form data
        var dataform1 = {};

        function getSelectedValue(groupName) {
            return $("input[name='" + groupName + "']:checked").val();
        }

        function calculateScore(value) {
            if (value === "ชาย") return 1;
            else if (value === "หญิง") return 2;
            else if (value === "0-34 ปี") return 1;
            else if (value === "34-59 ปี") return 2;
            else if (value === "60 ปีขึ้นไป") return 1;
            else if (value === "โสด") return 2;
            else if (value === "สมรส") return 1;
            else if (value === "หม้าย/หย่าร้าง/แยกกันอยู่") return 2;
            else if (value === "ภูมิลำเนา 1") return 1;
            else if (value === "ภูมิลำเนา 2") return 2;
            else if (value === "ภูมิลำเนา 3") return 3;
            else if (value === "ภูมิลำเนา 4") return 4;
            else if (value === "ประถมและต่ำกว่า") return 2;
            else if (value === "มัธยมศึกษาตอนต้น") return 2;
            else if (value === "มัธยมศึกษาตอนปลาย") return 1;
            else if (value === "ปริญญาตรี และสูงกว่า") return 1;
            return 0;
        }

        $("#formevaluation1").submit(function(event) {
            event.preventDefault();

            // Get and store the selected values for each question
            dataform1.A1 = getSelectedValue("A1");
            dataform1.A2 = getSelectedValue("A2");
            dataform1.A3 = getSelectedValue("A3");
            dataform1.A4 = getSelectedValue("A4");
            dataform1.A5 = getSelectedValue("A5");

            // Calculate and store the scores for each question
            dataform1.scoreA1 = calculateScore(dataform1.A1);
            dataform1.scoreA2 = calculateScore(dataform1.A2);
            dataform1.scoreA3 = calculateScore(dataform1.A3);
            dataform1.scoreA4 = calculateScore(dataform1.A4);
            dataform1.scoreA5 = calculateScore(dataform1.A5);

            // Calculate the total score and store it
            dataform1.totalScore = dataform1.scoreA1 + dataform1.scoreA2 + dataform1.scoreA3 + dataform1.scoreA4 + dataform1.scoreA5;

            // Log or perform actions with the form data (replace with your desired logic)
            console.log("Form Data:", dataform1);
        });
    });
</script>