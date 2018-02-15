$(document).ready(function() {

	$("#mail").submit(function() {
		$.ajax({
			type: "POST",
			url: "send.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			$(".confirm, .confirm_message").show();
			header('Refresh: 3; URL=index.php');
			$("#mail").trigger("reset");
		});
		return false;
	});
	
});