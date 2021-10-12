<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Boostrap Filas y columnas</title>
	<!-- Latest compiled and minified CSS -->


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container"> <!-- la clase container en boostrap crea un container mas pequeño  -->
		<div class="row"> <!--La clase row en boostrap crea una fila. todo lo que este dentro de esta clase. quedara en la misma fila -->

			<div class="col-md-6"> <!-- la clase col-md-# indica el tamaño de la columna el tamaño maximo es 12 y dentro de una clase row no pueden superar 12   -->
				<div style="background: #e43;">
					Columna tamaño 6
				</div>
			</div>
			<div class="col-md-4">
				<div style="background: #ae43;">
					Columna tamaño 4
				</div>
			</div>
			<div class="col-md-2">
				<div style="background: #ff3;">
					Columna tamaño 2
				</div>
			</div>	
		</div> <!-- Aqui termina la clase row-->


		<br><br>
		<div class="row">
			<div class="col-md-12">
					<input type="text" name="" class="form-control">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-5">
					<input type="text" name="" class="form-control">
			</div>
						<div class="col-md-7">
					<input type="text" name="" class="form-control">
			</div>
		</div>


		<br><br>
		<div class="row">
			<div class="col-md-3">
					<input type="text" name="" class="form-control">
			</div>
			<div class="col-md-3">
					<input type="text" name="" class="form-control">
			</div>
				<div class="col-md-4">
					<input type="text" name="" class="form-control">
			</div>
				<div class="col-md-2">
					<input type="text" name="" class="form-control">
			</div>
		</div>
		<br><br>

		<div class="row">
			<div class="col-md-12">
							<h1 class="text-center text-success">texto verde centrado</h1>
						<h1 class="text-right text-primary">texto azul derecha</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">

				<p class="text-justify">Los comentarios HTML son visibles en el código fuente de la página para explicar código, pero no se representan en la parte visual del navegador Web. Este elemento se usa para agregar un comentario a un documento HTML. Un comentario HTML comienza con</p>
			</div>

			<div class="col-md-6">

				<p class="text-justify text-warning">Los comentarios HTML son visibles en el código fuente de la página para explicar código, pero no se representan en la parte visual del navegador Web. Este elemento se usa para agregar un comentario a un documento HTML. Un comentario HTML comienza con</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<img src="https://disenowebakus.net/imagenes/articulos/comentarios-html.jpg" class="img-responsive">
			</div>

			<div class="col-md-8">

				<p class="text-justify text-danger">Los comentarios HTML son visibles en el código fuente de la página para explicar código, pero no se representan en la parte visual del navegador Web. Este elemento se usa para agregar un comentario a un documento HTML. Un comentario HTML comienza con</p>
			</div>
		</div>

	</body>
	</html>