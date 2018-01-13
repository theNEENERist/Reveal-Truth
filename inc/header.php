<header>
    <div id="headerContent">
		<div id="logo" class="menuUp">
			<?php include 'logo.php'?>
			<div id="navToggle"><a href="#">Menu</a></div>
		</div>		
		
		<nav>
			<ul>
				<li>
					<a href="#">About <span class="toggle">Expand</span><span class="caret"></span></a>
					<nav>
						<ul>
							<li><a href="about.php">About the Conference</a></li>
							<li><a href="/#location">Location</a></li>
							<li><a href="commitee.php">Committee</a></li>
							<li><a href="partners.php">Conference Partners</a></li>
						</ul>
					</nav>
				</li>
				<li>
					<a href="#">Sessions <span class="toggle">Expand</span><span class="caret"></span></a>
					<nav>
						<ul>
							<li><a href="/#speakers">Featured Speakers</a></li>
							<li><a href="/#schedule">Schedule</a></li>
						</ul>
					</nav>
				</li>
				<li>
					<a href="#">Register <span class="toggle">Expand</span><span class="caret"></span></a>
					<nav>
						<ul>
							<li><a href="https://www.eventbrite.com/e/reveal-a-conference-for-your-faith-tickets-41687574658">Tickets</a></li>
							<li><a href="https://www.paypal.com/donate/?token=UjqaYREJsXgo_ZA04uoGMVwYUZxQwMSTCcjn9sH5OvONNaJBtq32w1WDV7xCHabU4WCmB0">Support the Conference</a></li>
						</ul>
					</nav>
				</li>
				<li><a href="events.php">Events</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>		

		<script type="text/javascript">
			$(document).ready(function() {
					$("#navToggle a").click(function(e){
						e.preventDefault();
						
						$("header > #headerContent > nav").slideToggle("medium");
						$("#logo").toggleClass("menuUp menuDown");
					});
					
					$(window).resize(function() {
						if($( window ).width() >= "900") {
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
						if($( window ).width() <= "900") {
							if($(this).siblings().size() > 0 ) {
								$(this).siblings().slideToggle("fast")
								$(this).children(".toggle").html($(this).children(".toggle").html() == 'close' ? 'expand' : 'close');
							}
						}
					});
				});
			
		</script>
   </div>
</header>