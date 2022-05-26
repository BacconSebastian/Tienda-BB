<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Blonde</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>
    <div class="busqueda_desplegada">
        <input type="text" placeholder="Buscá productos, kits, y más...">
        <i onclick="desplegar()" class="fa-solid fa-xmark"></i>
    </div>

    <header class="index">
        <a href="index.php"><h1>Beauty Blonde</h1></a>
        <button onclick="desplegar()" class="busqueda">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </header>

    <div class="corrector_header"></div>

    <nav class="nav">
        <a href="index.php" style="border-bottom: 2px solid #CCAC5C;">INICIO</a>
        <a href="productos.php">PRODUCTOS</a>
        <a href="carrito.php">CARRITO <span id="productos_carrito">0</span></a>
    </nav>

    <div class="corrector_nav"></div>