console.log("this is a test");

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

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
	var currView = $('#dashboardView').html();
	$('#dashboardView').fadeOut(200);
	var vars = getUrlVars();
	$.ajax({
		'type':'POST',
		'url': 'tradeView',
		'data': {'id': vars.id},
		success: function(data){
			console.log(data);
		}
	});
}

