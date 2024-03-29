<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>ระบบประเมินความเสี่ยงโรคเบาหวาน</title>
  <meta name="description" content="" />
  <link href="../assets/img/favicon/web-logo.png" rel="icon">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
  <script src="../assets/vendor/js/helpers.js"></script>
  <script src="../assets/js/config.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree&family=Mitr&family=Noto+Sans+Thai:wght@600&family=Prompt:wght@300&family=Sarabun&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <div class="card">
          <div class="card-body">
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img src="../assets/img/favicon/logo-cmru.png" alt="Logo" width="100" height="50">
                </span>
              </a>
            </div>
            <h4 class="mb-2">ระบบประเมินความเสี่ยงโรคเบาหวาน</h4>
            <form class="mb-3" action="signin_db.php" method="POST">
              <?php if (isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                  <?php
                  echo $_SESSION['error'];
                  unset($_SESSION['error']);
                  ?>
                </div>
              <?php } ?>
              <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                  <?php
                  echo $_SESSION['success'];
                  unset($_SESSION['success']);
                  ?>
                </div>
              <?php } ?>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">หมายเลขบัตรประชาชน</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" class="form-control" name="password">
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" name="signin" type="submit">เข้าสู่ระบบ</button>
              </div>
            </form>
          </div>
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