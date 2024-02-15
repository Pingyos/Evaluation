<?php
include('user_cont/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $province_id = isset($_POST['province_id']) ? $_POST['province_id'] : '';
    $district_id = isset($_POST['district_id']) ? $_POST['district_id'] : '';
    $subdistrict_id = isset($_POST['subdistrict_id']) ? $_POST['subdistrict_id'] : '';

    // Check if province_id is valid and get province_name
    $checkProvinceQuery = "SELECT name_th FROM th_province WHERE province_id = :province_id";
    $stmt_check_province = $conn->prepare($checkProvinceQuery);
    $stmt_check_province->bindParam(':province_id', $province_id);
    $stmt_check_province->execute();
    $province_name = $stmt_check_province->fetchColumn();

    if ($province_name) {
        // Check if district_id is valid and get district_name
        $checkDistrictQuery = "SELECT name_th FROM th_district WHERE district_id = :district_id";
        $stmt_check_district = $conn->prepare($checkDistrictQuery);
        $stmt_check_district->bindParam(':district_id', $district_id);
        $stmt_check_district->execute();
        $district_name = $stmt_check_district->fetchColumn();

        if ($district_name) {
            // Check if subdistrict_id is valid and get subdistrict_name
            $checkSubdistrictQuery = "SELECT name_th FROM th_subdistrict WHERE subdistrict_id = :subdistrict_id";
            $stmt_check_subdistrict = $conn->prepare($checkSubdistrictQuery);
            $stmt_check_subdistrict->bindParam(':subdistrict_id', $subdistrict_id);
            $stmt_check_subdistrict->execute();
            $subdistrict_name = $stmt_check_subdistrict->fetchColumn();

            if ($subdistrict_name) {
                // Insert data into form_0 table with name_th instead of province_id, district_id, and subdistrict_id
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
                    $stmt_insert->execute();
                    $form_0_id = $conn->lastInsertId();
                    echo '<script>window.location.href = "evaluation1.php?form_0_id=' . $form_0_id . '";</script>';
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
            } else {
                echo "Error: Invalid district_id.";
            }
        } else {
            echo "Error: Invalid province_id.";
        }
    }
}
