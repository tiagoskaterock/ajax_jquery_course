<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Ajax jQuery Course</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
</head>
<body>
  
<div class="container mt-5">
  <button id="button" class="btn btn-primary">Click Me!</button>

  <div id="output">Some content</div>
</div>




<script>
	// página carregada
	$(document).ready(function() {

		// botão clicado
		$("#button").click(function() {

			// mudando saída
			// $("#output").html("Button working");

			// iniciar ajax aqui
			$("#output").load("content.php");
			
		});

		// Atualizar a cada 3 décimos de segundo
		setInterval(function () {
			$("#output").load("content.php");
		}, 300);



	});
</script>





</body>
</html>
