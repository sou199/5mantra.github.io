<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Contact Us || 5 Mantra Career Point</title>

    <!-- Links -->
    <?php require_once "links.php" ?>
    <!-- Links -->
    <style>
        .main-header.header-three .main-menu .navbar-collapse>ul>li:hover:before,
        .main-header.header-three .main-menu .navbar-collapse>ul>li.about:before {
            opacity: 1;
            width: 70%;
        }

        .contact-form {
            margin-bottom: 400px;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">

        <!-- Navbar -->
        <?php require_once "navbar.php" ?>
        <!-- Navbar -->


        <!-- Page Banner Start -->
        <section class="page-banner-area rel z-1 text-white text-center"
            style="background-image: url('<?php echo base_url() ?>assets/images/banner.jpg');">
            <div class="container">
                <div class="banner-inner rpt-10">
                    <h2 class="page-title wow fadeInUp delay-0-2s">Contact us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">home</a></li>
                            <li class="breadcrumb-item active">Contact us</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <img class="circle-one" src="<?php echo base_url() ?>assets/images/shapes/circle-one.png" alt="Circle">
            <img class="circle-two" src="<?php echo base_url() ?>assets/images/shapes/circle-two.png" alt="Circle">
        </section>
        <!-- Page Banner End -->

        <!-- Contact Info Start -->
        <section class="contact-info-area rel z-1 py-130 rpt-90 rpb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="contact-info-wrap rmb-75 wow fadeInUp delay-0-2s">
                            <div class="section-title mb-25">
                                <span class="sub-title-two">Need Any Helps ?</span>
                                <h2>Contact For Information</h2>
                            </div>
                            <!--
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium totam rem aperiam eaque ipsa quae abillo inventore veritatis et quasi
                                architecto</p>
                            -->
                            <div class="row no-gap mt-50">
                                <div class="col-md-4 col-sm-6">
                                    <div class="contact-info-box">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <h4>Locations</h4>
                                        <span class="location ">Opp: Balaji Darshan Hotel, near Signal Point, above Gayathri Fast Food,
                                            Ashok Nagar, Hyderabad, Telangana 500020</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="contact-info-box">
                                        <i class="far fa-envelope"></i>
                                        <h4>Email Us</h4>
                                        <span>
                                            <a href="mailto:support@gmail.com">support@gmail.com</a><br>

                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="contact-info-box">
                                        <i class="fas fa-phone-volume"></i>
                                        <h4>Hotlines</h4>
                                        <span>
                                            <a href="callto:+91 7075019931">+91 7075019931</a><br>

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-page-image wow fadeInUp delay-0-4s">
                            <img src="assets/images/contact/contactus.png" alt="Contact Page">
                        </div>
                    </div>
                </div>
            </div>
            <span class="bg-text">coach</span>
        </section>
        <!-- Contact Info End -->

        <!-- Contact Form Start -->
        <section class="contact-form-area wow fadeInUp delay-0-2s">
            <div class="container">
                <form id="contact-form" class="contact-form p-50 z-1 rel" name="contact-form" action="#" method="post">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title-two">Send Us Message</span>
                        <h2>Have Any Questions! Say Hello</h2>
                    </div>
                    <div class="row mt-25">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" id="full-name" name="full-name" class="form-control" value=""
                                    placeholder="Full Name" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" id="email-address" name="email" class="form-control" value=""
                                    placeholder="Email Address" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" id="phone" name="phone" class="form-control" value=""
                                    placeholder="Phone Number" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="4"
                                    placeholder="Write Message" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group text-center mb-0">
                                <button type="submit" class="theme-btn">send Message <i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Contact Form End -->








        <!-- Footer Area Start -->
        <?php require_once "footer.php" ?>
        <!-- Footer Area End -->

    </div>
    <!--End pagewrapper-->

    <!-- Scripts -->
    <?php require_once "scripts.php" ?>
    <!-- Scripts -->

</body>

</html>