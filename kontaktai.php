<?php
	include 'header.php';
?>




	<!-- contacts-top -->
<!--<div class="box bgc-white bg-eff-macBook-table-2 d-box  b-parallax push-top-percents-10" id="contacts-top">-->
<!--	<div class="container box-lg">-->
<!--		<div class="row">-->
<!--			<div class="col-sm-12">-->
<!--				<span class="empty-column"></span>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!-- contacts-top END -->



<!-- box-5 -->
<!--<div class="box l-box bgc-white" id="box-5">-->
<!--	<div class="container box-lg">-->
<!--		<div class="row">-->
<!--			<div class="col-sm-12">-->
<!--				<h3 class="mg-md text-center ">-->
<!--					~Susitikime prie kavos puodelio ir aptarkime jūsų norus ir iššūkius-->
<!--				</h3>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!-- box-5 END -->

<!-- contacts -->
<div class="box l-box bgc-white  " id="contacts" xmlns="http://www.w3.org/1999/html">
	<div class="container box-xxl200">
		<div class="row">
			<div class="col-sm-12">
				<h1 class=" text-center  text-black sm-shadow mg-lg push-bottom-percents-3">
					<?php echo CONTACT; ?>
				</h1>
				<h3 class="mg-md text-center ">
					Working hours: from 09.00 to 18.00<br />
                    Phone: <a href="tel:<?php echo PHONE_NO_SPACES; ?>" ><?php echo PHONE_SHOW; ?></a><br />
                    Email: <a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a><br/>
                    KAUNAS
				</h3>
                <div class="push-top-percents-3">
                    <?php
                        include 'button-contact.php';
                    ?>
                </div>
			</div>
		</div>
	</div>
</div>
<!-- contacts END -->



<!-- contacts-bottom -->
<!--<div class="box l-box bgc-white" id="contacts-bottom">-->
<!--	<div class="container box-lg">-->
<!--		<div class="row">-->
<!--			<div class="col-sm-12">-->
<!--				<img src="img/_macbook_home_vestuves.jpg" class="img-responsive center-block" />-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!-- contacts-bottom END -->



	<!-- box-7 -->
<!--	<div class="box l-box bgc-white " id="box-7">-->
<!--		<div class="container box-lg">-->
<!--			<div class="row">-->
<!--				<div class="col-xs-12 col-md-8 col-md-offset-2">-->
<!--					<h3 class="text-center ">-->
<!--						Mums netrukdo viršvalandžiai, kai siekiam geriausio rezultato.-->
<!--					  <br/>Pirmiausioje vietoje - Kokybė-->
<!---->
<!--					</h3>-->
<!--					<p class="text-center">-->
<!--					</p>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
	<!-- box-7 END -->


<?php
//include 'row-hours-of-work.html';
	include 'footer.php';
?>