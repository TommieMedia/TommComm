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

</head> 
<body>
<?php include('header.php') ?>
<div id="pagebody">
	<div class="parallax" style="background-image: url('images/stock-desk.jpeg');">
		<h1>Contact</h2>
	</div>
			<div id="static-contact">
					<p>Have a question about a project? Interested in applying for a TommComm position? Want to meet an employee in person? Send an email to info@tommcomm.org, and we will respond within 24 hours.</p>

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

<?php include('footer.php') ?>

	</div>
</html>
