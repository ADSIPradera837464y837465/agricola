<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Eliminar archivo con PHP y jQuery Ajax</title>
	
	<!-- Bootstrap-->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- jQuery-->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

	<script>
		$(document).on('ready', function() {
			$('a').on('click', function(e) {
				e.preventDefault();
				$.ajax({
					url: 'process.php',
					type: 'post',
					dataType: 'json'
				})
				.done(function() {
					alert("Eliminado correctamente!");
				})
				.fail(function() {
					alert("Ha ocurrido un error johana");
				})
				.always(function() {
					
				});
				
			})
		})
	</script>
	<style>
		body {
			width: 30%;
			margin: 30px auto;
		}
	</style>
</head>
<body>
	<h1>Eliminar archivos </h1>
	<a herf="#" class="btn btn-warning">Eliminar archivo</a>
</body>
</html>
