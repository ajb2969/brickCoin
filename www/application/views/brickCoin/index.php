<?php
/**
index.php
*/
?>
<!-- Intro -->
	<nav class="navbar navbar-expand-lg navbar-dark special-color">
	<div class="container">
    <a class="navbar-brand" href="#">BrickCoin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            
        </ul>
        <span class="navbar-text white-text">
            Welcome. &emsp;<a href="login">Log in / Sign up</a>
        </span>
    </div>
	</div>
	</nav>
<div class="container" >
	
    <div class="row space" style="padding-top:7.5%;">
<!--
			<div class="col">
			</div>
			<div class="col-5 font_right">
				<a href="login">Log in bb</a>
			</div>
-->
    </div>
	<div class="row" style="padding-top:7.5%;">
		<div class="col">
            <img src="<?php echo base_url('img/big-logo.png');?>" width="400px"/>

		</div>
		<div class="col">
			<h1 class="h1-responsive">BrickCoin - an efficient digital currency designed for universities.</h1>
		</div>
	</div>

	<!-- Benefits -->
	<div class="benefits">
		<div class="row" style="padding-bottom:7.5%;">
			<div class="col-5">
				<h2>Get rid of paper recipts and get ready for secure transactions.</h2>
				<br/>
				<p>
                    Our Blockchain application scrapes transactions every 60 seconds. Allowing for secure transaction validation, and permanent digital receipt storage. Meaning more paper in your pocket and less in a landfill.</p>
			</div>
            <div class="col-2"></div>
			<div class="col-5">
                <img src="<?php echo base_url('img/img1.jpg');?>" width="500px"/>
			</div>
		</div>
        <hr/>
		<div class="row" style="padding-top:7.5%; padding-bottom:7.5%;">
			<div class="col-5">
                <img src="<?php echo base_url('img/img2.jpg');?>" width="500px"/>
			</div>
            <div class="col-2"></div>
			<div class="col-5 font_right">
				<h2>Peer-to-Peer transactions between users.</h2>
				<br/>
				<p>
                    The current university currency does not allow for trading between users. This is solved by BrickCoin's easy to access, flexible user interface that allows an individuals wallet to be discovered by other users using a readable username rather than a 42 digit alphanumeric walletID.
                </p>
			</div>
		</div>
        <hr/>
		<div class="row" style="padding-top:7.5%; padding-bottom: 4em;">
			<div class="col-5">
				<h2>Low operating cost for users. Passive revenue for distributer.</h2>
				<br/>
				<p>
                    Each BrickCoin transaction operates with a fee of $0.005 for a transaction of any size. If you trade $1 or $100 dollars you'll always pay half a penny. This low cost fee wouldn't be noticable to the average user and allows the university to stockpile BrickCoin for future events such as raffles or giveaways.
               </p>
			</div>
            <div class="col-2"></div>
			<div class="col-5">
                <img src="<?php echo base_url('img/img3.jpg');?>" width="500px"/>
			</div>
		</div>

	</div>

</div>
