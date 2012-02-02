<?php
	print_r($_POST);

?>


<!DOCTYPE html>
<html>

<header>
	<title>Home</title>
</header>
<script type="text/javascript" src="js/jquery-1.7.1.js"></script>

<script type="text/javascript">

	function validate()
	{
		$.ajax
		({
			url:"./lib/login.php",
			type:"POST",
			data:"",
			dataType:"html",
			complete: function(data){},
			success: function(data)
			{
				
				document.getElementById("result").innerHTML = "<h1> FUCKIN AWESOME</h1>"+data;
				//alert(data);
				$("#result").append(data);
			}
		});
	
		
	}


</script>
<body>
	<div id="main">
		<div id="banner">
			
		</div>
		<div id="login">
			<form method="post" action="">
				<input type="text" id="username">
				<input type="password" id="password">
				<button id="submit"  onclick="validate()">Click it</button>
			</form>
		</div>
		<div id="result"></div>
	</div>

</body>
</html>