<html>
	<head>
		<title>Hello to You</title>
	</head>
	<body style="background-color: #ffffff;">
		<div align="center">
		
<?php

  if (!isset($_ENV["APP_VARIABLE"])) 
  {
    print "<h2>Hello, Brave One!</h2>\n";
    print "Hm, it appears that you forgot to initialize the <b>APP_VARIABLE</b> variable ...\n";
  }
  else
  {
    print "<h2>Hello, ".$_ENV["APP_VARIABLE"]."!</h2>\n";
    print "<h3>Congratulations! You made it! :)</h3>\n";
  }
?>
		</div>
	</body>
</html>
