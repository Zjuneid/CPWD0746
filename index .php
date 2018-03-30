<!DOCTYPE html>
<html lang="en">
<head>
	<title>web page</title>
	
	<link rel="stylesheet" href="css/fonts.css" >
	<link rel="stylesheet" href="css/common-text.css" >
	<link rel="stylesheet" href="css/common-layout.css" >
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css" >

	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/base/jquery-ui.css" rel="stylesheet" />
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<Script type = "text/Javascript" src="js/modernizr-custom.js"></script>
	<Script type = "text/Javascript" src="js/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javaScript" src ="slick/slick.min.js"></script>
	<Script type = "text/Javascript" src="js/jquery-ui.min.js"></script>
	<Script type = "text/Javascript" src="js/jquery.cycle2.min.js"></script>
	
	<Script type = "text/Javascript" src="js/my-scripts.js"></script>
	
</head>	
	<body>
		
		<div class="wrapper">
			<header>
					<img src="images/plogo.png" alt="cpwd-logo" title="IMAGE" height="100" width="100">
					<div class="hgroup">
						<h1><b>PACE INSTITUTE SRI LANKA</b></h1>
						<h3><u>Professional Academic and Cognitive Excellence</u></h3>
					</div>
					<ul class="social">
						<li><a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
					</ul>	
					<form action="index.html">
						<input type="text" name="query"/>
						<input type="submit" value="search"/>
					</form>
			</header>
			<nav class="nav" >
				<a href="#home">HOME</a>
				<a href="#course-details">COURSE DETAILS</a>
				<a href="#UPCOMING-NEWS">UPCOMING NEWS</a>
				<a href="#events">EVENTS</a>	
				<a href="#REVIEWS">REVIEWS</a>
				<a href="#contact-us">CONTACT US</a>
			</nav>
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)"
				class="closebtn"
				onclick="closeNav()">&times;</a>

				<a href="#">HOME</a>
				<a href="#">COURSE DETAILS</a>
				<a href="#">UPCOMING NEWS</a>
				<a href="#">EVENTS</a>
				<a href="#">REVIEWS</a>
				<a href="#">CONTACT US</a>
			</div>
			<span  style="font-size:30px;
				 cursor:pointer"
				 onclick="openNav()" class="dropnav">==
			</span>	
			
			<main>	
				<div class="left-pane">
					<div class="news-block">
						<h4>News Block</h4>
						<ul>
							<li class="align-to-left">
								<img class="thumbnail" src="http://c.files.bbci.co.uk/16C26/production/_96322239_mediaitem96322238.jpg" alt="thumbnail"/>
								<h5><a href="http://www.bbc.co.uk/news/world-us-canada-4013690" target="_blank">Trump climate agreement: Rest of world rallies around Paris deal</a></h5>
								<p>Other big emitters of carbon dioxide restate their commitment to Paris as the US pulls out.</p>
								<time datetime="2017-06-02T17:01:58">Fri, 02 Jun 2017 17:01:58 GMT</time>
							</li>
							<li class="align-to-right">
								<img class="thumbnail"  src="http://c.files.bbci.co.uk/10E16/production/_96324196_rm.jpg" alt="thumbnail"/>
								<h5><a href="http://www.bbc.com/news/world-us-canada-40136908" target="_blank">Zimbabwe's President Robert Mugabe woos youth vote</a></h5>
								<p>The president holds first of 10 nationwide youth rallies ahead of next year's election.</p>
								<time datetime="2017-06-02T17:14:17">Fri, 02 Jun 2017 17:14:17 GMT</time>
							</li>	
							<li class="align-to-left">
								<img class="thumbnail" src="http://c.files.bbci.co.uk/12BC4/production/_96204767_1.jpg" alt="thumbnail">
								<h5><a href="http://www.bbc.co.uk/news/world-asia-39971843" target="_blank">New Zealand space launch is first from a private site</a></h5>
								<p>The first ever launch from New Zealand is a step towards making it cheaper to get cargo into space.</p>
								<time datetime="2017-06-02T17:20"> Fri, 02 Jun 2017 17:20:17 GMT</time>
							</li>
							<li class="align-to-left">
								<img class="thumbnail" src="http://c.files.bbci.co.uk/16C26/production/_96322239_mediaitem96322238.jpg" alt="thumbnail"/>
								<h5><a href="http://www.bbc.co.uk/news/world-us-canada-4013690" target="_blank">Trump climate agreement: Rest of world rallies around Paris deal</a></h5>
								<p>Other big emitters of carbon dioxide restate their commitment to Paris as the US pulls out.</p>
								<time datetime="2017-06-02T17:01:58">Fri, 02 Jun 2017 17:01:58 GMT</time>
							</li>
							<li class="align-to-right">
								<img class="thumbnail"  src="http://c.files.bbci.co.uk/10E16/production/_96324196_rm.jpg" alt="thumbnail"/>
								<h5><a href="http://www.bbc.com/news/world-us-canada-40136908" target="_blank">Zimbabwe's President Robert Mugabe woos youth vote</a></h5>
								<p>The president holds first of 10 nationwide youth rallies ahead of next year's election.</p>
								<time datetime="2017-06-02T17:14:17">Fri, 02 Jun 2017 17:14:17 GMT</time>
							</li>	
							<li class="align-to-left">
								<img class="thumbnail" src="http://c.files.bbci.co.uk/12BC4/production/_96204767_1.jpg" alt="thumbnail">
								<h5><a href="http://www.bbc.co.uk/news/world-asia-39971843" target="_blank">New Zealand space launch is first from a private site</a></h5>
								<p>The first ever launch from New Zealand is a step towards making it cheaper to get cargo into space.</p>
								<time datetime="2017-06-02T17:20"> Fri, 02 Jun 2017 17:20:17 GMT</time>
							</li>
						</ul>
					</div>
					<section class="upcoming-events">
						<h4> Upcoming Events</h4>
							
							<input type="date" name="dateofevent" id="dateofevent">
							<ul>
								<li>
									<img class="thumbnail"  src="http://c.files.bbci.co.uk/10E16/production/_96324196_rm.jpg" alt="thumbnail"/>
									<h5><a href="http://www.bbc.com/news/world-us-canada-40136908" target="_blank">Zimbabwe's President Robert Mugabe woos youth vote</a></h5>
									<p>The president holds first of 10 nationwide youth rallies ahead of next year's election.</p>
								</li>
								
								<li>
									<img class="thumbnail" src="http://c.files.bbci.co.uk/12BC4/production/_96204767_1.jpg" alt="thumbnail">
									<h5><a href="http://www.bbc.co.uk/news/world-asia-39971843" target="_blank">New Zealand space launch is first from a private site</a></h5>
									<p>The first ever launch from New Zealand is a step towards making it cheaper to get cargo into space.</p>
								</li>
							</ul>
						<a href=""  target="_blank">Read more</a>
					</section>
				</div>
					
				<div class="right-pane">
					<div class="main-content">	
						<h4>Main Content</h4>
						<img src="images/home_cpwd_logo.png" alt="cpwd-logo">
						<p>
							Do you ever browse the internet wondering how your favorite websites were built? Facebook, 
							Twitter, Amazon—they were all created by people who at one point in time didn’t know anything
							about coding. How did they obtain this knowledge?
							The Certified Professional in Web Development is a course which beneficial for the students.
							Who wants to excel in their career on web development in related with back-end and front-end.
							With this diversified world, professionals will be able to be a valubale corporate IT team member.
							Our course starts teaching basic coding principles and develops your coding skills in a variety of 
							languages from beginner through to advanced.
							The internet has changed the rules of doing business. More and more companies are migrating 
							online while many new, never before seen businesses are created every day thanks to the power 
							of this phenomenon. You know what that means? Higher demand for people just like you!
							But the problem for these businesses is that while demand is high, supply is short.
							Please don’t let a lack of knowledge stop you from having the career of your dreams,
							not when the knowledge you need is right here and is extremely affordable.
							It Doesn’t Matter Where You’re Starting From...You Can Do It!
						</p>
					</div>				
					
				
					
					<div id="tabs">
						<h4>Mini Gallery</h4>
						<ul>
							<li><a href="#tabs-1">Tab 1</a></li>
							<li><a href="#tabs-2">Tab 2</a></li>
							<li><a href="#tabs-3">Tab 3</a></li>
						</ul>
						<div id="tabs-1">
							<img class="slide" src="images/image.jpg" alt="pic">
							<img class="slide" src="images/image1.jpg" alt="pic1">
							<img class="slide" src="images/image2.jpg" alt="pic2">
							<img class="slide" src="images/image6.jpg" alt="pic3">
							<img class="slide" src="images/image7.jpg" alt="pic4">
							<img class="slide" src="images/image6.jpg" alt="pic6">
							<img class="slide" src="images/image7.jpg" alt="pic4">
						</div>
						 <div id="tabs-2">
							<img class="slide" src="images/image6.jpg" alt="pic6">
							<img class="slide" src="images/image7.jpg" alt="pic4">
							<img class="slide" src="images/image3.jpg" alt="pic3">
							<img class="slide" src="images/image4.jpg" alt="pic4">
							<img class="slide" src="images/image5.jpg" alt="pic5">
							<img class="slide" src="images/image1.jpg" alt="pic1">
							<img class="slide" src="images/image2.jpg" alt="pic2">
							
						 </div>
						<div id="tabs-3">
							<img class="slide" src="images/image6.jpg" alt="pic3">
							<img class="slide" src="images/image7.jpg" alt="pic4">
							<img class="slide" src="images/image8.jpg" alt="pic5">
							<img class="slide" src="images/image.jpg" alt="pic">
							<img class="slide" src="images/image1.jpg" alt="pic1">
							<img class="slide" src="images/image6.jpg" alt="pic6">
							<img class="slide" src="images/image7.jpg" alt="pic4">
						</div>
					</div>
					<ul class="features">
						<li><!-- feed-back -->
							<div id="feed-back">
								<h4>Feedback</h4>
									<span>Option 1:
									<input	type="radio" checked="checked" 	value="option-1"> (selected)</span>
									<span>Option 2:	
									<input type="radio" value="option-2">(selected)</span>
									<span>Option 3:	
									<input type="radio" value="option-3"> (indeterminate)</span> 
									<span>Option 4:	
									<input type="hidden" value="option-4"> (disabled)</span>
									<span>Option 5:	
									<input type="radio" value="option-5">(disabled and selected)</span>	 
									<span>Option 6:	
									<input type="radio" value="option-6"> (disabled indeterminate)</span>
									<span>A raw without a radio button<input type="radio"></span>
									<span><input type="submit" value="Submit"/></span>
									<span><input type="reset" value="Clear"/></span>
							</div>
						</li>

						<li><!-- google-map -->
							<div id="google-streetview">
								<h4> Google Street View </h4>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3815354230337!2d79.9383648149758!3d6.844781695053376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2506834f720f3%3A0x267787a7ef127bb8!2sPace+Institute!5e0!3m2!1sen!2slk!4v1496416734583"></iframe>
							</div>
						</li>
						
						<li><!-- mid year intake	 -->
							<div id="mid-year-intake">
									<h4> Mid-Year-Content</h4>	
									<div id="datepicker"></div>
										<script>
										$( "#datepicker" ).datepicker();
										</script>
									<!-- <iframe src="https://calendar.google.com/calendar/embed?src=ijra9pli4coa10890p2lehi054%40group.calendar.google.com&ctz=Asia/Colombo"></iframe> -->
							</div>
							
							<button type="submit" class="email" value="email"> Email address here </button>
							<button type="submit" class="apply" value="apply"> Apply </button>
						</li>
						
					</ul>
				</div>
			</main>	
			<footer class="footer" >
				<p>
					&copy; Copyright 2017. All right reserved.All Rights Reserved. Website Design,Development and hosting by eBEYONDS.
				</p>
				Contact information: 
					<a href="mailto:inzain1995@gmail.com">
					inzain1995@gmail.com</a>.
			</footer>

		</div>
	</body>
</html>



