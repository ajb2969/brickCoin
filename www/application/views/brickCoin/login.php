<nav class="navbar navbar-expand-lg navbar-dark special-color">
    <div class="container">
    <a class="navbar-brand" href="../">BrickCoin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        
    </div>
    </div>
</nav>

<div class="container loginSpace">
	<div class="row">
		<div class="col"></div>
		<div class="col-6">   
			<!-- Could be a card -->
            <div class="card">
                <div class="container login">
                    <img class="loginLogo" src="<?php echo base_url('img/big-logo.png');?>" class="container">
                    <p class="h5 text-center mb-4">Sign in</p>
                    <div class="row">    
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                            <div class="md-form">
                                <input type="text" id="username" class="form-control">
                                <label for="username">Username</label>
                            </div>
                            <div class="md-form">
                                <input type="password" id="password" class="form-control">
                                <label for="password">Password</label>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>    
                    </div>
                    <div class="text-center">
                        <button class="btn btn-default" onclick="login();">Login</button>
                        <button class="btn btn-primary" onclick="create();">Create Account</button>
                    </div>
                </div>
<!-- Form login -->
            </div>
		</div>
		<div class="col"></div>
	</div>
</div>