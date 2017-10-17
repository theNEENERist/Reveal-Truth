<header>
    <div class="clearfix">
        <?php include 'logo.php'?>

        <form class="search" action="https://www.google.com/search" method="get">
            <input type="text" name="q" placeholder="Search the site" />
            <input type="submit" value="Search" />
            <input type="hidden" name="as_sitesearch" value="http://www.reveal-truth.com/" />
        </form>

        <div class="social">
            <a class="email" href="contact.php">Email</a>
            <a class="facebook" href="https://www.facebook.com/revealconferences/?fref=ts" Target="_blank">Facebook</a>
        </div>

        <nav>
            <ul>
                <li><a href="about.php">About</a></li>
                <li><a href="/#schedule">Schedule</a></li>
                <li><a href="https://www.eventbrite.com/e/reveal-a-conference-for-your-faith-tickets-28161612140" Target="_blank">Tickets</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
		
		<div id="mobile-nav">
			<button class="hamburger">&#9776;</button>
			<button class="cross">&#735;</button>
		</div>
		
		<div class="menu">
		  <ul>
			<li><a href="about.php">About</a></li>
			<li><a href="/#schedule">Schedule</a></li>
			<li><a href="https://www.eventbrite.com/e/reveal-a-conference-for-your-faith-tickets-28161612140" Target="_blank">Tickets</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		  </ul>
		</div> 
		
		<script type="text/javascript">
			$( ".cross" ).hide();
			$( ".menu" ).hide();
			$( ".hamburger" ).click(function() {
			$( ".menu" ).slideToggle( "slow", function() {
			$( ".hamburger" ).hide();
			$( ".cross" ).show();
			});
			});

			$( ".cross" ).click(function() {
			$( ".menu" ).slideToggle( "slow", function() {
			$( ".cross" ).hide();
			$( ".hamburger" ).show();
			});
			});
		</script>
    </div>
</header>