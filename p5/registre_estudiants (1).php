<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registre d'estudiants</title>
    <style>
    .bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("https://uh.gsstatic.es/sfAttachPlugin/865149.jpg");
    min-height: 60%;
    }
    </style>
</head>
<body>

	<!-- Menú -->
    <header class="bgimg w3-display-container w3-grayscale-min" id="home">
	<script type="text/javascript" src="menu.js"></script>

	<h1>Registre d'estudiants</h1>

<!-- Formulari per a guardar dades -->
	<form action="processar_registre.php" method="post">
		<label for="nombre">Nom:</label>
		<input type="text" name="nombre" required>

		<!-- Agregar más campos según sea necesario -->

		<button type="submit">Desar</button>
	</form>

</body>
</html>
