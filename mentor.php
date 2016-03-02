<?php

if($_POST["submit"]) {
    $recipient="kunenesbonakaliso@gmail.com";
    $subject="From Mentor Club Website";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!doctype html>
<html>
<head>
	<title>Mentor Club</title>
	<link rel="stylesheet" type="text/css" href="bootstylepaper.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/font-awesome-4.5.0/css/font-awesome.css">
	<style type="text/css">
	body{
		background-image: url("chev.png");
		background-size: 10%;
		background-repeat: repeat-y;
		text-align: center;
		font-family: calibri light;
	}
	.brand{
		background: rgb(0,128,0);
		color: white;
		font-size: 200%;
		padding: 0.2em;
	}
	.tagline{
		font-size: 150%;
		color: rgb(0,128,0);
	}
	h1{
		color: rgb(0,50,0);
		font-family: old english text mt;
	}
	p{
		text-align: left;
		margin-left: 12%;
		line-height: 150%;
		font-size: 160%;
		color: rgb(0,200,0);
	}
	header{
		margin-bottom: 4em;
	}
	input,textarea{
		font-size: 130%;
		border-radius:3px;
		margin: 5px;
		border: solid 1px rgb(0,255,0);
		padding-left: 1em;
	}
	button{
		background: rgb(0,128,0);
		color: white;
		font-weight: bold;
		border: none;
		font-size: 140%;
	}
	</style>
</head>
<body>
<header><span class="brand"><i class="fa fa-child"></i> Mentor Club</span><br>
<span class="tagline">Growing Together</span>
</header>
<p><i class="fa fa-child"></i> Share your life experiences with a young <b>person who admires you</b></p>
<p><i class="fa fa-child"></i> You will <b>certainly</b> change their life for the better</p>
<p><i class="fa fa-child"></i> There is no <b>greater pleasure</b> than that of empowering the next generation</p>
<p><i class="fa fa-child"></i> <b>Be part of a movement</b> that is a force for good in the world</p>
<br><br>
<h2>Our Focus</h2>
<p>We believe our mentees must start early on a good path, that is why we focus on the 12-13 year olds age group.</p>
<p>We know the value of a personal role-model in a young child.</p>
<p>We are targeting mentees in Alexandra, Johannesburg. We want to deliver help where it is needed the most first.</p>
<h2>Contribute</h2>
<h4>By being a mentor</h4>

<?=$thankYou ?>

    <form method="post" action="mentor.php">
        <input name="sender" placeholder="Your name"><br>

        <input name="senderEmail" placeholder="Your email"><br>

        <textarea rows="5" cols="20" name="message" placeholder="Any Questions? (optional)"></textarea><br>

        <button type="submit" name="submit"><i class="fa fa-envelope-o"></i> Send</button>
    </form>

<br>
</body>
</html>
