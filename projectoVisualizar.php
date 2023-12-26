<?php
include("conexao.php");

$pesquisar = $_POST['pesquisar'];
$result_pesquisar = " SELECT * FROM projectos WHERE categoria LIKE '%$pesquisar%' LIMIT 5";

$resultado_pesquisar = mysqli_query($con, $result_pesquisar);


while($rows_cursos = mysqli_fetch_array($resultado_pesquisar)){

   echo " categoria: ".$rows_cursos['categoria']." ";
	}
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>REPOSITORIO</title>
	<link rel="stylesheet" href="css/projectoVisualizar.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
</head>

<body>



<div class="main">
	
	
	<div class="navbar">
		<div class="icon">
			<h2 class="logo">Repo</h2>	
		</div>
		<div class="menu">
			<ul>
				<li><a>Home</a></li>
				<li ><a class="sobreN">Sobre nos</a>
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

				</div>
					
				</li>
				<li><a> Projectos</a></li>
				<li><a> Contacto</a></li>
				<li><a href="login.php"> Logout</a></li>
				
			</ul>
			
		</div>
	</div>

  	<fo>
	<div class="box-search">
	
			<input type="search" class="form-control w-25" placeholder="Pesquisar por categoria" id="pesquisar"> 

			<button  onclick= "searchData()" class="btn btn-primary">
				<i class="fa fa-search" aria-hidden="true"></i>
			</button>
		
			</div>
		


		
<section>
	
<div class="content">

		<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descrição</th>
      <th scope="col">Documento</th>
      <th scope="col">Data de submissão</th>
    </tr>
</thead>
  <tbody>
   <?php

      $result =mysqli_query($con,$mostrar);
	  while ($userData = mysqli_fetch_assoc($result)){
  	echo"<tr>";
  	echo"<td> ".$userData['id']." </td>";
  	echo"<td> ".$userData['titulo']." </td>";
  	echo"<td> ".$userData['descricao']." </td>";
    echo"<td> ".$userData['caminho']." </td>";
    echo"<td> ".$userData['dateupload']." </td>";
  	echo"<td> 
        <a class='btn-sm btn-primary' href='https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSDZBcZRcSqrclHpghHzrdCvMSPJhMWnXrjPNRTHjHRdGckjzKFcSFfWxSGKknDMdjXqScpg'> contactar
     </td>  
";
} 
      
   ?>
  </tbody>
</table>

	
			
	</div>
</section>

</div>


	
	<footer>
		<div class="footConteiner">
		<div class="socialIcons">
			<a href=""><i class="fa-brands fa-facebook"></i></a>
			<a href=""><i class="fa-brands fa-instagram"></i></a>
			<a href=""><i class="fa-brands fa-twitter"></i></a>
			<a href=""><i class="fa-brands fa-tiktok"></i></a>
			<a href=""><i class="fa-brands fa-youtube"></i></a>
		</div>

		<div class="footerNav">
			<ul>
				<li><a href=""></a>Home</li>
				<li><a href=""></a>Notícias</li>
				<li><a href=""></a>Sobre</li>
				<li><a href=""></a>Contacte-nos</li>

			</ul>
			
		</div>
		
	</div>	
	<div class="footerBottom">
			<p>Copyright &copy;2023; Designed by <span class="design">Télcia Hele</span></p>
		</div>


	</footer>

	

</body>

<script >
	var search= document.getElementById('pesquisar');

     search.addEventListener("keydown", function(event){
    if(event.key === "Enter"){
        searchData();
    }

     });


	function searchData() {
		window.location ='Projectos.php?search='+search.value;
		// body...
	}
</script>
	
</html>

