<? php


<!doctype html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recursive Descendent Parser</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>

<body>
	<div id="page">
		<div id="header">
			<div>
				<h1>Assignment 3</h1>
				<h2>Question : Write An Algorithm for recursive descendent parser for S -> ( S ) | ε  and string <br> (( ))$</h2>
			</div>
		</div>
		<div id="body">
			<div class="header">
				<div>
					<h1>Algorithm is Given below!</h1>
				</div>
			</div>
			<div class="body">
			<pre>
			Our grammer : S -> ( S ) | ε 
			Our String : ( ( ) ) $
			
			In this Grammer we have only one Fuction that is S ( ) 
			because S doesnt Derive to any other function into the grammer.
			
			S() <br>
			{ <br>
				if( l == '(' )
				{
					match( '(' );
					S();
				}
				
				elseif( l == ')' )
				{
					match( ')' );
					S();
				}
				
				else
				{
					return;	
				}
			}
			
			Match ( Char t )
			{
				if( l == t )
				{
					l = getchar();
				}
				
				else 
				{
					printf( "Error" );
				}
			}
			
			Main()
			{
				S();
				
				if( l == '$' )
				{
					printf ( "Parsing Success" );
				}
			}
			
			</pre>
			</div>
			<div class="footer">
				
				<div class="article">
				
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
?>