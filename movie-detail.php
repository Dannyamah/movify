<?php
include 'header.php';

$id = $_GET['id'];
$sql = "SELECT * from movies WHERE id = '$id' ";

// running the query against the database;
$get_movies = $conn->query($sql);

$movie = $get_movies->fetch_assoc();

?>

<!-- =============== START OF MOVIE DETAIL INTRO =============== -->
<section class="movie-detail-intro overlay-gradient ptb100" style="background: url(assets/images/other/movie-detail-bg.jpg);">
</section>
<!-- =============== END OF MOVIE DETAIL INTRO =============== -->



<!-- =============== START OF MOVIE DETAIL INTRO 2 =============== -->
<section class="movie-detail-intro2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="movie-poster">
                    <img src="assets/images/posters/poster-1.jpg" alt="">

                    <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                        <i class="fa fa-play"></i>
                    </a>
                </div>


                <div class="movie-details">
                    <h3 class="title"><?php echo $movie['title']; ?></h3>

                    <ul class="movie-subtext">
                        <li>PG-13</li>
                        <li>2h 32min</li>
                        <li>Action, Adventure, Fantasy</li>
                        <li>15 December 2017 (USA)</li>
                    </ul>

                    <a href="#" class="btn btn-main btn-effect">trailer</a>
                    <a href="#" class="btn btn-main btn-effect">watch later</a>
                    <a href="#" class="btn rate-movie"><i class="icon-heart"></i></a>

                    <div class="rating mt10">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <span><?php echo $movie['rating']; ?></span>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</section>
<!-- =============== End OF MOVIE DETAIL INTRO 2 =============== -->


<!-- =============== START OF MOVIE DETAIL MAIN SECTION =============== -->
<section class="movie-detail-main ptb100">
    <div class="container">

        <div class="row">
            <!-- Start of Movie Main -->
            <div class="col-lg-8 col-sm-12">
                <div class="inner pr50">

                    <!-- Storyline -->
                    <div class="storyline">
                        <h3 class="title">Storyline</h3>

                        <p><?php echo $movie['description']; ?></p>
                    </div>

                    <!-- Media -->
                    <div class="movie-media mt50">
                        <h3 class="title"> Photos & Videos</h3>

                        <ul class="image-gallery isotope">
                            <li class="element">
                                <a href="assets/images/blog/bloglist-1.jpg">
                                    <img src="assets/images/blog/bloglist-1.jpg" class="img-responsive" alt="">
                                </a>
                            </li>

                            <li class="element">
                                <a href="assets/images/blog/bloglist-2.jpg">
                                    <img src="assets/images/blog/bloglist-2.jpg" class="img-responsive" alt="">
                                </a>
                            </li>

                            <li class="element">
                                <a href="assets/images/other/home2-bg.jpg">
                                    <img src="assets/images/other/home2-bg.jpg" class="img-responsive" alt="">
                                </a>
                            </li>

                            <li class="element">
                                <a href="assets/images/blog/bloglist-2.jpg">
                                    <img src="assets/images/blog/bloglist-2.jpg" class="img-responsive" alt="">
                                </a>
                            </li>

                            <li class="element">
                                <a href="assets/images/blog/bloglist-1.jpg">
                                    <img src="assets/images/blog/bloglist-1.jpg" class="img-responsive" alt="">
                                </a>
                            </li>

                            <li class="element">
                                <a href="assets/images/blog/bloglist-3.jpg">
                                    <img src="assets/images/blog/bloglist-3.jpg" class="img-responsive" alt="">
                                </a>
                            </li>

                            <li class="element">
                                <a href="assets/images/blog/bloglist-1.jpg">
                                    <img src="assets/images/blog/bloglist-1.jpg" class="img-responsive" alt="">
                                </a>
                            </li>

                            <li class="element">
                                <a href="assets/images/other/landscape.jpg">
                                    <img src="assets/images/other/landscape.jpg" class="img-responsive" alt="">
                                </a>
                            </li>

                            <li class="element">
                                <a href="assets/images/other/home2-bg.jpg">
                                    <img src="assets/images/other/home2-bg.jpg" class="img-responsive" alt="">
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
            <!-- End of Movie Main -->


            <!-- Start of Sidebar -->
            <div class="col-lg-4 col-sm-12">
                <div class="sidebar">

                    <!-- Start of Details Widget -->
                    <aside class="widget widget-movie-details">
                        <h3 class="title">Details</h3>

                        <ul>
                            <li><strong>Release date: </strong>December 15, 2017</li>
                            <li><strong>Director: </strong><a href="#">Rian Johnson</a></li>
                            <li><strong>Budget: </strong>200 million USD</li>
                            <li><strong>Country: </strong>USA</li>
                            <li><strong>Language: </strong>English</li>
                            <li><strong>Production Co: </strong><a href="#">Lucasfilm</a></li>
                        </ul>
                    </aside>
                    <!-- End of Details Widget -->

                    <!-- Start of Details Widget -->
                    <aside class="widget widget-movie-cast">
                        <h3 class="title text-center">Book This Movie</h3>

                        
                        <form action="booking_action.php" method="POST">

                            <!-- contact result -->
                            <div id="contact-result"></div>
                            <!-- end of contact result -->

                            <!-- Form Group -->
                            <div class="form-group" style="display: none;">
                                <label for="">Movie ID</label>
                                <input class="form-control input-box" type="text" name="movie_id" value=" <?php echo $movie['id']; ?>" autocomplete="off">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group" style="display: none;" >
                                <label for="">User ID</label>
                                <input class="form-control input-box" type="text" name="user_id" autocomplete="off">
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-main btn-effect">Send Booking</button>
                            </div>
                        </form>


                    </aside>
                    <!-- End of Details Widget -->

                </div>
            </div>
            <!-- End of Sidebar -->
        </div>

    </div>
