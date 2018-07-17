<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<style type="text/css">
		*{
		padding:0px;
		margin:0px;
		}
		.alinharcentro{
		margin:200px auto;
		width:350px;
		height:0px auto;
		border:solid 1px;
		}
		</style>
	</head>
	<body>
		
		<div class="alinharcentro" align="center">
			<form action="login.php" method="post">
		 <br>
		 <font size="6">Login</font>
		 <br>
		 <br>
		 <p>Usuário:  <input type="text" name="txtUsuario" size="30" maxlength="25"></p>
		 <br>
		 <p>Senha: <input type="password" name="txtSenha" size="30" maxlength="25"></p>
		 <br>

		
		<input type="reset" value="Limpar" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                 
		<input type="submit" value="Entrar">
		 </p>
		 <br>
		     </form>
		</div>
		
	
	</body>	
</html>