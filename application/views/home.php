<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Estilos CSS-->
    <link rel="stylesheet" type="text/css" href="assets/dist/app.css"></link>
    <title>Mini-SAP</title>
</head>
<body>
    <!--Principal-->
    <div id="app">
		{{msg}}
        <!--Componente vendedor-->
		<vendedor></vendedor>
	</div>
    <!--Scripts JS-->
    <script type="text/javascript" src="assets/dist/app.js"></script>
</body>
</html>