<?php
include("conexao.php");

 if(!empty($_GET['search'])){
    
     $data= "%".trim($_GET['search'])."%";

    $mostrar="SELECT * FROM projectos WHERE categoria LIKE 'data'ORDER BY id ASC";
	     
	}

	
  else{
		   $mostrar="SELECT * FROM projectos ORDER BY id ASC";
}
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>REPOSITORIO</title>
	<link rel="stylesheet" href="css/projectos.css">
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
				<li><a href="REPOSITORIO.php">Home</a></li>
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
				<li><a href="projectoVisualizar.php"> Projectos</a></li>
				<li><a> Contacto</a></li>
				<li><a href="login.php"> Login</a></li>
				
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
        <a class='btn-sm btn-primary' href='#'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pen' viewBox='0 0 16 16'>
  <path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z'/>
</svg> 


<a class='btn-sm btn-danger' href='delectar.php?id=".$userData['id']."'>
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
</svg>
  	 </td>";

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

