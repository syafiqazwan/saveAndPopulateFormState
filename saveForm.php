<?php
	if(isset($_POST['name1']))
	{
		// $name1 = $_POST['name1'];
		// $name2 = $_POST['name2'];
		// $name3 = $_POST['name3'];
		$jsonData = json_encode($_POST);
		// echo "$name1, $name2, $name3 <br/>";

		$log = "saved data: $jsonData ".time().PHP_EOL;
		file_put_contents('log.txt', $log, FILE_APPEND);
		// echo "<script> alert('Posted'); </script>";
		echo "Success";
		// print_r($_POST);
	}
?>