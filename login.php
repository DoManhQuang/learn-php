<?php

	function Kiemtradangnhap($username, $password)
	{
		if ($username == "admin" && $password == "12345") {
			return true;
		}
		return false;
	}
	function main()
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		if(Kiemtradangnhap($username, $password))
		{
			// header("Location: home.html");
			echo("true");
		}
		else
		{
			echo("false");
		}
	}
	main();
?>