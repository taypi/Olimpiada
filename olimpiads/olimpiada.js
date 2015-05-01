
$(document).ready(function() {
	$("button").click(function(){
		alert("value: " + $("#problema1 input[type='radio'][name='alternativas']:checked").val());
		});
});