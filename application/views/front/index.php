<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="CodeIgniter 3 blog script by Haritha Akella">
	<meta name="author"      content="Haritha Akella">
	
	<title><?php echo $this->config->item('site_name')?> - Haritha</title>

	<link rel="shortcut icon" href="<?php echo site_url('assets/imag/favicon.jpg')?>">
	
	<?php $this->view('front/_css')?>
	
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="<?php echo site_url('assets/imag/emp.jpg')?>" alt="">
			<span class="title">Kishtha Inc</span>
			<span class="tagline">The application economy is here. Is your business ready?<br>
				<a href>Connect now: admin@kishtha.com</a></span>
		</h1>
	</div>

	<?php $this->view('front/_menu')?>
	
</header>

<main id="main">

	<div class="container">
		
		<div class="row section topspace">
			<div class="col-md-12">
				<p class="lead text-center text-muted">change the rules & rule the changes </p>
			</div>
		</div> <!-- / section -->
		
		<div class="row section topspace">
			<div class="panel panel-cta"><div class="panel-body">
				<div class="col-lg-8">
					<p>You are logged in through linkedIn profile! <b>Wanna Logout?</b> </p>
				</div>
				<div class="col-lg-4 text-right">
					<a href="https://localhost/my_new_blog/login.php" class="btn btn-primary btn-lg">Logout from LinkedIn</a>
				</div>
			</div></div>
		</div> <!-- /section -->
		
		<div class="row section featured topspace">
			<h2 class="section-title"><span>DESCRIPTION</span></h2>
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">Kishtha DEV CENTER</h3>
					<p>Develop high quality applications faster by leveraging tools that create virtual integrations, enable parallel development and continuous testing. The Kishtha Devcenter portfolio has the tools to deliver innovation to market faster with higher quality..</p>
					<p class="text-center"><a href="http://localhost/my_new_blog/" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">Kishtha Intellicenter</h3>
					<p>This is the strategic engine for businesses looking to thrive in the application economy. The Kishtha Intellicenter portfolio has the software —enabling your business to manage the business of IT.make the right portfolio decisions </p>
					
					<p class="text-center"><a href="http://localhost/my_new_blog/" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">KISHTHA OPSCENTER</h3>
					<p> Deliver enterprise class customer experience and operational efficiency by utilizing 360-degree visibility of systems and infrastructure performance. The Kishtha Opscenter portfolio provides tools that manage and monitor performance and availability.</p>
					<p class="text-center"><a href="http://localhost/my_new_blog/" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">Kishtha securecenter</h3>
					<p>"Enable and protect the open enterprise" is the mantra of today’s application economy and identity is the new security perimeter. The kishtha Securecenter portfolio enables the open enterprise on any device,providing a superior customer experience.</p>
					<p class="text-center"><a href="http://localhost/my_new_blog/" class="btn btn-action">Read more</a></p>
				</div>
			</div>
		</div> <!-- / section -->
		
		<div class="blogs items">
			
			<h2 class="section-title"><span>Kishtha - Core Values</span></h2>
			
			<div class="thumbnails recentworks row">
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://localhost/my_new_blog/about">
						<span class="img">
							<img src="<?php echo site_url('assets/imag/wl.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Work Life balance</span>
					</a>
			
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://localhost/my_new_blog/about">
						<span class="img">
							<img src="<?php echo site_url('assets/imag/agility.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Agility</span>
					</a>
				
					<h4></h4>
					<p></p>
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://localhost/my_new_blog/about">
						<span class="img">
							<img src="<?php echo site_url('assets/imag/respect.png')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Respect for people</span>
					</a>
					
					<h4></h4>
					<p></p>
				</div>

			</div>
			</div> <!-- /section -->
			<div class="row section clients topspace">
			<h2 class="section-title"><span>BLOG TOPICS</span></h2>
			<div class="col-lg-12">
				<p>
					<img src="<?php echo site_url('assets/img/browser_types.jpg')?>" alt="">
					
				</p>
			</div>
		</div> <!-- /section -->
			
			<div class="news items">
			
			<h2 class="section-title"><span>FEATURED BLOGS</span></h2>
			
			<div class="thumbnails recentworks row">
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="https://hakella.com/blog">
						<span class="img">
							<img src="<?php echo site_url('assets/img/pop.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">POPULAR BLOG</span>
					</a>
					
					<h4></h4>
					<p></p>
				</div>

			
			
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="https://hakella.com/blog">
						<span class="img">
							<img src="<?php echo site_url('assets/img/car.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">BIG DATA</span>
					</a>
					
					<h4></h4>
					<p></p>
				</div>
				
				

		</div> <!-- /section -->
		<div class="news items">
			
			<h2 class="section-title"><span>NEWS</span></h2>
			
			<div class="thumbnails recentworks row">
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://www.ibnlive.com/blog/">
						<span class="img">
							<img src="<?php echo site_url('assets/img/cnnibn.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">CNN -IBN News</span>
					</a>
					
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="http://www.foxnews.com/">
						<span class="img">
							<img src="<?php echo site_url('assets/img/fox.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">FOX News</span>
					</a>
				
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="https://www.bbc.com/news/world">
						<span class="img">
							<img src="<?php echo site_url('assets/img/bbcnews.jpg')?>" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">BBC NEWS</span>
					</a>
					
					<h4></h4>
					<p></p>
				</div>

			</div>

		</div> <!-- /section -->

		<!--<div class="row section topspace">
			<div class="panel panel-cta"><div class="panel-body">
				<div class="col-lg-8">
					<p>A simple, easy way to build <b>Mobile Apps</b> which has support on various browsers mentioned below. </p>
				</div>
				<div class="col-lg-4 text-right">
					<a href="http://www.como.com/" class="btn btn-primary btn-lg">Conduit Platform</a>
				</div>
			</div></div>
		</div>  <!-- /section -->
		

		

	</div>	<!-- /container -->

</main>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Contact</h3>
				<div class="widget-body">
					<p>+234 23 9873237<br>
					
						<a href="mailto:#">harithaakella@u.boisestate.edu</a><br>
						<br>
						2501 E red cedar ln , boise , idaho 83716
					</p>	
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Follow Haritha</h3>
				<div class="widget-body">
					<p class="follow-me-icons">
						<a href="httpss://twitter.com/akella_haritha" class="twitter-follow-button" data-show-count="true">Follow @Haritha</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^https:/.test(d.location)?'https':'httpss';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Text widget</h3>
				<div class="widget-body">
						<p>This is sample blog created by me.. Do you like it? Then follow me on twitter</p>
					<p>Do you guys love blogging?? Why dont you join me? Let us rock..</p>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Form widget</h3>
				<div class="widget-body">
					<p>+234 23 9873237<br>
						<a href="mailto:#">harithaakella@u.boisestate.edu</a><br>
						<br>2501 E red cedar ln , boise , idaho 8371615
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
					<p>CodeIgniter 3 Blog created by <a href="httpss://www.facebook.com/akella.haritha" rel="follow">Haritha Akella</a></p>
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright &copy; <?php echo date('Y')?>, Haritha Akella<br> 
						Design: <a href="https://www.gettemplate.com" rel="designer">Initio by GetTemplate</a> </p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>


<?php $this->view('front/_js')?>
<script type='text/javascript'>
//<![CDATA[
function nocontext(e) {
var clickedTag = (e==null) ? event.srcElement.tagName : e.target.tagName;
if (clickedTag == "IMG") {
return false;
}
}
document.oncontextmenu = nocontext;
//]]>
</script>

</body>
</html>