<h2>Add Funds</h2>
<hr/>
<div class="container">
	<div class="row">
		<div class="col"></div>
		<div class="col-5">
			<div class="form">
		    <h2 class="text-center">Amount</h2>
		    <div class="md-form">
		        <i class="fa fa-lock prefix grey-text"></i>
		        <input type="text" id="amount" class="form-control" onkeypress="return isNumber(event)" onkeyup="checker(<?=$curr[0]['amount']?>)">
		        <label for="amount">Amount</label>
		    </div>

		    <div class="text-center">
		    	<?php
		    	echo "<button class='btn btn-default' onclick='addFunds(" . json_encode($curr[0]). ")'>Add Funds</button>";
		    	echo "<button class='btn btn-danger' onclick='cancel()'>Cancel</button>";
		    	?>
		        
		    </div>
		</div>


		</div>
		<div class="col"></div>
	</div>
</div>
