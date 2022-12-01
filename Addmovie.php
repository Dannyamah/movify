<?php
include 'header.php'
?>

<!-- =============== START OF PAGE HEADER =============== -->
<section class="page-header overlay-gradient" style="background: url(assets/images/posters/movie-collection.jpg);">
    <div class="container">
        <div class="inner">
            <h2 class="title">Contact Us</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
            </ol>
        </div>
    </div>
</section>
<!-- =============== END OF PAGE HEADER =============== -->

<!-- =============== START OF MAIN =============== -->
<main class="contact-page ptb100">
    <div class="container">
        <div class="row">


            <!-- Start of Contact Details -->
            <div class="col-md-4 col-sm-12">
                <h3 class="title">Info</h3>

                <div class="details-wrapper">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

                    <ul class="contact-details">
                        <li>
                            <i class="icon-phone"></i>
                            <strong>Phone:</strong>
                            <span>(123) 123-456 </span>
                        </li>
                        <li>
                            <i class="icon-printer"></i>
                            <strong>Fax:</strong>
                            <span>(123) 123-456 </span>
                        </li>
                        <li>
                            <i class="icon-globe"></i>
                            <strong>Web:</strong>
                            <span><a href="#">www.movify.com</a></span>
                        </li>
                        <li>
                            <i class="icon-paper-plane"></i>
                            <strong>E-Mail:</strong>
                            <span><a href="#"><span class="__cf_email__" data-cfemail="0d64636b624d60627b646b74236e6260">[email&#160;protected]</span></a></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Start of Contact Details -->


            <!-- Start of Contact Form -->
            <div class="col-md-8 col-sm-12">
                <h3 class="title">Add Movies Form</h3>

                <!-- Start of Contact Form -->
                <form  action="Addmovie_action.php" method="POST">

                    <!-- contact result -->
                    <div id="contact-result"></div>
                    <!-- end of contact result -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <input class="form-control input-box" type="text" name="title" placeholder="Movie Title" autocomplete="off">
                    </div>

                    <!-- Form Group -->
                    <div class="form-group">
                        <input class="form-control input-box" type="text" name="description" placeholder="Movie Description" autocomplete="off">
                    </div>


                    <!-- Form Group -->
                    <div class="form-group">
                        <input class="form-control input-box" type="text" name="rating" placeholder="Movie rating" autocomplete="off">
                    </div>

                    <!-- Form Group -->
                   
                    <!-- Form Group -->
                    <div class="form-group text-center">
                        <button class="btn btn-main btn-effect">Send message</button>
                    </div>
                </form>
                <!-- End of Contact Form -->
            </div>
            <!-- Start of Contact Form -->

        </div>
    </div>
</main>
<!-- =============== END OF MAIN =============== -->

<?php
include 'footer.php'
?>