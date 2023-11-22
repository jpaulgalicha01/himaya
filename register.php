<?php
include "config/security.php";
include 'includes/autoload.inc.php';
include 'includes/header.php';
?>
    <body class="bg-danger">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 my-5">
                                <a href="index.php">
                                    <img src="images/himaya-logo-circle.png" width="80" height="80" class="position-absolute top-0 start-50 translate-middle-x" style="z-index:9999">
                                </a>
                                <div class="card shadow-lg border-0 rounded-lg">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registration Form</h3></div>
                                    <div class="card-body">
                                        <form id="create_acc" enctype="multipart/form-data">
                                            <input type="hidden" name="function" value="create_acc">
                                            <h5>Personal Information</h5>
                                            <div class="mb-3">
                                              <label for="formFile" class="form-label">Profile Image: </label>
                                              <input class="form-control" type="file" id="formFile" name="acc_img" accept=".png, .jpg, .jpeg, .svg" required/>
                                            </div>
                                            <div class="row d-flex py-2">
                                                <div class="col-xl-4 col-lg4 col-12">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="fnmae" name="acc_fname" type="text" placeholder="First Name" required/>
                                                        <label for="fnmae">First Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg4 col-12">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="mname" name="acc_mname" type="text" placeholder="Middle Name" required/>
                                                        <label for="mname">Middle Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg4 col-12">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="lname" name="acc_lname" type="text" placeholder="Last Name" />
                                                        <label for="lname">Last Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="address" name="acc_address" type="text" placeholder="Address" required/>
                                                <label for="address">Address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="birth" type="date" name="acc_birth" placeholder="Birthdate" required/>
                                                <label for="birth">Birthdate</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="phonenum" type="tel" name="acc_phone" placeholder="Phone Number"  pattern="{0-9}[11]" required/>
                                                <label for="phonenum">Phone Number</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" name="acc_email" type="email" placeholder="Email Address" required/>
                                                <label for="email">Email Address</label>
                                            </div>
                                            <h5>Account Information</h5>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="unmae" name="acc_uname" type="text" placeholder="Username" required/>
                                                <label for="unmae">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="pass" name="acc_pass" type="password" placeholder="Password" required/>
                                                <label for="pass">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-dark form-control" id="create_acc_btn">Create Account</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php" class="links">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div class="text-muted">Copyright &copy; Himaya 2023</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script type="text/javascript" src="js/create_ajax.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
