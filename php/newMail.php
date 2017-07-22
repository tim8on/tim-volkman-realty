<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
                $headers = 'From: ' . $_POST["firstname"] . ' <' . $_POST["email"] . '>' . $_POST["additional"] . $_POST["goal"];
		if(mail("tim8on@gmail.com", $_POST["New lead for Tim!"], $_POST["Here's the information."], $headers))
                     echo "Mail successful!";
                else
                     echo "Mail unsuccessful";
	}
?>