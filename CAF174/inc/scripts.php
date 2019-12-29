<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/menu-highlighter.js"></script>
<script src="js/fullclip.js"></script>
<script>
		$("#subscription-form").submit(function(e) {
		var formData = $("#subscription-form").serialize();
		$.ajax({
			type: 'POST',
			url: "new.php",
			data: formData,
			success: function(data){
				$("#form-wrapper").html("Thank you for subscribing!");
			}
		});
		e.preventDefault();
	});
</script>