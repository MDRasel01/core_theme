<?php

  global $redux_demo;

?>

<!--================Footer Area =================-->
   <footer class="footer_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="footer_top flex-column">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/logo.png" alt="">
                            </a>
                            <h4>Follow Me</h4>
                        </div>
                        <div class="footer_social">
                            <?php global $redux_demo; ?>
                            <a href="<?php echo $redux_demo['facebook'];?>"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $redux_demo['twitter'];?>"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo $redux_demo['Github'];?>"><i class="fa fa-gitgub"></i></a>
                            <a href="<?php echo $redux_demo['behance'];?>"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_bottom justify-content-center">
                <p class="col-lg-8 col-sm-12 footer-text">
                    <?php echo $redux_demo['copyright'];?>
                </p>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <?php wp_footer();?>
</body>
</html>