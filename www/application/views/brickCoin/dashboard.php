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
                <a class="nav-link" href="#" onclick="dashHome()">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="team()">Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="faq()">FAQ</a>
            </li>
        </ul>
        <span class="navbar-text white-text">
            Welcome, <span><?php echo $user['username']?>. &emsp; Wallet: $<span id="updateAmount"><?php echo number_format($user['amount'],2); ?></span></span> &emsp; <span><a href='../brickCoin/'>Logout</a></span>
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
			        <img src="<?php echo base_url('img/big-logo.png');?>" class="img-fluid container">
			        <a href="#">
			            <div class="mask"></div>
			        </a>
			    </div>
			    <!--/Card image-->

			    <!--Card content-->
			    <div class="card-body text-center">
			        <!--Title-->
			        <h4 class="card-title"><strong>BrickCoin Update</strong></h4>
			        <h5 class="indigo-text"><strong>1.28.18</strong></h5>

			        <p class="card-text">It's 4am and we're still going strong. Kev Dev realized his github was never set up correctly. 
			        </p> 

			    </div>
			    <!--/.Card content-->
			</div>
			<!--/.Card-->
		</div>
		<div class="col container">
			<div class="row">
				<div class="col">
				<h2 id="userBalance" class="bal">Balance: $<?php echo number_format($user['amount'],2); ?></h2>
				<hr/>
				</div>
			</div>
			<div class="row">
				<div class="col flex">
					<div class="row">
						<img class="barcode" src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo $user['walletID']; ?>&amp;size=300x300" alt="" title="" />	
					</div>
					<div class="row spaceDash">
						<code class="text-center"><?php echo $user['walletID']; ?></code>	
					</div>
					<div class="row">
							<div class="col">
								<button class="btn btn-default btn-sm" onclick="pay()">Pay</button>
								<button class="btn btn-default btn-sm" onclick="trade()">Trade</button>
								<button class="btn btn-default btn-sm" onclick="add()">Add Funds</button>
							</div>
					</div>
				</div>
				<div class="col-7 activeDash">
					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th>Send/Recieve</th>
					      <th>Username</th>
					      <th>Amount</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>Send</td>
					      <td>Kev Dev</td>
					      <td>$12.50</td>
					    </tr>
					    <tr>
					      <td>Send</td>
					      <td>Alex</td>
					      <td>$7.13</td>
					    </tr>
					    <tr>
					      <td>Recieve</td>
					      <td>Eric</td>
					      <td>$20.31</td>
					    </tr>
					    <tr>
					      <td>Send</td>
					      <td>Emely</td>
					      <td>$3.24</td>
					    </tr>
					    <tr>
					      <td>Recieve</td>
					      <td>Sarah</td>
					      <td>$50.00</td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
			
			
		</div>
	</div>



</div>