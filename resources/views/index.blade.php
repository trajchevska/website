<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Katerina Trajchevska, Senior Software Engineer</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2" style="position:relative;z-index:-2">
		<div style="position: absolute;top:0;bottom:0;height:100%;width:100%;background: rgba(255,255,255,0.1);content:'';z-index: -1;"></div>
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="assets/images/profile.jpg" alt="">
			<span class="title">Katerina Trajchevska</span>
			<span class="tagline">Software engineer, tech volunteer,<br/> remote work advocate and co-founder of <a target="_blank" href="https://adeva.co">Adeva</a></span>
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li><a href="#about">About</a></li>
					<li><a href="#projects">Projects &amp; Initiatives</a></li>
					<li><a href="#speeches">Speeches</a></li>
					<li><a href="#insights">Insights</a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">
		
		<div class="row section topspace" id="about">
			<div class="col-md-12">
				<p class="lead text-center text-muted">Hey, there! 👋 I am Katerina, software engineer and entrepreneur.</p> 
				<p class="lead text-center text-muted">Leading <a href="https://adevait.com">Adeva</a> for over {{$adevaLeadYears}} years, I've had the chance to collaborate with various companies from early stage startups to Fortune 500. That helped me gain valuable insights in many different industries, work with passionate teams and innovate.</p>

				<p class="lead text-center text-muted"></p>
			</div>
		</div> <!-- / section -->

		<div class="row section recentworks topspace" id="projects">
			
			<h2 class="section-title"><span>Projects &amp; Initiatives</span></h2>

			<p class="text-center">I stand for equality, inclusion, and giving back to the community, both personally and professionally. Actively take part of initiatives for women in tech, contribute to the local tech community, and volunteer as a mentor in different programs and initiatives.</p>
			
			<div class="thumbnails recentworks row">
				
				@foreach($projects as $project)
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="{{$project['href']}}" target="_blank">
						<span class="img">
							<img src="/assets/images/{{$project['image']}}" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">{{$project['name']}}</span>
					</a>
					<p class="details">{{$project['description']}}</p>
					<span class="details">
						@foreach($project['tags'] as $key => $tag)
						@if($key != 0) | @endif
						<a href="">{{$tag}}</a>
						@endforeach
					</span>
					<h4></h4>
					<p></p>
				</div>
				@endforeach

			</div>

		</div>
		
		<div class="row section featured topspace" id="speeches">
			<h2 class="section-title"><span>Services</span></h2>
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">Custom website design</h3>
					<p>I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didn't eat for three weeks. i once heard a wise man say there are no perfect men.</p>
					<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">Wordpress integration</h3>
					<p>I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didn't eat for three weeks. i once heard a wise man say there are no perfect men.</p>
					<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">Application development</h3>
					<p>I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didn't eat for three weeks. i once heard a wise man say there are no perfect men.</p>
					<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">SEO &amp; SEM services</h3>
					<p>I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didn't eat for three weeks. i once heard a wise man say there are no perfect men.</p>
					<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
				</div>
			</div>
		</div> <!-- / section -->
	
		<div class="row section recentworks topspace" id="insights">
			
			<h2 class="section-title"><span>Insights</span></h2>
			
			<div class="thumbnails recentworks row">
				@foreach($insights as $insight)
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="{{$insight['href']}}" target="_blank">
						<span class="img">
							<img src="assets/images/blog/{{$insight['image']}}" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">{{$insight['name']}}</span>
					</a>
					<p class="details">{{$insight['description']}}</p>
					<span class="details">
						@foreach($insight['tags'] as $key => $tag)
						@if($key != 0) | @endif
						<a href="">{{$tag}}</a>
						@endforeach
					</span>
					<h4></h4>
					<p></p>
				</div>
				@endforeach
			</div>

		</div> <!-- /section -->

		<div class="row section topspace" id="contact">
			<div class="panel panel-cta"><div class="panel-body">
				<div class="col-lg-8">
					<p>A simple, nice-looking <b>call to action box</b>. Boxing is about respect. getting it for yourself, 
					and taking it away from the other guy. no, this is mount everest. </p>
				</div>
				<div class="col-lg-4 text-right">
					<a href="http://www.gettemplate.com/downloads/initio.zip " class="btn btn-primary btn-lg">Download template</a>
				</div>
			</div></div>
		</div> <!-- /section -->

		<div class="row section clients topspace">
			<h2 class="section-title"><span>Clients</span></h2>
			<div class="col-lg-12">
				<p>
					<img src="assets/images/sample_clients.png" alt="">
				</p>
			</div>
		</div> <!-- /section -->

	</div>	<!-- /container -->

</main>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Contact</h3>
				<div class="widget-body">
					<p>+234 23 9873237<br>
						<a href="mailto:#">some.email@somewhere.com</a><br>
						<br>
						234 Hidden Pond Road, Ashland City, TN 37015
					</p>	
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Follow me</h3>
				<div class="widget-body">
					<p class="follow-me-icons">
						<a href=""><i class="fa fa-twitter fa-2"></i></a>
						<a href=""><i class="fa fa-dribbble fa-2"></i></a>
						<a href=""><i class="fa fa-github fa-2"></i></a>
						<a href=""><i class="fa fa-facebook fa-2"></i></a>
					</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Text widget</h3>
				<div class="widget-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Form widget</h3>
				<div class="widget-body">
					<p>+234 23 9873237<br>
						<a href="mailto:#">some.email@somewhere.com</a><br>
						<br>
						234 Hidden Pond Road, Ashland City, TN 37015
					</p>	
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>

<footer id="underfooter">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 widget">
				<div class="widget-body">
					<p>234 Hidden Pond Road, Ashland City, TN 37015 </p>
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright &copy; 2014, Your awesome name here<br> 
						Design: <a href="http://www.gettemplate.com" rel="designer">Initio by GetTemplate</a> </p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>
