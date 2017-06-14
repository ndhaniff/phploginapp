$(document).ready(() => {
	if($('input:text').is(':empty')){
		$('#btnsubmit').on('click',(e)=>{
		e.preventDefault();
		$('#alert').show('fade');
		});
	}
});

