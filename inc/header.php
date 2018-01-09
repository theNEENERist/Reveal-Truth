<header>
    <div id="headerContent">
		<div id="logo" class="menuUp">
			<?php include 'logo.php'?>
			<div id="navToggle"><a href="#">Menu</a></div>
			<!--<input type="button" id="btnSearch" />
			
			<div id="searchDiv">
				<form class="searchMobile" action="https://www.google.com/search" method="get">
					<input type="text" name="qMobile" placeholder="Search the site" />
					<input type="submit" value="Search" />
					<input type="hidden" name="as_sitesearchMobile" value="http://www.reveal-truth.com/" />
				</form>
			</div>
			
			<form class="search" action="https://www.google.com/search" method="get">
				<input type="text" name="q" placeholder="Search the site" />
				<input type="submit" value="Search" />
				<input type="hidden" name="as_sitesearch" value="http://www.reveal-truth.com/" />
			</form>

			<div class="social">
				<a class="email" href="contact.php">Email</a>
				<a class="facebook" href="https://www.facebook.com/revealconferences/?fref=ts" Target="_blank">Facebook</a>
			</div>-->

			<!--<div class="header clearfix">-->
				<!--<nav>
					<ul>
						<li><a href="about.php">About</a></li>
						<li><a href="/#schedule">Schedule</a></li>
						<li><a href="https://www.eventbrite.com/e/reveal-a-conference-for-your-faith-tickets-28161612140" Target="_blank">Tickets</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</nav>-->
		</div>
		
		
			<nav>
				<ul>
					<li>
						<a href="#">About <span class="toggle">Expand</span><span class="caret"></span></a>
						<nav>
							<ul>
								<li><a href="about.php">About the Conference</a></li>
								<li><a href="#location">Location</a></li>
								<li><a href="#">Committee</a></li>
								<li><a href="#">Conference Partners</a></li>
							</ul>
						</nav>
					</li>
					<li>
						<a href="#">Sessions <span class="toggle">Expand</span><span class="caret"></span></a>
						<nav>
							<ul>
								<li><a href="#speakers">Featured Speakers</a></li>
								<li><a href="/#schedule">Schedule</a></li>
							</ul>
						</nav>
					</li>
					<li>
						<a href="#">Register <span class="toggle">Expand</span><span class="caret"></span></a>
						<nav>
							<ul>
								<li><a href="#">Tickets</a></li>
								<li><a href="#">Support the Conference</a></li>
							</ul>
						</nav>
					</li>
					<li><a href="#">Events</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</nav>
		
			<!--<div class="menuIcon">
				<a href="#" id="myHref">
					<button class="hamburger">&#9776;</button>
					<button class="cross">&#735;</button>
					<span>Menu</span>
				</a>
			</div>
			<div class="menuMobile">
				<ul>
					<a href="about.php"><li>About</li></a>
					<a href="/#schedule"><li>Schedule</li></a>
					<a href="https://www.eventbrite.com/e/reveal-a-conference-for-your-faith-tickets-28161612140" Target="_blank"><li>Tickets</li></a>
					<a href="contact.php"><li>Contact Us</li></a>
				</ul>
			</div>-->
		

		<script type="text/javascript">
			$(document).ready(function() {
					$("#navToggle a").click(function(e){
						e.preventDefault();
						
						$("header > #headerContent > nav").slideToggle("medium");
						$("#logo").toggleClass("menuUp menuDown");
					});
					
					$(window).resize(function() {
						if($( window ).width() >= "600") {
							$("header > #headerContent > nav").css("display", "inline-block");
							
							if($("#logo").attr('class') == "menuDown") {
								$("#logo").toggleClass("menuUp menuDown");
							}
						}
						else {
							$("header > #headerContent > nav").css("display", "none");
						}
					});
					
					$("header > #headerContent > nav > ul > li > a").click(function(e) {
						if($( window ).width() <= "600") {
							if($(this).siblings().size() > 0 ) {
								$(this).siblings().slideToggle("fast")
								$(this).children(".toggle").html($(this).children(".toggle").html() == 'close' ? 'expand' : 'close');
							}
						}
					});
				});
				
				$("#myHref").on('click', function(e) {       
					$(".menuMobile").toggleClass("menuOpen");
					//$(".hamburger").toggle();
					//$(".cross").toggle();
					e.preventDefault();
				});
				
				$("#btnSearch").on('click', function(e) {
					$("#searchDiv").toggleClass("searchOpen");
					$(".searchMobile").toggleClass("searchOpen");
					$(".searchMobile input[type=text]").toggleClass("searchOpen");
					$(".searchMobile input[type=submit]").toggleClass("searchOpen");
				});
			
		</script>
   <!--</div>-->
</header>