<?php
	$user = $user[0];
?>
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

			        <p class="card-text">It's 4am and we're still going weak. Kev Dev realized his github was never set up correctly. 
			        </p> 

			    </div>
			    <!--/.Card content-->
			</div>
			<!--/.Card-->
		</div>
		<div class="col">
			<div class="row">
				<div class="col">
				 <h2>Balance: $<span id="userBalance"><?php echo number_format($user['amount'],2); ?></span></h2>
				</div>
				<div class="col-8"><h2>Last Transaction: - Filler Text -</h2></div>
			</div>
			<div class="row">
				<div class="col"><code>walletID: <?php echo $user['walletID']; ?></code></div>
			</div>
			<div class="row">
				<div style="width: 50px;"></div>
				<div class="col">
					<img src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo $user['walletID']; ?>&amp;size=300x300" alt="" title="" />
				</div>
			</div>
			<div class="row">
				<div class="col-8"></div>
				<div class="col dashBtn">
				<button class="btn btn-default" onclick="pay()">Pay</button>
				<button class="btn btn-default" onclick="trade()">Trade</button>
				<button class="btn btn-default" onclick="add()">Add Funds</button>
				</div>	
			</div>
		</div>
	</div>
