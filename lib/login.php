<?php

	echo "fuck it ";
	if(isset($_POST))
	{
		print_r($_POST);
	}
?>

<html>
<header><title>OH YEAH</title></header>
	<script type="text/javascript" src="../js/jquery-1.7.1.js"></script>

		<script type="text/javascript">
		
			function validate()
			{
				$.ajax
				({
					url:"login.php",
					type:"POST",
					data:"",
					dataType:"html",
					complete: function(data){alert()},
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
					<div id="content">
						<div id="login">
							<form method="post" action="">
								<table>
									<thead>
										<h1>Login</h1>
									</thead>
									<tbody>
										<tr>
										<th>Name:</th><td><input type="text" id="username"></td>
										</tr>
										<tr>
										<th>PassWord:</th><td><input type="password" id="password"></td>
										</tr>
										<tr >
										<td colspan="2" align="center"><button id="submit"  onclick="validate()">Click it</button><td>
										</tr>
										
									</tbody>
								</table>
								
								
								
							</form>
						</div>
					</div>
				<div id="result"></div>
			</div>
		
		</body>
</html>