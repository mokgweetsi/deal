<?php
session_start();
include('config.php');
//$sql=$con->query("select * from tblimages limit 4");
//$query=$con->query("select * from tblgallery limit 12");
//$dbquery=$con->query("select * from tblreferences limit 12");
$pagetype='aboutus';
$dbquery=$con->query("select PageTitle, Description from tblpages where PageName='$pagetype'");
?>
<!DOCTYPE html>
<html lang="en"><head>
<title>DEAL ACT INVESTMENT</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/slick.css" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="css/owl.transitions.css" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<!--link href="css/test_style.css" rel="stylesheet" type="text/css" media="all" /-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- header -->
<div class="banner-top">
			<div class="social-bnr-agileits">
				<ul class="social-icons3">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
									<!--li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li--> 
						</ul>
			</div>
			<!--div class="contact-bnr-w3-agile">
				<ul>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">dealactno1@gmail.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+267)72748428</li>		
					<li class="s-bar">
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="search" name="Search" placeholder=" " required=" " />
									<input type="submit" value="Search">
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div-->
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="#">DEAL <span> ACT </span><p class="logo_w3l_agile_caption">House plans,etc</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="index.php" class="menu__link"><i class="fa fa-home"></i>Home</a></li>
							<li class="menu__item"><a href="#aboutus" class="menu__link scroll"><i class="fa fa-user"></i>About</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll"><i class="fa fa-image"></i>Gallery</a></li>
							<li class="menu__item"><a href="#services" class="menu__link scroll"><i class="fa fa-file"></i>Services</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll"><i class="fa fa-comment"></i>Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
		<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>DEAL ACT</h4>
									<h3>We know what you love</h3>
										<p>Welcome to DEAL ACT INVESTMENT</p>
									<!--div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div-->
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>DEAL ACT</h4>
									<h3>Stay with friends & families</h3>
										<p>Come & enjoy precious moment with us</p>
									<!--div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div-->
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>DEAL ACT</h4>
								<h3>Do you want to live in a beautiful house?</h3>
										<p>Plan for your house today</p>
									<!--div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
										</div-->
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<a href="#aboutus" class="scroll">
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>
	</div>	
	<!-- //banner --> 
<!--//Header-->
<!-- //Modal1 -->
<!--div class="modal fade" id="myModal" tabindex="-1" role="dialog"-->
						<!-- Modal1 -->
							<!--div class="modal-dialog">
							<!-- Modal content>
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>SUN  <span>RISE</span></h4>
										<img src="images/1.jpg" alt=" " class="img-responsive">
										<h5>We know what you love</h5>
										<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
									</div>
								</div>
							</div>
						</div-->
<!-- //Modal1 -->
<div id="availability-agileits">
<div class="col-md-12 book-form-left-w3layouts">
	<a href=""><h2><marquee width="50%">DEAL ACT INVESTMENT</marquee></h2></a>
</div>

			<div class="clearfix"> </div>
</div>
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container" id="services">	
			<div class="agileits_banner_bottom">
				<h3><span></span>OUR SERVICES</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
                <li>
						<div class="w3_grid_effect">
							<span><img src="images/blueprint.png" width="128px"class="img-responsive" alt="/"></span>
							<h4 class="cbp-ig-title">HOUSE PLANS & DESIGN</h4>
							<span class="cbp-ig-category">DEAL ACT </span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
						<span><img src="images/estate.png" width="128px" class="img-responsive" alt="/"></span>
							<h4 class="cbp-ig-title">BUILDING & MAINTENANCE</h4>
							<span class="cbp-ig-category">DEAL ACT</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
						<span><img src="images/project.png" width="128px" class="img-responsive" alt="/"></span>
							<h4 class="cbp-ig-title">PROJECT MANAGEMENT</h4>
							<span class="cbp-ig-category">DEAL ACT</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span><img src="images/window.png" width="128px" class="img-responsive" alt="/"></span>
							<h4 class="cbp-ig-title">ALLUMNIUM DOORS & WINDOWS DESIGN</h4>
		                                           					<span class="cbp-ig-category">DEAL ACT</span>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->

<!-- about us -->
<?php 
$pagetype='aboutus';
$sql="select PageTitle,Description from tblpages where PageName='$pagetype'";
$query=$con->prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount()>0){
foreach($results as $result)
{?>
	<div class="w3l-visitors-agile" id="aboutus" >
		<div class="container">
                 <h3 class="title-w3-agileits title-black-wthree"><?php echo htmlentities($result->PageTitle);?></h3> 
		</div>
		<div class="w3layouts_work_grids">
			
					
							<div class="w3layouts_work_grid_left">
								<img src="images/wild1.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/aboutdeal.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">							
								<p><?php echo ($result->Description);?></p>
							</div>
                            </div>
							<div class="clearfix">
							<?php }}?>
		</div>	
	</div>
  <!--//about -->

