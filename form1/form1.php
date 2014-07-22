<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssreset/cssreset-min.css">
	<link type="text/css" rel="stylesheet" href="clearfix.css"/>
	<link type="text/css" rel="stylesheet" href="stylesheetform1.css"/>
	<title>form</title>
</head>
<body>
	<div class="wrapper clearfix">
		<div class="before-form">
			<h1>BEFORE</h1>		
			<form id="before" action="processApplication.php" method="post">
				<h2>Contact This Dealer</h2>
				<span><a href=""><b>Infiniti of Couconut Creeck</b></a></span>
				<p>800-577-7300</p>
				<span><a href="">Seee All Dealer Inventory</a></span>
				<div class="formarea clearfix">
					<label for="first-name">First Name:</label>
					<input id="first-name" type="text">
					<label for="last-name">Last Name:</label>
				    <input id="last-name" type="text">
					<label for="address" class="address" type="text"> Street Address:</label>
					<input id="address">
					<label for="zip-code" class="zipcode">ZIP Code:</label>
					<input id="zip-code" type="text">
					<label for="email" class="email">Email:</label>
					<input id="email" type="text">
					<label for="phone" class="phone">Phone:</label>
					<input id="phone" type="text">
					<input id="phone" type="text">
					<input id="phone" type="text">
					<label for="comments" class="comments">Comments:</label>
					<textarea id="comments"></textarea>
					<div cass="clearfix">
						<label for="news" class="textnews"><input type="checkbox" id="news"> <p>Yes I'm interesten in receiving news and special offers from Kelley Blue Book </p></label>
					</div>	
					<input type="submit" value="SEND" class="button">
					<ul>
						<li><a href="">Privacy Policy</a><li>
						<li><a href="">Get your CARFAX report for this GMC</a></li>
						<li><a href="">Calculat your monthly payment</a></li>
						<li><a href="">Get your credit score now</a></li>
						<li><a href="">Get a free insurance quote for this GMC</a></li>
					</ul>	
				</div>
			</form>
		</div>
		<div class="after-form clearfix">
			<h1>AFTER</h1>	
			<form id="after-form"  action="processApplication.php" method="post">
			<div class="clearfix">
				<div class="noteimage"></div>
				<h2>I'm Interested</h2>
			</div>
			<div class="clearfix to-data">
				<i class="italic">To:</i>
				<span class="image"></span>
				<div class="infodest">
					<span>Lehmer's Buick Pontiac GMC</span>
					<p>1-866-607-2809</p>
					<span>...More Info</span>
				</div>
			</div>
			<div class="afterform-data">
				<label class="email-address" for="email-address" name="from"><i>From:</i></label>
				<input id="email-address" type="text" placeholder="my email address"> </br>
				<em>Your message:</em></br>
				<div class="client-message">
					<label for="name" name="name">Hello, my name is</label>
					<input id="first-name" type="text" placeholder="first name">
					<input id="last-name" type="text" placeholder="last name">
					<label>and I'm writing you today to learn more about the <b>2009 CHEVROLET SIVERADO 1500 LTlisted for $20,995.</b> <label>
					<label for="street-address" name="address">I live at</label>
					<input id="street-address" type="text" placeholder="my street address (optional)">
					<label for="zip" name="zip">in the</label>
					<input id="zip" type="text" placeholder="ZIP">
					<label>area and I would like to hear back from you and learn more about this vehicle.</label>
					<label for="phone-contact" name="phone-number"> Please call me back on </label>
					<input id="id-contact" type="text" placeholder="my phone number">
					<label>at your earliest convenience.</label>
				</div>
				<a href="" class="personalize">personalize this message</a>
				<b>Thank You</b></br>
				<div class="reciving-news">
					<label for="news" class="textnews"><input type="checkbox" id="news"><p>Yes I'm interesten in receiving news and special offers from Kelley Blue Book </p></label>
				</div>
				<div class="clearfix privacy">
					<a href="">Privacy Policy</a>
					<input type="submit" value="SEND THIS MESSAGE" class="button">
				</div>
			</div>
				<ul class="links">
					<li><a href="">View thefree CARFAX Report</a></li>
					<li><a href="">Calculat your monthly payment</a></li>
					<li><a href="">Get your credit score now</a></li>
					<li><a href="">Get a free insurance quote for this GMC</a></li>
				</ul>	
			</form>
		</div>
	</div>
</body>
</html>
