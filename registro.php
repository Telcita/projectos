
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Registro</title>
	<link rel="stylesheet" href="css/registro.css">
        
</head>

<body>


<?php


include("conexao.php");

$dados= filter_input_array(INPUT_POST,FILTER_DEFAULT);
//var_dump($dados);
if (isset($dados['cadastrar'])){

	unset($dados['cadastrar']);
	//var_dump($dados);

	$query="INSERT INTO usuario(nome,email,senha,created) 
	      VALUES('".$dados['user']."','".$dados['email']."','".$dados['senha']."',Now())";

	$inserir=mysqli_query($con,$query);

	if(mysqli_insert_id($con)){
		//echo"Usuario cadastrado com sucesso";
		header("Location: login.php");
	}else{
		echo "Erro";
	}
}

?>


	<div class="main">
		
	
	<div class="navbar">
		<div class="icon">
			<h2 class="logo">Repo</h2>	
		</div>
		<div class="menu">
			<ul>
				<li><a>Home</a></li>
				<li><a>Sobre nos</a>
				<div class="dropDown">
					<ul>
						<li><a href="#"> Missao</a>  </li>
						<li><a href="#">Visao</a>  </li>
						<li><a href="#"> Valores</a>  </li>
					

				</div></li>
				<li><a>Area </a>
				<div class="dropDown">
					<ul>
						<li><a href="#"> Agricultura</a>  </li>
						<li><a href="#">Artes </a>  </li>
						<li><a href="#"> Tecnologia</a>  </li>
						<li><a href="#"> Engenharia</a>  </li>
						<li><a href="#"> Energias Renovaveis</a>  </li>
					</ul>

				</div></li>
				
				<li><a> Projectos</a></li>
				<li><a> Contacto</a></li>
				<li><a> Login</a></li>
				<li><a>Sign in</a></li>
			</ul>
			
		</div>
	</div>	


    <div class="entra">
	<div class="wrapper">
		<div class="form-box login">
			<h2>Registro</h2>
			<form action="" method="POST">
				<div class="input-box">
					<span class="icon2"><ion-icon name="person-circle-outline"></ion-icon></span>

					<input type="text" required name="user">
					<label>Username</label>	
				</div>

				<div class="input-box">
					<span class="icon2"><ion-icon name="mail"></ion-icon></span>
					<input type="email" required name="email">
					<label>Email</label>	
				</div>

				<div class="input-box">
					<span class="icon2"><ion-icon name="lock-closed"></ion-icon></span>
					<input type="Password" required name="senha">
					<label>Password</label>	
				</div>

				<div class="remember-forget">
					<label> <input type="checkbox">Concorda com os termos e condicoes </label>
					
				</div>

				<button type="submit" class="btn" name="cadastrar"> Registrar</button>

				<div class="registo">
					<p> Ja tens uma conta? Faca o 
						<a href="login.html" class="registro-link">Login</a></p>
				</div>
			</form>
			
		</div>
	</div>
		
		</div>
	
</div>

	
	
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
		

</body>
</html>