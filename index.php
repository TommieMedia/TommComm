<!DOCTYPE html>
<html>
<head>
	<title>TommComm</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

	<link rel="icon" href="images/favicon.png">

	<link rel="stylesheet" href="flexslider.css" type="text/css">
	<link rel="stylesheet" href="style.css" />
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109923695-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109923695-1');
</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
  			acc[i].onclick = function() {
    			this.classList.toggle("active");
    			var panel = this.nextElementSibling;
    			if (panel.style.maxHeight){
      				panel.style.maxHeight = null;
    			} else {
      			panel.style.maxHeight = panel.scrollHeight + "px";
    			} 
  			}
		}
	</script>

	<script>
		$(document).ready(function() {
    		function close_accordion_section() {
        		$('.accordion .accordion-section-title').removeClass('active');
        		$('.accordion .accordion-section-content').slideUp(300).removeClass('open');
    		}
 
    		$('.accordion-section-title').click(function(e) {
        		// Grab current anchor value
        		var currentAttrValue = $(this).attr('href');
 
        		if($(e.target).is('.active')) {
            		close_accordion_section();
        		}else {
            		close_accordion_section();
 
            		// Add active class to section title
            		$(this).addClass('active');
            		// Open up the hidden content panel
            		$('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
        		}
        		e.preventDefault();
    		});
		});
	</script>

	<script>
		$(function() {
		  $('a[href*="#"]:not([href="#"]):not([href="#accordion-1"]):not([href="#accordion-2"]):not([href="#accordion-3"]):not([href="#accordion-4"]):not([href="#accordion-5"]):not([href="#accordion-6"])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});
	</script>

</head> 
<body>
<?php include('header.php') ?>

	<div id="pagebody">
	<div class="parallax">
			<h1>TOMMIE COMMUNICATIONS</h1>
			<h2>TODAY&#8217;S CREATIVITY</h2>
	</div>
		<div id="texthome">
			<h1>WELCOME TO TOMMCOMM</h1>
			<p>Tommie Communications is a full-service communications agency run by students at the University of St. Thomas. Looking for a fresh perspective on your organization&#8217;s communication? Want input on social media from the generation from the generation that knows it best? Whatever your goals are, TommComm can help you achieve them using today&#8217;s creativity.</p>
		</div>
<div id="homepagemiddle">
	<div id="homepageflex">
		<div class="homepagechild" style="background-color:#510c76;">
			<a href="story.php">
				<h1>Our<br />Story</h1>
			</a>
		</div><!--homepagechild-->
		<div class="homepagechild" style="background-color:#a97cca;">
			<a href="clients-intro.php">
				<h1>For<br />Clients</h1>
			</a>
		</div><!--homepagechild-->
		<div class="homepagechild" style="background-color:#764488;">
			<a href="students.php">
				<h1>For<br />Students</h1>
			</a>
		</div><!--homepagechild-->
	</div><!--homepageflex-->
</div><!--homepagecenter-->
		<div class="parallax">
			<div id="contact">
				<h2><a name="contact" href="#top">CONTACT</a></h2>
					<p>Have a question about a project? Interested in applying for a TommComm position? Want to meet an employee in person? Send an email to info@tommcomm.org, and we&#8217;ll respond within 24 hours.</p>

				<div id="form">
				<form action="https://formspree.io/tommiecommunications@gmail.com" method="post">
					<input type="hidden" name="_next" value="thanks.html" />
					<input type="text" name="_gotcha" style="display:none"/>
					<ul>
						<li>
							<input type="text" name="fullname" placeholder="Name" size="30" />
						</li>
						<br>
						<li>
							<input type="text" name="_replyto" placeholder="Email" size="30" />
						</li>
						<br>
						<li>	
							<input type="text" name="_subject" placeholder="Subject" size="30"/>
						</li>
						<br>
						<li>
							<textarea name="order" placeholder="Message"></textarea>
						</li>
						<br>
						<li>
							<input type="submit" value="Submit" class="button_form" />
						</li>
						<br>
					</ul>
				</form>
				</div>
			</div>
			</div>


	</div>
<?php include('footer.php') ?>
</html>
