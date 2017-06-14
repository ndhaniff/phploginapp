$(document).ready(() => {
	$('#erroremail').hide();
	$('#errorpassword').hide();
	$('#erroremail1').hide();
	$('#errorpassword1').hide();

	var erroremail = false;
	var errorpassword = false;

	$('#email').on('keyup',() => {
		check_email();		
	});
	$('#password').on('keyup',() => {
		check_password();
	});

//form input lint
	function check_email(){
		let pattern = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
		if(pattern.test($('#email').val())){
		$('#erroremail').hide();
		$('#erroremail1').hide();
		}
		else{
			$('#erroremail').html('Email is not valid');
			$('#erroremail').show();
			$('#erroremail1').html('Email is not valid');
			$('#erroremail1').show();
			erroremail = true;	
		}
	}

	function check_password(){
		let pass_length = $('#password').val().length;
		if(pass_length < 8){
			$('#errorpassword').html('Tidak kurang dari 8 abjad');
			$('#errorpassword').show();
			$('#errorpassword1').html('Tidak kurang dari 8 abjad');
			$('#errorpassword1').show();
			errorpassword = true;
		}
		else{
			$('#errorpassword').hide();
			$('#errorpassword1').hide();
		}
	}
	

// tab functionality
	$('#login').hide();
	$('#registerform').hide();
	$('#logintab').on('click',()=>{
		$('#welcome').hide();
		$('#login').show();
		$('#registerform').hide();
		$(this).addClass('active');
		$('#home').removeClass('active')
		$('#registertab').removeClass('active')
	});
	$('#registertab').on('click',()=>{
		$('#welcome').hide();
		$('#registerform').show();
		$('#login').hide();
		$(this).addClass('active');
		$('#home').removeClass('active')
		$('#logintab').removeClass('active')
	});
	$('#home').on('click',()=>{
		$('#welcome').show();
		$('#register').hide();
		$('#login').hide();
		$(this).addClass('active');
		$('#logintab').removeClass('active')
		$('#registertab').removeClass('active')
	});
	$('#brand').on('click',()=>{
		$('#welcome').show();
		$('#registerform').hide();
		$('#login').hide();
	});
	$('#login1').on('click',()=>{
		$('#welcome').hide();
		$('#login').show();
		$('#registerform').hide();
	});
	$('#register1').on('click',()=>{
		$('#welcome').hide();
		$('#registerform').show();
		$('#login').hide();
	});
});

