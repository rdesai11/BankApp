<!DOCTYPE html>
<html>
<head>
	<title>Coming Soon</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			background-color: #f8f8f8;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}

		h1 {
			font-size: 48px;
			margin-bottom: 20px;
		}

		p {
			font-size: 24px;
			margin-bottom: 40px;
		}

		.countdown {
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 24px;
			margin-bottom: 40px;
		}

		.countdown span {
			margin: 0 10px;
		}

		@media only screen and (max-width: 768px) {
			h1 {
				font-size: 36px;
			}

			p {
				font-size: 18px;
			}

			.countdown {
				font-size: 18px;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Coming Soon</h1>
		<p>Our website is currently under construction. We're working hard to bring you something fantastic. Please check back soon!</p>
		<div class="countdown">
			<span id="days"></span>
			 days 
			<span id="hours"></span>
			 hours 
			<span id="minutes"></span>
			 minutes 
			<span id="seconds"></span>
			 seconds
		</div>
	</div>
	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("Jan 1, 2024 00:00:00").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

			// Get today's date and time
			var now = new Date().getTime();

			// Find the distance between now and the count down date
			var distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			// Display the result in the element with id="demo"
			document.getElementById("days").innerHTML = days;
			document.getElementById("hours").innerHTML = hours;
			document.getElementById("minutes").innerHTML = minutes;
			document.getElementById("seconds").innerHTML = seconds;

			// If the count down is finished, write some text
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("days").innerHTML = "0";
				document.getElementById("hours").innerHTML = "0";
				document.getElementById("minutes").innerHTML = "0";
				document.getElementById
