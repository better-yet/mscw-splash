<?php
$links = array(
	'tickets' => 'http://ticketbud.com',
	'email' => 'info@mainestartupandcreateweek.com',
	'facebook' => 'https://www.facebook.com/mainestartupandcreateweek',
	'twitter' => 'https://twitter.com/MaineSCW',
	'youtube' => 'https://www.youtube.com/channel/UCGCfv9pQb26YnABmw-ISUMQ',
);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Maine Startup & Create Week</title>
		<link href="/assets/css/main.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="home">
		<nav id="utility">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						June 19–23, 2017 — Portland, ME
					</div>
					<div class="col-md-4 links">
						<a href="<?php echo $links['tickets']?>" target="_blank">Tickets</a>
						<div>
							<a href="mailto:<?php echo $links['email']?>" class="email"><img src="/assets/img/icons/email.svg"></a>
							<a href="<?php echo $links['facebook']?>" class="facebook"><img src="/assets/img/icons/facebook.svg"></a>
							<a href="<?php echo $links['twitter']?>" class="twitter"><img src="/assets/img/icons/twitter.svg"></a>
							<a href="<?php echo $links['youtube']?>" class="youtube"><img src="/assets/img/icons/youtube.svg"></a>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="row" id="logo">
				<div class="col-md-12">
					<h1>Maine Startup & Create Week</h1>
				</div>
			</div>
			<div class="row keynote">
				<div class="col-md-5 col-md-offset-2 photo">
					<img src="/assets/img/marvin-ammori-cropped.jpg" width="1333" height="1333" class="img-responsive">
				</div>
				<div class="col-md-3 bio">
					<div class="inner">
						<small>Keynote 1</small>
						<h3>Marvin Ammori</h3>
						<h4>General Counsel, Hyperloop One</h4>
						<p>Named among Politico's 50 visionaries for 2015, Fast Company's 100 Most Creative in Business in 2012, a Washingtonian Magazine "Tech Titan" in 2015, Marvin focuses on next-generation transportation law.</p>
						<p>“I lead the legal team and serve on the senior business leadership team at Hyperloop One, a company working to make ultra-highspeed ground transportation a reality.”</p>
					</div>
				</div>
			</div>
			<div class="row tagline">
				<div class="col-md-offset-2 col-md-8">
					<p>Join us to move your business forward, through expert insight, applied skill-building, and meaningful connections.</p>
				</div>
			</div>
			<div class="triangle">
				<div class="shape"></div>
				<div class="text">
					June 19–23<br>
					Portland ME
					<a href="<?php echo $links['tickets']?>" target="_blank">Reserve Tickets!</a>
				</div>
			</div>
		</div>
	</body>
</html>