<!-- Gallery -->
<section class="portfolio-w3ls clear" id="gallery">
		 <h3 class="title-w3-agileits title-black-wthree">Gallery</h3>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/just.jpg" class="swipebox"><img src="images/just.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>DEAL ACT</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/just1.jpg" class="swipebox"><img src="images/just1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>DEAL ACT</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/just2.jpg" class="swipebox"><img src="images/just2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>DEAL ACT</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/deal6.jpg" class="swipebox"><img src="images/deal6.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>DEAL ACT</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/deal11.jpg" class="swipebox"><img src="images/deal11.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>DEAL ACT</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/deal15.jpg" class="swipebox"><img src="images/deal15.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>DEAL ACT</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/deal4.jpg" class="swipebox"><img src="images/deal4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>DEAL ACT</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/deal9.jpg" class="swipebox"><img src="images/deal9.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>DEAL ACT</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
					<div class="col-md-3 gallery-grid gallery1">
					<a href="images/deal10.jpg" class="swipebox"><img src="images/deal10.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>DEAL ACT</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/deal7.jpg"class="swipebox"><img src="images/deal7.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>DEAL ACT</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/deal3.jpg" class="swipebox"><img src="images/deal3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>DEAL ACT</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/deal12.jpg" class="swipebox"><img src="images/deal12.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>DEAL ACT</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>

				<div class="clearfix"> </div>
</section>
<!-- //gallery -->
	

  <!--References -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>What our Customers <span>Experienced</span></h2>
    </div>
    <div class="row">
      <div id="testimonial-slider">
 <?php
		$tid=1;
		$sql="SELECT clientname,clientplace,image, PostingDate from tblreferences";
		$query=$con->prepare($sql);
		$query-> bindParam(':tid',$tid,PDO::PARAM_STR);
		$query->execute();
		$results=$query->fetchAll(PDO::FETCH_OBJ);
		$cnt=1;
		if($query->rowCount()>0){
			foreach($results as $result){?>


        <div class="testimonial-m">
 
          <div class="testimonial-content">
            <div class="testimonial-heading">
            <a href="#"><img src="admin/just/<?php echo htmlentities($result->image);?>" width="250px" class="img-responsive" alt="image"></a>
               <h4><p><b>Name :</b> <?php echo htmlentities($result->clientname);?></p></h4>
            <p><b>Location :</b> <?php echo htmlentities($result->clientplace);?></p>
           <ul>
           <li><b><i class="fa fa-calendar" aria-hidden="true"></i></b><?php echo htmlentities($result->PostingDate);?></li>
           </ul>
          </div>
        </div>
        </div>
        <?php }} ?>
        
       
  
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Reference--> 
<!-- contact -->
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Contact Us</h4>
				<p class="contact-agile2">Enquiry</p>
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" required >
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="contactno" id="phone" required >
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
							<p class="help-block"></p>
						
                    </div>
                    
                       <div class="control-group form-group">
                        
                            <label class="contact-p1">Message<span>*</span></label>
                            <textarea class="form-control" name="message" rows="4" required ></textarea>
					<p class="help-block"></p>
						
                    </div>
                    <input type="submit" name="send" value="Send Now" class="btn btn-primary">	
				</form>
				<?php
			if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
$query = $con->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $con->lastInsertId();
if($lastInsertId)
{
$msg="Message Sent!!! We will get back to you shortly";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Connect With Us</h4>
			<?php
			//$pagetype=$_GET['type'];
			$sql="SELECT Address, EmailId,ContactNo from tblcontactusinfo";
			$query=$con->prepare($sql);
			$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
			$query-> execute();
			$results=$query->fetchAll(PDO::FETCH_OBJ);
			$cnt=1;
			if($query->rowCount()>0)
				foreach ($results as $result) {?>
			<ul>
				<li>
					<p class="contact-agile1"><i class="fa fa-map-marker" aria-hidden="true"></i></p>
					<p class="contact-agile1"><?php echo htmlentities($result->Address);?></p>
				</li>
				<li>
					<p class="contact-agile1"><i class="fa fa-envelope-o" aria-hidden="true"></i></p>
					<p class="contact-agile1"
                    ><a href="mailto:dealactno1@gmail.com"><?php echo htmlentities($result->EmailId); ?></a></p>
				</li>
				<li>
					<p class="contact-agile1"><i class="fa fa-phone" aria-hidden="true"></i></p>
					<p class="contact-agile1"><a href="tel:26772748428"><?php echo htmlentities($result->ContactNo);?></a></div>
				</li>
			</ul><?php }?>
							</div>										
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact -->
			<div class="copy">
		        <p>© 2020 DEAL ACT . All Rights Reserved | Design by <a href="index.php">DEAL ACT</a> </p>
		    </div>
<!--/footer -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/interface.js"></script> 
<!--Switcher-->
<script src="switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="js/slick.min.js"></script> 
<script src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>

<!-- /contact form -->	
<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>


