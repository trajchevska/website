<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Katerina Trajchevska is a software engineer and CEO of Adeva. She advocates for remote work and leads many initiatives for women in tech.">
	
	<title>Katerina Trajchevska, Software Engineer and CEO at Adeva</title>

	<link rel="shortcut icon" href="/favicon.ico">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">
<div itemscope itemtype="http://schema.org/Person">
	<link itemprop="sameAs" href="https://www.linkedin.com/in/trajchevska/" />
	<link itemprop="sameAs" href="https://twitter.com/ktrajchevska" />
	<link itemprop="sameAs" href="https://github.com/trajchevska" />
	<link itemprop="sameAs" href="https://medium.com/@trajchevska" />
	<header id="header">
		<div id="head">
			<div id="logo" class="text-center">
				<img class="img-circle" src="assets/images/profile.jpg" alt="Katerina Trajchevska">
				<h1 class="title" itemprop="name">Katerina Trajchevska</h1>
				<h2 class="tagline" itemprop="hasOccupation">Software engineer, remote work advocate and CEO at Adeva</h2>
			</div>
			<p class="social">
				<a href="https://www.linkedin.com/in/trajchevska/" target="_blank"><i class="fa fa-linkedin fa-2"></i></a>
				<a href="https://twitter.com/ktrajchevska" target="_blank"><i class="fa fa-twitter fa-2"></i></a>
				<a href="https://github.com/trajchevska" target="_blank"><i class="fa fa-github fa-2"></i></a>
				<a href="https://medium.com/@trajchevska" target="_blank" style="font-size: 18px;"><i class="fa fa-medium fa-2"></i></a>
			</p>
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
						<li><a href="#speeches">Conferences &amp; Hackathons</a></li>
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
					<p class="lead text-center text-muted">Hey, there! 👋 I am Katerina, software engineer and co-founder of <a href="https://adevait.com">Adeva</a>.</p> 
					<p class="lead text-center text-muted" itemprop="disambiguatingDescription">Leading Adeva for over {{$adevaLeadYears}} years, I've had the chance to collaborate with various companies from early stage startups to Fortune 500. That helped me gain valuable insights in many different industries, work with passionate teams and innovate.</p>

					<p class="lead text-center text-muted"></p>
				</div>
			</div> <!-- / section -->

			<div class="row section recentworks topspace" id="projects">
				
				<h2 class="section-title"><span>Projects &amp; Initiatives</span></h2>
				<div class="col-md-10 col-md-offset-1 section-intro">

					<p class="text-center">I stand for equality, inclusion, and giving back to the community, both personally and professionally. In my free time, I like to take part of women in tech movements, contribute to the local tech community, and volunteer as a mentor in different programs.</p>
					<p class="text-center">Some projects and initiatives I'm currently part of 👇</p>
				</div>
				
				<div class="thumbnails recentworks row">
					
					@foreach($projects as $project)
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<a class="thumbnail" href="{{$project['href']}}" target="_blank">
							<span class="img">
								<img src="/assets/images/{{$project['image']}}" alt="{{$project['name']}}">
								<span class="cover"><span class="more">See details &rarr;</span></span>
							</span>
							<span class="title">{{$project['name']}}</span>
						</a>
						<p class="details">{{$project['description']}}</p>
						<p class="details"><b>Involved as:</b> {{$project['involvement']}}</p>
						<span class="details">
							@foreach($project['tags'] as $key => $tag)
							@if($key != 0) | @endif
							<a>{{$tag}}</a>
							@endforeach
						</span>
					</div>
					@endforeach

				</div>

			</div>
			
			<div class="row section featured topspace" id="speeches">
				<h2 class="section-title"><span>Conferences &amp; Hackathons</span></h2>
				<div class="col-md-10 col-md-offset-1 section-intro">
					<p class="text-center">I am a tech enthusiast and I love sharing knowledge. And, I strongly believe in the cause of using technology for a greater good so I try to apply it wherever possible. Right now, that is by volunteering with workshops and speeches on conferences, as well as mentoring at various hackathons locally. Here are the ones I'm most proud of.</p>
				</div>
				<div class="row">
					@foreach($conferences as $conference)
					<div class="col-sm-6 col-md-3">
						<h3 class="text-center">{{$conference['name']}}</h3>
						<p>{{$conference['description']}}</p>
						<p class="text-center"><a href="{{$conference['href']}}" target="_blank" class="btn btn-action">Read more</a></p>
					</div>
					@endforeach
				</div>
			</div> <!-- / section -->
		
			<div class="row section recentworks topspace" id="insights">
				
				<h2 class="section-title"><span>Insights</span></h2>
				<div class="col-md-10 col-md-offset-1 section-intro">
					<p class="text-center">I am passionate about technology, remote work, and leadership - and I often like to share my opinions on those 👀</p>
				</div>
				
				<div class="thumbnails recentworks row">
					@foreach($insights as $insight)
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<a class="thumbnail" href="{{$insight['href']}}" target="_blank">
							<span class="img">
								<img src="assets/images/blog/{{$insight['image']}}" alt="{{$insight['name']}}">
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
						<p>Do you need advice on software or remote work? Would you like me to speak or mentor at your event? Or, you just want to get in touch?</p>
					</div>
					<div class="col-lg-4 text-right">
						<a href="mailto:trajchevska@adeva.co" class="btn btn-primary btn-lg">Say hi</a>
					</div>
				</div></div>
			</div> <!-- /section -->

		</div>	<!-- /container -->

	</main>
</div>
<footer id="underfooter">
	<div class="container">
		<div class="row">

			<div class="col-md-12 widget">
				<div class="widget-body">
					<p class="text-center">
						Copyright &copy; 2018, Katerina Trajchevska</p>
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
