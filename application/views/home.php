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
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <!--Principal-->
    <div id="app">
        <!--Barra de navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">{{nombreProyecto}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only"></span></a>
                </li>
                <li @click="menu=1" class="nav-item">
                    <a class="nav-link" href="#"><i class=""></i>Vendedores</a>
                </li>
                <li @click="menu=1" class="nav-item">
                    <a class="nav-link" href="#"><i class=""></i>Formas de pago</a>
                </li>
                <li @click="menu=1" class="nav-item">
                    <a class="nav-link" href="#"><i class=""></i>CFDI</a>
                </li>
                </ul>
                <span class="navbar-text">
                    Navbar text with an inline element
                </span>
            </div>
        </nav>
        <!--Componentes-->
        <template v-if="menu==1">
            <vendedor></vendedor>
        </template> 
	</div>
    <!--Scripts JS-->
    <script type="text/javascript" src="assets/dist/app.js"></script>
</body>
</html>