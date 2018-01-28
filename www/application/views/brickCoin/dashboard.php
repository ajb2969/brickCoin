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
            Welcome, <span><?php echo $user['username']?>. &emsp; Wallet: <?php echo $user['amount']; ?></span>
        </span>
    </div>
	</div>
</nav>


<div class="container">

	dataaa
	<?php
	print_r($user);
	?>


</div>