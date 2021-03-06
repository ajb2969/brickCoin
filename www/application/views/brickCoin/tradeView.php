<h2>Trading</h2>
<hr/>
<div class="container">
<div class="row">
	<div class="col">
	<!-- Form -->
		<div class="form">
		    <h2 class="text-center">Sending</h2>
		    <div class="md-form">
		        <div class="btn-group">
    	<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 4em; width: 20em;">Select Recipient</button>
		    <div class="dropdown-menu">
		   		<?php
					foreach ($users as $user){
						echo "<a class='dropdown-item' href='#' onclick='populateRecip(" .  json_encode($user) . ")'>";
						echo "<h4>" . $user['username'] . "</h4>";
						echo "<p>Wallet:" . $user['walletID'] . "</p>";
						echo "</a>";
					}
				?>
		    </div>
		</div>
		    </div>

		    <div class="md-form">
		        <i class="fa fa-lock prefix grey-text"></i>
		        <input type="text" id="amount" class="form-control" onkeypress="return isNumber(event)" onkeyup="checker(<?=$curr[0]['amount']?>)">
		        <label for="amount">Amount</label>
		    </div>

		    <div class="text-center">
		    	<?php
		    	echo "<button class='btn btn-default' onclick='checkSend(" . json_encode($curr[0]). ")'>Send</button>";
		    	echo "<button class='btn btn-danger' onclick='cancel()'>Cancel</button>";
		    	?>
		        
		    </div>
		</div>
	</div>
	<div class="col-5">
		<h3>Recipient</h3>
		<hr/>
		<p>To: <span id="toRecip"></span> &emsp;&emsp;&emsp;&emsp; Phone: <span id="phoneRecip"></span></p>
		<p><code>walletID: <span id="walletRecip"></span></code></p>
		<h4 id="amountCheck" class="">Amount: <span id="amountRecip"></span></h4>
	</div>
</div>
</div>