
$(document).ready(function() {
	$("#problema1").hide();
	$("#btn1").hide();
	$("#problema2").hide();
	$("#btn2").hide();
	$("#start").click(function(){
		$("#problema1").show(1000);
		$("#btn1").show(2000);
		$("#start").hide();
	})
	$("#btn1").click(function(){
		alert("value: " + $("#problema1 input[type='radio'][name='alternativas']:checked").val());
		$(this).hide(1000);
		$("#problema1").hide(1000);
		$("#problema2").show(1000);
		$("#btn2").show(2000);
		});
	$("#btn2").click(function(){
		alert("value: " + $("#problema2 input[type='radio'][name='alternativas2']:checked").val());
	});
	$("#play").click(function(){
		window.open("http://alvanista.com");
	});
});