<?php /* important for not accessing this file directly */ die(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Upgrading Ninja Media Script</title>
	<style type="text/css">
		#main_bg{
			background: #131319;
			background-image: -webkit-gradient(radial,center 300px,0,center 300px,600,color-stop(0%,#4a4a57),color-stop(100%,#131319));
			background-image: -webkit-radial-gradient(center 300px,circle,#4a4a57,#131319 600px);
			background-image: -moz-radial-gradient(center 300px,circle,#4a4a57,#131319 600px);
			background-image: -o-radial-gradient(center 300px,circle,#4a4a57,#131319 600px);
			background-image: radial-gradient(center 300px,circle,#4a4a57,#131319 600px);
			height: 100%;
			min-height: 100%;
			position: fixed;
			left: 0px;
			top: 0px;
			display: block;
			width: 100%;
			z-index: 1;
		}
		body{
			
			font-family:'Helvetica Neue', Helvetica, Arial, Courier;
			color:#fff;
			text-align:center;
			height:100%;
			min-height:100%;
		}

		h2{
			margin-top:140px;
		}

		iframe{
			width:300px; 
			height:100px; 
			border:0px; 
			margin:0px auto; 
			display:block;
		}

		.spinner {
		  margin: 100px auto;
		  width: 32px;
		  height: 32px;
		  position: relative;
		}

		.cube1, .cube2 {
		  background-color: #fff;
		  width: 10px;
		  height: 10px;
		  position: absolute;
		  top: 0;
		  left: 0;
		  
		  -webkit-animation: cubemove 1.8s infinite ease-in-out;
		  animation: cubemove 1.8s infinite ease-in-out;
		}

		.cube2 {
		  -webkit-animation-delay: -0.9s;
		  animation-delay: -0.9s;
		}

		@-webkit-keyframes cubemove {
		  25% { -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5) }
		  50% { -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg) }
		  75% { -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5) }
		  100% { -webkit-transform: rotate(-360deg) }
		}

		@keyframes cubemove {
		  25% { 
		    transform: translateX(42px) rotate(-90deg) scale(0.5);
		    -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
		  } 50% { 
		    transform: translateX(42px) translateY(42px) rotate(-179deg);
		    -webkit-transform: translateX(42px) translateY(42px) rotate(-179deg);
		  } 50.1% { 
		    transform: translateX(42px) translateY(42px) rotate(-180deg);
		    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
		  } 75% { 
		    transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
		    -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
		  } 100% { 
		    transform: rotate(-360deg);
		    -webkit-transform: rotate(-360deg);
		  }
		}
	</style>
</head>
<body>
	<div id="main_bg">
		<h2>Upgrading Ninja Media Script</h2>
		<p>Moving Files, Unpacking Files, and Cleaning up Files...</p>
		<p>This may take about 5-10 minutes depending on your internet speed</p>
		<div class="spinner">
		  <div class="cube1"></div>
		  <div class="cube2"></div>
		</div>
		<iframe src="upgrade.php"></iframe>
	</div>
</body>
</html>