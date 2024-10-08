<!-- grids block 5 -->
<section class="w3l-footer-29-main" id="footer">
    <div class="footer-29">
        <div class="grids-forms-1 pb-5">
            <div class="container">
                <div class="grids-forms">
                    <div class="main-midd">
                        <h4 class="title-head">Newsletter – Get Updates & Latest News</h4>

                    </div>
                    <div class="main-midd-2">
                        <form action="#" method="post" class="rightside-form">
                            <input type="email" name="email" placeholder="Enter your email">
                            <button class="btn" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5">

            <div class="d-grid grid-col-4 footer-top-29">
                <div class="footer-list-29 footer-1">
                    <h6 class="footer-title-29">About Us</h6>
                    <ul>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                    </ul>
                    <div class="main-social-footer-29">
                        <h6 class="footer-title-29">Social Links</h6>
                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                        <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                        <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>
                <div class="footer-list-29 footer-2">
                    <ul>
                        <h6 class="footer-title-29">Useful Links</h6>
                        <li><a href="services.html">Management</a></li>
                        <li><a href="services.html">Reporting</a></li>
                        <li><a href="services.html">Tracking</a></li>
                        <li><a href="services.html">All Users</a></li>
                        <li><a href="contact.html">Support</a></li>
                    </ul>
                </div>
                <div class="footer-list-29 footer-3">
                    <div class="properties">
                        <h6 class="footer-title-29">Featured Properties</h6>
                        <a href="#"><img src="<?= base_url('static/frontend/')?>assets/images/g7.jpg"
                                class="img-responsive" alt="">
                            <p>We Are Leading International Consultiing Agency</p>
                        </a>
                        <a href="#"><img src="<?= base_url('static/frontend/')?>assets/images/g8.jpg"
                                class="img-responsive" alt="">
                            <p>Digital Marketing Agency all the foundational tools</p>
                        </a>
                        <a href="#"><img src="<?= base_url('static/frontend/')?>assets/images/g9.jpg"
                                class="img-responsive" alt="">
                            <p>Doloremque velit sapien labore eius itna</p>
                        </a>
                    </div>
                </div>
                <div class="footer-list-29 footer-4">
                    <ul>
                        <h6 class="footer-title-29">Quick Links</h6>
                        <li><a href="<?= base_url('index'); ?>">Home</a></li>
                        <li><a href="<?= base_url('about'); ?>">About</a></li>
                        <li><a href="<?= base_url('services'); ?>">Services</a></li>
                        <li><a href="<?= base_url('contact'); ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="bottom-copies text-center">
                <p class="copy-footer-29">© 2020 Estate Agent. All rights reserved | Designed by <a
                        href="https://w3layouts.com">W3layouts</a></p>

            </div>
        </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
    <!-- /move top -->
</section>
<!-- // grids block 5 -->
<script type="text/javascript" src="<?= base_url('static/frontend/');?>/assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>
<!-- jQuery -->
<script type="text/javascript" src="<?= base_url('static/frontend/'); ?>/plugins/jquery/jquery.min.js"></script>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Ajax CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>


<script>
// $(document).ready(function(){
//         $('*').css('color', 'red');
// });

$(function() {
    $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
    })
});
</script>

<script>

function searchData(value){
    $.ajax({
        url: '<?= base_url('search-user/'); ?>' + encodeURIComponent(value),
        type: 'GET',
        success: function(result){
            $('#search-list').html(result);
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error: ' + status + error);
        }
    });
}

function addContact() {
    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z," "]+$/i.test(value);
    }, "Letters and spaces only please");
    $('#contact-form').validate({
        rules: {
            fullname: {
                required: true
            },
            email: {
                required: true
            },
            mobile: {
                required: true
            }

        },
        messages: {
            fullname: {
                required: 'Please Enter Your Name'
            },
            email: {
                required: 'Please Enter Your Email'
            },
            mobile: {
                required: 'Please Enter Your Mobile Number'
            }

        },
        submitHandler: function(form) {

            var formdata = $('#contact-form').serialize();

            $.ajax({
                url: '<?= base_url('contact'); ?>',
                data: formdata,
                type: 'POST',
                success: function(result) {
                    $('#msg').html('<div class="alert alert-success">Contact Saved</div>');
                    $("#contact-form")[0].reset();
                }
            })
        }

    });
}

function addUser() {
    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z," "]+$/i.test(value);
    }, "Letters and spaces only please");
    $('#register-form').validate({
        rules: {
            fullname: {
                required: true
            },
            email: {
                required: true
            },
            password: {
                required: true
            },
            mobile: {
                required: true
            }

        },
        messages: {
            fullname: {
                required: 'Please Enter Your Name'
            },
            email: {
                required: 'Please Enter Your Email'
            },
            password: {
                required: 'Enter Password'
            },
            mobile: {
                required: 'Please Enter Your Mobile Number'
            }

        }
    });
}

    
function changeImg(url){
    $('#main_img').attr('src', url);
}


</script>

<!-- Smooth scrolling -->


</body>

</html>
<!-- // grids block 5 -->