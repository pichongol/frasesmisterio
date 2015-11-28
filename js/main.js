$( document ).ready(function() {
	$(".submit-button").click(function(){
		login();
		return false;
	});

	$(".image-index").click(function(){
		login();
		return false;
	});
});


function login(){
	document.location.href = loginUrl;
}