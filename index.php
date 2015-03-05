<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>DrupalCamp Tunisia - May 30th, 2015</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">
		
	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.html#home">DRUPALCAMP TN'15</a></h1>
			<i class="fa fa-times menu-close"></i>
			<a href="#home" class="smoothScroll">Home</a>
			<a href="#about" class="smoothScroll">About</a>
			<a href="#sponsors" class="smoothScroll">Sponsors</a>
			<a href="#team" class="smoothScroll">Organizers</a>
			<a href="#contact" class="smoothScroll">Contact</a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-dribbble"></i></a>
			<a href="#"><i class="fa fa-envelope"></i></a>
		</div>
		
		<!-- Menu button -->
		<div id="menuToggle"><i class="fa fa-bars"></i></div>
	</nav>

	<section id="home" name="home"></section>
	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 ribbon-wrapper">
					<a href="#"><img src="logo.png" alt="" /></a>
					<h1><span>DrupalCamp</span>
					<span>TUNIS 2015</span></h1>
					<h2 class="date">May 30th</h2>
				</div>
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/headerwrap -->
	
	<section id="about" name="about"></section>
	<div id="aboutwrap">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-sm-12 name-desc">
					<h2>WELCOME TO <br />THE FIRST DRUPALCAMP IN NORTH AFRICA</h2>
					<div class="name-zig"></div>
					
					<div class="col-md-12">
						<p>The Drupal Tunisia Community is growing every day. Join us to hear about events and get involved. At our events you can learn the latest development techniques and exchange ideas with other Drupalers. People of all abilities are welcome and attend, from non-technical users to experienced experts.</p>
						<p>
							<a href="#sponsors" class="smoothScroll btn btn-primary btn-lg">See our Organizing sponsors</a> 
							<a href="#team"  class="btn btn-primary btn-lg smoothScroll">Meet the Organizing team</a>
						</p>
					</div>
				</div><! --/col-lg-8-->
		
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /aboutwrap -->

	<! -- PORTFOLIO SECTION -->
	<?php
	  $sponsors = array('karizmatik','eyecatching','angrycactus','app4mob');
	  shuffle($sponsors);
	?>
	<section id="sponsors" name="sponsors"></section>
	<div id="portfoliowrap">
		<div class="container">
			<div class="row">
				<h1>OUR AMAZING SPONSORS</h1>
				<?php foreach ($sponsors as $sponsor): ?>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="#"><img class="img-responsive" src="assets/img/sponsors/<?php print $sponsor; ?>.png" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div><!-- col-lg-3 -->
				<?php endforeach; ?>
				<div class="col-sm-12">
					<p><a href="#" class="btn btn-primary btn-lg">I want to be a sponsor</a></p>
				</div>
			</div><!-- /row -->
		</div><! --/container -->
	</div><! --/Portfoliowrap -->
	<div id="teamwrap">
	<section id="team" name="team"></section>		
		<div class="container">
			<div class="row mt centered">
				<h1>MEET THE TEAM</h1>
				<div class="col-lg-3 proc">
					<img src="assets/img/pic-t1.jpg" alt="" />
					<h3>John Doe</h3>
					<h4>Super awesome company</h4>
					<p>Position</p>
					<ul class="social">
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
						<li><a href="#"><span class="fa fa-drupal"></span></a></li>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
					</ul>
				</div>
				<div class="col-lg-3 proc">
					<img src="assets/img/pic-t1.jpg" alt="" />
					<h3>John Doe</h3>
					<h4>Super awesome company</h4>
					<p>Position</p>
					<ul class="social">
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
						<li><a href="#"><span class="fa fa-drupal"></span></a></li>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
					</ul>
				</div>
				<div class="col-lg-3 proc">
					<img src="assets/img/pic-t1.jpg" alt="" />
					<h3>John Doe</h3>
					<h4>Super awesome company</h4>
					<p>Position</p>
					<ul class="social">
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
						<li><a href="#"><span class="fa fa-drupal"></span></a></li>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
					</ul>
				</div>	
				<div class="col-lg-3 proc">
					<img src="assets/img/pic-t1.jpg" alt="" />
					<h3>John Doe</h3>
					<h4>Super awesome company</h4>
					<p>Position</p>
					<ul class="social">
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
						<li><a href="#"><span class="fa fa-drupal"></span></a></li>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
					</ul>
				</div>
				<div class="col-lg-3 proc">
					<img src="assets/img/pic-t1.jpg" alt="" />
					<h3>John Doe</h3>
					<h4>Super awesome company</h4>
					<p>Position</p>
					<ul class="social">
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
						<li><a href="#"><span class="fa fa-drupal"></span></a></li>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
					</ul>
				</div>
				<div class="col-lg-3 proc">
					<img src="assets/img/pic-t1.jpg" alt="" />
					<h3>John Doe</h3>
					<h4>Super awesome company</h4>
					<p>Position</p>
					<ul class="social">
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
						<li><a href="#"><span class="fa fa-drupal"></span></a></li>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
					</ul>
				</div>
				<div class="col-lg-3 proc">
					<img src="assets/img/pic-t1.jpg" alt="" />
					<h3>John Doe</h3>
					<h4>Super awesome company</h4>
					<p>Position</p>
					<ul class="social">
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
						<li><a href="#"><span class="fa fa-drupal"></span></a></li>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
					</ul>
				</div>				
			</div><! --/row -->
		</div><! --/container -->
	</div>
	<div id="contactwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p>CONTACT ME RIGHT NOW!</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					<p>
						<small>5th Avenue, 987<br/>
						38399, New York,<br/>
						USA.</small>
					</p>
					<p>
						<small>Tel. 9888-4394<br/>
						Mail. Hello@coolfolks.com<br/>
					</p>
			
				</div>
				
				<div class="col-lg-6">
					<form role="form">
					  <div class="form-group">
					    <label for="exampleInputName1">Your Name</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					    <label for="exampleInputText1">Message</label>
					    <textarea class="form-control" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			
			</div><! --/row -->
		</div><!-- /container -->
	</div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="assets/js/classie.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/fancybox/jquery.fancybox.js"></script>    
	<script src="assets/js/main.js"></script>
		<script>
		$(function(){
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 40
			});
		});
		</script>
		
		<script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });
	   </script>

  </body>
</html>
