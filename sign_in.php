<!doctype html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <title>Ijin Absen | Sign In </title>
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/assets/img/pens_ic.ico" />
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicons -->
    <link href="<?=base_url()?>assets/assets/img/favicon.png" rel="icon">
    <link href="<?=base_url()?>assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?=base_url()?>assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?=base_url()?>assets/assets/css/style.css" rel="stylesheet">
    <style>
    .credits p {
        font-size: 12px;
    }
    </style>

</head>

<body>
    <main>
        
        <div class="container">
        
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="<?=base_url()?>assets/assets/img/pens.png" alt="">
                                    <span class="d-none d-lg-block">Ijin Absen</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your email & password to login</p>
                                    </div>

                                    <?php $this->view('messages')?>

                                    <form action="<?=site_url('auth/process')?>" method="post"
                                        class="row g-3 needs-validation" novalidate>

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"><i
                                                        class="bi bi-envelope"></i></span>
                                                <input type="email" name="email" class="form-control" id="yourUsername"
                                                    tabindex="1" required>
                                                <div class="invalid-feedback">Please enter your email.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"><i
                                                        class="bi bi-key"></i></span>
                                                <input type="password" name="password" class="form-control"
                                                    id="yourPassword" tabindex="2" required>
                                                <div class="invalid-feedback">Please enter your password!</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="showPassword"
                                                    value="true" id="showPassword" onclick="myFunction()">
                                                <label class="form-check-label" for="rememberMe">Show Password</label>
                                            </div>
                                        </div>

                                        <!-- Captcha -->
                                        <?php
                                        // init variables
                                            $min_number = 1; $max_number = 15;
                                        // generating random numbers
                                            $random_number1 = mt_rand($min_number, $max_number);
                                            $random_number2 = mt_rand($min_number, $max_number);
                                        ?>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text" id="inputGroupPrepend">
                                                            <?php
                                                     echo $random_number1 . ' + ' . $random_number2;?>
                                                        </span>
                                                        <input type="text" name="captchaResult" id="captchaResult"
                                                            tabindex="3" class="form-control"
                                                            onkeypress='validate(event)' required>
                                                        <div class="invalid-feedback">Please fill in captcha!</div>
                                                    </div>
                                                    <input type="hidden" name="firstNumber"
                                                        value="<?php echo $random_number1; ?>">
                                                    <input type="hidden" name="secondNumber"
                                                        value="<?php echo $random_number2; ?>">
                                                </div>
                                                <div class="col-5">
                                                    <button name="sign_in" id="#sign_in" class="btn btn-primary w-100"
                                                        tabindex="4" type="submit">Login</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Captcha -->

                                        <div class="col-12">
                                            <p class="small mb-0">Pengguna Baru? <a href="<?=site_url('sign_up')?>"
                                                    tabindex="5">Daftar</a>
                                            </p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <p>© <a href="https://www.instagram.com/tbs_bambangs/">tbs_bambang</a> 2023 | PSDKU
                                    Sumenep.</p>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?=base_url()?>assets/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?=base_url()?>assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?=base_url()?>assets/assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?=base_url()?>assets/assets/vendor/quill/quill.min.js"></script>
    <script src="<?=base_url()?>assets/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?=base_url()?>assets/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?=base_url()?>assets/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?=base_url()?>assets/assets/js/main.js"></script>

</body>

</html>

<script>
function validate(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }
}
</script>

<script>
function myFunction() {
    var x = document.getElementById("yourPassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>