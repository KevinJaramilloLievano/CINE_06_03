<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estiloActores.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" charset="utf-8"></script>
	<style>
		a{
			color: black;
		}
	</style>
</head>

<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center align-items-center flex-column a">
            <ul class="nav">
                    <a class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center" href="index.php"> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                      </svg> Home</a>

              <a class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center" href="peliculas.php"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                  <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                </svg>Peliculas </a>
    
                <a class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center" href="actores.php"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-video2" viewBox="0 0 16 16">
                    <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                    <path d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2ZM1 3a1 1 0 0 1 1-1h2v2H1V3Zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3H5Zm-4-2h3v2H2a1 1 0 0 1-1-1v-1Zm3-1H1V8h3v2Zm0-3H1V5h3v2Z"/>
                  </svg>Actores </a>

                <a class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center" href="directores.php"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-camera-reels-fill" viewBox="0 0 16 16">
                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"/>
                  </svg>Directores </a>

                <a class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center" href="acerca.php"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                  </svg>Acerca </a>

				  <form action="" method="post"><button type="submit" name="close" id="close" class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                    </svg>Exit </button></form>
            </ul>
          </nav>
    </header>

<body>
<?php  
    //echo"<script>alert('".$_SESSION['usuario']."');</script>";
    include("seguridad.php");
      if(isset($_POST['close'])){
            include("cerrarSesion.php");
    }  
  ?>
	<div class="miniespacio">
		<br><br><br><br>
	</div>
	<div class="container">
		<h2 class="letraNegra">
			<center>
			<div class="cuadrado">Lista de Actores</div>
           <style> .cuadrado{
           padding:5px;
           margin:5px;
           background-color: #a62424;
           box-shadow: 0px 0px 60px red;
           color: white; }
            </style>
			<br>
			<br>
			<a href="index.php" class="btn btn--1">Volver</a> 
			<a href="nuevoActor.php" class="btn btn--2">+Agregar P</a>
			<a href="" class="btn btn--3">Generar reporte</a>
			<a href="" class="btn btn--4">Respaldo general</a>
			<a href="actoresInabilitados.php" class="btn btn--4">Deshabilitados</a>
			<br>
			<br>
			</center>
		</h2>
		
		<?PHP 
			//variable que conecta con mysql
			//parámetros: servidor, usuario, contraseña, BD
			$conexion = new mysqli("localhost", "root", "", "peliculas");
			//Estructura para obtener todos los registros de la tabla actor
			$consulta = "SELECT * FROM actor WHERE estatus=1";
			//Variable que guarda el resultado del query
			$resultado = $conexion->query($consulta);

			require 'phpqrcode/qrlib.php';
			$dir = "temp/";

			if(!file_exists($dir))
				mkdir($dir);
		?>
			
		<table class="table table-light table-striped table-hover">
		  <thead>
		    <tr align="center">
			<th class="bg-primary text-white" scope="col">#</th>
			<th class="bg-secondary text-white" scope="col">Nombre actor</th>
			<th class="bg-success text-white" scope="col">Nacionalidad</th>
			<th class="bg-danger text-white" scope="col">Editar</th>
			<th class="bg-warning text-white" scope="col">Deshabilitar</th>
			<th class="bg-info text-white" scope="col">Borrado físico</th>
		    </tr>
		  </thead>
		  <tbody>
			<?PHP
		  	//Ciclo para recorrer el objeto y sus datos
			while($row = $resultado->fetch_assoc()){
			  	?>
			    <tr>
			      <th scope="row">
			      	<?PHP echo $row['idActor']; ?>
			      </th>
			      <td>
			      	<?PHP echo $row['nombre']; ?>

			      </td>
			      <td>
			      	<?PHP echo $row['nacionalidad']; ?>
			      </td>
                    <td>
						<a href="editarActor.php?id=<?php echo $row['idActor']; ?>">
			      		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
						<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
						<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
						</svg>
						</a>
			      	</a>
			      </td>

			      <td>
				  		<a href="borradoLogicoActores.php?id=<?php echo $row['idActor']; ?>">
			      		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-minus" viewBox="0 0 16 16">
  <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
  <path d="M6 7.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6z"/>
</svg>
			      	</a>
			      </td>


			      <td>
			      		<a href="borradoFisicoActores.php?id=<?php echo $row['idActor']; ?>">
			      		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-snapchat" viewBox="0 0 16 16">
						<path d="M15.98 11.93c-.068-.232-.405-.395-.405-.395l-.082-.044a6.462 6.462 0 0 1-1.466-.96 5.028 5.028 0 0 1-.85-.966 3.775 3.775 0 0 1-.47-.966c-.03-.126-.027-.173 0-.238a.36.36 0 0 1 .116-.13c.187-.132.49-.33.677-.448.16-.106.3-.194.381-.252.262-.184.439-.367.544-.568a.987.987 0 0 0 .048-.827c-.143-.377-.497-.605-.946-.605-.098 0-.204.01-.306.034a4.325 4.325 0 0 0-.707.228c-.014.007-.03-.007-.03-.02.02-.507.043-1.188-.011-1.834-.051-.585-.17-1.078-.368-1.507a4.053 4.053 0 0 0-.656-.983 3.989 3.989 0 0 0-1.037-.833C9.697.207 8.88 0 7.992 0c-.888 0-1.7.207-2.419.616a4.043 4.043 0 0 0-1.037.833c-.2.231-.46.551-.656.983-.198.429-.317.922-.368 1.507-.054.65-.034 1.276-.01 1.833 0 .017-.017.028-.03.02a5.195 5.195 0 0 0-.705-.227 1.34 1.34 0 0 0-.306-.034c-.449 0-.803.228-.946.605a.975.975 0 0 0 .048.827c.105.2.286.388.544.568.082.058.218.146.381.252.18.119.476.31.664.442a.434.434 0 0 1 .129.14c.027.068.03.115-.004.248-.057.194-.19.54-.466.956a4.99 4.99 0 0 1-.85.966 6.468 6.468 0 0 1-1.456.959c-.027.014-.058.027-.092.047 0 0-.333.17-.394.388-.092.323.153.626.405.79.411.265.915.408 1.204.486.081.02.153.04.22.061a.457.457 0 0 1 .191.112c.058.072.065.164.085.266.03.17.102.38.313.527.232.16.527.17.898.187.391.014.878.034 1.432.218.259.085.49.228.762.394.565.347 1.266.78 2.466.78 1.201 0 1.909-.436 2.477-.783.268-.163.5-.306.752-.391.554-.184 1.04-.2 1.432-.218.374-.014.666-.024.898-.187.224-.156.292-.388.32-.565.016-.085.027-.163.078-.228.04-.054.139-.091.183-.108l.228-.065c.293-.078.657-.17 1.099-.422.537-.3.575-.67.517-.854z"/>
						</svg>
			      	</a>	
			     </td>
			    </tr>
			    <?PHP
			}
			?>
		  </tbody>
		</table>
	</div>
</body>
</html>