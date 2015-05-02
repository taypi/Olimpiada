
$(document).ready(function() {
	$("#problema2").hide();
	$("button").click(function(){
		alert("value: " + $("#problema1 input[type='radio'][name='alternativas']:checked").val());
		$(this).hide(1000);
		$("#problema1").hide(1000);
		});
	$("#play").click(function(){
		window.open("http://alvanista.com");
	});
});