<header>
    
	<?php include 'logo.php'?>
		
		<input type="button" id="btnSearch" />
		
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
        </div>

        <div class="header clearfix">
			<nav>
				<ul>
					<li><a href="about.php">About</a></li>
					<li><a href="/#schedule">Schedule</a></li>
					<li><a href="https://www.eventbrite.com/e/reveal-a-conference-for-your-faith-tickets-28161612140" Target="_blank">Tickets</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</nav>
		
			<div class="menuIcon">
				<a href="#" id="myHref">
					<button class="hamburger">&#9776;</button>
					<button class="cross">&#735;</button>
					<span>Menu</span>
				</a>
			</div>
			<div class="menuMobile">
				<ul>
					<li><a href="about.php">About</a></li>
					<li><a href="/#schedule">Schedule</a></li>
					<li><a href="https://www.eventbrite.com/e/reveal-a-conference-for-your-faith-tickets-28161612140" Target="_blank">Tickets</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
		

		<script type="text/javascript">
			
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
    </div>
</header>