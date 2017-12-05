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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109923695-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109923695-1');
</script>
</head> 
<body>
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
<?php include('header.php') ?>

<div id="pagebody">
	<div class="parallax" style="background-image:url('images/notes.JPG');">
		<h1>For Students</h1>\
	</div>
		<div id="employment">
			<p>Interested in the strategic communications field but don&#8217;t know where to start? Looking to get more involved in your University of St. Thomas education? Want an on-campus job that will actually give you valuable work experience?</p>
			<p>If you&#8217;re passionate about creativity, teamwork, and making meaningful connections with real-life community partners, TommComm is the perfect place for you. We hire students who want to apply their writing, design, and other communications skills to projects that will have a lasting impact for our clients.</p>
		</div>
		<div id="FAQ">
			<div id="accordion" class="accordion">
			<h3><a name="FAQ" href="#top">FAQ</h3>
	    		<div class="accordion-section">
	        		<a class="accordion-section-title" href="#accordion-1">Who can apply for TommComm positions?</a>
		        		<div id="accordion-1" class="accordion-section-content">
		            		<p>Any St. Thomas student is welcome to apply at TommComm! You don't have to be a COJO major, just a hard worker with a passion for advertising and communication.</p>
		        		</div>
	        		<a class="accordion-section-title" href="#accordion-2">When does the hiring process begin?</a>
		        		<div id="accordion-2" class="accordion-section-content">
		            		<p>TommComm hires the bulk of their new employees at the end of each semester, but will often hire throughout the year based on the projects we take on. Don&#8217;t be discouraged if you are not immediately accpeted. Keep your eyes open for an email from us anytime!</p>
		        		</div>
	        		<a class="accordion-section-title" href="#accordion-3">What positions are open?</a>
		        		<div id="accordion-3" class="accordion-section-content">
		            		<p>TommComm hires students in many different capacities, and might even create positions based on services a student might offer. Basic positions such as creative team member, PR manager, and assistant account manager are hired each semester, but specific positions (like a social media manager) may sometimes be available.</p>
		        		</div>
	        		<a class="accordion-section-title" href="#accordion-5">What are the hours and pay?</a>
		        		<div id="accordion-5" class="accordion-section-content">
		            		<p>Hours vary by position and project status. Many students work from home and have flexible schedules. You may work eight hours one week, and then three the next. Students are all paid $12 an hour.</p>
		        		</div>
	   		 		</div>
				</div>
			</div>
		<div id="apply">
			<h3> APPLY </h3>
				<p> Please download the following forms to see the list of positions at TommComm and the TommComm application. All applications should be brought to OEC 119H or emailed to info@tommcomm.org. Positions are subject to change, and applicants will be notified in case of changes.</p>
					<a href="JobDescrip.pdf"download="Job Descriptions"><p>Job Descriptions</p></a>
					<a href="TC-app-online.pdf"download="Application"><p>Application</p></a>
		</div>


<!-- 			<div id="contact_students">
				<h3><a name="contact" href="#top">CONTACT</a></h3>
					<p>Have a question about a project? Interested in applying for a TommComm position? Want to meet an employee in person? Send an email to tommiecommunications@gmail.com, and we&#8217;ll respond within 24 hours.</p>

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
				</div> -->
			</div>


<?php include('footer.php') ?>

	</div>
</html>
