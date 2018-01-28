<?php
	$user = $user[0];
?>


<nav class="navbar navbar-expand-lg navbar-dark special-color">
	<div class="container">
    <a class="navbar-brand" href="#">BrickCoin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">FAQ</a>
            </li>
        </ul>
        <span class="navbar-text white-text">
            Welcome, <span><?php echo $user['username']?>. &emsp; Wallet: $<?php echo number_format($user['amount'],2); ?></span>
        </span>
    </div>
	</div>
</nav>


<div class="container dashboardSpace card" id="dashboardView">
	<div class="row">
		<div class="col-3">
			<div class="card card-cascade wider reverse my-4">
			    <!--Card image-->
			    <div class="view overlay hm-white-slight">
			        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" class="img-fluid">
			        <a href="#!">
			            <div class="mask"></div>
			        </a>
			    </div>
			    <!--/Card image-->

			    <!--Card content-->
			    <div class="card-body text-center">
			        <!--Title-->
			        <h4 class="card-title"><strong>My adventure</strong></h4>
			        <h5 class="indigo-text"><strong>Photography</strong></h5>

			        <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
			        </p>

			    </div>
			    <!--/.Card content-->
			</div>
			<!--/.Card-->
		</div>
		<div class="col">
			<div class="row">
				<div class="col">
				 <h2>Balance: $<?php echo number_format($user['amount'],2); ?></h2>
				</div>
				<div class="col-8"><h2>Last Transaction: - Filler Text -</h2></div>
			</div>
			<div class="row">
				<div class="col"><code>walletID: <?php echo $user['walletID']; ?></code></div>
			</div>
			<div class="row">
				<div class="col-8"></div>
				<div class="col dashBtn">
				<button class="btn btn-default" onclick="pay()">Pay</button>
				<button class="btn btn-default" onclick="trade()">Trade</button>
				</div>	
			</div>
		</div>
	</div>



</div>