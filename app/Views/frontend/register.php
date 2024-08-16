<?php include('header.php');?>

<section class="w3l-contact-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">

            <h2>Register</h2>
            <p><a href="index.html">Home</a> &nbsp; / &nbsp; Contact</p>

        </div>
    </div>
</section>
<!-- contact form -->
<section class="w3l-contacts-2" id="contact">
    <div class="contacts-main">

        <div class="form-41-mian py-5">
            <div class="container w-50 py-md-3">
                <h3 class="cont-head">Register Now</h3>
                <?= $session->getFlashdata('message'); ?>

                <div class="align-form-map">
                    <div class="form-inner-cont">

                        <form method="post" id="register-form" class="main-input" enctype="multipart/form-data">
                            <input type="text" name="fullname" placeholder="Name">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password">
                            <input type="text" name="mobile" placeholder="Phone Number">
                            <textarea name="address" placeholder="Address" ></textarea>
                            <div class="text-right">
                                <button type="submit" onclick="addUser()" class="btn btn-theme3">Send Now</button>
                            </div>
                        </form>

                    </div>

                    
                </div>
            </div>
        </div>

</section>
<!-- //contact form -->

<?php include('footer.php'); ?>