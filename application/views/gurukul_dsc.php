<!DOCTYPE html>
<html lang="zxx">
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Group I Course Details | 5 Mantra Career Point</title>
    
    <!-- Links -->
    <?php require_once "links.php"; ?>
    <!-- Links -->
    
</head>
<body>
    <div class="page-wrapper">

        <!-- Navbar -->
        <?php require_once "navbar.php"; ?>
        <!-- Navbar -->
       
       
        <!-- Page Banner Start -->
        <section class="page-banner-area rel z-1 text-white text-center" style="background-image: url(<?php echo base_url() ?>assets/images/banner.jpg);">
            <div class="container">
                <div class="banner-inner rpt-10">
                    <h2 class="page-title wow fadeInUp delay-0-2s">Course Details</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">home</a></li>
                            <li class="breadcrumb-item active">Course Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <img class="circle-one" src="<?php echo base_url() ?>assets/images/shapes/circle-one.png" alt="Circle">
            <img class="circle-two" src="<?php echo base_url() ?>assets/images/shapes/circle-two.png" alt="Circle">
        </section>
        <!-- Page Banner End -->

       
        <!-- Course Details Start -->
        <section class="course-details-area pt-130 rpt-100">
            <div class="container">
                <div class="row large-gap">
                    <div class="col-lg-8">
                        <div class="course-details-content">
                            <div class="course-header">
                                <span class="category">Offline Course</span>
                            </div>
                            <h2>Gurukul – DSC</h2>

                            <div class="image mb-35">
                                <img src="<?php echo base_url() ?>assets/images/courses/Gurukul–DSC.png" alt="Course Details">
                            </div>
                            <ul class="author-date-enroll">
                                <li>
                                    <img src="<?php echo base_url() ?>assets/images/avatar.jpg" alt="Authro">
                                    <h6>Donald J. Miller</h6>
                                </li>
                                <li><i class="far fa-user"></i> 25 Enrolled</li>
                            </ul>
                            <?php require_once "list.php" ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <?php require_once "on-offline-list.php"; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Course Details End -->
       
       
        <!-- Recent Coach Start -->
        <?php require_once "courses-slides.php" ?>
        <!-- Recent Coach End -->
       
       
        <!-- Footer Area Start -->
        <?php require_once "footer.php"; ?>
        <!-- Footer Area End -->
        
    </div>
    <!--End pagewrapper-->
    
    
    <!-- scripts -->
    <?php require_once "scripts.php"; ?>
    <!-- scripts -->

</body>
</html>