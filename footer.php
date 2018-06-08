            <!-- ScrollToTop Button -->
            <a class="box-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
            <!-- ScrollToTop Button END-->


            <!-- Footer - footer -->
            <div class="box bgc-anti-flash-white l-box b-divider  " id="footer">

                <!-- Navigation box -->
                <div class="container push-top-percents-3 hidden-xs">
                    <nav class="navbar row">
                        <div class="collapse navbar-collapse navbar-1">
                            <ul class="site-navigation nav navbar-nav ">
                                <li>
                                    <a class="text-center" id="pl-432" href="index.php"><?php echo HOME; ?></a>
                                </li>
                                <li>
                                    <a class="text-center" href="works.php"><?php echo WORKS; ?></a>
                                </li>
                                <li>
                                    <a class="text-center" href="paslaugos.php"><?php echo SERVICES; ?></a>
                                </li>
                                <li>
                                    <a class="text-center"  href="kontaktai.php"><?php echo CONTACT; ?></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- Navigation box END -->


                <div class="container box-sm push-bottom-percents-3 hidden-xs">

                    <div class="row">
                            <!--<div class="col-sm-12 push-percents-lft-5">-->
                                <!--<h3 class="mg-md">Kontaktai</h3>-->
                                <!--<span href="index.html" class="a-btn a-block">info@matomi.lt</span>-->
                                <!--<span  class="a-btn a-block">+ 370 630 52960</span>-->
                            <!--</div>-->
                        <div class="contacts ">
                            <span  class="a-btn "> <a href="mailto:<?php echo EMAIL; ?>" ><?php echo EMAIL; ?></a></span>&nbsp;&nbsp;&nbsp;&nbsp;<span   class="a-btn "><a href="tel:<?php echo PHONE_NO_SPACES; ?>" ><?php echo PHONE_SHOW; ?></a></span>
                        </div>


                        <!--<div class="col-sm-3 push-0">-->
                            <!--<h3 class="mg-md">Projektai</h3>-->
                            <!--<a href="/guliveriokeliones.php" class="a-btn a-block">GuliverioKeliones.lt</a>-->
                            <!--<a href="/coilover.php" class="a-btn a-block">Coilover.lt</a>-->
                        <!--</div>-->
                        <!--<div class="col-sm-3 push-0">-->
                            <!--<h3 class="mg-md empty-row"> &nbsp;-->
                            <!--</h3>-->
                            <!--<a href="/visit-neringa.php" class="a-btn a-block">Visit-Neringa.com</a>-->
                            <!--<a href="/kymsurgery.php" class="a-btn a-block">Kymsurgery.com</a>-->
                        <!--</div>-->
                        <!--<div class="col-sm-3 push-0">-->
                            <!--<h3 class="mg-md empty-row"> &nbsp;-->
                            <!--</h3>-->

                            <!--<a href="/izraeliokosmetika.php" class="a-btn a-block">IzraelioKosmetika.lt</a>-->
                        <!--</div>-->
                    </div>
                </div>

                <!--mobile-->
                <div class="container box-sm push-bottom-percents-5 hidden-lg hidden-md hidden-sm">
                    <div class="row">
                        <div class="col-sm-12 push-percents-lft-5">
                        <h3 class="mg-md text-center"><?php echo CONTACT; ?></h3>
                        <span href="index.html" class="a-btn a-block text-center"><a href="mailto:<?php echo EMAIL; ?>" ><?php echo EMAIL; ?> </a></span>
                        <span  class="a-btn a-block text-center"><a href="tel:<?php echo PHONE_NO_SPACES; ?>" ><?php echo PHONE_SHOW; ?></a></span>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Footer - footer END -->
        </div>
        <!-- Main container END -->

        <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="requestModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="requestModalLabel">Contact us</h4>
                    </div>
                    <div id="request_status"></div>
                    <div class="modal-body">
                        <form id="request_form" method="POST" action="request.php">
                            <div class="form-group">
                                <label for="recipient-email" class="control-label"><strong>Your email:</strong></label>
                                    <!--  pattern  is email not a  .ru                                 -->
                                <input type="email" class="form-control" id="recipient-email" name="email" required    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+[^(.ru)|^(.RU)$]"  title="Email can't  be registered in Russia  (eg.: xxx@xxx.ru). Sorry, we get a lot of spam from Russia"   autocomplete="on">
                                <!-- title="Email can't  be registered in Russia  (eg.: xxx@xxx.ru). Sorry, we get a lot of spam from Russia" -->
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Your name:</label>
                                <input type="text" class="form-control" id="recipient-name" name="name"  autocomplete="on">
                            </div>
                            <div class="form-group">
                                <label for="recipient-phone" class="control-label">Your Phone:</label>
                                <input type="text" class="form-control" id="recipient-phone" name="phone"   autocomplete="on">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label"><strong>Message:</strong></label>
                                <textarea class="form-control" id="message-text" name="message" rows="4" required    autocomplete="on"></textarea>
                            </div>

                        </form>
                    </div>
                            <!-- buttons -->
                            <div class="modal-footer">
                                <div id="request_alerts" class="text-left"></div>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button id="request_submit_button" type="button" class="btn btn-primary"><strong>Send message</strong></button>
                            </div>
                </div>
            </div>
        </div>

    </body>


    <!-- JS-->
        <script src="./js/jqfloat/jqfloat.min.js"></script>
        <script src="./js/custom.js"></script>
        <!-- <script src="./js/custom.min.js"></script> -->

        <!-- services page text effects -->
        <!--<link rel="stylesheet" type="text/css" href="text-effect.css">-->
    <!-- Google Analytics -->

    <!-- Google Analytics END -->

</html>
