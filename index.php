<!DOCTYPE HTML>

<html>
	<header>
		<title>I'm a placeholder</title>
	</header>
	<body>
	<h1>How you doing ?</h1>
	<?php
		echo shell_exec("date");
		echo $_ENV["BUILDPACK_URL"];
	?>
	</body>
</html>