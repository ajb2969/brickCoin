console.log("this is a test");
var currviewBefore;

function login(){
	//get login information
	var username = $('#username').val();
	var password = $('#password').val();
	//ajax to hit db.
	$.ajax({
		'type':'POST',
		'url': 'loginCheck',
		'data':{
			'username':username,
			'pass': password
		},
		success: function(data){
			console.log(data);
			if (data != "1") {
				var curr = window.location.href+ "";
				curr = curr.replace('login','loadDashboard?id='+data);
				console.log(curr);
				window.location.href = curr;
			}
		}
	});
}

function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
	vars[key] = value;
	});
	return vars;
}


function trade(){
	currviewBefore = $('#dashboardView').html();
	$('#dashboardView').fadeOut(200);
	var vars = getUrlVars();
	$.ajax({
		'type':'POST',
		'url': 'tradeView',
		'data': {'id': vars.id},
		success: function(data){
			$('#dashboardView').html(data);
			$('#dashboardView').fadeIn(200);
		}
	});
}

function cancel(){
	$('#dashboardView').fadeOut(200);
	setTimeout(function(){
		$('#dashboardView').html(currviewBefore);
	},200);
	$('#dashboardView').fadeIn(200);
}

function populateRecip(user){
	console.log(user);
	$('#toRecip').html(user.username);
	$('#walletRecip').html(user.walletID);
	$('#phoneRecip').html(user.phoneNumber);
}


function isNumber(evt)
 {
 var charCode = (evt.which) ? evt.which : event.keyCode
 if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46)
    return false;
 return true;
 }

function checker(wallet){
	var request = $('#amount').val();
	$('#amountRecip').html(request);
	if (request > wallet) {
		console.log('yes');
		$('#amountCheck').addClass('red-text');
	}
	else if (request.indexOf(".") != request.lastIndexOf(".")) {
		$('#amountCheck').addClass('red-text');
	}
	else{
		console.log('no');
		$('#amountCheck').removeClass('red-text');
	}
}

function checkSend(user){
	if ($('#amountCheck').hasClass('red-text')) {
		//do nothing.
	}
	else{
		//user is the curr user.
		console.log($('#walletRecip').html());
		$('#dashboardView').fadeOut(200);
		$.ajax({
			'type': 'POST',
			'url': 'sendTransaction',
			'data':{
				'to' : $('#walletRecip').html(),
				'from' : user.walletID,
				'amount' : $('#amount').val()
			},
			success : function(data){
				$('#dashboardView').html(data);
				$('#updateAmount').html($('#userBalance').html());
				$('#dashboardView').fadeIn(200);
			}
		});
	}
}