</section>
<!-- =============== END OF MOVIE DETAIL MAIN SECTION =============== -->



<!-- =============== START OF RECOMMENDED MOVIES SECTION =============== -->
<section class="recommended-movies bg-light ptb100">
    <div class="container">

        <!-- Start of row -->
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <h2 class="title">People who liked this also liked...</h2>
            </div>
        </div>
        <!-- End of row -->


        <!-- Start of Latest Movies Slider -->
        <div class="owl-carousel recommended-slider mt20">

            <!-- === Start of Sliding Item 1 === -->
            <div class="item">
                <!-- Start of Movie Box -->
                <div class="movie-box-1">

                    <!-- Start of Poster -->
                    <div class="poster">
                        <img src="assets/images/posters/poster-5.jpg" alt="">
                    </div>
                    <!-- End of Poster -->

                    <!-- Start of Buttons -->
                    <div class="buttons">
                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <!-- End of Buttons -->

                    <!-- Start of Movie Details -->
                    <div class="movie-details">
                        <h4 class="movie-title">
                            <a href="movie-detail.html">Daredevil</a>
                        </h4>
                        <span class="released">19 Apr 2015</span>
                    </div>
                    <!-- End of Movie Details -->

                    <!-- Start of Rating -->
                    <div class="stars">
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <span>8.7 / 10</span>
                    </div>
                    <!-- End of Rating -->

                </div>
                <!-- End of Movie Box -->
            </div>
            <!-- === End of Sliding Item 1 === -->


            <!-- === Start of Sliding Item 2 === -->
            <div class="item">
                <!-- Start of Movie Box -->
                <div class="movie-box-1">

                    <!-- Start of Poster -->
                    <div class="poster">
                        <img src="assets/images/posters/poster-6.jpg" alt="">
                    </div>
                    <!-- End of Poster -->

                    <!-- Start of Buttons -->
                    <div class="buttons">
                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <!-- End of Buttons -->

                    <!-- Start of Movie Details -->
                    <div class="movie-details">
                        <h4 class="movie-title">
                            <a href="movie-detail.html">Stranger Things</a>
                        </h4>
                        <span class="released">15 Jul 2016</span>
                    </div>
                    <!-- End of Movie Details -->

                    <!-- Start of Rating -->
                    <div class="stars">
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <span>9 / 10</span>
                    </div>
                    <!-- End of Rating -->

                </div>
                <!-- End of Movie Box -->
            </div>
            <!-- === End of Sliding Item 2 === -->


            <!-- === Start of Sliding Item 3 === -->
            <div class="item">
                <!-- Start of Movie Box -->
                <div class="movie-box-1">

                    <!-- Start of Poster -->
                    <div class="poster">
                        <img src="assets/images/posters/poster-7.jpg" alt="">
                    </div>
                    <!-- End of Poster -->

                    <!-- Start of Buttons -->
                    <div class="buttons">
                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <!-- End of Buttons -->

                    <!-- Start of Movie Details -->
                    <div class="movie-details">
                        <h4 class="movie-title">
                            <a href="movie-detail.html">Luke Cage</a>
                        </h4>
                        <span class="released">30 Sep 2016</span>
                    </div>
                    <!-- End of Movie Details -->

                    <!-- Start of Rating -->
                    <div class="stars">
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <span>7.6 / 10</span>
                    </div>
                    <!-- End of Rating -->

                </div>
                <!-- End of Movie Box -->
            </div>
            <!-- === End of Sliding Item 3 === -->


            <!-- === Start of Sliding Item 4 === -->
            <div class="item">
                <!-- Start of Movie Box -->
                <div class="movie-box-1">

                    <!-- Start of Poster -->
                    <div class="poster">
                        <img src="assets/images/posters/poster-8.jpg" alt="">
                    </div>
                    <!-- End of Poster -->

                    <!-- Start of Buttons -->
                    <div class="buttons">
                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <!-- End of Buttons -->

                    <!-- Start of Movie Details -->
                    <div class="movie-details">
                        <h4 class="movie-title">
                            <a href="movie-detail.html">The Flash</a>
                        </h4>
                        <span class="released">7 Oct 2014</span>
                    </div>
                    <!-- End of Movie Details -->

                    <!-- Start of Rating -->
                    <div class="stars">
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <span>8 / 10</span>
                    </div>
                    <!-- End of Rating -->

                </div>
                <!-- End of Movie Box -->
            </div>
            <!-- === End of Sliding Item 4 === -->


            <!-- === Start of Sliding Item 5 === -->
            <div class="item">
                <!-- Start of Movie Box -->
                <div class="movie-box-1">

                    <!-- Start of Poster -->
                    <div class="poster">
                        <img src="assets/images/posters/poster-5.jpg" alt="">
                    </div>
                    <!-- End of Poster -->

                    <!-- Start of Buttons -->
                    <div class="buttons">
                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <!-- End of Buttons -->

                    <!-- Start of Movie Details -->
                    <div class="movie-details">
                        <h4 class="movie-title">
                            <a href="movie-detail.html">Daredevil</a>
                        </h4>
                        <span class="released">19 Apr 2015</span>
                    </div>
                    <!-- End of Movie Details -->

                    <!-- Start of Rating -->
                    <div class="stars">
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <span>8.7 / 10</span>
                    </div>
                    <!-- End of Rating -->

                </div>
                <!-- End of Movie Box -->
            </div>
            <!-- === End of Sliding Item 5 === -->


            <!-- === Start of Sliding Item 6 === -->
            <div class="item">
                <!-- Start of Movie Box -->
                <div class="movie-box-1">

                    <!-- Start of Poster -->
                    <div class="poster">
                        <img src="assets/images/posters/poster-6.jpg" alt="">
                    </div>
                    <!-- End of Poster -->

                    <!-- Start of Buttons -->
                    <div class="buttons">
                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    <!-- End of Buttons -->

                    <!-- Start of Movie Details -->
                    <div class="movie-details">
                        <h4 class="movie-title">
                            <a href="movie-detail.html">Stranger Things</a>
                        </h4>
                        <span class="released">15 Jul 2016</span>
                    </div>
                    <!-- End of Movie Details -->

                    <!-- Start of Rating -->
                    <div class="stars">
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <span>9 / 10</span>
                    </div>
                    <!-- End of Rating -->

                </div>
                <!-- End of Movie Box -->
            </div>
            <!-- === End of Sliding Item 6 === -->

        </div>
        <!-- End of Latest Movies Slider -->

    </div>
</section>
<!-- =============== END OF RECOMMENDED MOVIES SECTION =============== -->

<?php
include 'footer.php';
?>