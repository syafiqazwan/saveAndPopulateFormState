<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test Populate</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="css/all.css" />
	<script type="text/javascript" src="js/jquery/jquery-1.2.1.pack.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.populate.js"></script>
	<script type="text/javascript" src="js/populate-page-functions.js"></script>

</head>
<body>

	<form name="reportForm" id="reportForm" method="POST">
		<input type="text" name="name1"> <br/>
		<input type="text" name="name2"> <br/>
		<input type="text" name="name3"> <br/>

		<input type="submit" name="submit" value="submit">


	</form>
	<button name="saveBtn" id="saveBtn">Save</button>

	<script type="text/javascript">
		$('#saveBtn').click(function() {
			var dataString = $('#reportForm').serialize();
			// var dataArray = $('#reportForm').serializeArray();
			// var dataJson = JSON.stringify(dataArray);
			// console.log("dataJson: ", dataJson);

			$.post('saveForm.php', dataString,
				function(data, status){
				alert("Response: " + data);
				// $('#return').html(data);
				console.log("Posted");
			});
		});
	</script>
	
</body>
</html>