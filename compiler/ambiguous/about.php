<!Doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ambiguous</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<h1>Ambiguous</h1>
				<h2>Lets Testing Your Grammer Either Ambiguous or Unambiguous!</h2>
			</div>
		</div>
		<div id="body">
			<div class="header">
				<div>
					<h1>Give Input below!</h1>
					<center><h3>Warnning!! Dont use space when interring input.</h3></center>
				</div>
			</div>
			<div class="body">
				<br>
				<br>
				<br>
				<center>
				<form action="about.php" method="post">
				Grammer: <input type="text" name="name">
				<br>
				<br>
				<button type="submit">Run!</button>
				</form>
				<center>
					
					<br>
					
					
					<center>
					<div class="mydiv">
					<?php

						$mystring = $_POST['name'];
						echo  'Your Inputted Grammer:'. $mystring .'<br>';
						
						
						if ($mystring[0] == $mystring[2]) {
							  echo '<br> Grammer is Ambiguous <br>';
						} 
						else {
							  echo '<br> Grammer is Unambiguous <br> ';
						}
						
						if($mystring[3] == '+' || $mystring[4] == '+'){
							echo '<br> Grammer is Left Associative <br>';
						}
						elseif ($mystring[3] == '-' || $mystring[4] == '-') {
								echo '<br> Grammer is Left Associative <br>';
						}
						else{
							echo '<br> Grammer is Right Associative <br>';
						}
                            
					?>
					</div>
					</center>
					
					
					
			</div>
			<div class="footer">
				
				<div class="article">
					<h1></h1>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<div class="connect">
				
				</div>
				<p>&copy;2016 MD.JULHAS . All Rights Reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>