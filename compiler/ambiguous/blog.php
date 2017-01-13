<? php


<!doctype html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LL1 Parser</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>

<body>
	<div id="page">
		<div id="header">
			<div>
				<h1>Assignment 2</h1>
				<h2>Question : Write An Algorithm For LL1 Parser input matching with the grammer using parsing table stack.</h2>
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
			Input: <br>
			   string ω <br>
			   parsing table M for grammar G<br>

			Output:<br>
			   If ω is in L(G) then left-most derivation of ω,<br>
			   error otherwise.<br>

			Initial State : $S on stack (with S being start symbol)
			   ω$ in the input buffer<br>

			SET ip to point the first symbol of ω$.<br>
			
			repeat<br>
			   let X be the top stack symbol and a the symbol pointed by ip.<br>
			
			   if X∈ Vt or $<br>
			      if X = a<br>
			         POP X and advance ip.<br>
			      else<br>
			         error()<br>
			      endif<br>
			      
			   else	/* X is non-terminal */<br>
			      if M[X,a] = X → Y1, Y2,... Yk <br>   
			         POP X<br>
			         PUSH Yk, Yk-1,... Y1 /* Y1 on top */<br>
			         Output the production X → Y1, Y2,... Yk <br>
			      else<br>
			         error()<br>
			      endif<br>
			   endif<br>
			until X = $	/* empty stack */<br>
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